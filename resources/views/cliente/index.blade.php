@extends('layouts.app')

@section('content')
<h1>Lista de Clientes</h1>
<a href="{{route('clientes.create')}}" class="btn btn-primary">Novo cliente</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>-</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
