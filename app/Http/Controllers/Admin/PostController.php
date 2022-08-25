<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\Post_Tag;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use App\Services\PostServises;
use Illuminate\Support\Facades\Session;
use Artisan;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PostServises $PostServises)
    {
        $this->PostServises = $PostServises;
    }

    public function index()
    {
        return view('Admin.Post.index');
    }

    public function getdata()
    {
        $posts = $this->PostServises->getdata();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->PostServises->create();

        return view('Admin.Post.create', compact('data'));

    }

    public function post(Request $request)
    {
        return $this->PostServises->post($request);
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
            'title' => 'required',
            'blog_id' => 'required',
            'post' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required'
        ]);
        $data = $this->PostServises->store($request);
        Session::flash('flash_message_sucess', 'Post Sucessfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $post = $this->PostServises->edit($id);
        $data = $this->PostServises->create();

        return view('Admin.Post.view', compact('data', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->PostServises->edit($id);
        $data = $this->PostServises->create();
        return view('Admin.Post.edit', compact('data', 'post'));

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
        $Post = $this->PostServises->update($request, $id);
        Session::flash('flash_message_sucess', ' Post Update Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->PostServises->destroy($id);
        Session::flash('flash_message_sucess', 'Post  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.posts.index');
    }

    public function blog($slug)
    {
        switch ($slug) {
            case 'about':
                return view('about');
                break;
            case 'blog':
                $blogs = Blog::all();
                $posts = Post::paginate(6);
                return view('blog', compact('blogs', 'posts'));
                break;
            case 'contact':
                return view('contact');
                break;
            case 'tag_search':
                return view('tag_search');
                break;
            case 'login':
                return view('auth.login');
                break;
            case 'clearcache':
                $exitCode = Artisan::call('config:clear');
                $exitCode = Artisan::call('cache:clear');
                $exitCode = Artisan::call('config:cache');

                dd('DONE') ;
                break;
            case 'logout':
                return view('index');
                break;
            case 'checkout':
                return view('checkout');
                break;
            case 'projects':
                $catogories = Category::all();
                $subcatogories = Sub_Category::all();

                return view('projects', compact('catogories', 'subcatogories'));
                break;
            default:
                $posts = Post::all();
                $post = $this->PostServises->findbyslug($slug);
                $blogs = Blog::all();
                $tags = Post_Tag::all();
                foreach ($posts as $item) {
                    $tag = Post_Tag::where('post_id', $item->id)->get();
                }
                foreach ($blogs as $item) {
                    $count = Post::where('blog_id', $item->id)->get();
                }
                $recent = Post::latest()->paginate(3);
                if (isset($post)) {
                    $user = Post::find($post->id);
                    $next_post = $user->next();
                    $previous_post = $user->previous();
                    return view('blog_detail', compact('post', 'posts', 'blogs', 'count', 'recent', 'next_post', 'previous_post', 'tags', 'tag'));
                } else {
                    return view('blog_detail', compact('post', 'posts', 'blogs', 'count', 'recent', 'tags', 'tag'));
                }

        }
    }

    public function blogs()
    {
        $blogs = Blog::all();
        $posts = Post::paginate(6);

        return view('blog', compact('blogs', 'posts'));
    }

    public function clearCache()
    {
        $exitCode = Artisan::call('config:clear');
                    $exitCode = Artisan::call('cache:clear');
                    $exitCode = Artisan::call('config:cache');

                    dd('DONE') ;

    }
}
