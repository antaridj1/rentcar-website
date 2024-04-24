@extends('admin.layouts.app')
@section('section')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="row">
                        <div class="col-xxl-12 col-md-12">
                            <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <h5 class="card-title mb-0">Halo, {{auth()->user()->name}}</h5>
                                    @if (auth()->user()->role === 'unit')
                                        <span class="mt-0">Ada {{$jumlah_selesai_diproses}} laporan telah selesai diproses, verifikasi sekarang!</span>
                                    @elseif(auth()->user()->role === 'pegawai')
                                        <span class="mt-0">Ada {{$jumlah_diterima}} laporan masuk, proses sekarang!</span>
                                    @else 
                                        <span class="mt-0">Ada {{$jumlah_terkirim}} laporan dan {{$jumlah_saran}} saran masuk, periksa sekarang!</span>
                                    @endif
                                    
                                </div>
                                <div class="col-md-6 mt-3 col-sm-12 d-flex align-items-center justify-content-end">
                                    @if (auth()->user()->role === 'unit')
                                        <a href="{{route('laporan.index')}}?status={{IS_SELESAI_DIPROSES}}" class="btn btn-primary rounded-pill"> <i class="bi bi-journal-text"></i> Lihat Laporan</a>
                                    @elseif(auth()->user()->role === 'pegawai')
                                        <a href="{{route('laporan.index')}}?status={{IS_DITERIMA}}" class="btn btn-primary rounded-pill"> <i class="bi bi-journal-text"></i> Lihat Laporan</a>
                                    @else 
                                        <a href="{{route('laporan.index')}}?status='{{IS_TERKIRIM}}'" class="btn btn-primary rounded-pill"> <i class="bi bi-journal-text"></i> Lihat Laporan</a>
                                        <a href="{{route('saran.index')}}" class="btn btn-secondary rounded-pill ms-2"> <i class="bi bi-chat-left-text"></i> Lihat Saran</a>
                                    @endif
                                </div>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div> --}}
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Mobil Tersedia <span>Hari Ini</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cursor"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$countAvailableCars}}</h6>
                                            <span class="text-muted small pt-2 ps-1">Mobil</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Mobil</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cursor"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{$totalCars}}</h6>
                                            <span class="text-muted small pt-2 ps-1">Mobil</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Terkirim -->
                    </div>
            
                <div class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Data Mobil</h5>
                                <div class="mt-3">
                                <a href="{{route('car.index')}}" class="btn btn-primary btn-sm">Lihat Semua</a>
                                </div>
                            </div>
                            @include('admin.car._table')

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            
            </div>
            </div>
        </section>
    </main>
@endsection