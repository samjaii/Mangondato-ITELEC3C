<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminated;

class CategoryController extends Controller
{

    public function create(Request $request)
    {
        return view('form.create');
    }

    public function show()
    {
        $categories = Category::latest()->paginate('5');
        return view('pages.categories', ['categories' => $categories]);
    }

    public function submit(Request $request)
    {
        $this->validate(request(), [
            'cat_name' => 'required|min:2|max:255',
            'cat_desc' => 'required|min:2|max:255',
        ]);

        $category = new Category;
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->save();

        return redirect('/categories')->with('status', 'ADDED SUCCESSFULLY');
    }

    public function edit(Request $request, $id)
    {
        $this->validate(request(), [
            'cat_name' => 'required|min:2|max:255',
            'cat_desc' => 'required|min:2|max:255',
        ]);

        $category = Category::find($id);
        $category->name = $request->cat_name;
        $category->description = $request->cat_desc;
        $category->update();

        return redirect('/categories')->with('status', 'EDITED SUCCESSFULLY');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('status', 'DELETED SUCCESSFULLY');
    }




    /*public function Edit($id){
        $catergories = Category::find($id)->update([
            'category_name'=> $request->category_name,
            "id" => Auth::user()->id
        ]);
    }*/
}
