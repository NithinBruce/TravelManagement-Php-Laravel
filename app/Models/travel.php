<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;
    protected $table = 'travelmanage';
    protected $fillable = [
        'packagename',
        'destination',
        'description',
        'price'
    ];
}
