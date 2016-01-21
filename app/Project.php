<?php

namespace Imac;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name','description','date','excerpt','contributors','name_of_tutors',
        'github_link','vimeo_link','web_link','url_video','url_image'
    ];
}
