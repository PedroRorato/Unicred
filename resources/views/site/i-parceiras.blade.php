@extends('site.layout')
@section('title') Instituições Parceiras @endsection
@section('button') #nav-i-parceiras @endsection
@section('content')

<!-- DIV 1 -->
<div class="bg-light">
    <div id="i-parceiras" class="container">
        <div class="py-5 blog-div mx-auto px-3">
            <h2 class="pb-4 text-gold">Instituições Parceiras</h2>
            <!-- FOREACH -->
            @foreach($elements as $indexKey => $element)
            <!-- Element -->
            <div class="accordion my-4" id="accordion{{ $indexKey }}">
                <div class="card">
                    <div class="card-header px-5 py-3" id="headingOne">
                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapse{{ $indexKey }}" aria-expanded="true">
                            {{ $element->nome }}
                        </h5>
                    </div>
                    <div id="collapse{{ $indexKey }}" class="collapse {{ ($indexKey == 0) ? 'show' : '' }}">
                        <div class="card-body px-5">
                            <div class="row">
                                <div class="col-8">
                                    {{ $element->texto }}
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('storage/i-parceiras/'.$element->foto) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

