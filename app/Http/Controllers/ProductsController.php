<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index');
    }

    public function show($id)
    {
        return Product::find($id);
    }
}
