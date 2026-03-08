@extends('layouts.app')

@section('content')
<section class="py-5 experiences-section" style="background:#0f0f1a;">
    <div class="container position-relative">
        <span class="section-bg-title">PARCOURS</span>
        <h2 class="section-title text-center">Études & <span>Expériences</span></h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center mb-4" style="color:#f5a623;"><i class="fas fa-graduation-cap me-2"></i> Formation</h4>
                @foreach($experiences->where('type', 'education') as $exp)
                    <div class="card mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5>{{ $exp->title }}</h5>
                                <small style="color:#f5a623;">{{ $exp->organization }} | {{ $exp->period }}</small>
                            </div>
                            @if($exp->fichier)
                            <a href="{{ asset('storage/'.$exp->fichier) }}" target="_blank" class="btn btn-sm" style="background:#f5a623; color:#000; border-radius:20px;">
                                <i class="fas fa-download"></i>
                            </a>
                            @endif
                        </div>
                        <p class="mt-2 text-muted">{{ $exp->description }}</p>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4 class="text-center mb-4" style="color:#f5a623;"><i class="fas fa-briefcase me-2"></i> Expériences</h4>
                @foreach($experiences->where('type', 'experience') as $exp)
                    <div class="card mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5>{{ $exp->title }}</h5>
                                <small style="color:#f5a623;">{{ $exp->organization }} | {{ $exp->period }}</small>
                            </div>
                            @if($exp->fichier)
                            <a href="{{ asset('storage/'.$exp->fichier) }}" target="_blank" class="btn btn-sm" style="background:#f5a623; color:#000; border-radius:20px;">
                                <i class="fas fa-download"></i>
                            </a>
                            @endif
                        </div>
                        <p class="mt-2 text-muted">{{ $exp->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
