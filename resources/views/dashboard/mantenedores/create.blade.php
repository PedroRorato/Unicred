@extends('dashboard.layout')
@section('title') Mantenedores @endsection
@section('menu') #mantenedores-menu @endsection
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="/admin/mantenedores">Listagem</a></li>
<li class="breadcrumb-item"><a href="/admin/mantenedores/create">Adicionar</a></li>
@endsection
@section('content')
<a href="/admin/mantenedores" class="btn btn-secondary shadow mb-3"><i class="fas fa-arrow-left mr-2"></i>Voltar</a>
<form method="POST" action="/admin/mantenedores" enctype="multipart/form-data" onsubmit="progressBar()">
    @csrf
    <div class="card shadow">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <img class="col mx-0 p-0" id="foto" src="{{ asset('img/img-fundo.png') }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col foto pr-0">
                    <div class="custom-file">
                        <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input" id="fotoInput" name="foto" onchange="loadImg(event, 'foto', 'fotoNome')" required autofocus>
                        <label class="custom-file-label" id="fotoNome" for="validatedCustomFile">Buscar imagem...</label>
                        <div id="alert_perfil"></div>
                    </div>
                    @if ($errors->has('foto'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('foto') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" name="nome" placeholder="Digite o nome..." value="{{ old('titulo') }}" required>
                        @if ($errors->has('nome'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="texto">Texto</label>
                        <textarea class="form-control{{ $errors->has('texto') ? ' is-invalid' : '' }}" id="texto" rows="3" name="texto" placeholder="Descrição..." required>{{ old('texto') }}</textarea>
                        @if ($errors->has('texto'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('texto') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <hr>
            <div class="dash-botoes">
                <button type="submit" class="btn btn-primary shadow"><i class="fas fa-plus mr-2"></i>Adicionar</button>
            </div>
            <div class="dash-spinner">
                <div class="progress">
                    <div id="progresso" class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 0%" ></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

