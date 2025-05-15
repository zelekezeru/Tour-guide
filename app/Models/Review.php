<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function approved()
    {
        return Review::where('isApproved');
    }
}
