<header>
    <div class="row" id="hero" style="position: relative;">
        <div class="col-12 jumbotron d-flex align-items-center" style="padding: 0px; height: 97vh; position: relative;">
            @include('frontend.includes.navbar')
            <div class="jumbotron-text text-center text-md-start col-12 col-md-9 col-lg-8 p-2 p-md-5" style="position: absolute; z-index: 9;">
                <h1>Sewa Mobil Matic di Bali</h1>
                <p class="my-3">Sewa mobil matic di Bali, murah dan fleksibel. Pilihan lepas kunci atau dengan sopir</p>
                <a href="{{route('home')}}#cars" class="btn btn-primary btn-lg btn-light mt-4">Booking Sekarang</a>
            </div>
            <img src="{{asset('frontend/images/car5.webp')}}" style="position:relative; width: 100%;height: 100%; object-fit: cover; border-radius: 10px; filter: brightness(50%);" alt="">
        </div>
    </div>
</header>