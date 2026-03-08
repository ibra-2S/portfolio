@extends('layouts.app')

@section('content')

<section class="hero">
    <div id="particles-js"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1>Bonjour, je suis <span id="typing"></span><span class="cursor">|</span></h1>
                <p class="lead mt-3">Étudiant en Informatique passionné par le développement web</p>
                <div class="mt-4 d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-envelope"></i> Me contacter
                    </a>
                    <a href="{{ route('cv.download') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-download"></i> Télécharger mon CV
                    </a>
                </div>
                <div class="mt-4 d-flex gap-3">
                    <a href="https://linkedin.com/in/TON_PROFIL" target="_blank" class="social-btn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/TON_NUMERO" target="_blank" class="social-btn">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://github.com/TON_USERNAME" target="_blank" class="social-btn">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="photo-wrapper-right">
                    <img src="{{ asset('images/photo.jpg') }}" alt="Photo" class="hero-photo-right">
                </div>
            </div>
        </div>
    </div>
</section>

</section>



<!-- About Section -->
<section class="about-section" style="background:#111122;">
    <div class="container position-relative">
        <span class="about-title-bg">RESUME</span>
        <h2 class="section-title text-center" style="color:white;">À <span>Propos de Moi</span></h2>
        <div class="row align-items-center">
            <div class="col-md-6 fade-in">
                <h4 style="color:#f5a623;" class="mb-4">INFOS PERSONEL</h4>
                <div class="row">
                    <div class="col-6">
                        <p class="info-item">Prénom : <span>IBRAHIMA SORY</span></p>
                        <p class="info-item">Nom : <span>SOUMAH</span></p>
                        <p class="info-item">Âge : <span>24 ANS</span></p>
                        <p class="info-item">Nationalité : <span>GUINÉENNE</span></p>
                    </div>
                    <div class="col-6">
                        <p class="info-item">Adresse : <span>CONAKRY, GBESSIA PRES DU SIEGE RPG</span></p>
                        <p class="info-item">Téléphone : <span>+224 623 134 751</span></p>
                        <p class="info-item">Email : <span>ibrahimfatou01@email.com</span></p>
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

<div class="wave-divider" style="background:#0f0f1a; margin-top:-2px;">
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
        <h2 class="section-title text-center">Mes <span>Compétences</span></h2>

        @php $categories = $competences->groupBy('category'); @endphp

        @foreach($categories as $categorie => $items)
        <div class="mb-5">
            <h4 class="category-title">{{ $categorie }}</h4>
            <div class="row">
                @foreach($items as $competence)
                <div class="col-6 col-md-3 col-lg-2 text-center mb-4 fade-in">
                    <div class="skill-icon-box">
                        <i class="{{ $competence->icon }} colored"></i>
                        <p class="skill-name">{{ $competence->name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
</section>

</section>

<div class="wave-divider" style="background:#0f0f1a; margin-top:-2px;">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path fill="#111122" d="M0,40 C360,80 1080,0 1440,40 L1440,0 L0,0 Z"/>
    </svg>
</div>

<!-- Expériences -->
<section class="py-5 experiences-section" style="background:#0f0f1a;">
    <div class="container position-relative">
        <span class="section-bg-title">PARCOURS</span>
        <h2 class="section-title text-center">Études & <span>Expériences</span></h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center mb-4" style="color:#f5a623;"><i class="fas fa-graduation-cap me-2"></i> Formation</h4>
                @foreach($experiences->where('type', 'education') as $exp)
                <div class="card mb-3 p-3 fade-in">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h5>{{ $exp->title }}</h5>
                            <small style="color:#f5a623;">{{ $exp->organization }} | {{ $exp->period }}</small>
                        </div>
                        @if($exp->fichier)
                        <a href="{{ asset('storage/'.$exp->fichier) }}" target="_blank" class="btn btn-sm" style="background:#f5a623; color:#000; border-radius:20px;">
                            <i class="fas fa-download"></i>
                        </a>
                        @endif
                    </div>
                    <p class="text-muted">{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4 class="text-center mb-4" style="color:#f5a623;"><i class="fas fa-briefcase me-2"></i> Expériences</h4>
                @foreach($experiences->where('type', 'experience') as $exp)
                <div class="card mb-3 p-3 fade-in">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h5>{{ $exp->title }}</h5>
                            <small style="color:#f5a623;">{{ $exp->organization }} | {{ $exp->period }}</small>
                        </div>
                        @if($exp->fichier)
                        <a href="{{ asset('storage/'.$exp->fichier) }}" target="_blank" class="btn btn-sm" style="background:#f5a623; color:#000; border-radius:20px;">
                            <i class="fas fa-download"></i>
                        </a>
                        @endif
                    </div>
                    <p class="text-muted">{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
