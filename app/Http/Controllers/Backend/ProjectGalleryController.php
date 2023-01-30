<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectGallery;
use App\Models\Project;
use App\Http\Requests\Backend\ProjectGalleryFormRequest;

class ProjectGalleryController extends Controller
{
    public function index()
    {
        $galleries = ProjectGallery::with('project')->get();
        return view('backend.project-gallery.index',compact('galleries'));
    }

    public function create()
    {
        $projects = Project::get();
        return view('backend.project-gallery.form', compact('projects'));
    }

    public function store(ProjectGalleryFormRequest $request)
    {
        $project = ProjectGallery::create($request->validated());

        if ($galleries = $request->file('gallery')) {
            foreach ($galleries as $gallery) {
                $project->addMedia($gallery)->toMediaCollection('gallery');
            }
        }

        return redirect()->route('backend.project-galleries.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(ProjectGallery $projectGallery)
    {
        $data['projects'] = Project::get();

        $data['projectGallery'] = $projectGallery;

        return view('backend.project-gallery.form', $data);
    }

    public function update(ProjectGalleryFormRequest $request, ProjectGallery $projectGallery)
    {
        $projectGallery->update($request->validated());

        if ($galleries = $request->file('gallery')) {
            $projectGallery->clearMediaCollection('gallery');
            foreach ($galleries as $gallery) {
                $projectGallery->addMedia($gallery)->toMediaCollection('gallery');
            }
        }

        return redirect()->route('backend.project-galleries.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(ProjectGallery $projectGallery)
    {
        $projectGallery->delete();
        return redirect()->route('backend.project-galleries.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }
}
