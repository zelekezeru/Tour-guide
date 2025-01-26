<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Hotel;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Travel;
use Illuminate\Http\RedirectResponse;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $file = $request->file('images')[$i];
                $path = $file->store('uploads', 'public');
                $image = Image::create([
                    'hotel_id' => $request->hotel_id,
                    'description' => $request->descriptions[$i] ?? '',
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $hotel = Hotel::find($request->hotel_id);

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
        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $file = $request->file('images')[$i];
                $path = $file->store('uploads', 'public');
                $image = Image::create([
                    'travel_id' => $request->travel_id,
                    'description' => $request->descriptions[$i] ?? '',
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $travel = Travel::find($request->travel_id);

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
        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $file = $request->file('images')[$i];
                $path = $file->store('uploads', 'public');
                $image = Image::create([
                    'tour_id' => $request->tour_id,
                    'description' => $request->descriptions[$i] ?? '',
                    'image' => 'storage/' . $path,
                ]);
            }
        }

        $tour = Tour::find($request->tour_id);

        return redirect(route('tours.show', compact('tour')));
    }

    /**
     * Delete the specified hotel image.
     */
    public function remove($id, $type)
    {
        dd($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $image->image));
        $image->delete();
        
        return redirect()->back()->with('success', 'Image deleted successfully.');
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
        //
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
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        Storage::disk('public')->delete(str_replace('storage/', '', $image->image));
        $image->delete();
        
        return redirect()->back()->with('success', 'Image deleted successfully');
    }
}
