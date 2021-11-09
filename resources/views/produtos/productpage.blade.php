@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Produtos</h1>
        <hr class="my-4">
        <form class="text-justify" action="{{ route('registrar_produto') }}" method="POST">
            @csrf
            <label for="">Nome</label><br />
            <input type="text" name="nome"> <br />
            <label for="">Custo</label><br />
            <input type="text" name="custo"> <br />
            <label for="">Preco</label><br />
            <input type="text" name="preco"> <br />
            <label for="">Quantidade</label><br />
            <input type="text" name="quantidade"> <br />
            <button>Salvar</button>
        </form>
    </div>
</div>
@endsection
