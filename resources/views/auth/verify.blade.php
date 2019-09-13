@extends('site.layout')
@section('title') Resetar Senha @endsection
@section('content')
<div class="bg-light">
    <div class="container py-5">
        <div class="py-5 px-3">
            <div class="card card-login mx-auto shadow">
                <div class="card-body">
                    <h2 class="card-title text-purple text-center">Verifique seu endereço de email</h2>
                    <hr>
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
