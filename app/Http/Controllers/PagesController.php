<?php

namespace Imac\Http\Controllers;

use DB;
use Validator;
use Session;
use App;
use Redirect;
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
        $this->middleware('lang');
    }

    public static function displayApplication() {
        $tmpJson = json_decode(file_get_contents(public_path().'/json/updateDisplayOpenningBanner.json'),TRUE);
        $display_application = $tmpJson["openning-application"];
        return $display_application;
    }

    public function index(){
        //Speed modification
        //$projects = Project::HomePage()->get();
        $projects = Project::all()->take(2);
        foreach($projects as &$project){
            $project_self_tags = DB::table('tags')
                ->select('tags.id','tags.name')
                ->join('project_tags','tags.id', '=', 'project_tags.tag_id')
                ->join('projects','projects.id', '=', 'project_tags.project_id')
                ->where('projects.id', '=', $project->id)
                ->get();
            $project->tags = $project_self_tags;
        }
        $student_testimonials = StudentTestimonial::all();
        $display_application = PagesController::displayApplication();
        return view('pages.home', compact('projects','student_testimonials','display_application'));
    }

    public function presentation(){
        $student_testimonials = StudentTestimonial::all();
        $display_application = PagesController::displayApplication();
        return view('pages.presentation', compact('student_testimonials','display_application'));
    }

    public function admission(){
        $student_testimonials = StudentTestimonial::all();
        $dates = json_decode(file_get_contents(public_path().'/json/application.json'),TRUE);
        $dates = $dates['application'];
        $display_application = PagesController::displayApplication();
        return view('pages.admission',compact('student_testimonials','dates','display_application'));
    }

    public function openings(){
        $student_testimonials = StudentTestimonial::all();
        $display_application = PagesController::displayApplication();
        return view('pages.openings', compact('student_testimonials','display_application'));
    }

    public function staff(){
        $main_staff = Staff::where('main', '=', true)->orderBy('order', 'desc')->get();
        $staff = Staff::where('main', '=', false)->orderBy('name', 'asc')->get();
        $display_application = PagesController::displayApplication();
        return view('pages.staff', compact('main_staff', 'staff','display_application'));
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
        $display_application = PagesController::displayApplication();
        return view('pages.projects', compact('projects', 'tags', 'years','display_application'));
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
        $display_application = PagesController::displayApplication();
        return view('pages.project', compact('project','display_application'));
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
        $display_application = PagesController::displayApplication();
        return view('pages.students', compact('promos', 'select_year', 'students_promo','display_application'));
    }

    public function studentLife(){
        $display_application = PagesController::displayApplication();
        return view('pages.studentLife',compact('display_application'));
    }

    public function international(){
        $student_testimonials = StudentExchangeTestimonial::all();
        $gallery = array();
        foreach ($student_testimonials as $student) {
          $gallery[$student->id] = GalleryStudentExchangeTestimonial::where('id_testimonial', '=', $student->id)->get();
        }
        $display_application = PagesController::displayApplication();
        return view('pages.international', compact('student_testimonials', 'gallery','display_application'));
    }

    public function partnership(){
        $partnerships = Partnership::orderBy('order')->get();
        $partner_testimonials = EnterpriseTestimonial::all();
        $display_application = PagesController::displayApplication();
        return view('pages.partnership',compact('partnerships', 'partner_testimonials','display_application'));
    }

    public function contact(){
        $display_application = PagesController::displayApplication();
        return view('pages.contact',compact('display_application'));
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

    public function faq(){
        return view('pages.faq');
    }

    public function graphicResources(){
        return view('pages.graphicResources');
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

    public function changeLang($lang){
        $rules = [
        'language' => 'in:en,fr' //list of supported languages of your application.
        ];

        $language = $lang; //lang is name of form select field.

        $validator = Validator::make(compact($language),$rules);

        if($validator->passes())
        {
            Session::put('language',$language);
            App::setLocale($language);
        }

        return Redirect::back();
    }
}
