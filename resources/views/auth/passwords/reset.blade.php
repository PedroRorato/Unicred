@extends('site.layout')
@section('title') Resetar Senha @endsection
@section('content')

<!-- DIV 1 -->
<div class="bg-light">
    <div class="container py-5">
        <div class="py-5 px-3">
            <div class="card card-login mx-auto shadow">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="card-body">
                        <h2 class="card-title text-purple text-center">Resetar Senha</h2>
                        <hr>
                        @if($errors->any() || Session::has('message'))
                        <div class="alert alert-danger text-center card-login mx-auto" role="alert">
                            Dados Incorretos
                            <button type="button" class="close" onclick="hiddeAlert()">
                                <span>&times;</span>
                            </button>
                        </div>
                        @endif
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group pt-2">
                            <input type="email" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="email" placeholder="Digite seu email" value="{{ $email ?? old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Digite a senha" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirmar a senha" required>
                            </div>
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn btn-unicred btn-purple btn-sm-block ">RESETAR SENHA</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
