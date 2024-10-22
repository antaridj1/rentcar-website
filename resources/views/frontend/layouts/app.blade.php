<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sewa Mobil Matic di Bali - Lepas Kunci atau Dengan Supir (Gratis Antar ke Airport)" />
    <meta name="description" content="Sewa Mobil Matic di Bali Lepas Kunci Maupun dengan Supir! Nikmati Layanan Gratis Antar ke Ngurah Rai Airport. Bali Bagus Rentcar menyediakan mobil seperti Agya, New Brio, Jazz RS, Baleno, HRV, New Rush, Xpander, New Avanza, Raize, dan Inova Reborn.">
    <meta property="og:description" content="Sewa Mobil Matic di Bali Lepas Kunci Maupun dengan Supir! Nikmati Layanan Gratis Antar ke Ngurah Rai Airport. Bali Bagus Rentcar menyediakan mobil seperti Agya, New Brio, Jazz RS, Baleno, HRV, New Rush, Xpander, New Avanza, Raize, dan Inova Reborn." />
    <meta property="og:image" content="{{asset('frontend/images/logo-ogimage.jpg')}}" />
    <title>@yield('title')</title>
    <link rel="canonical" href="{{url('/')}}" />

    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/logo.png')}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* @font-face {
            font-family: poppins;
            src: url(fonts/poppins/Poppins-Bold.ttf);
            font-weight: bold;
        }

        @font-face {
            font-family: poppins;
            src: url(fonts/poppins/Poppins-Regular.ttf);
        } */

        @font-face {
            font-family: 'Cina Geo';
            src: url(/frontend/fonts/cina-geo/CinaGEOTest-Medium-BF64015899849c0.otf);
            font-weight: bold;
        }

        @font-face {
            font-family: 'Cina Geo';
            src: url(/frontend/fonts/cina-geo/CinaGEOTest-Regular-BF640158993b49e.otf);
        }
        
        @font-face {
            font-family: 'Cina Geo';
            src: url(/frontend/fonts/cina-geo/CinaGEOTest-Thin-BF6401589a20010.otf);
            font-weight: 100;
        }

		html {
			scroll-behavior: smooth;
		}

		.custom-scrollbar{
			height: 100px; 
			overflow-y: auto;
		}
		/* Selects the scrollbar itself */
		.custom-scrollbar::-webkit-scrollbar {
			width: 8px;  /* Custom width of the vertical scrollbar */
			height: 8px; /* Custom height of the horizontal scrollbar */
		}

		/* Selects the draggable part of the scrollbar */
		.custom-scrollbar::-webkit-scrollbar-thumb {
			background-color: darkgrey; /* Color of the thumb */
			border-radius: 6px; /* Rounded corners of the thumb */
		}

		/* Selects the part of the scrollbar track */
		.custom-scrollbar::-webkit-scrollbar-track {
			background: #f1f1f1; /* Color of the track */
			border-radius: 6px; /* Rounded corners of the track */
		}

        body {
            font-family: 'Cina Geo';
            background-color: f8f9fa;
        }

		.nav-trans {
			background-color: transparent;
			color: white;
		}

		.nav-trans .navbar-brand {
			color: white;
		}

		.navbar-toggler{
			border: 0;
		}

		.navbar-toggler-icon{
			color: white;
		}

		.nav-trans .nav-link.active{
			text-decoration: underline;
			color: white;
		}

		.nav-trans .nav-link {
			color: white;
		}

		.navbar-brand {
            font-weight: bold;
        }
            
        .navbar-white img{
            width: 50px; 
            height: 50px;
            border-radius:5px;
        }

        .jumbotron-text h1{
            color: white;
            font-size: 64px;
            font-weight: bold;
        }

        .jumbotron-text p{
            color: white;
            font-size: 20px;
            font-weight: 100;
        }

        .jumbotron-text a{
            font-weight: bold;
            font-size: 14px;
            border-radius: 50px;
            padding: 10px 40px;
        }

         h2{
            color: black;
            font-size: 48px;
            font-weight: bold;
			/* background-color: white;
			border-radius: 10px; */
        }

        .card-car {
           
          border-radius: 10px;
		  /* box-shadow: 0px 37px 50px -20px rgba(0,0,0,0.1); */
        }

        .border {
          border: 1px solid rgb(220, 220, 220) !important;
        }

        .card-car img{
          width: 100%; 
          height: 200px; 
          object-fit: cover; 
          border-radius: 10px 10px 0 0;
          filter: brightness(90%);
        }

        .category p{
          font-size: 14px;
          color: rgb(93, 93, 93);
        }

        .footer {
            background-color: black;
            color: white;
            border-radius: 15px;
            padding: 20px;
        }
        .footer a {
            text-decoration: none;
        }
        .footer a:hover {
            color: white;
            text-decoration: underline;
        }

        .footer p, .footer a {
            font-size: 14px;
            color: gray;
        }

        .footer img{
            width: 150px;
        }

        @media (max-width: 576px) {
            .jumbotron-text h1{
                font-size: 48px;
                font-weight: bold;
            }

             h2{
                font-size: 32px;
            }

            .card-car {
                width: 100%;
                border-radius: 10px;
            }

            .footer img{
                width: 80px;
            }

        }

		@media (max-width: 767px) {
			.nav-trans .navbar-collapse {
				background-color: white;
				border-radius: 10px;
			}

			.nav-trans .nav-link {
				color: gray;
			}

			.nav-trans .nav-link.active{
				text-decoration: none;
				color: black;
			}

			.navbar-brand {
				font-weight: bold;
			}

        }

        @media (max-width: 992px){
            .horizontal-links ul {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .horizontal-links ul li {
                margin: 0 10px;
                display: flex;
            }
            .horizontal-links ul li:not(:last-child):after {
                content: "|";
                color: gray;
                margin-left: 10px;
            }
		}

        @media (min-width: 576px){
        .navbar-white img{
            width:60px; 
            height:60px;
             border-radius:10px;
        }

    }

		@media (min-width: 992px){
			.container-car {
				max-width: 960px;
			}

            .card-car {
                width:300px; 
            }
		}





    </style>
    @yield('style')
</head>
<body style="background-color: #f2f2f2;" class="custom-scrollbar" >
    <input type="hidden" value="{{$user->phone}}" id="contact_phone">
    @if(!Route::is('home'))
        @include('frontend.includes.nav')
    @endif
   
    @yield('section')
    @include('frontend.includes.footer')
 
   


    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script>

        // function booking(test, tes, function(e)){
        //     e.preventDefault();
        //     var message = 'Halo, saya ingin booking mobil'
        //     var str = $('#tel').val()
        //     var phone = str.slice(1);
        //     window.open('https://wa.me/'+phone+'/?text='+message , "_blank");
        // }

		// window.addEventListener('scroll', () => {
        //     const navbar = document.getElementById('navbar');
        //     const hero = document.getElementById('hero');
        //     const cars = document.getElementById('cars');

        //     // Check if hero is at the top of the viewport
        //     if (! (window.scrollY >= hero.offsetTop && window.scrollY < cars.offsetTop)) {
        //         navbar.className = 'navbar navbar-expand-md fixed-top mt-2';
        //     } else {
        //         navbar.className = 'navbar nav-trans navbar-expand-md mt-2';
        //     }
        // });
	</script>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    function contact(){
            var message = 'Halo, saya ingin bertanya perihal rent car '
            var str = $('#contact_phone').val()
            var phone = str.slice(1);
            window.open('https://wa.me/'+phone+'/?text='+message , "_blank");
        }

</script>
  
  </body>
</html>