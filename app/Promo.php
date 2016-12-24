<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'year','url_image'
    ];

    public $timestamps = false;
}
