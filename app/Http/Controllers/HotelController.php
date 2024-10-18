<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    
    /**
     * Display a Admin list of the resource.
     */
    public function list()
    {
        
        $hotels = Hotel::all();

        return view('hotels.list', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $hotel = new Hotel();

        return view('hotels.create', compact('hotel'));
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
            'capacity' => 'required|string',
            'price' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
        ]);

        $hotel = Hotel::create($data);

        

        $image = new Image();
        $image->hotel_id = $hotel->id;

        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        $image->image = 'storage/'.$path;

        $image->save();

        $hotel->save();

        return redirect(url('hotels.detail/{$hotel->id}'));
    }



    /**
     * Search Results
     */
    public function search(Request $request)
    {

        $hotels = Hotel::where('location', $request->location)
                        ->where('capacity', '>=', $request->guest)
                        ->get();        

        return view('hotels.index', compact('hotels'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        // Return a view with the hotel details
        return view('hotels.show', compact('hotel'));
    }

    public function detail($hotel)
    {
        // Return a view with the hotel details

        $hotel = Hotel::find($hotel);
        
        return view('hotels.detail', compact('hotel'));
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
            'capacity' => 'required|string',
            'price' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
        ]);

        $hotel->update($data);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($hotel->image);
            $file = $request->file('image');
            $path = $file->store('uploads', 'public'); 
            
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
        return redirect(route('hotels.list'));
    }
}
