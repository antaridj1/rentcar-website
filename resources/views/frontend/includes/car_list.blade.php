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

            <div class="row ">
                 <a href="{{route('cars')}}" class="mt-3" style="color:black;text-decoration:none">Lihat Semua Koleksi Mobil <i class="bi bi-arrow-right"></i></a>
            </div>
           
        </div>
    </div>
    
</section>

@push('script')
    
@endpush