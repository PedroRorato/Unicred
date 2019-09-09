@extends('dashboard.layout')
@section('title') Projetos @endsection
@section('menu') #projetos-menu @endsection
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="/admin/projetos">Listagem</a></li>
@endsection
@section('content')
<a href="/admin/projetos/create" class="btn btn-primary shadow mb-3"><i class="fas fa-plus mr-2"></i>Adicionar</a>
<div class="card shadow">
    <div class="card-body">
        <hr>
        @if($amount != 0)
        <p class="form-text text-muted">
            Exibindo
            @if(isset($_GET['page']))
                {{ (($_GET['page'] - 1) * 25) +1 }}-{{ ($_GET['page'] > $amount) ? $_GET['page']*25 : $amount}}
            @else
                1-{{ ('25' < $amount) ? '25' : $amount}}
            @endif
            de {{ $amount }} resultados.
        </p>
        <!-- TABLE -->
        <div class="table-responsive table-hover">
            <table class="table mb-0" >
                <thead>
                    <tr>
                      <th scope="col">Título</th>
                      <th scope="col">Data de criação</th>
                      <th scope="col" class="table-actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($elements as $element)
                        <tr>
                            <td>{{ $element->titulo }}</td>
                            <td>{{ $element->created_at }}</td>
                            <td>
                                <a href="/admin/projetos/{{ $element->id }}" class="btn btn-primary shadow" data-toggle="tooltip" title="Editar">
                                    <i class="fas fa-edit mr-2"></i>Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <br/>
        <div class="alert alert-danger text-center mb-0" role="alert">
            <h5 class="mb-0">Não foram encontrados resultados!</h5>
        </div>
        @endif
        <!-- END TABLE -->
        <br/>
        <!-- PAGINATION -->
        {{ $elements->links() }}
        <!-- END PAGINATION -->
    </div>
</div>
@endsection
