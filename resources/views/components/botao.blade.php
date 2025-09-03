@props([
  'href' => null,
  'type' => 'button',
  'variant' => 'primary',  // primary, secondary, outline-primary etc.
  'size' => null,          // sm, lg
])

@php
  $classes = 'btn';
  $classes .= ' btn-' . $variant;
  if ($size) $classes .= ' btn-' . $size;
@endphp

@if($href)
  <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </a>
@else
  <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
  </button>
@endif