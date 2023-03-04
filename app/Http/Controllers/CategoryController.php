<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {

        return view('backend.pages.Categories.index');
    }
    public function CreateNewCategory()
    {
        return view('backend.pages.Categories.create');
    }
    public function CategoryStore(Request $request)
    {
        // dd($request->all());
        Category::create([
            //database column name => input field name
                'name'=>$request->category_name,
                
                'description'=>$request->description
        ]);
        return redirect()->route('category.url');
    }
}
