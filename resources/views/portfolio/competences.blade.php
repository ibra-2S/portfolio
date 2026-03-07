@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Mes <span>Compétences</span></h2>
        <div class="row">
            @forelse($competences as $competence)
            <div class="col-md-6 mb-4">
                <div class="card p-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="fw-bold">{{ $competence->name }}</span>
                        <span class="text-danger">{{ $competence->level }}%</span>
                    </div>
                    <small class="text-muted mb-2">{{ $competence->category }}</small>
                    <div class="progress">
                        <div class="skill-bar progress-bar" style="width: {{ $competence->level }}%"></div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-muted">Aucune compétence pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
