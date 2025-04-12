<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    use HasFactory;
    protected $table = 'departures';
    protected $fillable = [
        'airline_iata',
        'flight_iata',
        'departure',
        'dep_time',
        'arrival',
        'arr_time',
        'status',
    ];
}
