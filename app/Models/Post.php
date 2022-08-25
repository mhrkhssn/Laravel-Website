<?php

namespace App\Models;


use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\Post_Imags;
use App\Models\Post_Tag;

class Post extends Model
{

    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['title', 'slug', 'post', 'image','image_alt', 'meta_tag', 'tags', 'meta', 'meta_description', 'blog_id', 'publish_time'];
    protected $table = 'posts';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function user_name()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function blog_name()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function cat()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function sub_cat()
    {
        return $this->belongsTo(Sub_Category::class, 'sub_cat_id');
    }

    public function tags()
    {
        return $this->belongsTo(Post_Tag::class, 'post_id');
    }

    public function postimag()
    {
        return $this->hasOne(Post_Imags::class, 'post_id');
    }

    public function setShortAttribute($value)
    {
        $extra = "  .....";
        $text = str_ireplace('</p>', '', $this->post);
        if (strlen($text) > 200) {
            $text = substr($text, 0, 200);
            $text = $text . $extra;
        }
        return $text;
    }

    public function next(){
        // get next user
        return Post::where('id', '>', $this->id)->orderBy('id','asc')->first();

    }
    public  function previous(){
        // get previous  user
        return Post::where('id', '<', $this->id)->orderBy('id','desc')->first();

    }
}
