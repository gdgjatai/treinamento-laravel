@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row form-control">
            <h3>Novo cliente</h3>
            <form method="post" action="{{route('clientes.store')}}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" name="documento" id="documento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="" class="form-control">
                        <option value="f" selected="selected">Feminino</option>
                        <option value="m">Masculino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de nascimento</label>
                    <input type="date" name="data_nasc" id="data_nasc" class="form-control">
                </div>
                <div class="form-group">
                    <label for="estado_civil">Estado Civil</label>
                    <select name="estado_civil" id="" class="form-control">
                        <option value="0">Selecione</option>
                        @foreach(\App\Cliente::ESTADOS_CIVIS as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-check">
                    <label>
                        <input type="checkbox" name="inadimplente" id="inadimplente"> Inadimplente?
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Gravar" name="gravar" class="btn btn-primary">
                    <a href="{{route('clientes.index')}}" class="btn btn-danger">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
@endsection
