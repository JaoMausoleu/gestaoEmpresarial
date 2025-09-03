@extends('layouts.app')

@section('title', 'Admin • Dashboard')

@section('content')
  <h2 class="mb-4">Dashboard</h2>
  <div class="row g-3">
    <div class="col-sm-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <div class="fw-semibold">Produtos</div>
          <div class="display-6">128</div>
          <a href="{{ url('/admin/produtos') }}" class="small">Ver detalhes</a>
        </div>
      </div>
    </div>
  </div>
@endsection