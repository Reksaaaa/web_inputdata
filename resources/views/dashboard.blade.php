@extends('loyauts.main')

@section('container')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12 text-start m-4">
                <h1>Dashboard</h1>
            </div>
            <!-- First Columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Total Barang -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Barang</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-router"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalBarang }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Total Barang -->

                    <!-- Total Tipe -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Tipe</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-signpost-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalTipe }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total Tipe -->

                    <!-- Total SSID -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total SSID</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-wifi"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalSsid }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total SSID -->

                </div>
            </div><!-- End First Columns -->

            <!-- Second Columns -->
            <div class="col-lg-12 mt-4">
                <div class="row">
                    <!-- Total Barang -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Ruangan</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-door-open-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalRuangan }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total Barang -->

                    <!-- Total Tipe -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Divisi</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-door-open-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalDivisi }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total Tipe -->

                    <!-- Revenue Card -->
                    {{-- <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">


                            <div class="card-body">
                                <h5 class="card-title">Total SSID</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-egg"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$3,264</h6>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card --> --}}

                </div>
            </div><!-- End Second Columns -->

    </section>
@endsection
