<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos.index');
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
}
