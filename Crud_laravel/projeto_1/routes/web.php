<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
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
Route::get('/', [CadastroController::class, 'index']);
Route::get('/listar',[CadastroController::class, 'listar']);
Route::post('/cadastrar',[CadastroController::class, 'store']);
Route::delete('/listar/{id}', [CadastroController::class, 'destroy']);
Route::get('/listar/edit/{id}', [CadastroController::class, 'edit']);
Route::put('/listar/update/{id}',[CadastroController::class, 'update']);

//Route::get('/cadastrar', function () {
//    return view('cadastrar');
//});
//Route::get('/listar', function () {
//    return view('listar');
//});
