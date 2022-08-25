<?php

namespace App\Helper;


use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;
use Config;
use Gate;


/**
 * Class to store the entire group tree
 */
class helper
{
    /**
     * Initializer
     */

    public function service()
    {
        return Category::latest()->paginate(6);
    }

    public function serviceforheader()
    {
        return Category::all();
    }

    public function main_cat_bpo()
    {
        return Category::where('main_cat','BPO')->get();
    }

    public function main_cat_ba()
    {
        return Category::where('main_cat','Business Advisory')->get();
    }

    public function post()
    {
        return Post::latest()->paginate(2);
    }
}
