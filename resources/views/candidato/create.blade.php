@extends('template/template')

@section('title','Criar candidato')

@section('content')

<h1>Cadastro de candidato</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all(); as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('candidato.salvar') }}" method="post">
    @csrf
    <input type="text" name="nome" title="nome" id="nome" placeholder="Nome" value="{{ $candidato->nome ?? old('nome') }}">
    </br>
    <input type="text" name="sobrenome" title="sobrenome" id="sobrenome" placeholder="Sobrenome" value="{{ $candidato->sobrenome ?? old('sobrenome') }}">
    </br>
    <button type="submit">Cadastrar</button>
</form>

<style>
    h1{
        margin-top: 25px;
    }
    input{
        margin: 10px;
    }
    button{
        margin: 10px;
    }
</style>

@endsection
