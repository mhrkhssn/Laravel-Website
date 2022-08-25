<?php

namespace App\Services;


use Config;
use App\Models\Category;
use DataTables;
use Gate;

class CategoryServise
{

    public function index()
    {

    }

    public function create()
    {


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
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $data['icon'] = $destinationPath . '/' . $fileNameToStore;
        }
        Category::create($data);
    }

    public function getdata()
    {
        $data = Category::select('id', 'name', 'slug', 'main_cat')->get();
//        dd($data);
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.categorys.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.categorys.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('service_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.categorys.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('service_delete')) {
                    $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                }
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        return Category::find($id);

    }

    public function findbyslug($slug)
    {
        return Category::where('slug', $slug)->first();

    }


    public function update($request, $id)
    {
        $Category = Category::find($id);
        $Category->name = $request->name;
        $Category->meta_tag = $request->meta_tag;
        $Category->meta_title = $request->meta_title;
        $Category->meta_description = $request->meta_description;
        $Category->s_description = $request->s_description;
        $Category->description = $request->description;
        $Category->image_alt = $request->image_alt;
        $Category->main_cat = $request->main_cat;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $Category->image = $destinationPath . '/' . $fileNameToStore;
        }

        if ($request->hasfile('icon')) {
            $file = $request->file('icon');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/category';
            $file->move($destinationPath, $fileNameToStore);
            $Category->icon = $destinationPath . '/' . $fileNameToStore;
        }
        $Category->save();
    }

    public function destroy($id)
    {
        $Category = Category::find($id);
        if ($Category) {
            $Category->delete();
        }
    }
}
