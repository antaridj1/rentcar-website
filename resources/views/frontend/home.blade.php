   @extends('frontend.layouts.app')
   @section('style')
    <style>
        .car-filter .nav-link.active{
            background-color: rgb(62, 62, 62);
            color: white;
            border-radius: 50px;
        }

        .car-filter .nav-link{
            /* background-color: #e7e7ea;; */
            color: gray;
            /* border: 1px solid gray;
            border-radius: 50px; */
        }
    </style>
   @endsection
   @section('section')
    @include('frontend.includes.header')
    <section id="section2">
        <div class="section-car col-12 text-center" >
            <h2 class="pt-5">Pilih Mobil Terbaik Kami</h2>
            <ul class="nav car-filter justify-content-center pb-5 pt-2">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Lepas Kunci</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dengan Supir</a>
                </li>
              </ul>
            
            <div class="container container-car">
                <div class="row g-3" id="self-drive">
                    {{-- @forelse ($cars as $car)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card card-car border-0 p-2">
                                <img src="{{$car->image_link}}" alt="...">
                                <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                                <div class="card-body">
                                    <div class="category d-flex justify-content-between">
                                        <p class="me-3"><i class="bi bi-person "></i> {{$car->seat}} Penumpang</p>
                                    </div>
                                    <h5 class="card-title text-start" style="font-weight: bold;">{{$car->name}}</h5>
                                    <div class="d-flex">
                                        <p style="font-weight: bold; font-size: 14px;">Rp{{number_format($car->price)}}</p><p style="font-size: 14px; color: grey;"> / Hari</p>
                                    </div>  
                                    
                                        <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        Mobil tidak tersedia
                    @endforelse --}}
                   
                </div>
            </div>
        </div>

    </section>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        let url = `{{route('get-self-drive-car')}}`
        var result = '';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) { 
                    // var load = $('#view_more').data('load');
                    
                    if (response['data'].length !== 0) {
                        var datas = response['data'];
                        

                        $.each(datas, function (index, car) {
                            result += 
                                `<div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-car border-0 p-2">
                                        <img src="${car.image_link}" alt="...">
                                        <div class="card-body">
                                            <div class="category d-flex justify-content-between">
                                                <p class="me-3"><i class="bi bi-person "></i> ${car.seat} Penumpang</p>
                                            </div>
                                            <h5 class="card-title text-start" style="font-weight: bold;">${car.name}</h5>
                                            <div class="d-flex">
                                                <p style="font-weight: bold; font-size: 14px;">Rp${car.price}</p><p style="font-size: 14px; color: grey;"> / Hari</p>
                                            </div>  
                                            
                                            <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                                        </div>
                                    </div>
                                </div>
                                `
                           
                        });
                        $('#self-drive').show();
                        $('#self-drive').html(result);
                        $('#no_data').hide();
                    
                        // if(response['data'].length > 9){
                        //     $('#view_more').show();
                        // } else {
                        //     $('#view_more').hide();
                        // }
                        
                    } else {
                        $('#self-drive').hide();
                        $('#no_data').show()
                    }
                
                }
            });
            console.log(result)

    </script>

   @endsection

   