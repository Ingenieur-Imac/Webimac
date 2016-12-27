<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class EnterpriseTestimonial extends Model
{
    protected $fillable = [
        'name','description','overview','en_overview','url_image'
    ];

    public $timestamps = false;
}
