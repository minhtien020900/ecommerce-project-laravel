<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'category_id', 'brand_id', 'product_name', 'product_desc', 'product_price', 'product_image','created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function image(){
        return $this->morphMany(Image::class,'imageable');
    }
}
