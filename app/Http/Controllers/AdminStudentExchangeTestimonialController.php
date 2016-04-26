<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\GalleryStudentExchangeTestimonial;
use Imac\StudentExchangeTestimonial;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminStudentExchangeTestimonialController extends Controller
{

    public function __constuct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentExchangeTestimonials = StudentExchangeTestimonial::All();
        return view('admin.studentExchangeTestimonial.list',compact('studentExchangeTestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.studentExchangeTestimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentExchangeTestimonial = new StudentExchangeTestimonial($request->all());
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/studentExchangeTestimonial/',$name);
            }
        }

        $studentExchangeTestimonial->url_image = $name;
        $studentExchangeTestimonial->save();

        // GESTION DE LA GALERIE ::
        if($request->hasFile('url_gallery')){
            foreach ($request->file('url_gallery') as $file) {
                if($file->isValid()){
                    $name = $file->getClientOriginalName();
                    $file->move(public_path().'/images/gallery/',$name);
                }
                $tmp_image = new GalleryStudentExchangeTestimonial();
                $tmp_image->id_testimonial = $studentExchangeTestimonial->id;
                $tmp_image->url = $name;
                $tmp_image->save();
            }
        }

        return redirect('admin/StudentExchangeTestimonial/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentExchangeTestimonial = studentExchangeTestimonial::findOrFail($id);
        $gallery = GalleryStudentExchangeTestimonial::where('id_testimonial',$id)->get();
        return view('admin.studentExchangeTestimonial.edit',compact('studentExchangeTestimonial','gallery'));
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
        $studentExchangeTestimonial = studentExchangeTestimonial::findOrFail($id);
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/studentExchangeTestimonial/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }

        $studentExchangeTestimonial->update($request->all());
        if($name != null)
            $studentExchangeTestimonial->url_image = $name;
        $studentExchangeTestimonial->update();

        // GESTION DE LA GALERIE ::
        if($request->hasFile('url_gallery')){
            foreach ($request->file('url_gallery') as $file) {
                if($file->isValid()){
                    $name = $file->getClientOriginalName();
                    $file->move(public_path().'/images/gallery/',$name);
                }
                $tmp_image = new GalleryStudentExchangeTestimonial();
                $tmp_image->id_testimonial = $studentExchangeTestimonial->id;
                $tmp_image->url = $name;
                $tmp_image->save();
            }
        }
        return redirect('admin/StudentExchangeTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentExchangeTestimonial = StudentExchangeTestimonial::findOrFail($id);
        $studentExchangeTestimonial->delete();
        return redirect('admin/StudentExchangeTestimonial');
    }

    public function destroyPic($id){
        $image = GalleryStudentExchangeTestimonial::findOrFail($id);
        $image->delete();
    }
}
