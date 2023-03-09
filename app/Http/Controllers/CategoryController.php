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
        //  dd($request->all());

        $categoryImg=null;
        if($request->hasfile('image'))
        {
            $categoryImg=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$categoryImg);
        }
        // dd($categoryImg);
        Category::create([
                'image'=>$categoryImg,
                'name'=>$request->category_name,
                'description'=>$request->description
        ]);
        
        notify()->success('Submitted SuccessFully');
        return redirect()->route('category.url');
    }
    public function view($id)
    {
        $view=Category::find($id);
        return view('backend.pages.Categories.view',compact('view'));
    }
    public function edit($id)
    {
        $edit=Category::find($id);
        return view('backend.pages.Categories.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $update=Category::find($id);

        $update->update([
            'name'=>$request->category_name,
            'description'=>$request->description
        ]);
        notify()->success('Updated Successfull');
        return redirect()->route('category.url');
    }
    public function delete($id)
    {
        $delete=Category::find($id);
        if($delete)
        {
            $delete->delete();
            notify()->success('Deleted Successfully');
            return redirect()->back();
            
        }
        else{
            notify()->error('Request not found');
            return redirect()->back();
        }
    }

}
