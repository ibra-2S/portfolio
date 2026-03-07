@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title">📁 Projets</h1>
    <a href="{{ route('admin.projets.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Ajouter un projet
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Technologies</th>
                    <th>Lien</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projets as $projet)
                <tr>
                    <td>{{ $projet->id }}</td>
                    <td>{{ $projet->title }}</td>
                    <td><span class="badge bg-secondary">{{ $projet->technologies }}</span></td>
                    <td>
                        @if($projet->link)
                        <a href="{{ $projet->link }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                        @else
                        <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.projets.edit', $projet) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.projets.destroy', $projet) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center text-muted">Aucun projet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
