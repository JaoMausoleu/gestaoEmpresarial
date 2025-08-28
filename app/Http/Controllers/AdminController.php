<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return 'login admin';
    }
    public function dashboard() {
        return 'dashboard';
    }
    public function clientes() {
        return 'clientes';
    }
    public function clienteShow($id = null) {
        return 'Id do cliente: ' . $id;
    }
    public function fornecedores() {
        return 'fornecedores';
    }
    public function produtos() {
        return 'produtos';
    }
    public function produtoShow($slug) {
        return 'Produto: ' . $slug;
    }
}
