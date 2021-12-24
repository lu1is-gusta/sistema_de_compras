<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function index(){
        $produto = DB::select('SELECT * FROM produtos'); //Usei a classe 'DB' para pegar os dados no banco de dados e mostar na página 'index'
        
        return view('produtos.index', ['produto' => $produto]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'quantidade' => $request->quantidade
        ]);

        return redirect()->route('produtos.index');
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'quantidade' => $request->quantidade
        ]);
        
        return redirect()->route('produtos.index');
    }
}
