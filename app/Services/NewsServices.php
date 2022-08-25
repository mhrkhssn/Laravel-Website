<?php

namespace App\Services;

use Config;
use App\Models\News;
use DataTables;
use Gate;

class NewsServices
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        $News = $request->all();
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/news';
            $file->move($destinationPath, $fileNameToStore);
            $News['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $News = News::create($News);
    }

    public function getdata()
    {
        $data = News:: with('user_name')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.books.destroy", $row->id) . '"> ';
                $btn = $btn . '<a    href=" ' . route("admin.news.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('team_member_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.news.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('team_member_delete')) {
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
        return News::find($id);
    }


    public function update($request, $id)
    {
        $News = News::find($id);
        $News->name = $request->name;
        $News->image_alt = $request->image_alt;
        $News->designation = $request->designation;
        $News->f_link = $request->f_link;
        $News->t_link = $request->t_link;
        $News->l_link = $request->l_link;
        $News->i_link = $request->i_link;
        $fileNameToStore = null;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/news';
            $file->move($destinationPath, $fileNameToStore);
            $News->image = $destinationPath . '/' . $fileNameToStore;
        }
        $News->save();
    }

    public function destroy($id)
    {
        $News = News::findOrFail($id);
        if ($News)
            $News->delete();
    }
}
