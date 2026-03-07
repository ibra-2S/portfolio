@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Mes <span>Projets</span></h2>
        <div class="row">
            @forelse($projets as $projet)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($projet->image)
                    <img src="{{ asset('storage/'.$projet->image) }}" class="card-img-top" alt="{{ $projet->title }}">
                    @else
                    <div class="bg-secondary text-white text-center py-5">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $projet->title }}</h5>
                        <p class="card-text">{{ $projet->description }}</p>
                        <span class="badge bg-secondary">{{ $projet->technologies }}</span>
                        @if($projet->link)
                        <a href="{{ $projet->link }}" target="_blank" class="btn btn-primary btn-sm mt-2">
                            <i class="fas fa-external-link-alt"></i> Voir le projet
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-muted">Aucun projet pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
