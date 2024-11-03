<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Blog;
use App\Models\Tour;
use App\Models\Travel;
use App\Models\Testimonial;
use App\Models\Location;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::all();
        $blogs = Blog::all();
        $tours = Tour::all();
        $travels = Travel::all();
        $testimonials = Testimonial::all();
        $locations = Location::all();
        
        return view('index', compact('hotels', 'blogs', 'tours', 'travels', 'testimonials', 'locations'));
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
