@extends('layouts.app')

@section('title', 'Admin • Clientes')

@section('content')
  <div class="d-flex align-items-center justify-content-between mb-3">
    <h2 class="mb-0">Clientes</h2>
    
  </div>

  @php
    $clientes = [
      ['id' => 6, 'nome' => 'Bananilson', 'email' => 'gamesbananis@gmail.com'],
      ['id' => 7, 'nome' => 'Cabacilon', 'email' => 'martutto@gmail.com'],
    ];
  @endphp

  <div class="table-responsive bg-white rounded border">
    <table class="table mb-0 align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th><th>Nome</th><th>E-mail</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $c)
          <tr>
            <td>{{ $c['id'] }}</td>
            <td>{{ $c['nome'] }}</td>
            <td>{{ $c['email'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection