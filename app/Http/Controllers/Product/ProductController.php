<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
       $productList = Product::latest()->get();

        return view('pages.product.list-product',compact('productList'));
    }
    public function create(){
        return view('pages.product.create');
    }
}
