@extends('site.layout')
@section('title') Projetos @endsection
@section('button') #nav-projetos @endsection
@section('content')

<!-- DIV 1 -->
<div class="container">
    <div class="row py-5 blog-div mx-auto">
        <h2 class="text-center text-dark-green px-3">Projetos</h2>
        <!-- PRIMEIRO CARD -->
        <div class="col-12 py-3">
            <a href="/projetos/1" class="card">
                <img src="https://www.thebalancecareers.com/thmb/AXJKPGwewA_sUSpqGLtX6Vceif8=/2122x1415/filters:no_upscale():max_bytes(150000):strip_icc()/C-Users-Susan-Downloads-key-team-475333583-57a2ab2d5f9b589aa980cc9c.jpg" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
        </div>
        <!-- DEMAIS CARDS -->
        <div class="col-md-6 py-3">
            <a href="/projetos/1" class="card">
                <img src="https://www.thebalancecareers.com/thmb/AXJKPGwewA_sUSpqGLtX6Vceif8=/2122x1415/filters:no_upscale():max_bytes(150000):strip_icc()/C-Users-Susan-Downloads-key-team-475333583-57a2ab2d5f9b589aa980cc9c.jpg" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
        </div>
        <!-- DEMAIS CARDS -->
        <div class="col-md-6 py-3">
            <a href="/projetos/1" class="card">
                <img src="https://www.thebalancecareers.com/thmb/AXJKPGwewA_sUSpqGLtX6Vceif8=/2122x1415/filters:no_upscale():max_bytes(150000):strip_icc()/C-Users-Susan-Downloads-key-team-475333583-57a2ab2d5f9b589aa980cc9c.jpg" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

