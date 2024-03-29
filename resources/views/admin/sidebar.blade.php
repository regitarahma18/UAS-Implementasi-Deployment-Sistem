 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('lte/index3.html') }}" class="brand-link">
      <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-user-friends"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_customer1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Customer</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="/insertCustomer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Customer 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/insertCustomer2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Customer 2</p>
                </a>
              </li>
          
    
            </a>
          </li>
        </ul>
        
         <li class="nav-item">
            <a href="barang" class="nav-link">
            <i class="far fa-shopping-cart"></i>
              <p>
                Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="BarcodeScanner" class="nav-link">
            <i class="fas fa-barcode"></i>
              <p>
                Scan Barcode
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="table_toko" class="nav-link">
            <i class="fas fa-store"></i>
              <p>
                Data Toko
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="titik_kunjungan" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Titik Kunjungan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>