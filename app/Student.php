<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','promo','photo','url_web','url_linkedin'
    ];
}
