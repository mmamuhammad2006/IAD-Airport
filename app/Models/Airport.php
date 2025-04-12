<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $table = 'airports';

    protected $connection = 'mysql-remote';
    public function places()
    {
        return $this->hasMany(Place::class);
    }

}
