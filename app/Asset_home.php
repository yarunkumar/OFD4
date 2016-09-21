<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset_home extends Model
{
    protected $fillable=[
        'asset_id',
        'asset_type',
        'Asset_code',
    ];
}
