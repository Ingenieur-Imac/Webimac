<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;
use Imac\Http\Requests;
use Imac\Project;
use Imac\Promo;
use Imac\Partnership;
use Imac\Student;
use Imac\StudentTestimonial;
use Imac\Tag;
use Carbon\Carbon;
use Imac\Http\Controllers\Controller;

class PagesController extends Controller{

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        //Speed modification
        //$projects = Project::HomePage()->get();
        $projects = Project::all()->reverse()->take(2);
        $student_testimonials = StudentTestimonial::all()->random(3);
        return view('pages.home', compact('projects','student_testimonials'));
    }

    public function presentation(){
        $student_testimonials = StudentTestimonial::all()->random(3);
        return view('pages.presentation', compact('student_testimonials'));
    }

    public function admission(){
        $student_testimonials = StudentTestimonial::all()->random(3);
        $dates = json_decode(file_get_contents(public_path().'/json/application.json'),TRUE);
        $dates = $dates['application'];
        return view('pages.admission',compact('student_testimonials','dates'));
    }

    public function openings(){
        $student_testimonials = StudentTestimonial::all()->random(3);
        return view('pages.openings', compact('student_testimonials'));
    }

    public function projects(){
        $projects = Project::all();
        $tags = Tag::orderBy('name', 'asc')->get();
        $years = Project::getArrayDates();
        //Get projects tag
        foreach($projects as &$project){
            $link_tags = Project::findOrFail($project->id)->project_tag;
            $project_self_tags = array();
            foreach($link_tags as $link_tag){
                array_push($project_self_tags,Tag::findOrFail($link_tag->tag_id));
            }
            $project->tags = $project_self_tags;
        }
        //$project = $project->first();
        //$project->date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y');
        return view('pages.projects', compact('projects', 'tags', 'years'));
    }

    public function project($url){
        $project = Project::where('url_page','=',$url)->get();
        $project = $project->first();
        $project->date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y');
        return view('pages.project', compact('project'));
    }

    public function students(){
        $promos = Promo::all();
        //Table input
        $select_year = array();
        $students = array();
        foreach($promos as $promo){
            $select_year[$promo->year] = 'Promotion '.$promo->year;
            $students_promo[$promo->year] = Student::where('promo', '=', $promo->id)->get();
        }
        return view('pages.students', compact('promos', 'select_year', 'students_promo'));
    }

    public function studentLife(){
        return view('pages.studentLife');
    }

    public function international(){
        return view('pages.international');
    }

    public function partnership(){
        $partnerships = Partnership::all();
        return view('pages.partnership',compact('partnerships'));
    }

    public function contact(){
      return view('pages.contact');
    }

    public function legalNotice(){
      return view('pages.legalNotice');
    }

    public function timer(){
        $ts = null;
        $json = json_decode(file_get_contents(public_path().'/json/timer.json'),TRUE);
        if(isset($json['timer']['timestamp'])){
            $ts = $json['timer']['timestamp'];
        } else {
            abort(404);
        }
        return view('timer',compact('ts'));
    }


}
