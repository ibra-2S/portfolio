<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #1a1a2e; width: 250px; position: fixed; }
        .sidebar .brand { color: white; font-size: 1.5rem; font-weight: bold; padding: 20px; border-bottom: 1px solid #ffffff20; }
        .sidebar .nav-link { color: #ffffffaa; padding: 12px 20px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: white; background: #e94560; border-radius: 5px; }
        .sidebar .nav-link i { margin-right: 10px; }
        .main-content { margin-left: 250px; padding: 30px; }
        .card { border: none; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        .btn-primary { background: #e94560; border: none; }
        .btn-primary:hover { background: #c73652; }
        .page-title { font-size: 1.8rem; font-weight: bold; margin-bottom: 25px; }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="brand"><i class="fas fa-code"></i> Admin Panel</div>
    <nav class="nav flex-column p-3">
        <a class="nav-link {{ request()->is('admin/projets*') ? 'active' : '' }}" href="{{ route('admin.projets.index') }}">
            <i class="fas fa-folder"></i> Projets
        </a>
        <a class="nav-link {{ request()->is('admin/competences*') ? 'active' : '' }}" href="{{ route('admin.competences.index') }}">
            <i class="fas fa-tools"></i> Compétences
        </a>
        <a class="nav-link {{ request()->is('admin/experiences*') ? 'active' : '' }}" href="{{ route('admin.experiences.index') }}">
            <i class="fas fa-briefcase"></i> Expériences
        </a>
        <hr style="border-color: #ffffff30;">
        <a class="nav-link" href="{{ route('home') }}" target="_blank">
            <i class="fas fa-eye"></i> Voir le portfolio
        </a>
        <a class="nav-link {{ request()->is('admin/contacts*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-envelope"></i> Messages
        </a>
    </nav>
</div>

<div class="main-content">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
