@extends('layouts.app')

@section('content')
<section class="skills-section">
    <div class="container position-relative">
        <span class="section-bg-title">SKILLS</span>
        <h2 class="section-title text-center">Mes <span>Compétences</span></h2>

        @php $categories = $competences->groupBy('category'); @endphp

        @foreach($categories as $categorie => $items)
        <div class="mb-5">
            <h4 class="category-title">{{ $categorie }}</h4>
            <div class="row">
                @foreach($items as $competence)
                <div class="col-6 col-md-3 col-lg-2 text-center mb-4 fade-in">
                    <div class="skill-icon-box">
                        <i class="{{ $competence->icon }} colored"></i>
                        <p class="skill-name">{{ $competence->name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection
