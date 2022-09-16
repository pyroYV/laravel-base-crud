<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'slug'
    ];
}
