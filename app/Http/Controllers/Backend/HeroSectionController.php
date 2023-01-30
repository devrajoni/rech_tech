<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::with('media')->get();
        return view('backend.hero-section.index',compact('heroSections'));
    }

    public function create()
    {
        return view('backend.hero-section.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['required'],
        ]);

        $hero = HeroSection::create($validated);

          if($request->hasFile('image')){
            $hero->addMedia($request->image)->toMediaCollection('slider');
        }


        return redirect()->route('backend.hero-sections.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(HeroSection $heroSection)
    {
        return view('backend.hero-section.form', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'image' => ['required'],
        ]);

        $heroSection->update($validated);

        if($request->hasFile('image')){
            $heroSection->clearMediaCollection('slider');
            $heroSection->addMedia($request->image)->toMediaCollection('slider');
        }

        return redirect()->route('backend.hero-sections.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(HeroSection $heroSection)
    {
        $heroSection->delete();

        return redirect()->route('backend.hero-sections.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
