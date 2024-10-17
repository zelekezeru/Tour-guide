<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
}
