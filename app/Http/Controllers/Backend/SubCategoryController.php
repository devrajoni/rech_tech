<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SubCategoryFormRequest;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['subCategories'] = Category::with('category')->where('parent_id', '!=' , null)->get();
        return view('backend.sub-category.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::where('parent_id', null)->get();
        return view('backend.sub-category.form', $data);
    }

    public function store(SubCategoryFormRequest $request)
    {
        Category::create($request->persist());
        return redirect()->route('backend.subCategories.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $subCategory)
    {
        $data['categories'] = Category::where('parent_id', null)->get();
        $data['subCategory'] = $subCategory;
        return view('backend.sub-category.form', $data);
    }

    public function update(SubCategoryFormRequest $request, Category $subCategory)
    {
        $subCategory->update($request->persist());
        return redirect()->route('backend.subCategories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Category $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('backend.subCategories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
