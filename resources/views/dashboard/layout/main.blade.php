<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Sistem Web Desa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="ferdyfebriyanto22@gmail.com" name="description">
    <meta content="sistem-web-desa" name="keywords">

    <!-- Favicons -->
    <link href="../../admin/assets/img/favicon.png" rel="icon">
    <link href="../../admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../admin/assets/css/style.css" rel="stylesheet">
</head>

<body>

@include('dashboard.layout.header');

@include('dashboard.layout.sidebar');

@yield('container')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>WR.Net</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.instagram.com/ferdy_febriyanto/">Ferdy Febriyanto</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../admin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="../../admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../admin/assets/vendor/quill/quill.min.js"></script>
    <script src="../../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../admin/assets/js/main.js"></script>

</body>

</html>