<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $fillable = [
        'name','type','url_web','description','url_image'
    ];
}
