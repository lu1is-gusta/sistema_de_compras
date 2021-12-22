@extends('templates.template')

@section('titulo da aba', 'Adicionar produto')

@section('conteudo')

    <h1>Adicionar Produto</h1>

    <form method='POST' action="" >
        @csrf

        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo"><br>

        <label for="descricao"></label>Descrição:<br>
        <input type="text" name="descricao"><br>

        <label for="preco">Preço</label><br>
        <input type="text" name="preco"><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="text" name="quantidade"><br>

        <input type="submit" value="Adicionar">
    </form>

@endsection