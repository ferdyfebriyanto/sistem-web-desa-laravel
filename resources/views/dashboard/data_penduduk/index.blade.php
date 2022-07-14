@extends('dashboard.layout.main');

@section('container');
<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Penduduk</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Penduduk</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tabel Penduduk</h5>
          <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
          <button type="button" class="btn btn-success" href="{{ route ('')}}">Tambah</button>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1941720007</td>
                <td>Ferdy</td>
                <td>Laki-laki</td>
                <td>Jl. Bunga Vinolia</td>
                <td>
                  <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                  <button type="button" class="btn btn-success"><i class="bi bi-eye"></i></button>
                  <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection;