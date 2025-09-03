@props([
  'titulo' => 'Produto',
  'imagem' => 'https://via.placeholder.com/600x400?text=Produto',
  'link' => '#',
])

<div class="card h-100">
  <img src="{{ $imagem }}" class="card-img-top" alt="{{ $titulo }}">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title">{{ $titulo }}</h5>
    <div class="mt-auto">
      <x-botao :href="$link" variant="outline-primary" class="w-100">Ver detalhes</x-botao>
    </div>
  </div>
</div>