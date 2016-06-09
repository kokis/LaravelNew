<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categories = $categories->sortBy('id');

        $category = Category::find(1);
        return $category->children;

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category(['title' => $request->title]);

        $category->save();

        return back();
    }

    public function tree()
    {
        $categories = Category::all();
    }
}
