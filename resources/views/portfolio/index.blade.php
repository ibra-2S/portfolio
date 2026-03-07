@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1>Bonjour, je suis <span>Ibrahima Sory Soumah</span></h1>
        <p class="lead mt-3">Développeur Web Full Stack passionné</p>
        <a href="{{ route('projets') }}" class="btn btn-primary btn-lg mt-3 me-2">Voir mes projets</a>
        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg mt-3">Me contacter</a>
        <a href="{{ route('cv.download') }}" class="btn btn-outline-light btn-lg mt-3"><i class="fas fa-download"></i> Télécharger mon CV</a>
    </div>
</section>

<!-- Projets récents -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Mes <span>Projets</span></h2>
        <div class="row">
            @forelse($projets as $projet)
            <div class="col-md-4 mb-4">
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

<!-- Compétences -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Mes <span>Compétences</span></h2>
        <div class="row">
            @forelse($competences as $competence)
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between mb-1">
                    <span>{{ $competence->name }}</span>
                    <span>{{ $competence->level }}%</span>
                </div>
                <div class="progress">
                    <div class="skill-bar progress-bar" style="width: {{ $competence->level }}%"></div>
                </div>
            </div>
            @empty
            <p class="text-center text-muted">Aucune compétence pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Expériences -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Études & <span>Expériences</span></h2>
        <div class="row">
            @forelse($experiences as $experience)
            <div class="col-md-6 mb-4">
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
