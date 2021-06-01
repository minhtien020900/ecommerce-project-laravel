<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $productList = Product::latest()->get();
        $productItem = Product::find(8);
////        dd($productItem->image());
//        $files = [];
//        foreach ($productItem->image()->get() as $item) {
//            array_push($files,$item->fileName);
//        }
//        dd($files);

        return view('pages.product.list-product', compact('productList'));
    }

    public function create()
    {
        $listCate = Category::all();
        $listBrand = Brand::all();
        return view('pages.product.create', compact('listCate', 'listBrand'));
    }

    public function store(FormProductRequest $request)
    {
//        dd($request->file('images'));
//
        $reflection = new \ReflectionClass(Product::class);
        $product = Product::create($request->all());
        foreach ($request->file('images') as $value) {
            $path = $value->storeAs('public/uploads',$value->getClientOriginalName());
            Image::create([
                'fileName' => $path,
                'imageable_id' => $product->id,
                'imageable_type' => $reflection->getName(),
            ]);
        }

        return redirect()->back()->with('message', 'Add product success');
    }
}
