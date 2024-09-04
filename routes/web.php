<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PrincipalController  ::class, 'principal'])->name('site.principal');

Route::get('/sobrenos', [App\Http\Controllers\Intranetindex::class, 'Intranet'])->name('site.sobrenos');


Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('app')->group(function () {

    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');

});

Route::fallback(function () {
    echo 'A rota acessada não existe.<br>Clique para <a href="' . route('site.principal') . '"> Voltar a página principal</a>';
});

Route::get('teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste']);