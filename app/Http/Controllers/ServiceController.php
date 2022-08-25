<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryServise;

class ServiceController extends Controller
{
    public function __construct(CategoryServise $CategoryServise)
    {
        $this->CategoryServise = $CategoryServise;
    }

    public function service($slug)
    {
        $catogories = Category::all();

        $category = $this->CategoryServise->findbyslug($slug);

        return view('service', compact('category','catogories'));


    }
}
