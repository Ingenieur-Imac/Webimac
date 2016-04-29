<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Http\Requests;
use Imac\Promo;
use Imac\Student;
use Imac\Http\Controllers\Controller;

class AdminPromoController extends Controller
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
        $promos = Promo::orderBy('year','DESC')->get();
        foreach($promos as $promo){
            $promo->nbStudent = count(Student::where('promo',$promo->id)->get());
        }
        return view('admin.promo.list',compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo($request->all());
        //Handling URL_IMAGE
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/promo/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }
        if($name != null)
            $promo->url_image = $name;

        $promo->save();
        return redirect('admin/Promo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo =Promo::findOrFail($id);
        return view('admin.promo.edit',compact('promo'));
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
        $promo = Promo::findOrFail($id);
        $name = null;
        $promo->update($request->all());
        //Handling URL_IMAGE
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/promo/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }
        if($name != null)
            $promo->url_image = $name;

        //Return handle result
        $promo->update();
        return redirect('admin/Promo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return redirect('admin/Promo');
    }
}
