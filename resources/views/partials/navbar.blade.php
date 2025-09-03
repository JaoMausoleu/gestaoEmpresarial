<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="{{ url('/') }}">Gestão Empresarial</a>

    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row gap-3">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/produtos') }}">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" href="{{ url('/login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="{{ url('/cadastro') }}">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>