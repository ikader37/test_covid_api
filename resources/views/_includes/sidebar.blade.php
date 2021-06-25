<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="." class="brand-link">
      <img src="{{ asset('dist/img/icon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SUNU 2 ROUES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/souscriptions')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Souscriptions
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/garanties')}}" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Garanties
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/types')}}" class="nav-link">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Type de Moto
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/motos')}}" class="nav-link">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Motos
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/mode-paiements')}}" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Mode de Paiements
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/assures')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Assurés
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/updates')}}" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Mise à jour
              </p>
            </a>
          </li>

          <!--<li class="nav-item">
            <a href="{{url('/paiements')}}" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Paiements
              </p>
            </a>
          </li>-->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>