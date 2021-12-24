@extends('templates.template')

@section('titulo da aba', 'Alterar produto')

@section('titulo do conteudo', 'Alterar produto')

@section('conteudo')

    <form method='POST' action="{{ route('alterar_produto', ['id' => $produto->id]) }}" >
        @csrf

        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" value="{{ $produto->titulo }}"><br>

        <label for="descricao"></label>Descrição:<br>
        <input type="text" name="descricao" value="{{ $produto->descricao }}"><br>

        <label for="valor">Preço</label><br>
        <input type="text" name="valor" value="{{ $produto->valor }}"><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br>

        <input type="submit" value="Alterar">
    </form>

@endsection