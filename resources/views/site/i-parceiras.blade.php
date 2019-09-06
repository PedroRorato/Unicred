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
            <!-- Element -->
            <div class="accordion my-4" id="accordion1">
                <div class="card">
                    <div class="card-header px-5 py-3" id="headingOne">
                        <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                            Parceiro 1
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show">
                        <div class="card-body px-5">
                            <div class="row">
                                <div class="col-8">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                    Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                    Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ URL::asset('img/logo-exemplo.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Element -->
                <div class="accordion my-4" id="accordion2">
                    <div class="card">
                        <div class="card-header px-5 py-3" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="true">
                                Parceiro 2
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-8">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                        Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                        Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid" src="{{ URL::asset('img/logo-exemplo.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
    </div>
</div>
@endsection

