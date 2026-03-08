@extends('admin.layout')

@section('content')
<h1 class="page-title">➕ Ajouter une compétence</h1>

<div class="card p-4">
    <form action="{{ route('admin.competences.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="ex: PHP, Laravel, JavaScript">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <select name="category" class="form-control @error('category') is-invalid @enderror">
                <option value="">-- Choisir --</option>
                <option value="Frontend" {{ old('category') == 'Frontend' ? 'selected' : '' }}>Frontend</option>
                <option value="Backend" {{ old('category') == 'Backend' ? 'selected' : '' }}>Backend</option>
                <option value="Base de données" {{ old('category') == 'Base de données' ? 'selected' : '' }}>Base de données</option>
                <option value="Cloud et Outils" {{ old('category') == 'Outils' ? 'selected' : '' }}>Cloud et Outils</option>
            </select>
            @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Icône Devicon</label>
            <input type="text" name="icon" class="form-control" value="{{ old('icon') }}" placeholder="ex: devicon-laravel-plain, devicon-php-plain">
            <small class="text-muted">Trouve les icônes sur <a href="https://devicon.dev" target="_blank">devicon.dev</a></small>
        </div>
        <a href="{{ route('admin.competences.index') }}" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Enregistrer
        </button>
    </form>
</div>
@endsection
