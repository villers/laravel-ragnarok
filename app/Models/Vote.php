<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'votes';

    protected $casts = [
        'account_id' => 'int',
        'vote' => 'int',
    ];

    protected $fillable = [
        'account_id',
        'vote'
    ];
}
