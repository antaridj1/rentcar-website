<section id="section2">
    <div class="section-car col-12 text-center " >
        <h2 class="pt-5 pb-3">Pilih Mobil Terbaik Kami</h2>
        <ul class="nav car-filter justify-content-center pb-5 pt-2">
            <li class="nav-item">
            <a class="nav-link active" id="filter-self-drive" aria-current="page" href="#">Lepas Kunci</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="filter-with-driver" href="#">Dengan Sopir</a>
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

            <div class="row g-3" id="with-driver">
            </div>
        </div>
    </div>
    
</section>