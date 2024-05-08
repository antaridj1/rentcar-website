

   <div class="col-12 text-center " >
        <div class="row pt-5 pb-3 pb-md-5">
            <h2 class="col-12 animate__animated animate__zoomIn">Hubungi Kami</h2>
            <p class="col-12 animate__animated animate__zoomIn" style="color:grey;">Anda dapat menghubungi kami kapanpun. Kami siap membantu Anda untuk mendapatkan pengalaman menyewa mobil yang sempurna di Bali.</p>
        </div>
      
        <div class="">
            <div class="row g-3">

                <div class="col-12 col-md-4">
                    <div class="card border-0 p-2 animate__animated animate__zoomIn">
                        
                        <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                        <div class="card-body text-start">
                            <div class="text-start mb-5" >
                                <i class="bi bi-whatsapp shadow-sm "style="border: 1px solid rgb(200, 200, 200); padding:8px 10px; border-radius:5px; "></i>
                            </div>
                             <h5 class="card-title" style="font-weight: bold;">Whatsapp</h5>
                            <p class="" style="color:grey; font-size:14px">Hubungi kami kapan saja melalui whatsapp</p>
                            <p class=""><a style="color:black; font-size:14px" onclick="contact()" href="#"> {{$user->phone}}</a></p>
                            <input type="hidden" id="tel" value="{{$user->tel}}">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card border-0 p-2 animate__animated animate__zoomIn">
                        
                        <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                        <div class="card-body text-start">
                            <div class="text-start mb-5" >
                                <i class="bi bi-instagram shadow-sm "style="border: 1px solid rgb(200, 200, 200); padding:8px 10px; border-radius:5px; "></i>
                            </div>
                             <h5 class="card-title" style="font-weight: bold;">Instagram</h5>
                            <p class="" style="color:grey; font-size:14px">Hubungi melalui direct message Instagram kami</p>
                            <p class=""> <a style="color:black; font-size:14px" href="{{$user->instagram_link}}"> {{$user->instagram_username}}</a></p>
                                
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card border-0 p-2 animate__animated animate__zoomIn">
                        
                        <!-- <div style="background-color: white; position: absolute; z-index: 9; right: 0;" class="m-0 p-1">IDR250K</div> -->
                        <div class="card-body text-start">
                            <div class="text-start mb-5" >
                                <i class="bi bi-geo-alt shadow-sm "style="border: 1px solid rgb(200, 200, 200); padding:8px 10px; border-radius:5px; "></i>
                            </div>
                             <h5 class="card-title" style="font-weight: bold;">Kunjungi Kami</h5>
                            <p class="" style="color:grey; font-size:14px">Kunjungi langsung ke Bali Bagus Rentcar</p>
                            <p class=""> <a style="color:black; font-size:14px" href="{{$user->maps_link}}">Lihat Google Maps</a></p>
                                
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
