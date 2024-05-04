<div class="container-fluid p-2">
    <div class="row" id="hero" style="height: calc(100vh - 1rem);">
        <div class="col-12 jumbotron d-flex align-items-center" style="height: 100%; padding: 0; position: relative;">
            @include('frontend.includes.navbar')
            <div class="jumbotron-text text-center text-md-start col-12 col-md-9 col-lg-8 p-2 p-md-5" style="position: absolute; z-index: 9;">
                <h1 class="animate__animated animate__fadeInLeftBig">Sewa Mobil Matic di Bali</h1>
                <p class="my-3 animate__animated animate__fadeInLeftBig">Sewa mobil matic di Bali, murah dan fleksibel. Pilihan lepas kunci atau dengan sopir</p>
                <a href="{{route('home')}}#cars" class="btn btn-primary btn-lg btn-light mt-4 animate__animated animate__zoomIn">Booking Sekarang</a>
            </div>
            <img src="{{asset('frontend/images/car5.webp')}}" style="position:relative; width: 100%;height: 100%; object-fit: cover; border-radius: 10px; filter: brightness(50%);" alt="">
        </div>
    </div>
</div>
