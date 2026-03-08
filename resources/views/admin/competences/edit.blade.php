@extends('admin.layout')

@section('content')
<h1 class="page-title">✏️ Modifier la compétence</h1>

<div class="card p-4">
    <form action="{{ route('admin.competences.update', $competence) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $competence->name) }}">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Catégorie</label>
            <select name="category" class="form-control @error('category') is-invalid @enderror">
                <option value="">-- Choisir --</option>
                <option value="Frontend" {{ old('category', $competence->category) == 'Frontend' ? 'selected' : '' }}>Frontend</option>
                <option value="Backend" {{ old('category', $competence->category) == 'Backend' ? 'selected' : '' }}>Backend</option>
                <option value="Base de données" {{ old('category', $competence->category) == 'Base de données' ? 'selected' : '' }}>Base de données</option>
                <option value="Cloud et Outils" {{ old('category', $competence->category) == 'Outils' ? 'selected' : '' }}>Cloud et Outils</option>
            </select>
            @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Icône Devicon</label>
            <input type="text" name="icon" class="form-control" value="{{ old('icon', $competence->icon) }}" placeholder="ex: devicon-laravel-plain, devicon-php-plain">
            <small class="text-muted">Trouve les icônes sur <a href="https://devicon.dev" target="_blank">devicon.dev</a></small>
        </div>
        <a href="{{ route('admin.competences.index') }}" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Mettre à jour
        </button>
    </form>
</div>
@endsection
