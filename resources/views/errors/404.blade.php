@extends('layouts.app')

@section('content')
<section style="background:#0f0f1a; min-height:80vh; display:flex; align-items:center;">
    <div class="container text-center">
        <h1 style="font-size:8rem; font-weight:900; color:# ;">404</h1>
        <h2 style="color:white;">Page introuvable</h2>
        <p style="color:#aaaaaa;">La page que vous cherchez n'existe pas ou a été déplacée.</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">
            <i class="fas fa-home"></i> Retour à l'accueil
        </a>
    </div>
</section>
@endsection
