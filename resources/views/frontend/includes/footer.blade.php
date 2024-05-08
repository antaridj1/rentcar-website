

<div class="container-fluid p-2 ">
    <footer class="footer">
        <div class="row p-4 g-3 g-lg-5 text-center text-lg-start">
            <div class="col-lg-2">
                <img src="{{asset('frontend/images/logo.png')}}" alt="" >
            
            </div>
            <div class=" col-lg-4 d-flex justify-content-center">
                <div class="ps-lg-3">
                    <h5>BALI BAGUS RENT CAR</h5>
                    <p>Penyewaan mobil terkemuka yang menawarkan beragam pilihan mobil khusus matic di Bali. Kami menyediakan layanan sewa mobil dengan supir atau lepas kunci, sesuai dengan kebutuhan Anda.</p>
                </div>
            </div>
            <div class="col-lg-2 mb-3 mb-md-0 d-flex justify-content-center">
                <div class=" horizontal-links">
                    <h5>Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}">Beranda</a></li>
                        <li><a href="{{route('cars')}}">Koleksi Mobil</a></li>
                        <li><a href="{{route('about')}}">Tentang Kami</a></li>
                        <li><a href="{{route('contact')}}">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-md-0 d-flex justify-content-center">
                <div class=" horizontal-links">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{$user->maps_link}}"><i class="bi bi-geo-alt"></i> {{$user->address}}</a></li>
                        <li><a href="{{$user->instagram_link}}"><i class="bi bi-instagram"></i> {{$user->instagram_username}}</a></li>
                        <li><a href="#" onclick="contact()"><i class="bi bi-whatsapp"></i> {{$user->phone}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="copyright">&copy; 2024 Bali Bagus Rent Car. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</div>