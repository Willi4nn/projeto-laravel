@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Produtos</h1>
        <hr class="my-4">
        <p>Cadastre um produto para a loja</p>
        <form class="text-justify col-md-4" action="{{ route('registrar_produto') }}" method="POST">
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
@endsection
