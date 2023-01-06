<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class contactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->back()->with('status','contact Image Added Successfully');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->update();
        return redirect()->back()->with('status','contact Image Updated Successfully');
    }

    // public function destroy($id)
    // {
    //     $contact = Contact::find($id);
    //     $destination = 'uploads/contacts/'.$contact->profile_image;
    //     if(File::exists($destination))
    //     {
    //         File::delete($destination);
    //     }
    //     $contact->delete();
    //     return redirect()->back()->with('status','contact Image Deleted Successfully');
    // }
}