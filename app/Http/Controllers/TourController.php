<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tours.tours');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // 'user_id' => '',
            'title' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'location' => 'required|string',
            'price' => 'required',
            'duration' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
            'image' => 'required'
        ]);
        
        $file_name = Tour::exists() ? date('YmdHi').(Tour::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('image')->extension() : date('YmdHi').'.'.$request->file('image')->extension();

        $request->file('image')->move(public_path('uploads/tours'), $file_name);

        $tour = Tour::create($data);
        $tour->image = $file_name;
        $tour->save();
        return redirect(route('tours.show', $tour->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
