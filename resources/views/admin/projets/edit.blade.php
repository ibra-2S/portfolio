@extends('admin.layout')

@section('content')
<h1 class="page-title">✏️ Modifier le projet</h1>

<div class="card p-4">
    <form action="{{ route('admin.projets.update', $projet) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $projet->title) }}">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $projet->description) }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Technologies</label>
            <input type="text" name="technologies" class="form-control" value="{{ old('technologies', $projet->technologies) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Lien du projet</label>
            <input type="text" name="link" class="form-control" value="{{ old('link', $projet->link) }}">
        </div>
        <a href="{{ route('admin.projets.index') }}" class="btn btn-secondary">Annuler</a>
        <div class="mb-3">
            <label class="form-label">Image du projet</label>
                @if($projet->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$projet->image) }}" alt="Image actuelle" style="width:150px; border-radius:10px;">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png">
            <small class="text-muted">Laisser vide pour garder l'actuelle</small>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Mettre à jour
        </button>
    </form>
</div>
@endsection
