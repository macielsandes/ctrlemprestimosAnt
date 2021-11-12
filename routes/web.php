<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', function () {
    return view('usuario');
});

//rotas para Material
Route::get('/material', [MaterialController::class, 'index']);
#{
   # return view('material'); 
#});

Route::get('/emprestimo', function () {
    return view('emprestimo');
});

Route::get('/devolucao', function () {
    return view('devolucao');
});