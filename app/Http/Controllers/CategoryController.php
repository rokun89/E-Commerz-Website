<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $CategoryList=Category::all();
        return view('backend.pages.Categories.index',compact('CategoryList'));
    }
    public function CreateNewCategory()
    {
        return view('backend.pages.Categories.create');
    }
    public function CategoryStore(Request $request)
    {
        // dd($request->all());
        Category::create([

                'name'=>$request->category_name,
                'description'=>$request->description
        ]);
        return redirect()->route('category.url');
    }
    public function view($id)
    {
        $view=Category::find($id);
        return view('backend.pages.Categories.view',compact('view'));
    }
}
