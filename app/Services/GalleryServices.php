<?php

namespace App\Services;

use Config;
use App\Models\Gallery;
use DataTables;

class GalleryServices
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        $Gallery = $request->all();
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Gallery';
            $file->move($destinationPath, $fileNameToStore);
            $Gallery['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        Gallery::create($Gallery);
    }

    public function getdata()
    {
        $data = Gallery::select('id', 'title')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST"  action="' . route("admin.galleries.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.galleries.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.galleries.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
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
        return Gallery::find($id);
    }


    public function update($request, $id)
    {
        $Gallery = Gallery::find($id);
        $Gallery->title = $request->title;
        $Gallery->description = $request->description;
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/Gallery';
            $file->move($destinationPath, $fileNameToStore);
            $Gallery->file = $destinationPath . '/' . $fileNameToStore;
        }
        $Gallery->save();
    }

    public function destroy($id)
    {
        $Gallery = Gallery::findOrFail($id);
        if ($Gallery)
            $Gallery->delete();
    }
}
