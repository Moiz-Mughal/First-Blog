<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Student;
use App\Models\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   $student = Student::all();
        $category = category::all();
        return view('index', compact('student','category'));
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $student = Student::all();
        return view('blog', compact('student'));
    }
    
    public function postdetails($id)
    {
        
        $comments = Comment::all();   
        $detail = Student::findorfail($id);
        // $item =Student::all();

        return view('postdetails',compact('detail'));
    }
    public function viewCategory($id)
    {
        $student = Student::all();
        $category = category::all();
       

        return view('viewCategory',compact('student','category'));
    }
    public function contact()
    {
        return view('contact');
    }
}