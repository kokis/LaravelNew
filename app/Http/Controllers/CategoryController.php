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

        return view('category.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $products = $category->productsAll();

        return view('category.show', compact('category', 'products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('category.create', compact('categories'));
    }

    public function edit(Category $category)
    {
        $categories = Category::all();

        $parentId = 0;
        if ($category->parents()->count())
            $parentId = $category->parents()->first()->id;

        return view('category.edit', compact('category', 'categories', 'parentId'));
    }

    public function update(Category $category)
    {

    }

    public function store(Request $request)
    {
        $category = new Category(['title' => $request->title]);

        $category->save();

        $category->parents()->attach($request->parentCategory);

        return back();
    }

    public function destroy()
    {
        
    }
}
