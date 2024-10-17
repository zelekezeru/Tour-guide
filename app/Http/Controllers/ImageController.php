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
