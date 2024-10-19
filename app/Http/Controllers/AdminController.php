<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Blog;
use App\Models\Tour;
use App\Models\Travel;
use App\Models\User;
use App\Models\Contact;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotel = count(Hotel::all());
        $blog = count(Blog::all());
        $tour = count(Tour::all());
        $travel = count(Travel::all());
        $user = count(User::all());
        $contacts = Contact::all();
        
        return view('admins.index', compact('hotel', 'blog', 'tour', 'travel', 'user', 'contacts'));
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
