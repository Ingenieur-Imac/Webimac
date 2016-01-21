<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Project;
use Imac\Http\Requests;
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

    public function edit($id){
        $project = Project::findOrFail($id);
        return view('admin.project.edit',compact('project'));
    }

    public function create(){
        return view('admin.project.create');
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
