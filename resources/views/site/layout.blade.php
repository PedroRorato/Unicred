<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon-unicred.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Hemotify -->
    <link rel="stylesheet" href="{{ URL::asset('css/site.css') }}" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            if ($(window).width() < 1199) {
                $("@yield('button')").css("background-color", "#AA924C");
            }else{
                $("@yield('button')").css("border-bottom", "1px solid #AA924C");
            }
        });
    </script>
    <title>Unicred - @yield('title')</title>
</head>
<body>
    <nav id="header" class="navbar navbar-expand-xl py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('img/logo-unicred.png') }}" height="49" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-lg fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="nav-quem-somos" class="nav-link pb-0 px-0" href="/quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-projetos" class="nav-link pb-0 px-0" href="/projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-eventos" class="nav-link pb-0 px-0" href="/eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-noticias" class="nav-link pb-0 px-0" href="/noticias">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-i-parceiras" class="nav-link pb-0 px-0" href="/instituicoes-parceiras">Instituições Parceiras</a>
                    </li>
                    <li class="nav-item pr-4">
                        <a id="nav-contato" class="nav-link pb-0 px-0" href="/contato">Contato</a>
                    </li>
                    <div class="row mx-0 justify-content-center pt-3 pt-xl-0">
                    <li class="nav-item px-1">
                        <a class="btn btn-header" role="button" href="/contato">
                            <i class="fab fa-lg fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="btn btn-header" role="button" href="/contato">
                            <i class="fab fa-lg fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="btn btn-header" role="button" href="/contato">
                            <i class="fab fa-lg fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="btn btn-header" role="button" href="/contato">
                            <i class="fab fa-lg fa-facebook-f"></i>
                        </a>
                    </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        @yield('content')
    </div>
    <footer class="pt-5">
        <div class="container">
            <div class="row justify-content-between pb-5">
                <!-- ESQUERDA -->
                <div class="col-lg-7 col-xl-5 py-5">
                    <div class="row mx-0 px-3">
                        <img src="{{ URL::asset('img/logo-unicred.png') }}" height="73" class="d-inline-block align-top">
                    </div>
                    <div class="row mx-0 px-3 py-3">
                        <div class="col-6">
                            <a href="/quem-somos" class="row py-2"><span class="mr-2"></span>Quem Somos</a>
                            <a href="/projetos" class="row py-2"><span class="mr-2"></span>Projetos</a>
                            <a href="/eventos" class="row py-2"><span class="mr-2"></span>Eventos</a>
                            <a href="/noticias" class="row py-2"><span class="mr-2"></span>Notícias</a>
                        </div>
                        <div class="col-6">
                            <a href="/instituicoes-parceiras" class="row py-2"><span class="mr-2"></span>Instituições Parceiras</a>
                            <a href="/contato" class="row py-2"><span class="mr-2"></span>Contato</a>
                            <a href="/login" class="row py-2"><span class="mr-2"></span>Login</a>
                        </div>
                    </div>
                    <hr class="bg-gold mx-3">
                    <div class="row mx-0 px-3">
                        <div class="col">
                            <p class="creditos mb-1 row">Instituto Unicred RS</p>
                            <p class="creditos mb-1 row">instituto-rs@unicred.com.br</p>
                            <p class="creditos mb-1 row">Endereço: Av. Praia de Belas, 1212 - Térreo sala 07</p>
                            <p class="creditos mb-1 row">CEP 90110-000 - Praia de Belas - Porto Alegre/RS</p>
                            <p class="creditos mb-1 row">(51) 98037.2255</p>
                        </div>
                    </div>
                </div>
                <!-- DIREITA -->
                <div class="col-lg-5 col-xl-4 py-5">
                    <div class="row mx-0 px-3">
                        <h4>Siga-nos nas redes sociais</h4>
                        <ul class="nav pt-2">
                            <li class="nav-item pr-2 pl-0">
                                <a class="btn btn-footer" role="button" href="/contato">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="btn btn-footer" role="button" href="/contato">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="btn btn-footer" role="button" href="/contato">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item pl-2 pr-0">
                                <a class="btn btn-footer" role="button" href="/contato">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-purple py-3">
            <div class="container creditos px-4">
                © 2019 unicred.com.br – Todos os direitos reservados. Desenvolvido por Agência Quater e implementado por Pedro Rorato
            </div>
        </div>
    </footer>
    @hasSection('javascript')
    @yield('javascript')
    @endif
</body>
</html>
