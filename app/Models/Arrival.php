<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    use HasFactory;

    protected $table = 'arrivals';

    protected $fillable = [
        'airline_iata',
        'flight_iata',
        'arrival',
        'arr_time',
        'departure',
        'dep_time',
        'status',
    ];
}
