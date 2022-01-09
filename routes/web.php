<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\DevolucaoController;

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

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/usuario', [UsuarioController::class,'index']); 

Route::get('/material', [MaterialController::class,'index']); 

Route::get('/emprestimo', [EmprestimoController::class,'index']);

Route::get('/devolucao', [DevolucaoController::class,'index']);

Route::get('/login', [LoginController::class,'index']);

Route::get('/material/{descricao}/{serie}/{Fabricante}/{patrimonio}/{categoria_id}/{qtde?}', 
function(
    string $descricao, 
    string $serie, 
    string $fabricante, 
    string $patrimonio, 
    int $categoria = 1, 
    int $qtde  = 1
    ){
    echo "Estamos aqui: $descricao - $serie - $fabricante - $patrimonio - $categoria - $qtde";
};
//Esta parte server para ajudar a verificar se a informação passada esta num formato correto.
//->where ('descricao', '[A-Za-z]+');
