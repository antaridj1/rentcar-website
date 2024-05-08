   @extends('frontend.layouts.app')
   @section('style')
    <style>
        .car-filter .nav-link.active{
            background-color: rgb(62, 62, 62);
            color: white;
            border-radius: 50px;
        }

        .car-filter .nav-link{
            /* background-color: #e7e7ea; */
            color: gray;
            /* border: 1px solid gray;
            border-radius: 50px; */
        }
    </style>
   @endsection
   @section('section')
    <div class="container-fluid ">
        @include('frontend.includes.header')
        <section id="cars">
            <div class="section-car col-12 text-center " >
                <h2 class="pt-5 pb-3 ">Pilih Mobil Terbaik Kami</h2>
                <ul class="nav car-filter justify-content-center pb-5 pt-2">
                    <li class="nav-item">
                        <a class="nav-link active" id="filter-self-drive" aria-current="page" href="#">Lepas Kunci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="filter-with-driver" href="#">Dengan Sopir</a>
                    </li>
                </ul>
                
                <div class="container-fluid p-0 container-car">
                    <div class="row g-1 g-sm-2 g-md-3 animate__animated" id="self-drive">
                    
                    </div>

                    <div class="row g-1 g-sm-2 g-md-3 animate__animated" id="with-driver">
                    </div>

                    <div class="row mb-3">
                         <a href="{{route('cars')}}" class="mt-3" style="color:black;text-decoration:none">Lihat Semua Koleksi Mobil <i class="bi bi-arrow-right"></i></a>
                    </div>
                   
                </div>
            </div>
            
        </section>

        {{-- <section>
            <div class="row">
                <div class="col-12">
                    <img src="{{asset('frontend\images\front-view-road-from-driver-seat.jpg')}}" style="width: 100%; height:300px; object-fit:cover; filter:blur(2px)" alt="">
                </div> 
            </div>
            
            
        </section> --}}
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        let url = `{{route('get-cars')}}`
        let withoutDriver = '';
        let withDriver = '';
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                if (response['data']['without_driver'].length !== 0) {
                    var withoutDrivers = response['data']['without_driver'];
                    $.each(withoutDrivers, function (index, car) {
                        withoutDriver += 
                            `<div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center px-0 py-2">
                                <div class="card card-car border-0 p-2">
                                    <img src="${car.image_link}" alt="...">
                                    <div class="card-body">
                                        <div class="category d-flex justify-content-between">
                                            <p class="me-3"><i class="bi bi-person "></i> ${car.seat} Penumpang</p>
                                        </div>
                                        <h5 class="card-title text-start" style="font-weight: bold;">${car.name}</h5>
                                        <div class="d-flex">
                                            <p style="font-weight: bold; font-size: 14px;">Rp${car.formated_price}</p><p style="font-size: 14px; color: grey;"> / Hari</p>
                                        </div>  
                                        
                                        <a href="{{url('/car')}}/${car.id}" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Booking</a>
                                    </div>
                                </div>
                            </div>
                        `
                        
                    });
                    $('#self-drive').html(withoutDriver);

                    var withDrivers = response['data']['with_driver'];

                    $.each(withDrivers, function (index, car) {
                        withDriver += 
                            `<div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center px-0 py-2">
                                    <div class="card card-car border-0 p-2">
                                        <img src="${car.image_link}" alt="...">
                                        <div class="card-body">
                                            <div class="category d-flex justify-content-between">
                                                <p class="me-3"><i class="bi bi-person "></i> ${car.seat} Penumpang</p>
                                            </div>
                                            <h5 class="card-title text-start" style="font-weight: bold;">${car.name}</h5>
                                            <div class="d-flex">
                                                <p style="font-weight: bold; font-size: 14px;">Rp${car.formated_price_with_driver}</p><p style="font-size: 14px; color: grey;"> / 10 Jam</p>
                                            </div>  
                                            
                                            <a href="{{url('/car')}}/${car.id}?with_driver=1" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Booking</a>
                                        </div>
                                    </div>
                                </div>
                            `
                    });

                   
                    $('#with-driver').html(withDriver);
                    $('#with-driver').hide();
                }else {
                  
                    $('#no_data').show()
                }
            }
        });

    </script>
    <script>
       $(document).ready(function() {
            $('#filter-self-drive').on('click', function(e){
                e.preventDefault();
                $('#with-driver').hide();
                $('#self-drive').show();
                $('#self-drive').addClass('animatezoomIn');
                $('#with-driver').removeClass('animatezoomIn');
                $(this).addClass('active');
                $('#filter-with-driver').removeClass('active');
            });

            $('#filter-with-driver').on('click', function(e){
                e.preventDefault();
                $('#with-driver').show();
                $('#self-drive').hide();
                $('#self-drive').removeClass('animatezoomIn');
                $('#with-driver').addClass('animatezoomIn');
                $(this).addClass('active');
                $('#filter-self-drive').removeClass('active');
            });
        });
    </script>

   

@endsection

   