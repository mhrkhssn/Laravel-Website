<?php

namespace App\Services\API;

use Config;


use App\Models\Post;
use App\Models\Category;
use App\Models\Sub_Category;


class IndexServices
{

    public function index()
    {
        return Post::with('user_name', 'cat', 'sub_cat', 'postimag')->get();
    }

    public function contact($request)
    {
        // mail sending working remeaning
        return 1;
    }

    public function post($req)
    {
        return Post::where('slug', $req->post_slug)->with('user_name', 'cat', 'sub_cat', 'postimag')->first();
    }

    public function recent()
    {
        return Post::orderBy('id', 'DESC')->take(5)->get();
    }

    public function subcribe($req)
    {
        return;
    }

    public function categorys()
    {
        return Category::all();
    }

    public function sub_categorys($slug)
    {
        $Category = Category::where('slug', $slug)->first();
        return Sub_Category::where('cat_id', $Category->id)->get();
    }

    public function post_all($slug)
    {
        $Sub_Category = Sub_Category::where('slug', $slug)->first();
        return Post::with('user_name', 'cat', 'sub_cat', 'postimag')->where('sub_cat_id', $Sub_Category->id)->get();

    }

    public function apiResponce($status = 1, $method = '', $message = '', $data = [])
    {
        $response = [
            'status' => $status,
            'method' => $method,
            'message' => $message,
            'data' => $data
        ];
        return $response;
    }

    public function slider()
    {

    }

    public function posts()
    {
//        Post::
    }

    public function latest()
    {

    }


}
