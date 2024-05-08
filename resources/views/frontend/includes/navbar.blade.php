<nav class="navbar nav-trans navbar-expand-md col-12 animate__animated animate__fadeInLeft" id="navbar" style="position: absolute; z-index: 10; top: 0;" >
    <div class="container-fluid px-3 px-md-5">
        <img src="{{asset('frontend/images/logo.png')}}" alt="bali bagus rentcar" style="width: 70px; height: 70px;" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list" style="color: white;"></i>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ">
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link {{Route::is('home')? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Beranda</a>
            </li>
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link {{Route::is('cars') || Route::is('detail') ? 'active' : ''}}" href="{{route('cars')}}" >Koleksi Mobil</a>
            </li>
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link {{Route::is('about')? 'active' : ''}}" href="{{route('about')}}">Tentang Kami</a>
            </li>
            <li class="nav-item ps-2">
                <a class="nav-link {{Route::is('contact')? 'active' : ''}}" href="{{route('contact')}}">Kontak</a>
            </li>
        
        </ul>
    
    </div>
    </div>
</nav>