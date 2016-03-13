<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Student;
use Imac\Promo;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminStudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.list',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promos = Promo::orderBy('year')->pluck('year','id');
        return view('admin.student.create',compact('promos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student($request->all());
        //Handling URL_IMAGE
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/student/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }
        if($name != null)
            $student->url_image = $name;

        $student->save();
        return redirect('admin/Student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promos = Promo::orderBy('year')->pluck('year','id');
        $student = Student::findOrFail($id);
        return view('admin.student.edit',compact('student','promos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $name = null;
        $student->update($request->all());
        //Handling URL_IMAGE
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/student/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }
        if($name != null)
            $student->url_image = $name;

        $student->save();
        return redirect('admin/Student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('admin/Student');
    }
}
