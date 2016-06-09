<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index()
    {
        $catalog = Category::find(1);
        $categories = $catalog->children->sortBy('id');


        //return $categories;

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $catalog = Category::find(1);
        $categories = $catalog->children->sortBy('id');

        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category(['title' => $request->title]);

        $category->save();
        
        $category->parents()->attach($request->parentCategory);

        return back();
    }

    public function tree()
    {
        $categories = Category::all();
    }
}