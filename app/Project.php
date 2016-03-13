<?php

namespace Imac;

use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name','description','date','excerpt','contributors','awards','name_of_tutors',
        'github_link','vimeo_link','web_link','platform','url_video','url_image','url_page'
    ];

    /*
    | Retrive two of the project to put them on the front page
    | TODO : Need amelioration for the selection on some parameters
    */

    public function scopeHomePage($query){
      return $query->take(2);
    }


    public function getUrl($name){
        $slugify = new Slugify();
        $url = $slugify->slugify($name);
        return $url;
    }
}
