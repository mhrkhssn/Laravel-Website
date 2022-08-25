<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\BlogServices;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BlogServices $BlogServices)
    {
        $this->BlogServices = $BlogServices;
    }


    public function index()
    {
        return view('Admin.Blog.index');

    }

    public function getdata()
    {
        $Blog = $this->BlogServices->getdata();
        return $Blog;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $this->BlogServices->store($request);
        Session::flash('flash_message_sucess', 'Blog Sucessfully Add!!!.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('admin.blogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Blog = $this->BlogServices->edit($id);
        return view('Admin.Blog.view', compact('Blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blog = $this->BlogServices->edit($id);

        return view('Admin.Blog.edit', compact('Blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Blog = $this->BlogServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Blog update Sucessfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->BlogServices->destroy($id);
        Session::flash('flash_message_sucess', 'Blog Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.blogs.index');
    }

    public function blog($slug)
    {
        $blogs = Blog::all();

        $blog = $this->BlogServices->findbyslug($slug);
//dd($blog);
        return view('service', compact('blogs', 'blog'));


    }
}
