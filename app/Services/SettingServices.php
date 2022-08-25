<?php

namespace App\Services;

use Config;
use App\Models\Setting;
use DataTables;

class SettingServices
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        $Setting = $request->all();
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/settings';
            $file->move($destinationPath, $fileNameToStore);
            $Setting['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $Setting = Setting::create($Setting);
    }

    public function getdata()
    {
        $data = Setting::select('id', 'name', 'slug', 'p_id')->with('parent')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.settings.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.settings.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.settings.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Setting::find($id);
    }


    public function update($request, $id)
    {
        $Setting = Setting::find($id);
        $Setting->name = $request->name;
        $Setting->description = $request->description;
        $fileNameToStore = null;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/books';
            $file->move($destinationPath, $fileNameToStore);
            $Setting->image = $destinationPath . '/' . $fileNameToStore;
        }
        $Setting->save();
    }

    public function destroy($id)
    {
        $Setting = Setting::findOrFail($id);
        if ($Setting)
            $Setting->delete();
    }
}
