<?php

namespace Imac\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Imac\Http\Requests;
use Imac\EnterpriseTestimonial;
use Imac\GalleryStudentExchangeTestimonial;
use Imac\Project;
use Imac\Promo;
use Imac\Partnership;
use Imac\Staff;
use Imac\Student;
use Imac\StudentTestimonial;
use Imac\StudentExchangeTestimonial;
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
        $projects = Project::all()->take(2);
        $student_testimonials = StudentTestimonial::all();
        return view('pages.home', compact('projects','student_testimonials'));
    }

    public function presentation(){
        $student_testimonials = StudentTestimonial::all();
        return view('pages.presentation', compact('student_testimonials'));
    }

    public function admission(){
        $student_testimonials = StudentTestimonial::all();
        $dates = json_decode(file_get_contents(public_path().'/json/application.json'),TRUE);
        $dates = $dates['application'];
        return view('pages.admission',compact('student_testimonials','dates'));
    }

    public function openings(){
        $student_testimonials = StudentTestimonial::all();
        return view('pages.openings', compact('student_testimonials'));
    }

    public function staff(){
        $main_staff = Staff::where('main', '=', true)->orderBy('order', 'desc')->get();
        $staff = Staff::where('main', '=', false)->orderBy('name', 'asc')->get();
        return view('pages.staff', compact('main_staff', 'staff'));
    }

    public function projects(){
        $projects = Project::all();
        $tags = Tag::orderBy('name', 'asc')->get();
        $years = Project::getArrayDates();
        //Get projects tag
        foreach($projects as &$project){
            $project_self_tags = DB::table('tags')
                ->select('tags.id','tags.name')
                ->join('project_tags','tags.id', '=', 'project_tags.tag_id')
                ->join('projects','projects.id', '=', 'project_tags.project_id')
                ->where('projects.id', '=', $project->id)
                ->get();
            $project->tags = $project_self_tags;
            $project->date = Carbon::parse($project->date)->year;
        }
        //$project = $project->first();
        //$project->date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y');
        return view('pages.projects', compact('projects', 'tags', 'years'));
    }

    public function project($url){
        $project = Project::where('url_page','=',$url)->get();
        $project = $project->first();
        $project->tags = DB::table('tags')
            ->select('tags.id','tags.name')
            ->join('project_tags','tags.id', '=', 'project_tags.tag_id')
            ->join('projects','projects.id', '=', 'project_tags.project_id')
            ->where('projects.id', '=', $project->id)
            ->get();
        $project->date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y');
        $project->contributors = DB::table('students')
            ->select('students.id','students.name','students.surname','students.url_image','students.url_web','students.url_linkedin')
            ->join('project_students','students.id', '=', 'project_students.student_id')
            ->join('projects','projects.id', '=', 'project_students.project_id')
            ->where('projects.id', '=', $project->id)
            ->orderBy('name', 'asc')
            ->get();
        return view('pages.project', compact('project'));
    }

    public function students(){
        $promos = Promo::orderBy("year","DESC")->get();
        //Table input
        $select_year = array();
        $students = array();
        foreach($promos as $promo){
            $select_year[$promo->year] = 'Promotion '.$promo->year;
            $students_promo[$promo->year] = Student::where('promo', '=', $promo->id)->orderBy('name', 'asc')->get();
        }
        return view('pages.students', compact('promos', 'select_year', 'students_promo'));
    }

    public function studentLife(){
        return view('pages.studentLife');
    }

    public function international(){
        $student_testimonials = StudentExchangeTestimonial::all();
        $gallery = array();
        foreach ($student_testimonials as $student) {
          $gallery[$student->id] = GalleryStudentExchangeTestimonial::where('id_testimonial', '=', $student->id)->get();
        }
        return view('pages.international', compact('student_testimonials', 'gallery'));
    }

    public function partnership(){
        $partnerships = Partnership::orderBy('order')->get();
        $partner_testimonials = EnterpriseTestimonial::all();
        return view('pages.partnership',compact('partnerships', 'partner_testimonials'));
    }

    public function contact(){
        return view('pages.contact');
    }

    public function newPartnership(){
        return view('pages.newPartnership');
    }

    public function internshipOffer(){
        return view('pages.internshipOffer');
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
