<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('hotels.hotels');
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
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

        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        $hotel = Hotel::create($data);
        $hotel->image = 'storage/'.$path;
        $hotel->save();
        return redirect(route('hotels.index'));
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
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'price' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
            'image' => 'required'
        ]);

        $hotel->update($data);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($hotel->image);
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');   
            // dd($path);         
            $hotel->image = 'storage/'.$path;
        }
        $hotel->save();
        return redirect(route('hotels.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        Storage::disk('public')->delete($hotel->image);
        $hotel->delete();
        return redirect(route('hotels.index'));
    }
}
