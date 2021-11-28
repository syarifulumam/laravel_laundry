<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('transaksi.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Transaksi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('pelanggan.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Pelanggan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('paket_laundry.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Paket Laundry</p>
        </a>
      </li>
      @if (Auth::user()->role == 1)
      <li class="nav-item">
        <a href="{{ route('operator.index') }}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Operator</p>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Pengaturan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-th"></i>
          <p>Logout</p>
        </a>
        <form action="{{ route('logout') }}" id="logout-form" method="POST">@csrf</form>
      </li>
    </ul>
  </nav>