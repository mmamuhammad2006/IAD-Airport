<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IadPlacePhoto extends Model
{
    use HasFactory;
    protected $table = 'place_photos';

    protected $connection = 'latest-iad-db';

    public function place()
    {
        return $this->belongsTo(IadPlace::class, 'nearby_place_id');
    }
}
