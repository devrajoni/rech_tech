<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('backend.project.index', compact('projects'));
    }

    public function create()
    {
        return view('backend.project.form');
    }

    public function store(Request $request)
    {
        $save_image = null;
        if ($request->image) {
            $image = $request->file('image');
            $name_gen = "project" . "Banner" . time() . '.' . $image->extension();
            $location = public_path('uploads/project/' . $name_gen);
            Image::make($image)->resize(2100, 1094)->save($location);
            $save_image = 'uploads/project/' . $name_gen;
        }

        Project::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'name' => $request->name,
            'image' => $save_image,
            'description' => $request->description,
            'status' => $request->status,

        ]);

        return redirect()->route('backend.projects.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
