<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function itenararies()
    {
        return $this->hasMany(Itenarary::class);
    }
}
