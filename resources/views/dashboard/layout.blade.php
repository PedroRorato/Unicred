<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon-unicred.png') }}">

    <title>Unicred - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/croppie.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Scripts Custom -->
    <script src="{{ asset('js/jquery.mask.min.js') }}" defer></script>
    <script src="{{ asset('js/croppie.min.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script type="text/javascript">
        //Menu
        $(window).on('load', function() {
            $("@yield('collapse')").addClass("show");
            $("@yield('menu')").css("border-left", "4px solid #3490dc");
            $("@yield('menu')").css("background-color", "#22262a");
        });
    </script>
</head>
<body class="dash-body">
    <div id="menu" class="bg-dark px-0">
        <div id="menu-scroll" class="pb-1">
            <div class="row mx-0 px-4 menu-logo d-none d-md-block text-center">
                <a href="/"><img src="{{ URL::asset('img/logo-unicred-dash.png') }}" class="img-fluid menu-logo-img"></a>
            </div>
            <div class="row mx-0 px-5 menu-logo d-block d-md-none py-2 text-center" onclick="hiddeMenu()">
                <button class="btn btn-outline-light d-md-none"><i class="fas fa-times"></i></button>
            </div>
            <!-- PROFILE -->
            <div class="accordion" id="menu-accordion">
                <div class="card card-menu-profile">
                    <div class="card-header row mx-0 align-items-center px-3" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false">
                        <div class="col-2 px-0">
                            <img src="{{ asset('img/profile-white.svg') }}" alt="..." class="rounded-circle img-fluid">
                        </div>
                        <div class="col-9 pr-0">
                            {{ Auth::user()->name  }}
                        </div>
                        <div class="col-1 px-0">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="collapseProfile" class="collapse" aria-labelledby="headingThree" data-parent="#menu-accordion">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/conta">
                                    <i class="fas fa-user-edit mr-2"></i>Conta
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Sair
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PROFILE -->
            <!-- MENU -->
            <a href="/admin" id="inicial-menu" class="btn btn-block btn-menu"><i class="fas fa-home mr-2"></i>Inicial</a>
            <a href="/admin/eventos" id="eventos-menu" class="btn btn-block btn-menu"><i class="fas fa-glass-cheers mr-2"></i>Eventos</a>
            <a href="/admin/instituicoes-parceiras" id="i-parceiras-menu" class="btn btn-block btn-menu"><i class="fas fa-handshake mr-2"></i>Inst. Parceiras</a>
            <a href="/admin/mantenedores" id="mantenedores-menu" class="btn btn-block btn-menu"><i class="fas fa-hand-holding-usd mr-2"></i>Mantenedores</a>
            <a href="/admin/noticias" id="noticias-menu" class="btn btn-block btn-menu"><i class="fas fa-newspaper mr-2"></i>Notícias</a>
            <a href="/admin/projetos" id="projetos-menu" class="btn btn-block btn-menu"><i class="fas fa-project-diagram mr-2"></i>Projetos</a>
            <a href="/admin/usuarios" id="usuarios-menu" class="btn btn-block btn-menu"><i class="fas fa-users mr-2"></i>Usuários</a>
            <!-- END MENU -->
        </div>
        <!-- COPYRIGHT <a href="https://pedrororato.com" style="color:#c6ccd2"></a> -->
        <div class="text-center text-gray pt-3 copyright" style="font-size:.9rem">
            Copyright Pedro Rorato © {{ now()->year }}
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END MENU -->

    <!-- DASH -->
    <div class="dash">
        <div class="dash-container">
            <!-- HEADER -->
            <header  class="shadow-sm" >
                <nav class="navbar navbar-light bg-white pb-0">
                    <h2 class="mb-1 pt-2">@yield('title')</h2>
                    <button class="btn btn-outline-dark d-md-none" onclick="showMenu()"><i class="fas fa-bars"></i></button>
                </nav>
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb py-1">
                        @yield('breadcrumbs')
                    </ol>
                </nav>
            </header>
            <!-- END HEADER -->
            <!-- DASH CONTENT -->
            <div class="px-3 pt-1 pb-3">
                @if(Session::has('message'))
                <div class="alert alert-primary shadow text-center" role="alert">
                    <h4 class="mb-0">
                        {{ Session::get('message') }}
                        <button type="button" class="close" onclick="hiddeAlert()">
                            <span>&times;</span>
                        </button>
                    </h4>
                </div>
                @endif
                @if($errors->any() || Session::has('data'))
                <div class="alert alert-danger shadow text-center" role="alert">
                    <h4 class="mb-0">
                        Erro ao enviar formulário! Confira os dados!
                        <button type="button" class="close" onclick="hiddeAlert()">
                            <span>&times;</span>
                        </button>
                    </h4>
                </div>
                @endif
                @yield('content')
            </div>
            <!-- END DASH CONTENT -->
        </div>
    </div>
    <!-- END DASH -->
    <!-- JAVASCRIPT -->
    @hasSection('javascript')
    @yield('javascript')
    @endif
    <!-- END JAVASCRIPT -->
</body>
</html>
