<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fas fa-code" style="color:#f8f7f5;"></i>
                <span style="color:#f5a623; font-size:1.5rem; letter-spacing:2px;">Ibra2S</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projets') }}">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('competences') }}">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('experiences') }}">Expériences</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-danger btn-sm ms-2 px-3" href="{{ route('cv.download') }}"><i class="fas fa-download"></i> Télécharger CV</a></li>
                </ul>
                <li class="nav-item ms-2"><button id="themeToggle" class="btn btn-sm" style="background:#f5a623; color:#000; border-radius:50%; width:38px; height:38px;"><i class="fas fa-sun"></i></button>
</li>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row py-5">
                <!-- Colonne 1 - Présentation -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-white mb-3"><span style="color:#f5a623;">Ibrahima Sory Soumah</span></h5>
                    <p style="color:#aaaaaa;">Étudiant en Informatique passionné par le développement web et les nouvelles technologies.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://www.linkedin.com/in/ibrahima-sory-soumah-697552337/" target="_blank" class="social-btn-footer">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com" target="_blank" class="social-btn-footer">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="ibrahimfatou01@gmail.com" class="social-btn-footer">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://wa.me/224623134751" target="_blank" class="social-btn-footer">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Colonne 2 - Liens -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-white mb-3">Focus</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('projets') }}" class="footer-link">Projets</a></li>
                        <li class="mb-2"><a href="{{ route('experiences') }}" class="footer-link">Expériences</a></li>
                        <li class="mb-2"><a href="{{ route('competences') }}" class="footer-link">Compétences</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                    </ul>
                </div>

                <!-- Colonne 3 - Contact -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-white mb-3">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color:#aaaaaa;">
                            <i class="fas fa-envelope me-2" style="color:#f5a623;"></i> ibrahimfatou01@email.com
                        </li>
                        <li class="mb-2" style="color:#aaaaaa;">
                            <i class="fas fa-phone me-2" style="color:#f5a623;"></i> +224 623 134 751
                        </li>
                        <li class="mb-2" style="color:#aaaaaa;">
                            <i class="fas fa-map-marker-alt me-2" style="color:#f5a623;"></i> Conakry, Guinée
                        </li>
                    </ul>
                </div>
            </div>

            <hr style="border-color:#ffffff15;">

            <div class="text-center py-3" style="color:#aaaaaa;">
                © 2026 <span style="color:#f5a623;">Ibrahima Sory Soumah</span>. Merci pour la visite!
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
