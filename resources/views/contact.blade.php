@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Contatos</h1>
        <hr class="my-4">
    </div>
</div>
<div class="container p-5">
    <div class="card mx-3 mt-n5 shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
        <div class="card-body">
            <h4 class="card-title mb-3 text-primary text-uppercase">Contato</h4>
            <form action="" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingTextInput1" name="name">
                    <label for="floatingTextInput1">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingEmailInput" name="email">
                    <label for="floatingEmailInput">Endereço de Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <label for="floatingTextInput1">Mensagem</label>
                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </form>
        </div>
    </div>
</div>
@endsection
