<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\GalleryServices;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(GalleryServices $GalleryServices)
    {
        $this->GalleryServices = $GalleryServices;
    }

    public function index()
    {
        return view('Admin.Gallery.index');
    }

    public function getdata()
    {
        $Gallery = $this->GalleryServices->getdata();
        return $Gallery;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Gallery.create');
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
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $this->GalleryServices->store($request);
        Session::flash('flash_message_sucess', 'Gallery Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Gallery = $this->GalleryServices->edit($id);
        return view('Admin.Gallery.view', compact('Gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Gallery = $this->GalleryServices->edit($id);

        return view('Admin.Gallery.edit', compact('Gallery'));

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
        $validated = $request->validate([
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $this->GalleryServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Gallery Update Successfully !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->GalleryServices->destroy($id);
        Session::flash('flash_message_sucess', 'Gallery  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.galleries.index');
    }
}
