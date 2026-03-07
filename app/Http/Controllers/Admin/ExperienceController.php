<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'organization' => 'required',
            'period' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        Experience::create($request->all());
        return redirect()->route('admin.experiences.index')->with('success', 'Expérience ajoutée !');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required',
            'organization' => 'required',
            'period' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $experience->update($request->all());
        return redirect()->route('admin.experiences.index')->with('success', 'Expérience modifiée !');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('success', 'Expérience supprimée !');
    }
}
