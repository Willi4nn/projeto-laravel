@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Faça seu Login!</h1>
        <hr class="my-4">
        <p>Logar para que possa usar o melhor do nosso site.</p>
    </div>
</div>

<div class="container py-5">
    <div class="card mx-3 mt-n5 shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
        <div class="card-body">
            <h4 class="card-title mb-3 text-primary text-uppercase">Login</h4>
            <form class="form-signin" action="{{route('admin.login.do')}}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <label for="email" class="sr-only">Endereço de Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-floating mb-3">
                    <label for="password" class="sr-only">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
            </form>
        </div>
    </div>
</div>
@endsection
