<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermissaoController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

Route::middleware('check.session')->group(function () {

    Route::get('/', [HomeController::class , 'index'])->name('home');

    Route::get('/lista/usuarios', [UsuarioController::class , 'lista_usuarios'])->name('lista_usuarios');

    Route::get('/lista/permissoes', [PermissaoController::class , 'lista_permissoes'])->name('lista_permissoes');
    Route::post('/pesquisa/permissao', [PermissaoController::class , 'pesquisa_permissao'])->name('pesquisa_permissao');
    Route::post('/edita/permissao', [PermissaoController::class , 'edita_permissao'])->name('edita_permissao');

    Route::get('/logout', [LoginController::class , 'logout'])->name('logout');

});


Route::get('/login' , [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'login']);



/*
Route::get('/novo/usuario', function(){
    Usuario::create([
        'nome'      => 'Usuário Convidado',
        'email'     => 'convidado@gmail.com',
        'senha'     => Hash::make('123456')
    ]);
});
*/

