<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index', [
            'blogs' => Blog::latest()->get()
        ]);
    }
    
    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Blog::create($formFields);

        // Session::flash('message', 'Listing Created!');

        return redirect('/home');
    }
}
