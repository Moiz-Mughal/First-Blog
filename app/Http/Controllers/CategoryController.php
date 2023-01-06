<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class categoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new category;
        $category->name = $request->input('name');
     
        $category->save();
        return redirect()->route('categorys')->with('status',"category Added Successfully");
    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->name = $request->input('name');
     

        $category->update();
        return redirect()->back()->with('status',"category Updated Successfully");
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $destination = 'uploads/categorys/'.$category->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $category->delete();
        return redirect()->back()->with('status',"category Deleted Successfully");
    }
}