<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryServise;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CategoryServise $CategoryServise)
    {
        $this->CategoryServise = $CategoryServise;
    }


    public function index()
    {
        return view('Admin.Category.index');

    }

    public function getdata()
    {
        $Categorys = $this->CategoryServise->getdata();
        return $Categorys;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Category.create');
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
            'image' => 'required',
            'icon' => 'required',
            's_description' => 'required',
            'description' => 'required',
            'main_cat' => 'required',
        ]);

        $this->CategoryServise->store($request);
        Session::flash('flash_message_sucess', 'Service Sucessfully Add!!!.');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('admin.categorys.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Category = $this->CategoryServise->edit($id);
        return view('Admin.Category.view', compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Category = $this->CategoryServise->edit($id);

        return view('Admin.Category.edit', compact('Category'));

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
        $Categorys = $this->CategoryServise->update($request, $id);
        Session::flash('flash_message_sucess', 'Service update Sucessfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.categorys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->CategoryServise->destroy($id);
        Session::flash('flash_message_sucess', 'Service Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.categorys.index');
    }
}
