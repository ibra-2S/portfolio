@extends('admin.layout')

@section('content')
<h1 class="page-title">✏️ Modifier l'expérience</h1>

<div class="card p-4">
    <form action="{{ route('admin.experiences.update', $experience) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $experience->title) }}">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Organisation</label>
            <input type="text" name="organization" class="form-control @error('organization') is-invalid @enderror" value="{{ old('organization', $experience->organization) }}">
            @error('organization') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Période</label>
            <input type="text" name="period" class="form-control @error('period') is-invalid @enderror" value="{{ old('period', $experience->period) }}">
            @error('period') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $experience->description) }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control @error('type') is-invalid @enderror">
                <option value="">-- Choisir --</option>
                <option value="education" {{ old('type', $experience->type) == 'education' ? 'selected' : '' }}>🎓 Formation</option>
                <option value="experience" {{ old('type', $experience->type) == 'experience' ? 'selected' : '' }}>💼 Expérience</option>
            </select>
            @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <a href="{{ route('admin.experiences.index') }}" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Mettre à jour
        </button>
    </form>
</div>
@endsection
