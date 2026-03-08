@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title">🛠️ Compétences</h1>
    <a href="{{ route('admin.competences.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Ajouter une compétence
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Icône</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($competences as $competence)
                <tr>
                    <td>{{ $competence->id }}</td>
                    <td>{{ $competence->name }}</td>
                    <td><span class="badge bg-secondary">{{ $competence->category }}</span></td>
                    <td>
                        <i class="{{ $competence->icon }} colored" style="font-size: 2rem;"></i>
                        <small class="ms-2">{{ $competence->icon }}</small>
                    </td>
                    <td>
                        <a href="{{ route('admin.competences.edit', $competence) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.competences.destroy', $competence) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center text-muted">Aucune compétence.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
