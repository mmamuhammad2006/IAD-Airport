<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $connection = 'mysql-remote';

    public function places()
    {
        return $this->hasMany(Place::class, 'category_id', 'id');
    }
}
