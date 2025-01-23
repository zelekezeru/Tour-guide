<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        
        return view('blogs.index', compact('blogs'));
    }

    public function list()
    {
        // dd('hi');
        $blogs = Blog::all();
        return view('blogs.list', compact('blogs'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    public function upload(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if the upload is present
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $path = $file->store('uploads/blog-images', 'public');

            return response()->json([
                'uploaded' => true,
                'url' => url(Storage::url($path))
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'teaser' => 'required|string',
            'image' => 'required|image|mimes:jpg,png'
        ]);

        $data['user_id'] = 1;

        $file = $request->file('image');

        $path = $file->store('uploads/blog-images', 'public');

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
        return view('blogs.show', compact('blog'));
    }

    public function detail(Blog $blog)
    {
        return view('blogs.detail', compact('blog'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request);
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'teaser' => 'required|string',
        ]);

        $blog->update($data);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('uploads/blog-images/'.basename($blog->image));
            $file = $request->file('image');
            $path = $file->store('uploads/blog-images', 'public');

            $blog->image = 'storage/'.$path;
        }

        $blog->save();

        return redirect(route('blogs.blog'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete('uploads/blog-images/'.basename($blog->image));
        $blog->delete();

        return redirect(route('blogs.blog'));
    }
}
