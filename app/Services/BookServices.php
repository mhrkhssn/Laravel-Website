<?php

namespace App\Services;

use Config;
use App\Models\Book;
use DataTables;
use Gate;

class BookServices
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
//        $permissions = [];
        $Book = $request->all();

//        $fileNameToStore = null;
//        if ($request->hasfile('file')) {
//            $file = $request->file('file');
//            $filenameWithExt = $file->getClientOriginalName();
//            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
//            $filename = preg_replace("/\s+/", '-', $filename);
//            $extension = $file->getClientOriginalExtension();
//            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//            $destinationPath = 'dist/books';
//            $file->move($destinationPath, $fileNameToStore);
//            $Book['file'] = $destinationPath . '/' . $fileNameToStore;
//        }


        $Book = Book::create($Book);
    }

    public function getdata()
    {
        $data = Book::select('id', 'email')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.books.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.books.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                if (Gate::allows('email_edit')) {
                    $btn = $btn . ' <a href="' . route("admin.books.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                }
                if (Gate::allows('email_delete')) {
                    $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                }
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public
    function edit($id)
    {
        return Book::find($id);
    }


    public
    function update($request, $id)
    {
        $Book = Book::find($id);
        $Book->email = $request->email;
//        $fileNameToStore = null;
//        if ($request->hasfile('file')) {
//            $file = $request->file('file');
//            $filenameWithExt = $file->getClientOriginalName();
//            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
//            $filename = preg_replace("/\s+/", '-', $filename);
//            $extension = $file->getClientOriginalExtension();
//            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//            $destinationPath = 'dist/books';
//            $file->move($destinationPath, $fileNameToStore);
//            $Book->file = $destinationPath . '/' . $fileNameToStore;
//        }
        $Book->save();
    }

    public
    function destroy($id)
    {
        $Book = Book::findOrFail($id);
        if ($Book)
            $Book->delete();
    }
}
