<?php

namespace Imac;

use Carbon\Carbon;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Project extends Model
{
    protected $fillable = [
        'name','description','en_description','date','excerpt','en_excerpt','contributors','awards','name_of_tutors',
        'github_link','vimeo_link','web_link','platform','url_video','url_image','url_page'
    ];

    /*
    | Retrive two of the project to put them on the front page
    | TODO : Need amelioration for the selection on some parameters
    */

    public function scopeHomePage($query){
      return $query->take(2);
    }

    public function project_tag(){
        return $this->hasMany("Imac\project_tag");
    }

    public function project_student(){
        return $this->hasMany("Imac\project_student");
    }

    public function getUrl($name){
        $slugify = new Slugify();
        $url = $slugify->slugify($name);
        return $url;
    }

    static function getArrayDates(){
        $projects = Project::all();
        $array_dates = array();
        $array_dates[0] = 'Année';
        foreach ($projects as $project) {
            $dt = Carbon::parse($project->date);
            if(!in_array($dt->year, $array_dates) && $dt->year > 0)
                array_push($array_dates, $dt->year);
        }
        return $array_dates;
    }

    public $timestamps = false;
}
