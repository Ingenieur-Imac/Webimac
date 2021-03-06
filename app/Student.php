<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name','surname','promo','photo','url_web','url_linkedin'
    ];

    public function project_student(){
        return $this->hasMany("Imac\project_student");
    }

    public $timestamps = false;

}
