<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryRequestForm;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::where('parent_id', null)->get();
        return view('backend.category.index', $data);
    }

    public function create()
    {
        return view('backend.category.form');
    }

    public function store(CategoryRequestForm $request)
    {
        Category::create($request->persist());
        return redirect()->route('backend.categories.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('backend.category.form', compact('category'));
    }

    public function update(CategoryRequestForm $request, Category $category)
    {
        $category->update($request->persist());
        return redirect()->route('backend.categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('backend.categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
