<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
