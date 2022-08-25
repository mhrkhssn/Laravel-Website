<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Config;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Product_Sub_Category;

use Gate;
use Cache;
use File;
use Illuminate\Support\Facades\Storage;

class ProductServices
{
    public function index()
    {
        return Product::all();
    }

    public function store($request)
    {
        $data = $request->all();
        $image = '';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $image = $destinationPath . '/' . $fileNameToStore;

        }
        $data['image'] = $image;
        Product::create($data);
    }

    public function getdata()
    {
        $data = Product::select('name', 'user_id', 'cat_id', 'subcat_id', 'publish')->get();
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = ' <form  method="POST" onsubmit="return confirm(' . "'Are you sure you want to Delete this?'" . ');"  action="' . route("admin.products.destroy", $row->id) . '"> ';
                $btn = $btn . '<a href=" ' . route("admin.products.show", $row->id) . '"  class="ml-2"><i class="fas fa-eye"></i></a>';
                $btn = $btn . ' <a href="' . route("admin.products.edit", $row->id) . '" class="ml-2">  <i class="fas fa-edit"></i></a>';
                $btn = $btn . '<button  type="submit" class="ml-2" ><i class="fas fa-trash"></i></button>';
                $btn = $btn . method_field('DELETE') . '' . csrf_field();
                $btn = $btn . ' </form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function subcategory($id)
    {
        $html = '';
        $data = Product_Sub_Category::where('cat_id', $id)->get();
        foreach ($data as $item) {
            $html = '<option value="' . $item->id . '"> ' . $item->name . '</option>';
        }
        return $html;
    }

    public function create()
    {
        return Product_Category::all();

    }

    public function edit($id)
    {
        return Product::find($id);
    }

    public function update($request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->short_detail = $request->short_detail;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
            $filename = preg_replace("/\s+/", '-', $filename);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $destinationPath = 'dist/uplaod_img';
            $file->move($destinationPath, $fileNameToStore);
            $image = $destinationPath . '/' . $fileNameToStore;
            $product->image = $image;
        }
        $product->detail = $request->detail;
        $product->save();
    }

    public function destroy($id)
    {
        return Product::find($id)->delete();
    }
}
