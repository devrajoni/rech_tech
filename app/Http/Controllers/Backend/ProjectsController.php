<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectsController extends Controller
{
    public function index()
    {
        $data['projects'] = Project::with('projectCategory')->get();

        return view('backend.project.index', $data);
    }

    public function create()
    {
        $data['categories'] = ProjectCategory::get();
        return view('backend.project.form', $data);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_id' => ['nullable'],
            'title' => ['required'],
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['nullable'],
            'status' => ['required'],

        ]);
        $project = Project::create($validate);

        if($request->hasFile('image')){
            $project->addMedia($request->image)
                ->toMediaCollection('project');
        }


        return redirect()->route('backend.projects.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(Project $project)
    {
        $data['categories'] = ProjectCategory::get();
        $data['project'] = $project;
        return view('backend.project.form', $data);
    }

    public function update(Request $request, Project $project)
    {
        $validate = $request->validate([
            'category_id' => ['nullable'],
            'title' => ['required'],
            'name' => ['required'],
            'image' => ['required'],
            'description' => ['nullable'],
            'status' => ['required'],

        ]);
        $project->update($validate);

        if($request->hasFile('image')){
            $project->clearMediaCollection('project');
            $project->addMedia($request->image)->toMediaCollection('project');
        }
        return redirect()->route('backend.projects.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('backend.projects.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
