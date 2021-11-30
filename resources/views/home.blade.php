@extends('master.layout')
@section('content')
<div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="http://localhost/price-compare/public/assets/slide1.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="http://localhost/price-compare/public/assets/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="http://localhost/price-compare/public/assets/slide3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
      ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="http://localhost/price-compare/public/assets/tenis.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Calçados</h2>
            <p>Apaixonadas por sapatos. Frases de moda. Shoes lovers. Tanara Brasil. <3< /p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="http://localhost/price-compare/public/assets/camisa.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Roupas</h2>
            <p>As roupas são uma ótima maneira de se expressar. Com as cores, texturas e formas dos tecidos, é possível fazer uma imensidão de combinações no próprio corpo. Por isso, é como se fôssemos uma tela em branco pintada com roupas, uma verdadeira obra de arte. Confira essa seleção de frases de moda e se inspire a ser seu próprio artista!</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="http://localhost/price-compare/public/assets/pulseira.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Acessórios</h2>
            <p>A moda é uma forma de cada um expressar sua personalidade, e os acessórios fazem isso com perfeição. Muito mais do que simples complementos, eles podem fazer toda a diferença no seu visual. Se interessou? Veja as melhores formas de usar cada acessório, e de um up no seu look!</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

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
            <h2 class="featurette-heading">Produtos Lacoste</h2>
            <p class="lead">Alpha Industry, Gloverall, K-Way®, Pyrenex e Tailor Toyo. A Lacoste fez uma parceria com cinco marcas lendárias para criar cinco casacos icônicos para o inverno.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://image1.lacoste.com/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-BRECOM-Site/Library-Sites-LacosteContent/pt_BR/dw0770f0c3/ss20/modular/brandsection/collabs/lacosteinside-collabs-push-component-tile-basic-wintericons-desktop.jpg?imwidth=840&impolicy=custom" alt="Generic placeholder image">
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
