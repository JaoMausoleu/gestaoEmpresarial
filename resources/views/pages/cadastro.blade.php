@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
  <h2 class="mb-4">Crie sua conta</h2>
  <form method="POST" action="{{ url('/cadastro') }}">
    @csrf
    <x-input label="Nome" name="name" />
    <x-input label="E-mail" name="email" type="email" />
    <x-input label="Senha" name="password" type="password" />
    <x-botao type="submit">Cadastrar</x-botao>
  </form>
@endsection