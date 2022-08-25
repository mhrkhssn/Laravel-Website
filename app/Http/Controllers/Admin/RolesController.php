<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RolesServise;
use Illuminate\Support\Facades\Session;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(RolesServise $RolesServise)
    {
        $this->RolesServise = $RolesServise;
    }


    public function index()
    {

        return view('Admin.roles.index');
    }

    public function getdata()
    {
        return $this->RolesServise->getdata();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->RolesServise->create();
        return view('Admin.roles.create', compact('permissions'));
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
            'name' => 'required|unique:roles|max:255',
        ]);
        $Permisions = $this->RolesServise->store($request);


        Session::flash('flash_message_sucess', 'Role Sucessfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = $this->RolesServise->create();
        $AllowedPermissions = $this->RolesServise->AllowedPermissions($id);
        $AllowedPermissions = $AllowedPermissions->toArray();

        if (!$AllowedPermissions) {
            $AllowedPermissions = [];
        }
        $role = $this->RolesServise->edit($id);
        return view('Admin.roles.edit', compact('role', 'permissions', 'AllowedPermissions'));
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
        $role = $this->RolesServise->update($request, $id);

        Session::flash('flash_message_sucess', 'Role Updated Sucessfully!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->RolesServise->destroy($id);
        Session::flash('flash_message_sucess', 'Role Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.roles.index');
    }
}
