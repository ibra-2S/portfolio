@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title">💼 Expériences</h1>
    <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Ajouter une expérience
    </a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Organisation</th>
                    <th>Période</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->title }}</td>
                    <td>{{ $experience->organization }}</td>
                    <td>{{ $experience->period }}</td>
                    <td>
                        @if($experience->type == 'education')
                        <span class="badge bg-info">Formation</span>
                        @else
                        <span class="badge bg-success">Expérience</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted">Aucune expérience.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
