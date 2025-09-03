@props([
  'label' => null,
  'name' => '',
  'type' => 'text',
  'value' => old($name),
  'help' => null,
])

<div class="mb-3">
  @if($label)
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  @endif

  <input
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'form-control']) }}
  >

  @if($help)
    <div class="form-text">{{ $help }}</div>
  @endif

  @error($name)
    <div class="text-danger small mt-1">{{ $message }}</div>
  @enderror
</div>