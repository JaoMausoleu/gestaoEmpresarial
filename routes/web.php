<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/cadastro', [CadastroController::class, 'register'])->name('cadastro'); 

Route::get('/login', [LoginController::class, 'login'])->name('login');


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/clientes', [AdminController::class, 'clientes'])->name('admin.clientes');
    Route::get('/clientes/{id}', [AdminController::class, 'clienteShow'])->where('id', '[0-9]+')->name('admin.clientes.show');

    Route::get('/fornecedores', [AdminController::class, 'fornecedores'])->name('admin.fornecedores');

    Route::get('/produtos', [AdminController::class, 'produtos'])->name('admin.produtos');
    Route::get('/produtos/{slug}', [AdminController::class, 'produtoShow'])->where('slug', '[a-zA-Z0-9\-]+')->name('admin.produtos.show');
});

/*
Route::prefix('/admin')->group(function(){
    Route::get('/login', function () {
        echo 'login adimin';
    });
    Route::get('/dashboard', function () {
        echo 'dashboard';
    })->name('admin.dashboard');
    Route::get('/clientes', function () {
        echo 'clientes';
    });
    Route::get('/clientes/{id?}', function (int $id) {
        echo ' Id do clinte: ' . $id;
    })->where('clinte_id','[0-9]+');
    Route::get('/fornecedores', function () {
        echo 'fornecedores';
    });
    Route::get('/produtos', function () {
        echo 'produtos';
    });
    Route::get('/produto/{slug}', function ($slug) {
        echo 'Produto: ' . $slug;
    })->where('slug', '[a-zA-Z0-9\-]+');
});
*/