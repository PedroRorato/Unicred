@extends('site.layout')
@section('title') Projetos @endsection
@section('button') #nav-projetos @endsection
@section('content')

<!-- DIV 1 Imagem -->
<div class="quem-somos-div h-blog-img" style="background: url('../img/home-carousel-back1.png') center no-repeat; background-size: cover"></div>
<!-- DIV 2 Texto -->

<div class="container">
    <div class="py-5 blog-div mx-auto px-3">
        <h3 class="pb-4">Projeto 1</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh,
            viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
            pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
            Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis,
            accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
            cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit
            amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in,
            diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam
            erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque a lectus.
            Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
        </p>
    </div>
</div>
<!-- DIV 3 Outros -->
<div class="container">
    <div class="row py-5 blog-div mx-auto">
        <!-- DEMAIS CARDS -->
        <div class="col-md-6 py-3">
            <div class="card">
                <img src="https://www.thebalancecareers.com/thmb/AXJKPGwewA_sUSpqGLtX6Vceif8=/2122x1415/filters:no_upscale():max_bytes(150000):strip_icc()/C-Users-Susan-Downloads-key-team-475333583-57a2ab2d5f9b589aa980cc9c.jpg" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <!-- DEMAIS CARDS -->
        <div class="col-md-6 py-3">
            <div class="card">
                <img src="https://www.thebalancecareers.com/thmb/AXJKPGwewA_sUSpqGLtX6Vceif8=/2122x1415/filters:no_upscale():max_bytes(150000):strip_icc()/C-Users-Susan-Downloads-key-team-475333583-57a2ab2d5f9b589aa980cc9c.jpg" class="card-img-top">
                <div class="card-body bg-card-degrade">
                    <h5 class="card-title text-white">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

