@extends('templates.template')

@section('titulo da aba', 'Produtos')

@section('titulo do conteudo', 'Lista de Produtos')

@section('conteudo')

    <div class="mt-3 mb-3">
        <a href="{{ url('produtos/criar') }}">
            <button class="btn btn-success">Adicionar produto</button>
        </a>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>            
            @foreach($produto as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->descricao}}</td>
                    <td>{{$item->valor}}</td>
                    <td>{{$item->quantidade}}</td> 

                    <td>
                        <a href="{{ route('produtos.edit', ['id' => $item->id]) }}"> <!--muda para a rota 'produtos/edit' e passa o parâmetro 'id' para ela-->
                            <button class="btn btn-info">Editar</button>
                        </a>

                        <a href="{{ route('produtos.deletar', ['id' => $item->id]) }}">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>

                </tr>
            @endforeach            
        </tbody>
    </table>

@endsection