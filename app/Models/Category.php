<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'category_name',
        'category_image',
    ];

    public function product(){
      return  $this->hasMany(Product::class,'category_id','id');
    }
}
