<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;
use Imac\Http\Requests;
use Imac\Project;
use Imac\StudentTestimonial;
use Carbon\Carbon;
use Imac\Http\Controllers\Controller;

class PagesController extends Controller{

    public function __construct(){
        //$this->middleware('auth');
    }

    public function index(){
        $projects = Project::HomePage()->get();
        $student_testimonials = StudentTestimonial::all()->random(3);
        return view('pages.home',compact('projects','student_testimonials'));
    }

    public function presentation(){
      $student_testimonials = StudentTestimonial::all()->random(3);
      return view('pages.presentation', compact('student_testimonials'));
    }

    public function admission(){
      $student_testimonials = StudentTestimonial::all()->random(3);
      return view('pages.admission', compact('student_testimonials'));
    }

    public function openings(){
      $student_testimonials = StudentTestimonial::all()->random(3);
      return view('pages.openings', compact('student_testimonials'));
    }

    public function project($url){
      $project = Project::where('url_page','=',$url)->get();
      $project = $project->first();
      $project->date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y');
      return view('pages.project', compact('project'));
    }

    public function students(){
      return view('pages.students');
    }

    public function international(){
      return view('pages.international');
    }

    public function partnership(){
      return view('pages.partnership');
    }

    public function contact(){
      return view('pages.contact');
    }

    public function legalNotice(){
      return view('pages.legalNotice');
    }

    public function about(){
        $name = "Julien Rousset";
        return view('about')->with([
            'first' => 'Julien',
            'last' => 'Rousset'
        ]);
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
