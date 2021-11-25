<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Price Compare</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/price-compare/public/style.css">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="http://localhost/price-compare/public/assets/logo.png" width="100" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{(Route::current()->getName() === 'homepage' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() === 'productpage' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('productpage') }}">Produtos</a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() === 'highlights' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('highlights') }}">Destaques</a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() === 'contact' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                    </li>
                    <li class="nav-item {{(Route::current()->getName() === 'howweare' ? 'active' : '') }}">
                        <a class="nav-link" href="{{ route('howweare') }}">Quem Somos</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0 col-sm-5 col-sm">
                    <input class="form-control col-sm-8 mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                </form>
                <a class="btn btn-primary mr-sm-2" type="submit" href="{{ route('admin') }}" role="button">Entrar</a>
                <a class="btn btn-info" type="submit" href="{{ route('signup') }}" role="button">Cadastre-se</a>
            </div>
        </nav>
    </header>

    <main role="main">

        @yield('content')

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; {{date ('Y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
