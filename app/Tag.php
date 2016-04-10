<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function project_tag(){
        return $this->hasMany("Imac\project_tag");
    }
}
