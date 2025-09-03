@extends('layouts.app')

@section('title', 'Admin • Login')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">Acesso Administrativo</div>
        <div class="card-body">
          <form method="POST" action="{{ url('/admin/login') }}">
            @csrf
            <x-input label="Usuário" name="username" />
            <x-input label="Senha" name="password" type="password" />
            <x-botao type="submit" class="w-100">Entrar</x-botao>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection