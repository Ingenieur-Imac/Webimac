<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Tag;
use Imac\project_tag;
use Imac\Http\Requests;
use Imac\Http\Controllers\Controller;

class AdminTagController extends Controller
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
        // $tags = Tag::all();
        $tags = Tag::orderBy('tag','ASC')->get();
        return view('admin.tag.list',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag($request->all());
        $tag->save();
        return redirect('admin/Tag');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit',compact('tag'));
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
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return redirect('admin/Tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect('admin/Tag');
    }

    public function addTag($idTag,$idProj){
        $project_tag = project_tag::where('tag_id',$idTag)->where('project_id',$idProj)->first();
        if(count($project_tag) == 0){
            $project_tag = new project_tag();
            $project_tag->project_id = $idProj;
            $project_tag->tag_id = $idTag;
            $project_tag->save();
        }
    }

    public function removeTag($idTag,$idProj){
        $project_tag = project_tag::where('tag_id',$idTag)->where('project_id',$idProj)->first();
        if(count($project_tag) == 1){
            $project_tag->delete();
        }
    }
}
