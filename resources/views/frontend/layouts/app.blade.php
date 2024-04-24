<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bali Bagus 78 | Sewa Mobil Bali</title>
	<link rel="icon" type="image/x-icon" href="{{asset('frontend/images/logo.png')}}">
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
            src: url(frontend/fonts/cina-geo/CinaGEOTest-Medium-BF64015899849c0.otf);
            font-weight: bold;
        }

        @font-face {
            font-family: 'Cina Geo';
            src: url(frontend/fonts/cina-geo/CinaGEOTest-Regular-BF640158993b49e.otf);
        }
        
        @font-face {
            font-family: 'Cina Geo';
            src: url(frontend/fonts/cina-geo/CinaGEOTest-Thin-BF6401589a20010.otf);
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

        .jumbotron-text button{
            font-weight: bold;
            font-size: 14px;
            border-radius: 50px;
            padding: 10px 40px;
        }

        .section-car h2{
            color: black;
            font-size: 48px;
            font-weight: bold;
			/* background-color: white;
			border-radius: 10px; */
        }

        .card-car {
          max-width:300px; 
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

        @media only screen and (max-width: 576px) {
            .jumbotron-text h1{
                font-size: 48px;
                font-weight: bold;
            }

        }

		@media only screen and (max-width: 767px) {
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

		@media (min-width: 992px){
			.container-car {
				max-width: 960px;
			}
		}


    </style>
    @yield('style')
  </head>
  <body style="background-color: #f2f2f2;" class="custom-scrollbar" >
    <div class="container-fluid px-4 py-2">
        @yield('section')
        @include('frontend.includes.footer')
    </div>

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

	<script>
// 		window.addEventListener('scroll', () => {
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
  
  </body>
</html>