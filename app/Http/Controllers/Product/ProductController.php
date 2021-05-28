<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $productList = Product::latest()->get();

        return view('pages.product.list-product', compact('productList'));
    }

    public function create()
    {
        $listCate = Category::all();
        $listBrand = Brand::all();
        return view('pages.product.create', compact('listCate','listBrand'));
    }

    public function store(FormProductRequest $request){
        Product::create($request->all());
    }
}
