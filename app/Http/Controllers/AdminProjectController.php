<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Imac\Project;
use Imac\Tag;
use Imac\Http\Requests;
use Carbon\Carbon;
use Imac\Http\Requests\ProjectRequest;
use Imac\Http\Controllers\Controller;

class AdminProjectController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function listAll(){
        $projects = Project::all();
        return view('admin.project.list',compact('projects'));
    }

    public function create(){
        $tags = Tag::all();
        return view('admin.project.create',compact('tags'));
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        $tags = Tag::all()->pluck('name','id');

        $self_tags = DB::table('tags')
            ->select('tags.id','tags.name')
            ->join('project_tags','tags.id', '=', 'project_tags.id_tag')
            ->join('projects','projects.id', '=', 'project_tags.id_project')
            ->get();

        $self_tags = DB::table('students')
            ->select('*')
            ->join('project_students','students.id', '=', 'project_students.id_student')
            ->join('projects','projects.id', '=', 'project_students.id_project')
            ->get();

        $old_date = Carbon::createFromFormat('Y-m-d H:i:s',$project->date)->format('Y-m-d');
        return view('admin.project.edit',compact('project','old_date','tags','self_tags','self_students'));
    }

    // TODO: RETURN ERROR WHEN ELSE CONDITION IS LAUNCH

    public function store(ProjectRequest $request){
        $project = new Project($request->all());
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/projects/',$name);
            }
        }
        $project->url_page = $project->getUrl($project->name);
        $project->url_image = $name;
        $project->save();
        return redirect('admin/project/');
    }

    // TODO: RETURN ERROR WHEN ELSE CONDITION IS LAUNCH

    public function update($id, ProjectRequest  $request){
        $project = Project::findOrFail($id);
        $name = null;
        if($request->hasFile('url_image')){
            $file = $request->file('url_image');
            if($file->isValid()){
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/images/projects/',$name);
            } else {
                echo('Fichier non valide');
            }
        } else {
            echo('Request don\'t have file !');
        }


        $project->update($request->all());
        if($name != null)
            $project->url_image = $name;
        $project->update();
        return redirect('admin/project');
    }

    public function delete($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('admin/project');
    }
}
