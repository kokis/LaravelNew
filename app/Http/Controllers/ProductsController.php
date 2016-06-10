<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        $manufacturers = Manufacturer::all();

        return view('products.create', compact('categories', 'manufacturers'));
    }

    public function store(Request $request)
    {
        //return $request->all();

        $product = new Product([
            'title' => $request->title,
            'article' => $request->article
        ]);

        $product->save();

        $product->manufacturer()->associate($request->manufacturer);
        $product->categories()->attach($request->categories);
    }
}
