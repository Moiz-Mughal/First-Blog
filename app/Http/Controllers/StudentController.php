<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view ('student.index', compact('student'));
    }

    public function create()
    {
        $category = category::all();
        return view('student.create', compact('category'));
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->cate_id = $request->input('cate_id');
        $student->name = $request->input('name');
        $student->title = $request->input('title');
        $student->description = $request->input('description');
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->profile_image = $filename;
        }
        $student->save();
        return redirect()->route('students')->with('status','Student Image Added Successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->title = $request->input('title');
        $student->description = $request->input('description');

        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/students/'.$student->profile_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->profile_image = $filename;
        }

        $student->update();
        return redirect()->route('students')->with('status','Student Image Updated Successfully');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $destination = 'uploads/students/'.$student->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->route('students')->with('status','Student Image Deleted Successfully');
    }
}