<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SidebarServices;
use Illuminate\Support\Facades\Session;

class SidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SidebarServices $SidebarServices)
    {
        $this->SidebarServices = $SidebarServices;
    }

    public function index()
    {
//        dd(1);

        return view('Admin.sidebar.index');
    }

    public function getdata()
    {
        $Sidebar = $this->SidebarServices->getdata();
        return $Sidebar;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainSidebarServices = $this->SidebarServices->create();
        return view('Admin.sidebar.create', compact('mainSidebarServices'));
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
            'title' => 'required|unique:sidebar|max:255',
            "url" => "required|unique:sidebar|max:255",
            "route_name" => "required|unique:sidebar|max:255",
            "icon" => 'required',
        ]);

        $this->SidebarServices->store($request);
        Session::flash('flash_message_sucess', 'Menu Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('admin.sidebar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sidebar = $this->SidebarServices->edit($id);
        return view('Admin.sidebar.view', compact('Sidebar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainSidebarServices = $this->SidebarServices->create();
        $Sidebar = $this->SidebarServices->edit($id);
        return view('Admin.sidebar.edit', compact('Sidebar', 'mainSidebarServices'));
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
        $this->SidebarServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Menu Update Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('admin.sidebar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->SidebarServices->destroy($id);
        Session::flash('flash_message_sucess', 'Menu  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');

        return redirect()->route('admin.sidebar.index');
    }
}
