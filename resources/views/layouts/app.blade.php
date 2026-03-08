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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fas fa-code" style="color:#f8f7f5;"></i>
                <span style="color:#f5a623; font-size:1.5rem; letter-spacing:2px; text-transform:uppercase;">Ibra2S</span>
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

    <footer class="text-center">
        <p>© 2025 Mon Portfolio. Fait avec ❤️ et Laravel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
