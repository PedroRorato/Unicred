@extends('dashboard.layout')
@section('title') Instituições Parceiras @endsection
@section('menu') #i-parceiras-menu @endsection
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="/admin/instituicoes-parceiras">Listagem</a></li>
<li class="breadcrumb-item"><a href="/admin/instituicoes-parceiras/{{ $element->id }}">Painel do Evento</a></li>
@endsection
@section('content')
<a href="/admin/instituicoes-parceiras" class="btn btn-secondary shadow mb-3"><i class="fas fa-arrow-left mr-2"></i>Voltar</a>
<form method="POST" action="/admin/instituicoes-parceiras/{{ $element->id }}" enctype="multipart/form-data"  onsubmit="progressBar()">
    <div class="card shadow">
        <div class="card-body">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="form-group col">
                    <img class="col mx-0 p-0" id="foto" src="{{ asset('storage/i-parceiras/'.$element->foto) }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col foto pr-3 pr-lg-0">
                    <div class="custom-file">
                        <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input" id="fotoInput" name="foto" onchange="loadImg(event, 'foto', 'fotoNome')" autofocus>
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
                        <input type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" name="nome" placeholder="Digite o nome..." value="{{ $element->nome }}" required>
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
                        <textarea class="form-control{{ $errors->has('texto') ? ' is-invalid' : '' }}" id="texto" rows="3" name="texto" placeholder="Descrição..." required>{{ $element->texto }}</textarea>
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
                <button type="submit" class="btn btn-primary mr-3 shadow"><i class="fas fa-save mr-2"></i>Salvar</button>
                <button type="button" class="btn btn-danger shadow" data-toggle="modal" data-target="#modalDelete">
                    <i class="fas fa-trash-alt mr-2"></i>Excluir
                </button>
            </div>
            <div class="dash-spinner">
                <div class="progress">
                    <div id="progresso" class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 0%" ></div>
                </div>
            </div>

        </div>
    </div>
</form>

<!-- Modal DELETE -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/admin/instituicoes-parceiras/{{ $element->id }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <h5>Tem certeza que deseja excluir a Notícia?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger shadow"><i class="fas fa-trash-alt mr-2"></i>Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $("#categoria option[value={{ $element->categoria }}]").attr('selected', 'selected');
</script>
@endsection
