<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product_Category extends Model
{
    protected $table = 'product_categorys';
    protected $fillable = ['name', 'image', 'short_description', 'long_description', 'meta_title', 'meta_description'];
    use HasFactory, SoftDeletes;
}
