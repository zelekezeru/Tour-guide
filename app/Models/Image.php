<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
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

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
