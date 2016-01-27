<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $fillable = [
        'name','description','url_image'
    ];
}
