@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero text-center" style="background:#0f0f1a;">
    <div id="particles-js"></div>
    <div class="container">
        <h1>Bonjour, je suis <span id="typing"></span><span class="cursor">|</span></h1>
        <p class="lead mt-3">Développeur Web Full Stack passionné</p>
        <a href="{{ route('projets') }}" class="btn btn-primary btn-lg mt-3 me-2">Voir mes projets</a>
        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg mt-3">Me contacter</a>
        <a href="{{ route('cv.download') }}" class="btn btn-outline-light btn-lg mt-3"><i class="fas fa-download"></i> Télécharger mon CV</a>
    </div>
</section>

</section>

<div class="wave-divider" style="background:#111122; margin-top:-2px;">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path fill="#0f0f1a" d="M0,40 C360,80 1080,0 1440,40 L1440,0 L0,0 Z"/>
    </svg>
</div>

<!-- About Section -->
<section class="about-section" style="background:#111122;">
    <div class="container position-relative">
        <span class="about-title-bg">RESUME</span>
        <h2 class="section-title text-center" style="color:white;">À <span>Propos de Moi</span></h2>
        <div class="row align-items-center">
            <div class="col-md-6 fade-in">
                <h4 style="color:#f5a623;" class="mb-4">PERSONAL INFOS</h4>
                <div class="row">
                    <div class="col-6">
                        <p class="info-item">Prénom : <span>Ton Prénom</span></p>
                        <p class="info-item">Nom : <span>Ton Nom</span></p>
                        <p class="info-item">Âge : <span>Ton Âge</span></p>
                        <p class="info-item">Nationalité : <span>Ta Nationalité</span></p>
                    </div>
                    <div class="col-6">
                        <p class="info-item">Adresse : <span>Ta Ville</span></p>
                        <p class="info-item">Téléphone : <span>+XXX XXX XXX</span></p>
                        <p class="info-item">Email : <span>ton@email.com</span></p>
                        <p class="info-item">Freelance : <span>Disponible</span></p>
                    </div>
                </div>
                <a href="{{ route('cv.download') }}" class="btn mt-4" style="background:#f5a623; color:#000; font-weight:bold; border-radius:30px; padding: 12px 30px;">
                    <i class="fas fa-download"></i> TÉLÉCHARGER CV
                </a>
            </div>
            <div class="col-md-6 fade-in">
                <div class="row">
                    <div class="col-6">
                        <div class="stats-box">
                            <div class="number">2+</div>
                            <div class="label">ANNÉES D'EXPÉRIENCE</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-box">
                            <div class="number">{{ $projets->count() }}+</div>
                            <div class="label">PROJETS COMPLÉTÉS</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-box">
                            <div class="number">5+</div>
                            <div class="label">CLIENTS SATISFAITS</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stats-box">
                            <div class="number">3+</div>
                            <div class="label">CERTIFICATIONS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>

<div class="wave-divider" style="transform: rotate(180deg); background:#0f0f1a; margin-top:-2px;">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path fill="#111122" d="M0,40 C360,80 1080,0 1440,40 L1440,0 L0,0 Z"/>
    </svg>
</div>


<!-- Projets récents -->
<section class="py-5 projets-section" style="background:#0f0f1a;">
    <div class="container position-relative">
        <span class="section-bg-title">RÉALISATIONS</span>
        <h2 class="section-title text-center">Mes <span>Projets</span></h2>
        <div class="row">
            @forelse($projets as $projet)
            <div class="col-md-4 mb-4 fade-in">
                <div class="card h-100">
                    @if($projet->image)
                    <img src="{{ asset('storage/'.$projet->image) }}" class="card-img-top" alt="{{ $projet->title }}">
                    @else
                    <div class="bg-secondary text-white text-center py-5">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $projet->title }}</h5>
                        <p class="card-text">{{ Str::limit($projet->description, 100) }}</p>
                        <span class="badge bg-secondary">{{ $projet->technologies }}</span>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-muted">Aucun projet pour le moment.</p>
            @endforelse
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('projets') }}" class="btn btn-primary">Voir tous les projets</a>
        </div>
    </div>
</section>

</section>

<div class="wave-divider" style="background:#111122; margin-top:-2px;">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path fill="#0f0f1a" d="M0,40 C360,80 1080,0 1440,40 L1440,0 L0,0 Z"/>
    </svg>
</div>

<!-- Compétences -->
<section class="skills-section" style="background:#111122;">
    <div class="container position-relative">
        <span class="section-bg-title">SKILLS</span>
        <h2 class="section-title text-center" style="color:white;">Mes <span>Compétences</span></h2>

        @php
            $categories = $competences->groupBy('category');
        @endphp

        @foreach($categories as $categorie => $items)
        <div class="mb-5">
            <h4 class="category-title">{{ $categorie }}</h4>
            <div class="row justify-content-center">
                @foreach($items as $competence)
                <div class="col-6 col-md-3 col-lg-2 skill-circle-wrapper fade-in">
                    <div class="skill-circle-container">
                        <canvas class="skill-donut" data-level="{{ $competence->level }}" width="120" height="120"></canvas>
                        <div class="skill-value">{{ $competence->level }}%</div>
                    </div>
                    <div class="skill-label">{{ $competence->name }}</div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
</section>

</section>

<div class="wave-divider" style="transform: rotate(180deg); background:#0f0f1a; margin-top:-2px;">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path fill="#111122" d="M0,40 C360,80 1080,0 1440,40 L1440,0 L0,0 Z"/>
    </svg>
</div>

<!-- Expériences -->
<section class="py-5 experiences-section" style="background:#0f0f1a;"s>
    <div class="container position-relative">
        <span class="section-bg-title">PARCOURS</span>
        <h2 class="section-title text-center">Études & <span>Expériences</span></h2>
        <div class="row">
            @forelse($experiences as $experience)
            <div class="col-md-6 mb-4 fade-in">
                <div class="card h-100 p-3">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas {{ $experience->type == 'education' ? 'fa-graduation-cap' : 'fa-briefcase' }} fa-2x text-danger me-3"></i>
                        <div>
                            <h5 class="mb-0">{{ $experience->title }}</h5>
                            <small class="text-muted">{{ $experience->organization }} | {{ $experience->period }}</small>
                        </div>
                    </div>
                    <p class="text-muted">{{ $experience->description }}</p>
                </div>
            </div>
            @empty
            <p class="text-center text-muted">Aucune expérience pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection
