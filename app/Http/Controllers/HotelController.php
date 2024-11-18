<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RoleMiddleware;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class HotelController extends Controller implements HasMiddleware
{
    
    public static function middleware()
    {
        return [new Middleware(RoleMiddleware::class.":ADMIN,EDITOR", except: ['index', 'show'])];
    }
    /*
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
     * Search Results
     */

    public function search(Request $request)
    {

        $hotels = Hotel::where('location', $request->location)
                        ->get();     
        
        return view('hotels.index', compact('hotels'));
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
        
        $location = Location::create([
            'hotel_id' => $hotel->id,
            'location' => $hotel->location, ]);

        
        $image = new Image();

        $image->hotel_id = $hotel->id;

        $file = $request->file('image');

        $path = $file->store('uploads', 'public');

        $image->image = 'storage/'.$path;

        $image->save();

        $hotel->save();

        return redirect(route('hotels.detail', $hotel));
    }

    /**
     * Display the specified resource.
     */

    public function show(Hotel $hotel)
    {
        // Return a view with the hotel details
        return view('hotels.show', compact('hotel'));
    }

    public function detail(Hotel $hotel)
    {
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
        
        $location = Location::create([
            'hotel_id' => $hotel->id,
            'location' => $hotel->location, ]);

        $location = Location::where('hotel_id', $hotel->id )->first();

        $loc = $request->validate([ 'location' => 'required|string',]);
        
        $location->update($loc);

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

        foreach ($hotel->images as $image) {
            Storage::disk('public')->delete('uploads/'.basename($image->image));
        }

        $hotel->delete();

        return redirect(route('hotels.list'));
    }
}
