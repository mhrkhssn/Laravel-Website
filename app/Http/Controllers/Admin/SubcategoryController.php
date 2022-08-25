<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SubcategoryServises;
use Illuminate\Support\Facades\Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SubcategoryServises $SubcategoryServises)
    {
        $this->SubcategoryServises = $SubcategoryServises;
    }

    public function index()
    {
        return view('Admin.Subcategory.index');
    }

    public function subcategory(Request $request)
    {
       return   $this->SubcategoryServises->subcategory($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maincategory = $this->SubcategoryServises->create();
        return view('Admin.Subcategory.create', compact('maincategory'));
    }

    public function getdata()
    {
        $subcategorys = $this->SubcategoryServises->getdata();
        return $subcategorys;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maincategory = $this->SubcategoryServises->store($request);
        Session::flash('flash_message_sucess', 'Project Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.sub_categorys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Subcategory = $this->SubcategoryServises->edit($id);
        return view('Admin.Subcategory.view', compact('Subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maincategory = $this->SubcategoryServises->create();
        $Subcategory = $this->SubcategoryServises->edit($id);
        return view('Admin.Subcategory.edit', compact('maincategory', 'Subcategory'));
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
        $Subcategory = $this->SubcategoryServises->update($request, $id);
        Session::flash('flash_message_sucess', 'Project Update Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.sub_categorys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maincategory = $this->SubcategoryServises->destroy($id);
        Session::flash('flash_message_sucess', 'Project  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.sub_categorys.index');
    }
}
