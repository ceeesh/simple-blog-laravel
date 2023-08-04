<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index', [
            'blogs' => auth()->user()->blogs()->latest()->paginate(3)
        ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => ['required', 'max:20'],
            'description' => ['required', 'max:350']
        ]);

        $formFields['user_id'] = auth()->id();

        Blog::create($formFields);

        // Session::flash('message', 'Listing Created!');

        return redirect('/home')->with('message', 'Blog created successfully');
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
            'title' => ['required', 'max:20'],
            'description' => ['required', 'max:350']
        ]);

        $blog->update($formFields);

        return redirect('/home')->with('message', 'Blog updated successfully');
    }

    public function show(Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->user_id != auth()->id()) {
            return redirect('/home');
        }

        return view('blogs.show', ['blog' => $blog]);
    }

    public function destroy(Blog $blog)
    {
        // Make sure logged in user is owner
        if ($blog->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $blog->delete();
        return redirect('/home')->with('message', 'Blog deleted successfully');
    }
}
