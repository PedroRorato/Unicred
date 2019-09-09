@extends('site.layout')
@section('title') Notícias @endsection
@section('button') #nav-noticias @endsection
@section('content')

<!-- DIV 1 Imagem -->
<div class="quem-somos-div h-blog-img" style="background: url('{{ asset('storage/noticias/'.$object->foto) }}') center no-repeat; background-size: cover"></div>
<!-- DIV 2 Texto -->

<div class="container">
    <div class="py-5 blog-div mx-auto px-3">
        <h3 class="pb-4">{{ $object->titulo }}</h3>
        {{ $object->texto }}
    </div>
</div>
<!-- DIV 3 Outros -->
<div class="container">
    <div class="row py-5 blog-div mx-auto">
        @foreach($elements as $indexKey => $element)
        <!-- PRIMEIRO CARD -->
        <div class="col-md-6 py-3">
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

