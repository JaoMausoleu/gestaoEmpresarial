@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
  <h2 class="mb-4">Lista de Produtos</h2>

  @php
    $produtos = [
      ['id' => 1, 'nome' => 'Chibi do Boninho', 'img' => 'https://via.placeholder.com/600x400?text=boninho'],
      ['id' => 2, 'nome' => 'Mouse Gay Mer', 'img' => 'https://via.placeholder.com/600x400?text=mouse'],
      ['id' => 3, 'nome' => 'Monitor dos Sofuare', 'img' => 'https://via.placeholder.com/600x400?text=Sofuare'],
    ];
  @endphp

  <div class="row g-3">
    @foreach($produtos as $p)
      <div class="col-12 col-sm-6 col-lg-4">
        <x-card-produto
          :titulo="$p['nome']"
          :imagem="$p['img']"
          :link="url('/produtos/'.$p['id'])"
        />
      </div>
    @endforeach
  </div>
@endsection