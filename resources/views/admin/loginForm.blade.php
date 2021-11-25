@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Faça seu Login!</h1>
        <hr class="my-4">
        <p>Logar para que possa usar o melhor do nosso site.</p>
    </div>
</div>

<div class="container p-5 col-md-5">
    <div class="card mx-3 mt-n5 shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
        <div class="card-body">
            <h4 class="card-title mb-3 text-primary text-uppercase">Login</h4>
            <form class="form-signin" action="{{route('admin.login.do')}}" method="POST">
                @csrf

                @if( $errors->all())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" name="email">
                    <label for="email">Endereço de Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                    <label for="inputPassword5">Senha</label>
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </div>
</div>
@endsection
