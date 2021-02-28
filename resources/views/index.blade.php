@extends('template/template')

@section('title','Home')

@section('content')

<h1>Página Home</h1>

@if (session('message'))

<div class="alert alert-dismissible alert-primary">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mensagem:</strong> {{ session('message') }}
</div>

    <div>

    </div>
@endif

<div>

<h2>Locais de descanso</h2>

<table class="table table-hover">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Quantidade máxima</th>
        <th scope="col">Quantidade etapa1</th>
        <th scope="col">Quantidade etapa2</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
<tbody>
@foreach ($descansos as $descanso)
<tr>
    <th scope="row">{{ $descanso->id }}</th>
    <td>{{ $descanso->nome }}</td>
    <td>{{ $descanso->quantidade }}</td>
    <td>{{ $descanso->descanso_etapa1_count }}</td>
    <td>{{ $descanso->descanso_etapa2_count }}</td>
    <td>
        <a href="{{ route('descanso.show',$descanso->id) }}">Ver/Editar</a>
    </td>
</tr>
@endforeach
</tbody>
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Quantidade máxima</th>
        <th scope="col">Quantidade etapa1</th>
        <th scope="col">Quantidade etapa2</th>
        <th scope="col">Ações</th>
    </tr>
</thead>
</table>

<a class="btn btn-primary" href="{{ route('descanso.create') }}">Cadastrar descanso</a>

@if (isset($filters))
    {{ $descansos->appends($filters)->links() }}
@else
    {{ $descansos->links() }}
@endif

</div>

<div>

    <h2>Locais de entrevista</h2>

    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade máxima</th>
            <th scope="col">Quantidade etapa1</th>
            <th scope="col">Quantidade etapa2</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($entrevistas as $entrevista)
    <tr>
        <th scope="row">{{ $entrevista->id }}</th>
        <td>{{ $entrevista->nome }}</td>
        <td>{{ $entrevista->quantidade }}</td>
        <td>{{ $entrevista->entrevista_etapa1_count }}</td>
        <td>{{ $entrevista->entrevista_etapa2_count }}</td>
        <td>
            <a href="{{ route('entrevista.show',$entrevista->id) }}">Ver/Editar</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantidade máxima</th>
            <th scope="col">Quantidade etapa1</th>
            <th scope="col">Quantidade etapa2</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    </table>

    <a class="btn btn-primary" href="{{ route('entrevista.create') }}">Cadastrar entrevista</a>

    @if (isset($filters))
        {{ $entrevistas->appends($filters)->links() }}
    @else
        {{ $entrevistas->links() }}
    @endif

    </div>

    <div>

        <h2>Candidatos de entrevista</h2>

        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Entrevista 1</th>
                <th scope="col">Entrevista 2</th>
                <th scope="col">Descanso 1</th>
                <th scope="col">Descanso 2</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($candidatos as $candidato)
        <tr>
            <th scope="row">{{ $candidato->id }}</th>
            <td>{{ $candidato->nome }}</td>
            <td>{{ $candidato->sobrenome }}</td>
            <td>{{ $candidato->entrevista_etapa1 }}</td>
            <td>{{ $candidato->entrevista_etapa2 }}</td>
            <td>{{ $candidato->descanso_etapa1 }}</td>
            <td>{{ $candidato->descanso_etapa2 }}</td>
            <td>
                <a href="{{ route('candidato.show',$candidato->id) }}">Ver/Editar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Entrevista 1</th>
                <th scope="col">Entrevista 2</th>
                <th scope="col">Descanso 1</th>
                <th scope="col">Descanso 2</th>
            </tr>
        </thead>
        </table>

        <a class="btn btn-primary" href="{{ route('candidato.create') }}">Cadastrar candidato</a>

        @if (isset($filters))
            {{ $candidatos->appends($filters)->links() }}
        @else
            {{ $candidatos->links() }}
        @endif

        </div>

    <style>
        h2{
            margin-top:35px;
        }
    </style>

@endsection
