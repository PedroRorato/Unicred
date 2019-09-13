@extends('site.layout')
@section('title') Resetar Senha @endsection
@section('content')
<div class="bg-light">
    <div class="container py-5">
        <div class="py-5 px-3">
            <div class="card card-login mx-auto shadow">
                <div class="card-body">
                    <h2 class="card-title text-purple text-center">Resetar Senha</h2>
                    <hr>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Digite seu email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn btn-unicred btn-purple btn-sm-block ">ENVIAR LINK DE RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
