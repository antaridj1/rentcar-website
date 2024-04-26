@extends('frontend.layouts.app')
@section('style')
<style>
    .navbar img{
        width: 40px; 
        height: 40px;
        border-radius:5px;
    }
    @media (min-width: 576px){
        .navbar img{
            width:60px; 
            height:60px;
             border-radius:10px;
        }
    }


</style>

@endsection
@section('section')
<div class="container-fluid px-3" style="position: fixed; z-index:1000; top:0.5rem; ">
    <nav class="navbar navbar-expand-md col-12 " id="navbar" style=" background-color:white; border-radius:10px;box-shadow: 0px 37px 50px -20px rgba(106, 106, 106, 0.1);" >
        <div class="container-fluid px-3 px-md-5">
            <img src="{{asset('frontend/images/logo.png')}}" alt="" class="test" >
        <!-- <a class="navbar-brand" href="#">BALI BAGUS 78</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list" style="color: black;"></i>
        </button>
        <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarSupportedContent2">
            <ul class="navbar-nav mb-2 mb-lg-0 ">
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link" href="#">Cars</a>
            </li>
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item ps-2">
                <a class="nav-link" href="#">Contact</a>
            </li>
            
            </ul>
        
        </div>
        </div>
    </nav>
</div>
<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card" style="border-radius:10px; border:0;">
                <div class="card-body pb-0">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Mobil</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
   <div class="row g-3">
        <div class="col-12 col-md-7">
            <div class="card" style="border-radius:10px; border:0">
                <div class="card-body">
                    <div class="row d-flex justify-content-between">
                        <h5 class="card-title mb-3 col-6" style=" font-weight:bold">{{$car->name}}</h5>
                        <div class="col-6 d-flex justify-content-end">
                            <h5 class="card-title mb-3 " style=" font-weight:bold">IDR {{number_format($car->price)}}</h5><p class="ps-2"> / Hari</p>
                        </div>
                        
                    </div>
                
                    <div class="col-12">
                        <img src="{{$car->image_link}}" style="border-radius: 10px; object-fit:cover; width:100%" alt="">
                    </div>
                    <div class="col-12 mt-3">
                        <p style="font-weight: bold">Syarat dan Ketentuan</p>
                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                            Untuk memastikan pengalaman berkendara yang aman dan nyaman bagi semua pelanggan, kami mengharuskan setiap penyewa memiliki <b style="color:black">Surat Izin Mengemudi (SIM) A</b> yang masih berlaku. 
                            Selain itu, <b style="color: black">KTP</b> Anda akan dijadikan jaminan selama masa sewa.
                        </span>
                    </div>
                    
                
                {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 ps-md-0">
            <div class="card" style="border-radius:10px; border:0">
                <div class="card-body">
                    <p style="font-weight: bold">Syarat dan Ketentuan</p>
                    <span style="font-size: 14px; color:rgb(60, 60, 60)">
                        Untuk memastikan pengalaman berkendara yang aman dan nyaman bagi semua pelanggan, kami mengharuskan setiap penyewa memiliki <b style="color:black">Surat Izin Mengemudi (SIM) A</b> yang masih berlaku. 
                        Selain itu, <b style="color: black">KTP</b> Anda akan dijadikan jaminan selama masa sewa.
                    </span>
                </div>
            </div>
        </div> 
   </div>
</div>

@endsection