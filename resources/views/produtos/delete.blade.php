@extends('templates.template')

@section('titulo da aba', 'Deletar Produto')

@section('titulo do conteudo', 'Deletar Produto')

@section('conteudo')

    <form method='POST' action="{{ route('deletar_produto', ['id' => $produto->id]) }}" >
        @csrf

        <label for="">Tem certeza que deseja deletar esse produto ?</label><br>
        <input type="submit" value="sim"><br>
    </form>

@endsection