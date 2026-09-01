<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['category_id', 'product_name', 'slug', 'file_path', 'status', 'image', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
