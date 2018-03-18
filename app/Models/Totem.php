<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Totem extends Model
{
    public $timestamps = false;
    protected $table = 'totem';

    protected $casts = [
    ];

    protected $fillable = [
        'region',
        'map_territoire',
        'conquerant_territoire',
        'date',
    ];
}
