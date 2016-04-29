<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\StudentTestimonial;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminStudentTestimonialController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $studentTestimonials = StudentTestimonial::All();
        return view('admin.studentTestimonial.list',compact('studentTestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.studentTestimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $studentTestimonial = new StudentTestimonial($request->all());
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/studentTestimonial/',$name);
            }
        }

        $studentTestimonial->url_image = $name;
        $studentTestimonial->save();
        return redirect('admin/StudentTestimonial/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $studentTestimonial = StudentTestimonial::findOrFail($id);
        return view('admin.studentTestimonial.edit',compact('studentTestimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $studentTestimonial = StudentTestimonial::findOrFail($id);
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/studentTestimonial/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }

        $studentTestimonial->update($request->all());
        if($name != null)
            $studentTestimonial->url_image = $name;
        $studentTestimonial->update();
        return redirect('admin/StudentTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $studentTestimonial = StudentTestimonial::findOrFail($id);
        $studentTestimonial->delete();
        return redirect('admin/StudentTestimonial');
    }
}
