@extends('templates.template')

@section('titulo da aba', 'Produtos')

@section('conteudo')

    <h1>Lista de Produtos</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
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
                </tr>
            @endforeach            
        </tbody>
    </table>

@endsection