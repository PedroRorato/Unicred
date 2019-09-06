@extends('site.layout')
@section('title') Quem Somos @endsection
@section('button') #nav-quem-somos @endsection
@section('content')

<!-- DIV 1 -->
<div class="quem-somos-div">
    <div class="container h-100">
        <div class="row py-5 align-items-center h-100 text-center text-lg-left">
            <div class="col-lg-6 px-0 ">
                <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-1.png') }}">
            </div>
            <div class="col-lg-6">
                <h2 class="text-gold pb-3">Quem Somos</h2>
                <p>
                    Organização com atuação no Estado do Rio Grande do Sul, sem fins lucrativos e com a finalidade específica de fomentar projetos de relevância,
                    impacto e mérito, que sejam implantadas em conjunto com as singulares parceiras do Sistema Unicred, promovendo prosperidade nas comunidades de
                    atuação.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- DIV 2 -->
<div id="quem-somos-div-2" class="quem-somos-div">
    <div class="container h-100">
        <div class="row py-5 align-items-center h-100 text-center text-lg-left text-white">
            <div class="col-lg-7">
                <h2 class="pb-3">O que fazemos</h2>
                <p>
                    O Instituto Unicred é uma associação vinculada à estratégia do Sistema Unicred, com finalidade e dedicação específicas para qualificar as
                    práticas sociais das singulares, visando formular e/ou identificar projetos de mérito, relevância de impacto e retorno institucional.
                    Não pretende substituir as iniciativas locais, mas emular iniciativas comuns e oferecer suporte para as práticas sociais locais.
                    Ter uma personalidade jurídica própria, possibilitando receber doações de terceiros, firmar convênios, benefícios com imunidades e incentivos
                    fiscais. Levar prosperidade às pessoas de vulnerabilidade social por meio da educação do trabalho, financeira e para a saúde.
                </p>
            </div>
            <div class="col-lg-5 px-0">
                <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-2.png') }}">
            </div>
        </div>
    </div>
</div>

<!-- DIV 3 -->
<div id="quem-somos-div-3" class="quem-somos-div">
    <div class="container h-100">
        <div class="row py-5 align-items-center h-100 text-center text-lg-left">
            <div class="col-lg-5 px-0">
                <img class="mx-auto img-fluid quem-somos-img" src="{{ URL::asset('img/quem-somos-3.png') }}">
            </div>
            <div class="col-lg-7">
                <h2 class="pb-3 text-gold">Interesse pela Comunidade</h2>
                <p>
                    Parte do resultado das singulares, da contribuição dos associados e das parceiras Institucionais é sempre investido em ações sociais para
                     as comunidades locais.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
