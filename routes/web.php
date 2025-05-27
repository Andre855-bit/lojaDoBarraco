<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos', [App\Http\Controllers\SObreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores']);

Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicos']);

Route::get('/criar-usuario', [App\Http\Controllers\CriarUsuarioController::class, 'criarUsuario'])->name('site.usuario');

Route::get('/criar-loja', [App\Http\Controllers\CriarLojasController::class, 'criarLoja'])->name('site.loja');

Route::get('/criar-servico', [App\Http\Controllers\CriarServicosController::class, 'criarServico'])->name('site.servico');

Route::fallback(function(){
    echo 'A rota acessada não existe.
    <a href="'.route('site.principal').'">Clique aqui,</a>
    para ir para a página inicial';
});



Route::prefix('/api')->group(function(){

    Route::get('/login',function(){
        return 'Login';
    });
    
    Route::get('/provedores',function(){
        return 'Provedores';
    });
    
    Route::get('/produtos',function(){
        return 'Produtos';
    });
    
    Route::get('/clientes',function(){
        return 'Clientes';
    });

});