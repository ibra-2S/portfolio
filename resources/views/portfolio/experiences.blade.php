@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Études & <span>Expériences</span></h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center mb-4"><i class="fas fa-graduation-cap text-danger"></i> Formation</h4>
                @foreach($experiences->where('type', 'education') as $exp)
                <div class="card mb-3 p-3">
                    <h5>{{ $exp->title }}</h5>
                    <small class="text-muted">{{ $exp->organization }} | {{ $exp->period }}</small>
                    <p class="mt-2 text-muted">{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4 class="text-center mb-4"><i class="fas fa-briefcase text-danger"></i> Expériences</h4>
                @foreach($experiences->where('type', 'experience') as $exp)
                <div class="card mb-3 p-3">
                    <h5>{{ $exp->title }}</h5>
                    <small class="text-muted">{{ $exp->organization }} | {{ $exp->period }}</small>
                    <p class="mt-2 text-muted">{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
