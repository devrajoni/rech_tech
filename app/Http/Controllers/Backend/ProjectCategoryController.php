<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\ProjectCategoryFormRequest;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::get();
        return view('backend.project-category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.project-category.form');
    }

    public function store(ProjectCategoryFormRequest $request)
    {
        ProjectCategory::create($request->validated());

        return redirect()->route('backend.project-categories.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(ProjectCategory $projectCategory)
    {
        return view('backend.project-category.form', compact('projectCategory'));
    }

    public function update(ProjectCategoryFormRequest $request, ProjectCategory $projectCategory)
    {
        $projectCategory->update($request->validated());
        return redirect()->route('backend.project-categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return redirect()->route('backend.project-categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
