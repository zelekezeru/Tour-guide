<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('testimonials.index', compact('testimonials'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonial = new Testimonial();

        return view('testimonials.create', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            // 'user_id' => '',
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'testimony' => 'required|string',
            'image' => 'required'
        ]);
        
        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        $testimonial = Testimonial::create($data);
        $testimonial->image = 'storage/'.$path;
        $testimonial->save();
        return redirect(route('testimonials.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            // 'user_id' => '',
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'testimony' => 'required|string',
            'image' => 'required'
        ]);
        $testimonial->update($data);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($testimonial->image);
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');   
            // dd($path);         
            $testimonial->image = 'storage/'.$path;
        }
        $testimonial->save();
        return redirect(route('testimonials.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('public')->delete($testimonial->image);

        $testimonial->delete();
        
        return redirect(route('testimonials.index'));
    }
}
