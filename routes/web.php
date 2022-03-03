<?php


use App\Http\Controllers\{
    PrincipalController,
    MaterialController
};

use Illuminate\Support\Facades\Route;


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
Route::get('/material/create', [MaterialController::class, 'create'])->name('material.create');
Route::post('/material', [MaterialController::class, 'store'])->name('material.store');
Route::get('/material', [MaterialController::class, 'index'])->name('material.index');



