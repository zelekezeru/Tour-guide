<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blogs.blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $data = $request->validate([
            'user_id' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpg,png'
        ]);

        $file = $request->file('image');
        $path = $file->store('uploads', 'public');
        
        $blog = Blog::create($data);
        $blog->image = 'storage/'.$path;
        $blog->save();
        return redirect(route('blogs.show', $blog->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
