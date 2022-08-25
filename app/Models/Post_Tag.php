<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post_Tag extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['post_id', 'tag', 'slug'];
    protected $table='post_tags';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'tag'
            ]
        ];
    }
}
