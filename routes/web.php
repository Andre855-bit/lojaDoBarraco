<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);


Route::get('/sobre-nos', [App\Http\Controllers\SObreNosController::class, 'sobreNos']);

Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores']);
Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicos']);
