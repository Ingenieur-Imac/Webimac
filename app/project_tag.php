<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class project_tag extends Model
{
    protected $fillable = [
        'id_project','id_tag'
    ];

    public function project(){
        return $this->belongsTo('Imac\Project');
    }

    public function tag(){
        return $this->belongsTo('Imac\Tag');
    }
}
