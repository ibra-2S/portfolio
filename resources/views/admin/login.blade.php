<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background: #0f0f1a; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .login-card { background: #1a1a2e; border-radius: 15px; padding: 40px; width: 100%; max-width: 400px; border: 1px solid #ffffff10; }
        .login-card h2 { color: white; font-weight: bold; }
        .login-card h2 span { color: #f5a623; }
        .form-control { background: #0f0f1a !important; border: 1px solid #ffffff20 !important; color: white !important; }
        .form-control:focus { border-color: #f5a623 !important; box-shadow: none !important; }
        .form-label { color: #aaaaaa; }
        .btn-login { background: #f5a623; color: #000; font-weight: bold; border: none; width: 100%; padding: 12px; border-radius: 30px; }
        .btn-login:hover { background: #d4891a; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="text-center mb-4"><i class="fas fa-code"></i> Ibra<span>2S</span></h2>
        <h5 class="text-center mb-4" style="color:aliceblue">Connexion Admin</h5>

        @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="admin@portfolio.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••">
            </div>
            <button type="submit" class="btn btn-login mt-2">
                <i class="fas fa-sign-in-alt"></i> Se connecter
            </button>
        </form>
    </div>
</body>
</html>
