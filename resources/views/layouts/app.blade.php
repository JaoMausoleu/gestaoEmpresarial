<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name', 'Gestão Empresarial'))</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light d-flex flex-column min-vh-100">
  @include('partials.navbar')
  <main class="flex-grow-1 py-4">
    <div class="container">
      @yield('content')
    </div>
  </main>
  @include('partials.footer')
  @stack('scripts')
</body>
</html>