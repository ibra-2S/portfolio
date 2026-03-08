<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public function index()
    {
        $competences = Competence::all();
        return view('admin.competences.index', compact('competences'));
    }

    public function create()
    {
        return view('admin.competences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'icon' => 'required',
        ]);

        Competence::create($request->all());
        return redirect()->route('admin.competences.index')->with('success', 'Compétence ajoutée !');
    }

    public function edit(Competence $competence)
    {
        return view('admin.competences.edit', compact('competence'));
    }

    public function update(Request $request, Competence $competence)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'icon' => 'required',
        ]);

        $competence->update($request->all());
        return redirect()->route('admin.competences.index')->with('success', 'Compétence modifiée !');
    }

    public function destroy(Competence $competence)
    {
        $competence->delete();
        return redirect()->route('admin.competences.index')->with('success', 'Compétence supprimée !');
    }
}
