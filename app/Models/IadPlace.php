<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IadPlace extends Model
{
    use HasFactory;

    protected $table = 'nearby_places';

    protected $connection = 'latest-iad-db';

    public function placePhotos()
    {
        return $this->hasMany(IadPlacePhoto::class, 'nearby_place_id');
    }
}
