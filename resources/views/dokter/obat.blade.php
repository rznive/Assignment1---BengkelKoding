@include('layout.header', ['title' => 'Dashboard Obat'])
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
      <a href="{{ route('dashboardDokter') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('periksaDokter') }}" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
          Periksa
          <span class="right badge badge-danger">New</span>
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('obatDokter') }}" class="nav-link active">
        <i class="nav-icon fas fa-history"></i>
        <p>
          Obat
          <span class="right badge badge-danger">New</span>
        </p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1 class="m-0">Dashboard</h1> -->
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Obat</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Obat</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="obat">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="nama_obat">Nama Obat</label>
              <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Enter nama obat">
            </div>
            <div class="form-group">
              <label for="kemasan">Jenis Kemasan</label>
              <input type="text" class="form-control" id="kemasan" name="kemasan" placeholder="Enter jenis kemasan">
            </div>
            <div class="form-group">
              <label for="harga">Harga Obat</label>
              <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter harga obat">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tambah Obat</button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Daftar Obat</h3>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($obats as $obat)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>{{ $obat->kemasan }}</td>
                    <td>Rp. {{ number_format($obat->harga, 0, ',','.') }}</td>
                    <td>
                      <button class="btn btn-warning">Edit</button>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include ('layout.footer')