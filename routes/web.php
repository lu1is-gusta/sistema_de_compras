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
    
    Route::get('/', [ProdutosController::class, 'index']);

    Route::get('/create', [ProdutosController::class, 'create']);
});

