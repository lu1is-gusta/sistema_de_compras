@extends('templates.template')

@section('titulo da aba', 'Adicionar produto')

@section('titulo do conteudo', 'Adicionar Produto')

@section('conteudo')

    <form method='POST' action="{{ route('adicionar_produto') }}" >
        @csrf

        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo"><br>

        <label for="descricao"></label>Descrição:<br>
        <input type="text" name="descricao"><br>

        <label for="valor">Preço</label><br>
        <input type="text" name="valor"><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="text" name="quantidade"><br>

        <input type="submit" value="Adicionar">
    </form>

@endsection