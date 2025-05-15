<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function list()
    {

        $reviews = Review::orderBy('created_at', 'desc')->paginate(15);

        return view('reviews.list', compact('reviews'));
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
    public function store(Request $request, Tour $tour)
    {
        $fields = $request->validate([
            'full_name' => 'required|string|max:40',
            'email' => 'required|email|max:100',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Max 2MB
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|min:5|max:2000',
        ]);

        $fields['tour_id'] = $tour->id;
        $fields['photo'] = $fields['photo'] ?? null;

        if ($fields['photo']) {
            $image = $fields['photo'];
            $fields['photo'] = 'storage/'.$image->store('reviewers', 'public');
        }
        $review = Review::create($fields);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    public function detail(Review $review)
    {
        return view('reviews.detail', compact('review'));
    }

    public function approve(Review $review)
    {
        $review->isApproved = true;

        $review->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
