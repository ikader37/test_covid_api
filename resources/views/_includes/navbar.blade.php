<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <form method="post" action="{{ url('/logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger text-white">
          <i class="fas fa-lock"></i> Deconnexion
        </button>
        </form>
      </li>
    </ul>
</nav>
<!-- /.navbar -->