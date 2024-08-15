<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('testimonials.index');
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        
        $file_name = Testimonial::exists() ? date('YmdHi').(Testimonial::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('image')->extension() : date('YmdHi');

        $request->file('image')->move(public_path('uploads/testimonials'), $file_name);

        $testimonial = Testimonial::create($data);
        $testimonial->image = $file_name;
        $testimonial->save();
        return redirect(route('testimonials.show', $testimonial->id));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
