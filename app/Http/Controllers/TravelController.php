<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use App\Models\Travel;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!View::exists('index')) {
            abort(404, 'View not found.');
        }

        $travels = Travel::all();

        return view('travels.index', compact('travels'));
    }

    public function list()
    {
        $travels = Travel::all();

        return view('travels.list', compact('travels'));
    }

    /**
     * Search Results
     */

    public function search(Request $request)
    {

        $travels = Travel::where('location', $request->location)
                        ->get();

        return view('travels.index', compact('travels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // Log::info('Submitted Data:', $request->all());

        $data = $request->validate([
            'title' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'starting' => 'required|string',
            'destination' => 'required|string',
            'price' => 'required',
            'people' => 'required',
            'duration' => 'required',
            'rating' => 'required',
            'round_trip' => '',
            'reviews' => 'required',
            'image' => 'required'
        ]);

        $file = $request->file('image');
        $path = $file->store('uploads', 'public');

        $travel = Travel::create($data);

        $location = Location::create([
            'travel_id' => $travel->id,
            'location' => $travel->city, ]);


        $travel->image = 'storage/'.$path;
        $travel->save();
        return redirect(route('travels.show', $travel->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        //
    }

    public function detail(Travel $travel)
    {
        return view('travels.detail', compact('travel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        return view('travels.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'starting' => 'required|string',
            'destination' => 'required|string',
            'price' => 'required',
            'people' => 'required',
            'duration' => 'required',
            'rating' => 'required',
            'round_trip' => '',
            'reviews' => 'required',
            'image' => 'image'
        ]);

        $travel->update($data);

        $location = Location::where('travel_id', $travel->id )->first();

        $loc = $request->validate([ 'location' => 'required|string',]);

        $location->update($loc);

        if (!$request->input('round_trip')) {
            $travel->round_trip = false;
        }

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($travel->image);
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');
            $travel->image = 'storage/'.$path;
        }
        $travel->save();

        return redirect(route('travels.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        Storage::disk('public')->delete($travel->image);
        $travel->delete();
        return redirect(route('travels.index'));
    }
}
