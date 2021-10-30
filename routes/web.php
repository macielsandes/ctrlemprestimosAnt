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

//rotas para Material
Route::resource('/material', MaterialController::class);
    //return view('materiais'); 
//});

Route::get('/usuarios', function () {
    return view('usuario');
});


Route::get('Emprestimos', function () {
    return view('emprestimos');
});