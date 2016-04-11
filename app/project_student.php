<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class project_student extends Model
{
    protected $fillable = [
        'id_project','id_student'
    ];

    public function project(){
        return $this->belongsTo('Imac\Project');
    }

    public function student(){
        return $this->belongsTo('Imac\Student');
    }
}
