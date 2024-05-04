<div class="container-fluid px-3" style="position: fixed; z-index:1000; top:0.5rem; ">
    <nav class="navbar navbar-expand-md col-12 " id="navbar" style=" background-color:white; border-radius:10px;box-shadow: 0px 37px 50px -20px rgba(106, 106, 106, 0.1);" >
        <div class="container-fluid px-3 px-md-5">
            <img src="{{asset('frontend/images/logo.png')}}" alt="" class="test" >
        <!-- <a class="navbar-brand" href="#">BALI BAGUS 78</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list" style="color: black;"></i>
        </button>
        <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarSupportedContent2">
            <ul class="navbar-nav mb-2 mb-lg-0 ">
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link {{Route::is('home')? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Beranda</a>
            </li>
            <li class="nav-item ps-2 px-md-3">
                <a class="nav-link {{Route::is('cars') || Route::is('detail') ? 'active' : ''}}" >Koleksi Mobil</a>
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
</div>