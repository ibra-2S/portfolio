@extends('admin.layout')

@section('content')
<h1 class="page-title">➕ Ajouter une expérience</h1>

<div class="card p-4">
    <form action="{{ route('admin.experiences.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="ex: Développeur Web Stagiaire">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Organisation</label>
            <input type="text" name="organization" class="form-control @error('organization') is-invalid @enderror" value="{{ old('organization') }}" placeholder="ex: Entreprise X, Université Y">
            @error('organization') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Période</label>
            <input type="text" name="period" class="form-control @error('period') is-invalid @enderror" value="{{ old('period') }}" placeholder="ex: 2022 - 2024">
            @error('period') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control @error('type') is-invalid @enderror">
                <option value="">-- Choisir --</option>
                <option value="education" {{ old('type') == 'education' ? 'selected' : '' }}>🎓 Formation</option>
                <option value="experience" {{ old('type') == 'experience' ? 'selected' : '' }}>💼 Expérience</option>
            </select>
            @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Enregistrer
        </button>
    </form>
</div>
@endsection
