@extends('site.layout')
@section('title') Instituições Parceiras @endsection
@section('button') #nav-contato @endsection
@section('content')

<!-- DIV 1 -->
<div class="bg-light">
    <div id="i-parceiras" class="container ">
        <div class="py-5 blog-div mx-auto px-3">
            <h2 class="pb-3 text-gold">Contato</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
            </p>
            <form>
                <div class="row py-4">
                    <div class="form-group col-sm-4">
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control" name="msg" rows="7" placeholder="Digite sua mensagem"></textarea>
                    </div>
                    <div class="form-group col-12 text-right">
                        <button type="submit" class="btn btn-unicred btn-purple btn-sm-block ">ENVIAR</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

