<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $categories = Category::all();
        return view('pages.categories', ['categories' => $categories]);
    }
}
