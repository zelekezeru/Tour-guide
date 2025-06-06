<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function itenararies()
    {
        return $this->hasMany(Itenarary::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function approvedReviews()
    {
        return $this->reviews()->where('isApproved', true)->get();
    }
}
