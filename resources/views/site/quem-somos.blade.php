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
                    O coletivo de conselheiros, dirigentes, colaboradores e associados forma uma rede colaborativa, com dedicação, criatividade e compromisso social e ambiental, apoiado por empresas parceiras, como o sistema Ocergs-Sescoop/RS. Nas diferentes ações e projetos desenvolvidos, o voluntariado por parte de todos é sempre incentivado, pois é o trabalho voluntário que de fato faz acontecer o que fazemos.
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
                        Sob inspiração das ações socioambientais que as diferentes instâncias do Sistema Unicred praticaram em sua trajetória de 30 anos, o Instituto Unicred RS foi criado em fevereiro de 2017, sendo constituído como uma organização sem fins lucrativos  na área de atuação do sistema Unicred RS. Estruturado sob os auspícios das cooperativas singulares do Estado, o instituto tem sede em Porto Alegre, no Rio Grande do Sul, onde passou a atuar a partir de dezembro de 2018.

                        Em consonância com os preceitos do cooperativismo, no qual as pessoas são sua essência, o instituto exerce ativamente o sétimo entre os princípios que são os pilares do cooperativismo, aquele que prescreve “Interesse pela Comunidade”.  Assim, no caminho para se tornar formalmente uma Organização da Sociedade Civil de Interesse Público (OSCIP) já em 2020, o Instituto Unicred RS, junto com as cooperativas, trabalha como foco no desenvolvimento sustentável dessas comunidades, exercendo ações a partir de políticas estratégicas aprovadas pelo conjunto das pessoas identificadas com o Sistema Unicred.


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
                        Parte do resultado das singulares, da contribuição dos associados e das parceiras Institucionais é sempre investido em ações sociais para as comunidades locais.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
