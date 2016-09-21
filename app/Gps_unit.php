<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gps_unit extends Model
{
    protected $fillable=[
        'gid',
        'model',
        'gps_protocol',
    ];
}
