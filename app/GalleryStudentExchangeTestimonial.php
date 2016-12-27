<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class GalleryStudentExchangeTestimonial extends Model
{
    protected $fillable = [
        'id_testimonial','url','place'
    ];

    public $timestamps = false;
}
