@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Destaques</h1>
        <hr class="my-4">
    </div>
</div>
<div class="container marketing">

    <!-- START THE FEATURETTES -->

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Produtos Lacoste</h2>
            <p class="lead">Alpha Industry, Gloverall, K-Way®, Pyrenex e Tailor Toyo. A Lacoste fez uma parceria com cinco marcas lendárias para criar cinco casacos icônicos para o inverno.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://image1.lacoste.com/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-BRECOM-Site/Library-Sites-LacosteContent/pt_BR/dw0770f0c3/ss20/modular/brandsection/collabs/lacosteinside-collabs-push-component-tile-basic-wintericons-desktop.jpg?imwidth=840&impolicy=custom" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Tênis Nike</h2>
            <p class="lead">Os Melhores Lançamentos para o seu Esporte. Uma Experiência Premium de Compra.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images.lojanike.com.br/1200x630/produto/tenis-nike-revolution-5-icon-clash-feminino-BQ3207-002-1.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Tênis Asics</h2>
            <p class="lead">Desde 1949 nosso objetivo é melhorar o bem estar mental por meio do movimento. É por isso que somos chamados de ASICS, que é um acrônimo para a frase em latim "Anima Sana In Corpore Sano", mente sã em corpo são.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://static3.tcdn.com.br/img/img_prod/868773/tenis_asics_gel_resolution_8_french_blue_3277_1_aa989082e06cb3af451f02f3d9bfba0d.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection
