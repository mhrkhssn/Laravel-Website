<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\PermisionServices;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(PermisionServices $PermisionServices)
    {
        $this->PermisionServices = $PermisionServices;
    }

    public function index(Request $request)
    {


        return view('Admin.Permision.index');


    }

    public function getdata()
    {
        $Permisions = $this->PermisionServices->getdata();
        return $Permisions;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainpermissions = $this->PermisionServices->create();
        return view('Admin.Permision.create', compact('mainpermissions'));
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
            'name' => 'required|unique:permissions|max:255',
        ]);


        $this->PermisionServices->store($request);

        return redirect()->route('admin.permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Permision = $this->PermisionServices->edit($id);

        return view('Admin.Permision.view', compact('Permision'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Permision = $this->PermisionServices->edit($id);

        return view('Admin.Permision.edit', compact('Permision'));
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
//        $validated = $request->validate([
//            'name' => 'required|unique:permissions,name,' . $request->name,
//        ]);
        $Permision = $this->PermisionServices->update($request, $id);
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->PermisionServices->destroy($id);
        Session::flash('flash_message_sucess', 'Permission  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.permissions.index');
    }
}
