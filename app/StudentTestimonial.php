<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class StudentTestimonial extends Model
{
    protected $fillable = [
        'name','job','year','overview','en_overview','url_image'
    ];
}
