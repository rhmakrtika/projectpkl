<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/responsive.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <!--start header-->
    @include('include.backend.header')
    <!--end top header-->

    <!--start sidebar-->
    @include('include.backend.sidebar')
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-noe d-sm-flex align-items-center- mb-3"></div>
            <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="row">
                <!-- Welcome Back Section -->
                <div class="col-12">
                    <div class="card w-100 overflow-hidden rounded-4">
                        <div class="card-body position-relative p-4">
                            <div class="d-flex align-items-center gap-3 mb-5">
                                <img src="{{ asset('backend/assets/images/user.jpeg') }}" class="rounded-circle bg-grd-info p-1" width="60" height="60" alt="user">
                                <div>
                                    <p class="mb-0 fw-semibold">Welcome back</p>
                                    <h4 class="fw-semibold mb-0 fs-4 mb-0">{{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="d-flex align-items-center gap-5">
                                        <div>
                                            <h4 class="mb-1 fw-semibold d-flex align-content-center">Admin<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h4>

                                            <div class="progress mb-0" style="height:5px;">
                                                <div class="progress-bar bg-grd-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <h4 class="mb-1 fw-semibold d-flex align-content-center">Kasir<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h4>

                                            <div class="progress mb-0" style="height:5px;">
                                                <div class="progress-bar bg-grd-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="welcome-back-img pt-4">
                                        <img src="{{ asset('backend/assets/images/gallery/welcome-back') }}-3.png" height="180" alt="">
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
                <!-- Card: Total Orders -->
                <div class="col-12 col-lg-6 col-xxl-4 mb-4">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
                                    <span class="material-icons-outlined fs-5">shopping_cart</span>
                                </div>
                                <div>
                                    <span class="text-success d-flex align-items-center">+40%<i class="material-icons-outlined">expand_less</i></span>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-3">Penjualan Minggu ini</h4>
                                <p class="mb-3">35%</p>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card: Total Sales -->
                <div class="col-12 col-lg-6 col-xxl-4 mb-4">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
                                    <span class="material-icons-outlined fs-5">attach_money</span>
                                </div>
                                <div>
                                    <span class="text-success d-flex align-items-center">+85%<i class="material-icons-outlined">expand_less</i></span>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-3">Penjualan Bulan ini</h4>
                                <p class="mb-3">80%</p>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card: Total Visits -->
                <div class="col-12 col-lg-6 col-xxl-4 mb-4">
                    <div class="card rounded-4 w-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-info bg-opacity-10 text-info">
                                    <span class="material-icons-outlined fs-5">visibility</span>
                                </div>
                                <div>
                                    <span class="text-success d-flex align-items-center">75%<i class="material-icons-outlined">expand_less</i></span>
                                </div>
                            </div>
                            <div>
                                <h4 class="mb-3">30K orang</h4>
                                <p class="mb-3">Menggunakan</p>
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <!--start footer-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2024. All right reserved.</p>
        </footer>
            <!--end footer-->

            {{-- <!-- Table: Detail Pesanan -->
            <div class="row">
                <div class="col-12">
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Detail Pesanan</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengguna</th>
                                            <th scope="col">Nama Product</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row--> --}}
        </div>
    </main>
    <!--end main wrapper-->

    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    @yield('js')
    @stack('script')
</body>

</html>
