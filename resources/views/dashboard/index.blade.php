@extends('dashboard.layout.main');

@section('container');
<main id="main" class="main">
        <div class="pagetitle">
            <h1>Selamat Datang, {{ Auth()->user()->name }} 👋</h1>
        </div>

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Jumlah Penduduk -->
                        <div class="col-xxl-4 col-xl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Penduduk</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>14598</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Jumlah Penduduk -->

                        <!-- Jumlah KK -->
                        <div class="col-xxl-4 col-xl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Kepala Keluarga</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-lines-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>12345</h6>
                                            <span class="text-muted small pt-2 ps-1">kepala keluarga</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Jumlah KK -->

                        <!-- Jumlah Penduduk Laki-laki -->
                        <div class="col-xxl-4 col-xl-4 col-md-6">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Penduduk Laki-laki</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gender-male"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Jumlah Penduduk Perempuan -->

                         <!-- Jumlah Penduduk Laki-laki -->
                         <div class="col-xxl-4 col-xl-4 col-md-6">

                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Penduduk Perempuan</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-gender-female"></i>
                                        </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-muted small pt-2 ps-1">orang</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        </div>
                        <!-- End Jumlah Penduduk Perempuan -->

                         <!-- Jumlah Kelahiran -->
                         <div class="col-xxl-4 col-xl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Kelahiran</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-emoji-heart-eyes"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-xl-4 col-md-6">
                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Meninggal</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-emoji-frown"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>22</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-4 col-md-6">

                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Pendatang</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-arrow-down-square"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Customers Card -->

                         <!-- Sales Card -->
                         <div class="col-xxl-4 col-xl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Pindah</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-arrow-up-square"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-muted small pt-2 ps-1">orang</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Sales Card -->

                    </div>
                </div>
                <!-- End Left side columns -->

            </div>
        </section>

    </main>
@endsection