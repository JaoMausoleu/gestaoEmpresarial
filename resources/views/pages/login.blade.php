@extends('layouts.app')
@section('title', 'Login')
@section('content')
  <h2 class="mb-4">Login</h2>
  <form method="POST" action="{{ url('/login') }}">
    @csrf
    <x-input label="E-mail" name="email" type="email" />
    <x-input label="Senha" name="password" type="password" />
    <x-botao type="submit">Entrar</x-botao>
  </form>
@endsection