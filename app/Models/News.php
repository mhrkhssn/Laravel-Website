<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'image','image_alt', 'designation', 'f_link', 't_link', 'l_link', 'i_link'];
    protected $table = 'news';
//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }


    public function user_name()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
