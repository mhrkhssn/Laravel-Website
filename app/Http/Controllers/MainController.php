<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use App\Models\Post_Tag;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $catogories = Category::all();
        $subcatogories = Sub_Category::paginate(3);
        $team = News::paginate(3);
        $relation =0;
        foreach ($subcatogories as $item) {
            $relation = Sub_Category::with('cat_name')->where('id', $item->id)->first();
        }
        if(isset($relation)) {
            return view('index', compact('catogories', 'subcatogories', 'team', 'relation'));
        } else {
            return view('index', compact('catogories', 'subcatogories', 'team'));
        }
    }

    public function search(Request $request)
    {
        $service = Category::where('name', 'like', '%' . $request->search . '%')->get();
        $project = Sub_Category::where('name', 'like', '%' . $request->search . '%')->get();
        $blog = Blog::where('name', 'like', '%' . $request->search . '%')->get();
        $post = Post::where('title', 'like', '%' . $request->search . '%')->get();

        return view('search', compact('service', 'project', 'blog', 'post'));
    }

    public function tag_search($slug)
    {
        $post_tag = Post_Tag::where('tag',$slug)->pluck('post_id');
        $post = Post::whereIn('id', $post_tag)->paginate(6);

        return view('tag_search', compact( 'post'));
    }

    public function blog_search($slug)
    {
        $blog = Blog::where('name',$slug)->pluck('id');
        $posts = Post::where('blog_id', $blog)->paginate(6);

        return view('blog', compact( 'posts'));
    }
}
