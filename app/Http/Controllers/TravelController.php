<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
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
        $file_name = Travel::exists() ? date('YmdHi').(Travel::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('image')->extension() : date('YmdHi').'.'.$request->file('image')->extension();

        $request->file('image')->move(public_path('uploads/travels'), $file_name);

        $travel = Travel::create($data);
        $travel->image = $file_name;
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        //
    }
}
