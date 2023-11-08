<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $categories = Category::all();
        return view('pages.categories', ['categories' => $categories]);
    }

    public function createCategory()
    {
        return view('form.create');
    }

    public function submitCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->save();
        return redirect('/categories')->with('status', 'New Category has been added');
    }
}
