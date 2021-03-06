@extends('site.layout')
@section('title') Projetos @endsection
@section('button') #nav-projetos @endsection
@section('content')

<!-- DIV 1 Imagem -->
<div class="quem-somos-div h-blog-img" style="background: url('{{ asset('storage/projetos/'.$object->foto) }}') center no-repeat; background-size: cover"></div>
<!-- DIV 2 Texto -->

<div class="container">
    <div class="py-5 blog-div mx-auto px-3">
        <h3 class="pb-4">{{ $object->titulo }}</h3>
        {!! nl2br($object->texto) !!}
    </div>
</div>
<!-- DIV 3 Outros -->
<div class="container">
    <div class="row py-5 blog-div mx-auto">
        @foreach($elements as $indexKey => $element)
        <!-- PRIMEIRO CARD -->
        <div class="col-md-6 py-3">
            <a href="/projetos/{{ $element->id }}" class="card">
                <img src="{{ asset('storage/projetos/'.$element->foto) }}" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">{{ $element->titulo }}</h5>
                    <p class="card-text">{{ $element->texto }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

