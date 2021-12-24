<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', '/produtos'); //A rota '/produtos' será a principal'

Route::prefix('produtos')->group(function () {
    
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');

    Route::get('/criar', [ProdutosController::class, 'create']);
    Route::post('/criar', [ProdutosController::class, 'store'])->name('adicionar_produto');

    Route::get('/editar/{id}', [ProdutosController::class, 'edit'])->name('produtos.edit');
    Route::post('/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');

    Route::get('/deletar/{id}', [ProdutosController::class, 'delete'])->name('produtos.deletar');//name('deletar_produto');
    Route::post('/deletar/{id}', [ProdutosController::class, 'permanentlyDelete'])->name('deletar_produto');
});

