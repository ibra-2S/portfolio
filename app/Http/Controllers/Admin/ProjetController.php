<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::latest()->get();
        return view('admin.projets.index', compact('projets'));
    }

    public function create()
    {
        return view('admin.projets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'technologies' => 'required',
        ]);

        Projet::create($request->all());
        return redirect()->route('admin.projets.index')->with('success', 'Projet ajouté !');
    }

    public function edit(Projet $projet)
    {
        return view('admin.projets.edit', compact('projet'));
    }

    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'technologies' => 'required',
        ]);

        $projet->update($request->all());
        return redirect()->route('admin.projets.index')->with('success', 'Projet modifié !');
    }

    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé !');
    }
}
