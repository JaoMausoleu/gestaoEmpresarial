<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreController;

Route::get('/', [HomeController::class, 'home'])->name('index');

Route::get('/produtos', [ProdutoController::class, 'product'])->name('produtos');

Route::get('/cadastros', [CadastroController::class, 'register'])->name('cadastros');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/sobre', [SobreController::class, 'about'])->name('sobre');

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login']);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/clientes', [AdminController::class, 'clientes']);
    Route::get('/clientes/{id?}', [AdminController::class, 'clienteShow'])->where('id', '[0-9]+');
    Route::get('/fornecedores', [AdminController::class, 'fornecedores']);
    Route::get('/produtos', [AdminController::class, 'produtos']);
    Route::get('/produto/{slug}', [AdminController::class, 'produtoShow'])->where('slug', '[a-zA-Z0-9\-]+');
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