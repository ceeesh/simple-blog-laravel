<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            'blogs' => auth()->user()->blogs()->latest()->get()
        ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Blog::create($formFields);

        // Session::flash('message', 'Listing Created!');

        return redirect('/home');
    }

    public function edit(Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->user_id != auth()->id()) {
            return redirect('/home');
        }
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update(Request $request, Blog $blog)
    {

        // Make sure logged in user is owner
        if ($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $blog->update($formFields);

        return redirect('/home');
    }

    public function show(Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->user_id != auth()->id()) {
            return redirect('/home');
        }

        return view('blogs.show', ['blog' => $blog]);
    }
}
