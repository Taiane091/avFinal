<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return view('cadastro');
});
Route:: get('layouts/excluir/{id}', [ProdutoController::class, 'delete']);
Route:: post('layouts/excluir/{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');

Route:: get('/ver/{id}', [ClienteController::class, 'show']);
Route:: get('/editar/{id}', [ClienteController::class, 'edit']);
Route:: post('/editar/{id}', [ClienteController::class, 'update'])->name('alterar_cliente');
Route::get('/criar',[ClienteController::class, 'create'])->name('cadastrar_cliente');
Route::post('/criar',[ClienteController::class, 'store'])->name('cadastrar_cliente');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
