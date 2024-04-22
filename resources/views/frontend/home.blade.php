   @extends('frontend.layouts.app')
   @section('section')
   @include('frontend.includes.header')
   <section id="section2">
    <div class="section-car col-12 text-center" >
        <h2 class="py-5">Choose Your Car</h2>
    </div>
    <div class="container container-car">
        <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
            
                <div class="card card-car border-0 p-2">
                    <img src="{{asset('frontend/images/car7.jpg')}}" alt="...">
                    <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                    <div class="card-body">
                        <div class="category d-flex justify-content-between">
                            <p class="me-3"><i class="bi bi-person "></i> 4 seat</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                        </div>
                        <h5 class="card-title" style="font-weight: bold;">Toyota Avanza</h5>
                        <div class="d-flex">
                            <p style="font-weight: bold; font-size: 14px;">Rp250.000</p><p style="font-size: 14px; color: grey;">/ Day</p>
                        </div>  
                        
                        <div class="row ">
                            <div class="col-6">
                                <a href="#" class="btn btn-light col-12 border" style="border-radius: 15px; border: 1px solid grey;"><i class="bi bi-eye"></i> View</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            
                <div class="card card-car border-0 p-2">
                    <img src="{{asset('frontend/images/car5.jpeg')}}" alt="...">
                    <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                    <div class="card-body">
                        <div class="category d-flex justify-content-between">
                            <p class="me-3"><i class="bi bi-person "></i> 4 seat</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                        </div>
                        <h5 class="card-title" style="font-weight: bold;">Toyota Avanza</h5>
                        <div class="d-flex">
                            <p style="font-weight: bold; font-size: 14px;">Rp250.000</p><p style="font-size: 14px; color: grey;">/ Day</p>
                        </div>  
                        
                        <div class="row ">
                            <div class="col-6">
                                <a href="#" class="btn btn-light col-12 border" style="border-radius: 15px; border: 1px solid grey;"><i class="bi bi-eye"></i> View</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            
                <div class="card card-car border-0 p-2">
                    <img src="{{asset('frontend/images/car6.webp')}}" alt="...">
                    <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                    <div class="card-body">
                        <div class="category d-flex justify-content-between">
                            <p class="me-3"><i class="bi bi-person "></i> 4 seat</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                            <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                        </div>
                        <h5 class="card-title" style="font-weight: bold;">Toyota Avanza</h5>
                        <div class="d-flex">
                            <p style="font-weight: bold; font-size: 14px;">Rp250.000</p><p style="font-size: 14px; color: grey;">/ Day</p>
                        </div>  
                        
                        <div class="row ">
                            <div class="col-6">
                                <a href="#" class="btn btn-light col-12 border" style="border-radius: 15px; border: 1px solid grey;"><i class="bi bi-eye"></i> View</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            
            <div class="card card-car border-0 p-2">
                <img src="images/car6.webp" alt="...">
                <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                <div class="card-body">
                    <div class="category d-flex justify-content-between">
                        <p class="me-3"><i class="bi bi-person "></i> 4 seat</p>
                        <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                        <p class="me-3"><i class="bi bi-speedometer2"></i> Matic</p>
                    </div>
                    <h5 class="card-title" style="font-weight: bold;">Toyota Avanza</h5>
                    <div class="d-flex">
                        <p style="font-weight: bold; font-size: 14px;">Rp250.000</p><p style="font-size: 14px; color: grey;">/ Day</p>
                    </div>  
                    
                    <div class="row ">
                        <div class="col-6">
                            <a href="#" class="btn btn-light col-12 border" style="border-radius: 15px; border: 1px solid grey;"><i class="bi bi-eye"></i> View</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-dark col-12" style="border-radius: 15px;"><i class="bi bi-whatsapp"></i> Book</a>
                        </div>
                    </div>
                
                </div>
            </div>
        
    </div>
       </div>
    </div>

</section>
   @endsection

   