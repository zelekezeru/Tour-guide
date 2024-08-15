<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hotels.hotels');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'price' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
            'image' => 'required'
        ]);
        
        $file_name = Hotel::exists() ? date('YmdHi').(Hotel::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('image')->extension() : date('YmdHi').'.'.$request->file('image')->extension();

        $request->file('image')->move(public_path('uploads/hotels'), $file_name);

        $hotel = Hotel::create($data);
        $hotel->image = $file_name;
        $hotel->save();
        return redirect(route('hotels.show', $hotel->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
