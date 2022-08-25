<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;

class Sub_Category extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['name', 'slug', 'cat_id', 'image','image_alt','icon','c_name','date','website','location','meta_tag','meta_title','meta_description','s_description','description'];
    protected $table = 'sub_categorys';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function cat_name()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }


}
