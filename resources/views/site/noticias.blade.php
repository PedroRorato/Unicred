@extends('site.layout')
@section('title') Notícias @endsection
@section('button') #nav-noticias @endsection
@section('content')

<!-- DIV 1 -->
<div class="container">
    <div class="row py-5 blog-div mx-auto">
        <h2 class="text-center text-green px-3">Notícias</h2>
        @foreach($elements as $indexKey => $element)
        <!-- PRIMEIRO CARD -->
        <div class="{{ ($indexKey != 0) ? 'col-md-6' : 'col-12' }} py-3">
        <a href="/noticias/{{ $element->id }}" class="card">
                <img src="{{ asset('storage/noticias/'.$element->foto) }}" class="card-img-top">
                <div class="card-body bg-green">
                    <h5 class="card-title text-white">{{ $element->titulo }}</h5>
                    <p class="card-text">{{ $element->texto }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

