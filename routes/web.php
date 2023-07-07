<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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
    Route::get('/fornecedores', function(){
        return 'FORNECEDORES';
    })->name('app.fornecedores');
    Route::get('/produtos', function(){
        return 'PRODUTOS';
    })->name('app.produtos');
});

Route::fallback(function(){
    echo 'Erro - Página não encontrada .<a href="/"> Clique aqui</a> ';
});

