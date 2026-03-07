<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        .navbar { background: #1a1a2e !important; }
        .navbar-brand, .nav-link { color: white !important; }
        .nav-link:hover { color: #e94560 !important; }
        .hero { background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460); color: white; padding: 100px 0; }
        .hero h1 { font-size: 3rem; font-weight: bold; }
        .hero span { color: #e94560; }
        .section-title { font-size: 2rem; font-weight: bold; margin-bottom: 40px; }
        .section-title span { color: #e94560; }
        .card { border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .skill-bar { height: 10px; border-radius: 5px; background: #e94560; }
        .btn-primary { background: #e94560; border: none; }
        .btn-primary:hover { background: #c73652; }
        footer { background: #1a1a2e; color: white; padding: 30px 0; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fas fa-code" style="color: #c73652"></i> Ibra2S
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
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center">
        <p>© 2025 Mon Portfolio. Fait avec ❤️ et Laravel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
