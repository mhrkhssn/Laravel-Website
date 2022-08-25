<?php

namespace App\Services;


use Config;
use App\Models\Blog;
use DataTables;
use Gate;

class BlogServices
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
        Blog::create($data);
    }

    public function getdata()
    {
        $data = Blog::select('id', 'name', 'slug', 'meta_tag', 'meta_title')->get();
//        dd($data);
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.blogs.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.blogs.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('blog_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.blogs.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('blog_delete')) {
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
        return Blog::find($id);

    }
    public function findbyslug($slug)
{
    return Blog::where('slug',$slug)->first();

}


    public function update($request, $id)
    {
        $Blog = Blog::find($id);
        $Blog->name = $request->name;
        $Blog->meta_tag = $request->meta_tag;
        $Blog->meta_title = $request->meta_title;
        $Blog->meta_description = $request->meta_description;
        $Blog->save();
    }

    public function destroy($id)
    {
        $Blog = Blog::find($id);
        if ($Blog) {
            $Blog->delete();
        }
    }
}
