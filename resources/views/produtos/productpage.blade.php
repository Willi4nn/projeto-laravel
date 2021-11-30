@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Produtos</h1>
        <hr class="my-4">
        <p>Cadastre um produto para a loja</p>
    </div>
</div>
<div class="container p-5 col-md-5">
    <div class="card mx-3 mt-n5 shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
        <div class="card-body">
            <h4 class="card-title mb-3 text-primary text-uppercase">Cadastro de Produtos</h4>
            <form class="text-justify" action="{{ route('registrar.produto') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputAddress">Nome</label>
                    <input type="text" class="form-control" name="nome"> <br />
                </div>
                <div class="form-group">
                    <label for="inputAddress">Custo</label>
                    <input type="text" class="form-control" name="custo"> <br />
                </div>
                <div class="form-group">
                    <label for="inputAddress">Preço</label>
                    <input type="text" class="form-control" name="preco"> <br />
                </div>
                <div class="form-group">
                    <label for="inputAddress">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade"> <br />
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection
