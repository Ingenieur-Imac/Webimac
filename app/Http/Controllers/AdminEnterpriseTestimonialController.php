<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\EnterpriseTestimonial;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminEnterpriseTestimonialController extends Controller
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
        $enterpriseTestimonials = EnterpriseTestimonial::all();
        return view('admin.EnterpriseTestimonial.list',compact("enterpriseTestimonials"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.enterpriseTestimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enterpriseTestimonial = new EnterpriseTestimonial($request->all());
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/EnterpriseTestimonial/',$name);
            }
        }

        $enterpriseTestimonial->url_image = $name;
        $enterpriseTestimonial->save();
        return redirect('admin/EnterpriseTestimonial/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enterpriseTestimonial = EnterpriseTestimonial::findOrFail($id);
        return view("admin.enterpriseTestimonial.edit",compact("enterpriseTestimonial"));
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
        $enterpriseTestimonial = EnterpriseTestimonial::findOrFail($id);
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/EnterpriseTestimonial/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }

        $enterpriseTestimonial->update($request->all());
        if($name != null)
            $enterpriseTestimonial->url_image = $name;
        $enterpriseTestimonial->update();
        return redirect('admin/EnterpriseTestimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enterpriseTestimonial = EnterpriseTestimonial::findOrFail($id);
        $enterpriseTestimonial->delete();
        return redirect('admin/EnterpriseTestimonial');
    }
}
