<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BookServices;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(BookServices $BookServices)
    {
        $this->BookServices = $BookServices;
    }

    public function index()
    {
        return view('Admin.Book.index');
    }

    public function getdata()
    {
        $Books = $this->BookServices->getdata();
        return $Books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Book.create');
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
            'email' => 'required|unique:books',
        ]);
        $this->BookServices->store($request);
        Session::flash('flash_message_sucess', 'Email Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = $this->BookServices->edit($id);
        return view('Admin.Book.view', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->BookServices->edit($id);
        return view('Admin.Book.edit', compact('book'));
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
        $this->BookServices->update($request, $id);
        Session::flash('flash_message_sucess', 'Email Update Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->BookServices->destroy($id);
        Session::flash('flash_message_sucess', 'Book  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.books.index');

    }
}
