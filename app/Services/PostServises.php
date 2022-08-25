<?php

namespace App\Services;

use App\Models\Blog;
use Config;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\Post;
use App\Models\Post_Tag;
use App\Models\Post_Imags;
use DataTables;
use Gate;
use Illuminate\Support\Str;

class PostServises
{
    public function index()
    {

    }

    public function create()
    {
        return Blog::select('id', 'name')->get();
    }

    public function post($request)
    {
        $html = "<option>Select Option</option>";
        $post = Post::where('blog_id', $request->blog)->get();
        foreach ($post as $item) {
            $html = $html . "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
        return $html;
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
            $data['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $post = Post::create($data);
        foreach (explode(",", $request->tags) as $tag) {
            $post_tag = new Post_Tag();
            $post_tag->post_id = $post->id;
            $post->slug = Str::slug($request->slug, '-');
            $post_tag->tag = $tag;
            $post_tag->save();
        }
    }

    public function getdata()
    {
        $data = Post::select('id', 'title', 'blog_id', 'meta', 'meta_tag')->with('blog_name')->get();

        return Datatables::of($data)->addIndexColumn()
            ->addColumn('blog', function ($row) {
                $btn1 = $row->blog_name->name;
                return $btn1;
            })
            ->addColumn('action', function ($row) {
                $btn = ' <form   onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');" method="POST"  action="' . route("admin.posts.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.posts.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('post_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.posts.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('post_delete')) {
                    $btn = $btn . '<button  type="submit" class="ml-2"    ><i class="fas fa-trash"></i></button>';
                }
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action', 'blog'])
            ->make(true);
    }

    public
    function edit($id)
    {
        return Post::find($id);
    }

    public
    function update($request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->meta_tag = $request->meta_tag;
        $post->meta = $request->meta;
        $post->post = $request->post;
        $post->tags = $request->tags;
        $post->meta_description = $request->meta_description;
        $post->blog_id = $request->blog_id;
        $post->image_alt = $request->image_alt;

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
            $post['image'] = $destinationPath . '/' . $fileNameToStore;
        }
        $post->save();
        $post_tag = Post_Tag::where('post_id', $id)->delete();
        foreach (explode(",", $request->tags) as $tag) {
            $post_tag = new Post_Tag();
            $post_tag->post_id = $id;
            $post->slug = Str::slug($request->slug, '-');
            $post_tag->tag = $tag;
            $post_tag->save();
        }
    }

    public
    function destroy($id)
    {
        $Post = Post::findOrFail($id);
        $post_tag = Post_Tag::where('post_id', $id)->get();

        if ($Post) {
            $Post->delete();
            if (count($post_tag) > 0) {
                foreach ($post_tag as $item) {
                    $item->delete();
                }
            }
        }
    }

    public
    function findbyslug($slug)
    {
        return Post::where('slug', $slug)->first();

    }
}
