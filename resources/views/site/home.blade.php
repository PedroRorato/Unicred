@extends('site.layout')
@section('title') Home @endsection
@section('button') #nav-home @endsection
@section('content')
<!-- DIV 1 -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators mb-2">
        <li class="d-none d-lg-block" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li class="d-none d-lg-block" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li class="d-none d-lg-block" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li class="d-none d-lg-block" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
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
        <div class="carousel-item d-none-resp">
            <div class="container h-100">
                <div class="row py-5 align-items-center h-100 text-center text-lg-left">
                    <div class="col-lg-6 px-0 ">
                        <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-1.png') }}">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="text-gold pb-3">Quem Somos</h2>
                        <p>
                            O coletivo de conselheiros, dirigentes, colaboradores e associados forma uma rede colaborativa, com dedicação, criatividade e compromisso social e ambiental, apoiado por empresas parceiras, como o sistema Ocergs-Sescoop/RS. Nas diferentes ações e projetos desenvolvidos, o voluntariado por parte de todos é sempre incentivado, pois é o trabalho voluntário que de fato faz acontecer o que fazemos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item d-none-resp">
            <div class="container h-100">
                <div class="row py-5 align-items-center h-100 text-center text-lg-left">
                    <div class="col-lg-7">
                        <h2 class="pb-3 text-gold">O que fazemos</h2>
                        <p>
                            Sob inspiração das ações socioambientais que as diferentes instâncias do Sistema Unicred praticaram em sua trajetória de 30 anos, o Instituto Unicred RS foi criado em fevereiro de 2017, sendo constituído como uma organização sem fins lucrativos  na área de atuação do sistema Unicred RS. Estruturado sob os auspícios das cooperativas singulares do Estado, o instituto tem sede em Porto Alegre, no Rio Grande do Sul, onde passou a atuar a partir de dezembro de 2018.

                            Em consonância com os preceitos do cooperativismo, no qual as pessoas são sua essência, o instituto exerce ativamente o sétimo entre os princípios que são os pilares do cooperativismo, aquele que prescreve “Interesse pela Comunidade”.  Assim, no caminho para se tornar formalmente uma Organização da Sociedade Civil de Interesse Público (OSCIP) já em 2020, o Instituto Unicred RS, junto com as cooperativas, trabalha como foco no desenvolvimento sustentável dessas comunidades, exercendo ações a partir de políticas estratégicas aprovadas pelo conjunto das pessoas identificadas com o Sistema Unicred.


                        </p>
                    </div>
                    <div class="col-lg-5 px-0">
                        <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-2.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item d-none-resp">
            <div class="container h-100">
                <div class="row py-5 align-items-center h-100 text-center text-lg-left">
                    <div class="col-lg-5 px-0">
                        <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-3.png') }}">
                    </div>
                    <div class="col-lg-7">
                        <h2 class="pb-3 text-gold">Interesse pela Comunidade</h2>
                        <p>
                            Parte do resultado das singulares, da contribuição dos associados e das parceiras Institucionais é sempre investido em ações sociais para as comunidades locais.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev d-none-resp" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
        <a class="carousel-control-next d-none-resp" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
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
        <div class="row justify-content-center px-3">
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
        <div class="row justify-content-center px-3">
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
        <div class="row justify-content-center px-3">
            @foreach($mantenedores as $mantenedor)
            <!-- ELEMENT -->
            <div class="col-mantenedores px-3 py-2">
                <a href="/mantenedores/{{ $mantenedor->id }}" class="card">
                    <div class="row align-items-center h-100 mx-0">
                        <p class="mb-0 mx-auto text-center">{{ $mantenedor->nome }}</p>
                    </div>
                </a>
            </div>
            @endforeach
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
                    <p class="mb-1"><a href="https://www.riskbank.com.br/">> Risk Bank</a></p>
                    <p class="mb-1"><a href="https://portal.febraban.org.br/">> Febraban</a><</p>
                    <p class="mb-1"><a href="https://www.bndes.gov.br/wps/portal/site/home">> BNDES</a><</p>
                    <p class="mb-1"><a href="https://www.bcb.gov.br/">> BACEN</a><</p>
                </div>
            </div>
            <div class="col-sm-6 px-3 py-2">
                <div class="card h-100 p-4">
                    <h5 class="text-gold mb-3">Cooperativismo</h5>
                    <p class="mb-1"><a href="https://www.ocb.org.br/">> OCB - Organização das Cooperativas Brasileiras</a><</p>
                    <p class="mb-1"><a href="http://www.cnac.coop.br/index.aspx">> Confederação Nacional de Auditoria Cooperativa</a></p>
                    <p class="mb-1"><a href="http://abde.org.br/">> Instituições Financeiras de Desenvolvimento</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('javascript')
<script>
    $(window).on('load', function() {
        if ($(window).width() < 992) {
            $('.carousel').carousel('pause');
        }
    });
</script>
@endsection
