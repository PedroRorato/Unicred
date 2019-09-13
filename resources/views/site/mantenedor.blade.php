@extends('site.layout')
@section('title') Mantenedor - {{ $element->nome }} @endsection
@section('button') #nav-noticias @endsection
@section('content')

<!-- DIV 1 Imagem -->
<div class="quem-somos-div h-blog-img" style="background: url('{{ asset('storage/mantenedores/'.$element->foto) }}') center no-repeat; background-size: cover"></div>
<!-- DIV 2 Texto -->

<div class="container pb-5">
    <div class="py-5 blog-div mx-auto px-3">
        <h3 class="pb-4">{{ $element->nome }}</h3>
        {!! nl2br($element->texto) !!}
    </div>
</div>
@endsection

