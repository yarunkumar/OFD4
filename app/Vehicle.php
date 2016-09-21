<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=[
        'van_no',
        'make',
        'model',
        'year_vehicle',
        'type',
    ];
}
