<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Itenarary;
use App\Models\Tour;
use Illuminate\Http\Request;

class ItenararyController extends Controller
{
    public function edit(Tour $tour)
    {
        $hotels = Hotel::all();
        return view('itenararies.edit', compact('tour', 'hotels'));
    }

    public function update(Itenarary $itenarary, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'transport_type' => 'required',
            'description' => 'required',
            'hotel_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = $image->store('itenararies', 'public');
        }

        $itenarary->update($data);
        $itenarary->save();
        return redirect(route('itenararies.edit', $itenarary->tour->id));
    }

    public function destroy(Itenarary $itenarary)
    {
        $tour = $itenarary->tour_id;
        $tour_itenararies = $itenarary->tour->itenararies()->where('id', '>', $itenarary->id)->pluck('id')->toArray();
        foreach ($tour_itenararies as $tour_itenarary) {
            $update_tour = Itenarary::find($tour_itenarary);
            $update_tour->day_number--;
            $update_tour->save();
        }
        $itenarary->tour->duration--;
        $itenarary->tour->save();
        $itenarary->delete();
        
        return redirect(route('itenararies.edit', $tour));
    }
}
