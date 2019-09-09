@extends('site.layout')
@section('title') Home @endsection
@section('button') #nav-home @endsection
@section('content')
<!-- DIV 1 -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators mb-2">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div id="home-carousel-1" class="carousel-item active">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <div class="row">
                            <h4 class="mx-auto bg-purple px-3 py-1">Pilares</h4>
                        </div>
                        <div class="row py-4 py-sm-5 justify-content-between">
                            <div class="linha col-6 col-sm-4">
                                <div class="card card-pilares text-center text-gold">
                                    <div class="row align-items-center h-100">
                                        <div class="col">
                                            <img class="mx-auto" src="{{ URL::asset('img/home-educacao.png') }}" width="88">
                                            <h4 class="card-pilares-text pt-3">Educação</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="linha col-6 col-sm-4">
                                <div class="card card-pilares text-center text-gold">
                                    <div class="row align-items-center h-100">
                                        <div class="col">
                                            <img class="mx-auto" src="{{ URL::asset('img/home-saude.png') }}" width="72">
                                            <h4 class="card-pilares-text pt-3">Saúde</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="linha col-sm-4 pt-4 pt-sm-0">
                                <div class="card card-pilares text-center text-gold">
                                    <div class="row align-items-center h-100">
                                        <div class="col">
                                            <img class="mx-auto" src="{{ URL::asset('img/home-t-voluntario.png') }}" width="72">
                                            <h4 class="card-pilares-text pt-3">Trabalho Voluntário</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-carousel-2" class="carousel-item">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <div class="row">
                            <h4 class="bg-purple px-3 py-1">Missão</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="home-carousel-3" class="carousel-item">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
    </div>
</div>

<!-- DIV 2 -->
<div id="home-div-2">
    <div class="container">
        <div class="row py-5">
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-doacoes.png') }}" class="card-img-top">
                    <h5 class="text-center text-gold pb-2 pt-3">DOAÇÕES</h5>
                </div>
            </div>
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-cultura.png') }}" class="card-img-top">
                    <h5 class="text-center text-purple pb-2 pt-3">CULTURA</h5>
                </div>
            </div>
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-educacao.png') }}" class="card-img-top">
                    <h5 class="text-center text-blue pb-2 pt-3">EDUCAÇÃO</h5>
                </div>
            </div>
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-social.png') }}" class="card-img-top">
                    <h5 class="text-center text-pink pb-2 pt-3">SOCIAL</h5>
                </div>
            </div>
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-esporte.png') }}" class="card-img-top">
                    <h5 class="text-center text-green pb-2 pt-3">ESPORTES</h5>
                </div>
            </div>
            <div class="col-4 px-1 px-sm-2 px-lg-3 py-2 col-lg-2">
                <div class="card">
                    <img src="{{ URL::asset('img/home-card-saude.png') }}" class="card-img-top">
                    <h5 class="text-center text-light-green pb-2 pt-3">SAÚDE</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DIV 3 -->
<div id="home-div-3" class="pt-5">
    <div class="container pt-5">
        <div class="row px-3">
            @foreach($noticias as $indexKey => $noticia)
            <!-- ELEMENT -->
            <div class="col-md-4 px-0 col-carousel {{ ($indexKey != 0) ? 'd-none d-md-block' : '' }}" style="background: url({{ asset('storage/noticias/'.$noticia->foto) }}) center no-repeat;">
                <a href="/noticias/{{ $noticia->id }}" class="col-carousel-text col-carousel-text-green px-3 py-3 w-100">
                    <h5>{{ $noticia->titulo }}</h5>
                    <p class="mb-0">{{ $noticia->texto }}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row pt-4"><a href="/noticias" role="button" class="btn btn-unicred btn-outline-green mx-auto">VER MAIS</a></div>
    </div>
</div>

<!-- DIV 4 -->
<div id="home-div-4" class="py-5">
    <div class="container py-5">
        <div class="row px-3">
            @foreach($eventos as $indexKey => $evento)

            <!-- ELEMENT -->
            <div class="col-md-4 px-0 col-carousel {{ ($indexKey != 0) ? 'd-none d-md-block' : '' }}" style="background: url({{ asset('storage/eventos/'.$evento->foto) }}) center no-repeat;">
                <a href="/eventos/{{ $evento->id }}" class="col-carousel-text col-carousel-text-purple px-3 py-3 w-100">
                    <h5>{{ $evento->titulo }}</h5>
                    <p class="mb-0">{{ $evento->texto }}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row pt-4"><a href="/eventos" role="button" class="btn btn-unicred btn-outline-purple mx-auto">VER MAIS</a></div>
    </div>
</div>

<!-- DIV 5 -->
<div id="home-div-5" class="bg-light">
    <div class="container py-5">
        <h2 class="text-center text-gold pb-3">Mantenedores</h2>
        <div class="row px-3">
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Região da Campanha</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <div class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">Unicred Erechim</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DIV 6 -->
<div id="home-div-6" class="py-2">
    <div class="container py-5">
        <h2 class="text-center text-purple">Assine nossa newsletter</h2>
        <form>
            <div class="row py-5">
                <div class="col-sm-4 col-md-4 col-lg-4 my-3">
                    <input type="text" class="form-control" placeholder="Digite seu nome">
                </div>
                <div class="col-sm-4 col-md-5 col-lg-6 my-3">
                    <input type="text" class="form-control" placeholder="Digite seu email">
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2 my-3 text-center">
                    <button type="submit" class="btn btn-unicred btn-purple btn-sm-block">ENVIAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- DIV 7 -->
<div id="home-div-7" class="bg-light">
    <div class="container py-5">
        <h2 class="text-center text-gold">Links Úteis</h2>
        <div class="row px-3 pb-5 pt-3">
            <div class="col-sm-6 px-3 py-2">
                <div class="card h-100 p-4">
                    <h5 class="text-gold mb-3">Bancos</h5>
                    <p class="mb-1">> Risk Bank</p>
                    <p class="mb-1">> Febraban</p>
                    <p class="mb-1">> BNDES</p>
                    <p class="mb-1">> BACEN</p>
                </div>
            </div>
            <div class="col-sm-6 px-3 py-2">
                <div class="card h-100 p-4">
                    <h5 class="text-gold mb-3">Cooperativismo</h5>
                    <p class="mb-1">> OCB - Organização das Cooperativas Brasileiras</p>
                    <p class="mb-1">> Confederação Nacional de Auditoria Cooperativa</p>
                    <p class="mb-1">> Instituições Financeiras de Desenvolvimento</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
