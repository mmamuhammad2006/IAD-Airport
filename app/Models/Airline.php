<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Airline extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'airlines';
    // protected $connection = 'mysql-remote';

    public $casts = [
        'all_airlines' => 'array',
    ];
    protected $fillable = [
        '_id',
        'name',
        'iata_code',
        'icao_code',
        'country',
        'country_code',
        'size_airline',
        'call_sign',
        'status',
        'data',
        'deleted_at',
    ];
}
