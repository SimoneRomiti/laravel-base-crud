<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'name',
        'type',
        'alcohol',
        'img',
        'description',
        'price'
    ];
}
