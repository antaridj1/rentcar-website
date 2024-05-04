@extends('frontend.layouts.app')
@section('style')
<style>
    .accordion-button:not(.collapsed){
        background-color: #f2f2f2;
        color:black
    }

    .accordion-button{
        color: rgb(32, 32, 32);
    }

    .price {
        font-size:20px;
    }

    @media (min-width: 576px){
        .price {
            font-size:24px;
        }
    }


</style>

@endsection
@section('section')
<div class="container-fluid">
    <div class="row" style="height:90px"></div>
    <div class="row">
        <div class="col-12">
            <div class="card" style="border-radius:10px; border:0; background-color:transparent">
                <div class="card-body pb-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" style="text-decoration: none; color:black">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{route('cars')}}" style="text-decoration: none; color:black">Koleksi Mobil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$car->name}}</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
   <div class="row g-3">
        <div class="col-12 col-lg-7">
            <div class="card" style="border-radius:10px; border:0">
                <div class="card-body">
                    <div class="row d-flex justify-content-between">
                        <h5 class="card-title mb-3 col-12 col-md-6" style=" font-weight:bold">{{$car->name}} </h5>
                        <div class="col-6 d-none d-md-flex justify-content-end">
                            <h5 class="card-title mb-3 " style=" font-weight:bold">IDR {{!$isWithDriver ? $car->formated_price : $car->formated_price_with_driver}}</h5><p class="ps-2"> / {{!$isWithDriver ? 'Hari' : '10 jam' }}</p>
                        </div>
                        
                    </div>
                
                    <div class="col-12">
                        <img src="{{$car->image_link}}" style="border-radius: 10px; object-fit:cover; width:100%" alt="">
                    </div>
                   
                    
                
                {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 ps-lg-0">
            <div class="card mb-3" style="border-radius:10px; border:0">
                <div class="card-body">
                    <p style="font-weight: bold">Detail</p>
                    <table class="table ">
                        <tr>
                            <td style="color: grey">Nama</td>
                            <td>{{$car->name}}</td>
                        </tr>
                        <tr>
                            <td style="color: grey">Jenis</td>
                            <td>City Car (Automatic)</td>
                        </tr>
                        <tr>
                            <td style="color: grey">Seat</td>
                            <td>{{$car->seat}} Penumpang</td>
                        </tr>
                        <tr>
                            <td style="color: grey">Tipe Sewa</td>
                            <td>{{$isWithDriver ? 'Dengan Sopir' : 'Lepas Kunci'}}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="card mb-3" style="border-radius:10px; border:0">
                <div class="card-body">
                    <p style="font-weight: bold">Rincian Harga ({{!$isWithDriver ? 'Lepas Kunci' : 'Dengan Sopir'}})</p>
                    <div class="col-12 bg-light p-3" style="border-radius:10px;">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td style="color: grey">
                                    Harga / {{!$isWithDriver ? 'hari' : '10 jam' }} 
                                    @if($isWithDriver)
                                        <br> 
                                        <span style="color: grey; font-size:12px">(Mobil + Driver + BBM)</span> 
                                    @endif
                                </td>
                                <td class="text-end">Rp {{!$isWithDriver ? $car->formated_price : $car->formated_price_with_driver}}</td>
                            </tr>
        
                            @if(!$isWithDriver)
                                <tr>
                                    <td style="color: grey">Biaya Pengantaran</td>
                                    <td class="text-end" style="font-size:14px">(Sesuai Ketentuan)</td>
                                </tr>
                            @endif
                            <tr>
                                <td style="color: grey">Overtime</td>
                                <td class="text-end" style=" font-size:14px">(Sesuai Ketentuan)</td>
                            </tr>
                            <tr>
                                <td style="color: grey; vertical-align: middle; border-top: 1px solid rgb(173, 173, 173);">
                                    <p style="font-weight: bold; margin-bottom: 0;">TOTAL</p>
                                </td>
                                <td class="text-end" style="vertical-align: middle; border-top: 1px solid rgb(177, 177, 177)">
                                    <p class="text-end price" style="font-weight: bold; margin-bottom: 0;">Rp {{ !$isWithDriver ? $car->formated_price : $car->formated_price_with_driver}}</p>
                                </td>
                            </tr>
                        </table>
                        
                    </div>
                  <div class="col-12 mt-3">
                    <a href="#" onclick="booking(this.getAttribute('data-car-name'), this.getAttribute('data-with-driver') === 'true')"
                        class="btn btn-dark col-12"
                        style="border-radius: 10px;"
                        data-tel="{{ $user->phone }}"
                        data-car-name="{{ $car->name }}"
                        data-with-driver="{{ $isWithDriver ? 'true' : 'false' }}">
                            <i class="bi bi-whatsapp"></i> Booking Via Whatsapp
                        </a>

                  </div>
                  <input type="hidden" id="phone" value="{{$user->phone}}">
                   
                </div>
            </div>
        </div> 
        <div class="col-12">
            @if(!$isWithDriver)
                <div class="card mb-3" style="border-radius:10px; border:0">
                    <div class="card-body">
                        <p style="font-weight: bold">Syarat Penyewaan</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Surat Ijin Mengemudi (SIM) A
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Untuk memastikan pengalaman berkendara yang aman dan nyaman bagi semua pelanggan, kami mengharuskan setiap penyewa memiliki 
                                            <b style="color:black">Surat Izin Mengemudi (SIM) A</b> yang masih berlaku. 
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Kartu Tanda Penduduk (KTP)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Sebagai bagian dari proses peminjaman, kami juga memerlukan <b style="color: black">KTP</b> asli yang akan disimpan sebagai jaminan hingga mobil dikembalikan. Kami mengapresiasi kerjasama Anda dalam mematuhi ketentuan ini.
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                    </div>
                </div>
            @endif
            <div class="card mb-3" style="border-radius:10px; border:0">
                <div class="card-body">
                    <p style="font-weight: bold">Ketentuan Penyewaan</p>
                    <div class="accordion" id="accordionKetentuan">
                        @if(!$isWithDriver)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDelivery" aria-expanded="false" aria-controls="collapseDelivery">
                                        Biaya Pengantaran Kendaraan
                                    </button>
                                </h2>
                                <div id="collapseDelivery" class="accordion-collapse collapse" data-bs-parent="#accordionKetentuan">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Kami menyediakan layanan antar gratis untuk setiap penyewaan yang diantar ke bandara. Untuk pengantaran di luar area bandara, akan dikenakan biaya tambahan mulai dari <b style="color: black">Rp50.000</b>, tergantung lokasi pengantaran. Pastikan untuk mengonfirmasi lokasi pengantaran Anda saat pemesanan untuk mendapatkan estimasi biaya yang tepat.
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGas" aria-expanded="false" aria-controls="collapseGas">
                                        Ketentuan Bensin saat Pengembalian
                                    </button>
                                </h2>
                                <div id="collapseGas" class="accordion-collapse collapse" data-bs-parent="#accordionKetentuan">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Kami menyediakan kendaraan dengan tangki bensin penuh untuk kenyamanan Anda. Kami meminta agar bensin dikembalikan ke level semula saat kendaraan diserahkan kepada Anda. <b style="color: black"> Mohon pastikan untuk mengisi tangki bensin sesuai dengan level awal </b> sebelum pengembalian kendaraan.
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOvertime" aria-expanded="true" aria-controls="collapseOvertime">
                                        Denda Keterlambatan
                                    </button>
                                </h2>
                                <div id="collapseOvertime" class="accordion-collapse collapse" data-bs-parent="#accordionKetentuan">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Untuk setiap jam keterlambatan pengembalian kendaraan, akan dikenakan biaya tambahan sebesar <b style="color:black">10%</b> dari tarif sewa harian. Apabila keterlambatan melebihi <b style="color:black">8 jam</b>, maka akan dikenakan biaya sewa untuk satu hari penuh. Pastikan untuk mengatur waktu pengembalian Anda agar sesuai dengan jadwal untuk menghindari biaya tambahan ini.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFee" aria-expanded="true" aria-controls="collapseFee">
                                        Biaya Sudah Termasuk
                                    </button>
                                </h2>
                                <div id="collapseFee" class="accordion-collapse collapse" data-bs-parent="#accordionKetentuan">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Harga yang tertera sudah termasuk biaya sewa mobil, jasa driver, dan bahan bakar minyak (BBM). Nikmati perjalanan Anda tanpa khawatir akan biaya tambahan.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOvertime" aria-expanded="true" aria-controls="collapseOvertime">
                                        Biaya Over-time Penyewaan Dengan Sopir
                                    </button>
                                </h2>
                                <div id="collapseOvertime" class="accordion-collapse collapse" data-bs-parent="#accordionKetentuan">
                                    <div class="accordion-body">
                                        <span style="font-size: 14px; color:rgb(60, 60, 60)">
                                            Untuk penyewaan yang melibatkan jasa driver lebih dari <b style="color:black">10 jam</b>, akan dikenakan biaya tambahan sebesar <b style="color:black">10%</b>. Pastikan untuk merencanakan durasi penyewaan Anda dengan baik untuk menghindari biaya tambahan ini
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                       
                        
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
     function booking(carName, isWithDriver){
        let driver = ' tanpa driver'
        if(isWithDriver == true) {
            driver = ' Dengan Sopir'
        }
            var message = 'Halo, saya mau booking mobil ' + carName + driver
            var str = $('#phone').val()
            var phone = str.slice(1);
            window.open('https://wa.me/'+phone+'/?text='+message , "_blank");
        }
</script>