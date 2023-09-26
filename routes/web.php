<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function(){
    return 'LOGIN';
})->name('site.login');


Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){
        return 'CLIENTES';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class,'index'])->name('fornecedor');

    Route::get('/produtos', function(){
        return 'PRODUTOS';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[TesteController::class,'teste'])->name('teste');

Route::fallback(function(){
    echo 'Erro - Página não encontrada .<a href="/"> Clique aqui</a> ';
});

