<footer class="mt-auto py-4 border-top bg-white">
  <div class="container text-center text-muted small">
    <div>© {{ date('Y') }} — Gestão Empresarial</div>
    <div class="mt-1">Área Admin: <a href="{{ url('/admin/login') }}"> Login </a><a href="{{ url('/admin/clientes') }}"> Clientes </a></div><a href="{{ url('/admin/dashboard') }}"> Dashboard </a></div>
  </div>
</footer>