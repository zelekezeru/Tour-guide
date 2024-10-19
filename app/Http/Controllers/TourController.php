<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index', compact('tours'));
    }

    public function list()
    {
        $tours = Tour::all();
        return view('tours.list', compact('tours'));
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
        // dd($request->all());
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
            'image' => 'image'
        ]);
        
        $file = $request->file('image');
        $path = $file->store('uploads', 'public');
        
        $tour = Tour::create($data);
        $tour->image = 'storage/'.$path;
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
    
    public function detail(Tour $tour)
    {
        return view('tours.detail', compact('tour'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
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
            'image' => 'image'
        ]);
        
        $tour->update($data);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('uploads/'.basename($tour->image));
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');   
            // dd($path);         
            $tour->image = 'storage/'.$path;
        }
        $tour->save();
        return redirect(route('tours.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        Storage::disk('public')->delete('uploads/'.basename($tour->image));
        foreach ($tour->images as $image) {
            Storage::disk('public')->delete('uploads/'.basename($image->image));
        }
        $tour->delete();
        return redirect(route('tours.index'));
    }
}
