<header>
    <div class="row" id="hero" style="position: relative;">
        <div class="col-12 jumbotron d-flex align-items-center" style="padding: 0px; height: 97vh; position: relative;">
            @include('frontend.includes.navbar')
            <div class="jumbotron-text text-center text-md-start col-12 col-md-9 col-lg-8 p-2 p-md-5" style="position: absolute; z-index: 9;">
                <h1>The Best Rent Car in Bali</h1>
                <p class="my-3">Menyediakan mobil sewaan terbaik untuk anda dan keluarga</p>
                <button type="button" class="btn btn-primary btn-lg btn-light mt-4">Contact Us</button>
            </div>
            <img src="{{asset('frontend/images/car5.webp')}}" style="position:relative; width: 100%;height: 100%; object-fit: cover; border-radius: 10px; filter: brightness(50%);" alt="">
        </div>
    </div>
</header>