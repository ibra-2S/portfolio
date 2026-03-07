<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projet;
use App\Models\Competence;
use App\Models\Experience;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Projets
        Projet::create(['title' => 'Site E-commerce', 'description' => 'Un site de vente en ligne avec panier et paiement.', 'technologies' => 'Laravel, MySQL, Bootstrap', 'link' => '#']);
        Projet::create(['title' => 'Application Todo', 'description' => 'Une application de gestion de tâches.', 'technologies' => 'Vue.js, Laravel', 'link' => '#']);
        Projet::create(['title' => 'Portfolio', 'description' => 'Mon portfolio personnel.', 'technologies' => 'Laravel, Bootstrap', 'link' => '#']);

        // Compétences
        Competence::create(['name' => 'HTML / CSS', 'category' => 'Frontend', 'level' => 90]);
        Competence::create(['name' => 'JavaScript', 'category' => 'Frontend', 'level' => 75]);
        Competence::create(['name' => 'PHP / Laravel', 'category' => 'Backend', 'level' => 80]);
        Competence::create(['name' => 'MySQL', 'category' => 'Base de données', 'level' => 70]);
        Competence::create(['name' => 'Git', 'category' => 'Outils', 'level' => 75]);

        // Expériences
        Experience::create(['title' => 'Licence Informatique', 'organization' => 'Université X', 'period' => '2021 - 2024', 'description' => 'Formation en développement web et logiciel.', 'type' => 'education']);
        Experience::create(['title' => 'Développeur Web Stagiaire', 'organization' => 'Entreprise Y', 'period' => '2023 - 2024', 'description' => 'Développement d\'applications web avec Laravel.', 'type' => 'experience']);
    }
}
