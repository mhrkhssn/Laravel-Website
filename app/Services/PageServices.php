<?php

namespace App\Services;

use Config;
use App\Models\Page;
use DataTables;

class PageServices
{

    public function index()
    {

    }

    public function apiResponce($status = 1, $method = 'POST', $message = '', $data = [])
    {
        $response = [
            'status' => $status,
            'method' => $method,
            'message' => $message,
            'response' => $data
        ];
        return $response;
    }

    public function about()
    {
        return  Page::where('name', 'About')->first();
    }


    public function getdata()
    {
//        return DataTables::of(Permission::query())->make(true);
        $data = Page::all();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('main', function ($row) {
                $btn = ($row->main == 1) ? 'Main' : "-";

                return $btn;
            })
            ->rawColumns(['main'])
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.pages.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.pages.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.pages.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store($request)
    {
        $data = $request->all();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;;
        }
        Page::create($data);
    }

    public function edit($id)
    {
        return Page::findOrFail($id);
    }

    public function update($request, $id)
    {
        $Page = Page::find($id);
        $Page->name = $request->name;
        $Page->meta_title = $request->meta_title;
        $Page->meta_description = $request->meta_description;
        $Page->text = $request->text;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $Page->image = $destinationPath . '/' . $fileNameToStore;;
        }
        $Page->save();
    }

    public function destroy($id)
    {
        $Page = Page::findOrFail($id);
        if ($Page)
            $Page->delete();

    }
}
