<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeContent extends Model
{
    use HasFactory;
    protected $table = 'change_contents';

    protected $fillable = [
        'page',
        'key',
        'value'
    ];
}
