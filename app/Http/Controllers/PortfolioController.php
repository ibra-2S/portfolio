<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Competence;
use App\Models\Experience;

class PortfolioController extends Controller
{
    public function index()
    {
        $projets = Projet::latest()->take(3)->get();
        $competences = Competence::all();
        $experiences = Experience::all();
        return view('portfolio.index', compact('projets', 'competences', 'experiences'));
    }

    public function projets()
    {
        $projets = Projet::latest()->get();
        return view('portfolio.projets', compact('projets'));
    }

    public function competences()
    {
        $competences = Competence::all();
        return view('portfolio.competences', compact('competences'));
    }

    public function experiences()
    {
        $experiences = Experience::all();
        return view('portfolio.experiences', compact('experiences'));
    }
}
