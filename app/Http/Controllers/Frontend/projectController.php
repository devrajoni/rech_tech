<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\ProjectCategory;
use App\Models\Project;

class projectController extends Controller
{
    public function index()
    {
        $data['heroSections'] = HeroSection::get();

        $data['categories'] = ProjectCategory::get();

        $data['projects'] = Project::get();

        return view('frontend.project.project', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
