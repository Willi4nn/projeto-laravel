@extends('master.layout')
@section('content')

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Painel Administrativo</h1>
        <hr class="my-4">
        <a href="{{ route('admin.logout')}}"><button type="submit" class="btn btn-outline-danger">Logout</button></a>
    </div>
    <div class="container p-5 col-md-5">
        <table border="1" class="table table-striped table-dark">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Mensagem</td>
            </tr>

            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact['id']}}</td>
                <td>{{$contact['name']}}</td>
                <td>{{$contact['email']}}</td>
                <td>{{$contact['message']}}</td>
            </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
