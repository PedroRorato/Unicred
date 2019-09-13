@extends('dashboard.layout')
@section('title') Painel de Controle @endsection
@section('menu') #inicial-menu @endsection
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="/admin">Inicial</a></li>
@endsection
@section('content')
<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/eventos" class="card-body row mx-0 justify-content-between">
                        <span>Eventos</span>
                        <span class="mr-0 text-right">{{ $eventos }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/instituicoes-parceiras" class="card-body row mx-0 justify-content-between">
                        <span>Inst. Parceiras</span>
                        <span class="mr-0 text-right">{{ $inst }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/mantenedores" class="card-body row mx-0 justify-content-between">
                        <span>Mantenedores</span>
                        <span class="mr-0 text-right">{{ $mantenedores }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/noticias" class="card-body row mx-0 justify-content-between">
                        <span>Notícias</span>
                        <span class="mr-0 text-right">{{ $noticias }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/projetos" class="card-body row mx-0 justify-content-between">
                        <span>Projetos</span>
                        <span class="mr-0 text-right">{{ $projetos }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6 py-3">
                <div class="card bg-hemotify">
                    <a href="/admin/usuarios" class="card-body row mx-0 justify-content-between">
                        <span>Usuários</span>
                        <span class="mr-0 text-right">{{ $users }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
