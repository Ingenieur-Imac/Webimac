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

    public function store(ProjectRequest $request){
        $project = new Project($request->all());
        $project->save();
        return redirect('admin/project/list');
    }

    public function update($id, ProjectRequest  $request){
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect('admin/project');
    }

    public function delete($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('admin/project');
    }
}
