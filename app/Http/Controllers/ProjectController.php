<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sub_Category;
use App\Services\SubcategoryServises;
use Illuminate\Http\Request;
use App\Services\CategoryServise;

class ProjectController extends Controller
{
    public function __construct(SubcategoryServises $SubcategoryServises)
    {
        $this->SubcategoryServises = $SubcategoryServises;
    }

    public function project($slug)
    {
        $subcatogories = Sub_Category::all();
        $subcategory = $this->SubcategoryServises->findbyslug($slug);
        $relation = Sub_Category::with('cat_name')->where('id',$subcategory->id)->first();

        return view('project', compact('subcategory','subcatogories','relation'));


    }

    public function projects()
    {
        $catogories = Category::all();
        $subcatogories = Sub_Category::all();

        foreach($subcatogories as $item) {
            $relation = Sub_Category::with('cat_name')->where('id',$item->id)->first();
        }

        return view('projects',compact('catogories','subcatogories','relation'));
    }
}
