<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NewsServices;
use Illuminate\Support\Facades\Session;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(NewsServices $NewsServices)
    {
        $this->NewsServices = $NewsServices;
    }

    public function index()
    {
        return view('Admin.News.index');
    }

    public function getdata()
    {
        return $this->NewsServices->getdata();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.News.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
          $this->NewsServices->store($request);
        Session::flash('flash_message_sucess', 'News Sucessfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->NewsServices->edit($id);
        return view('Admin.news.view', compact('news'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news= $this->NewsServices->edit($id);
        return view('Admin.News.edit',compact('news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = $this->NewsServices->update($request, $id);
        Session::flash('flash_message_sucess', ' Team Member Update Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
