<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\Travel;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function hotel($id){

        $hotel = Hotel::find($id);
        
        return view('hotels.images', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function hotel_image(Request $request)
    {
        //
        $hotel_id = $request->input('hotel_id');

        $description = $request->input('description');

        $image = new Image();

        $image->hotel_id = $hotel_id;

        $image->description = $description;

        $file = $request->file('image');

        $path = $file->store('uploads', 'public');

        $image->image = 'storage/'.$path;

        $image->save();

        $hotel = Hotel::find($hotel_id);

        return redirect(route('hotels.show', compact('hotel')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function travel($id){

        $travel = Travel::find($id);
        
        return view('travels.images', compact('travel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function travel_image(Request $request)
    {
        //
        $travel_id = $request->input('travel_id');

        $description = $request->input('description');

        $image = new Image();

        $image->travel_id = $travel_id;

        $image->description = $description;

        $file = $request->file('image');

        $path = $file->store('uploads', 'public');

        $image->image = 'storage/'.$path;

        $image->save();

        $travel = Travel::find($travel_id);

        return redirect(route('travels.show', compact('travel')));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function tour($id){

        $tour = Tour::find($id);
        
        return view('tours.images', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function tour_image(Request $request)
    {
        //
        $tour_id = $request->input('tour_id');

        $description = $request->input('description');

        $image = new Image();

        $image->tour_id = $tour_id;

        $image->description = $description;

        $file = $request->file('image');

        $path = $file->store('uploads', 'public');

        $image->image = 'storage/'.$path;

        $image->save();

        $tour = Tour::find($tour_id);

        return redirect(route('tours.show', compact('tour')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
