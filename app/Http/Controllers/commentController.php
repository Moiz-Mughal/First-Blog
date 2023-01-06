<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Student;

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class commentController extends Controller
{
    public function index()
    {
        $comment = comment::all();
        return view('comment.index', compact('comment'));
    }

    public function create()
    {
        return view('comment.create');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {

            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);
            // dd($request->student_id);
            if($validator->fails()){
                
                return redirect()->back()->with('message','Comment area is mandetory');
            }

            // $student = Student::where('id', $request->student_id)->get();
            // $student = $request->student_id;
            // dd($student->id);die;
            // if($student)
            // {
                Comment::create([
                    'student_id' => $request->student_id,
                    'user_id'    => Auth::user()->id,
                    'comment_body' => $request->comment_body,
                ]);
                return redirect()->back()->with('maessage','commented Successfully');

        }

        else{
            return redirect()->route('login');
        }
    }

    public function edit($id)
    {
        $comment = comment::find($id);
        return view('comment.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $comment = comment::find($id);
        $comment->comment_body = $request->input('comment_body');
        
        $comment->update();
        return redirect()->back()->with('status','comment Image Updated Successfully');
    }

    public function destroy($id)
    {
        $comment = comment::find($id);
       
        $comment->delete();
        return redirect()->back()->with('status','comment Image Deleted Successfully');
    }
}