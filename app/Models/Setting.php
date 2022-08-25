<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Setting extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['name', 'slug', 'image', 'meta', 'meta_description', 'type', 'p_id', 'value', 'descritption'];
    protected $table = 'settings';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Setting', 'p_id');
    }

}
