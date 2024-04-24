@extends('admin.layouts.app')
@section('section')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Mobil</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Tambah Mobil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Mobil</h5>

              <!-- Floating Labels Form -->
              <form method="post" action="{{route('car.store')}}" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingTextarea" name="name" value="{{ @old('name') }}">
                        <label for="floatingTextarea">Nama Mobil</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <input type="number" class="form-control @error('seat') is-invalid @enderror" id="floatingTextarea" name="seat" value="{{ @old('seat') }}">
                        <label for="floatingTextarea">Seat</label>
                        @error('seat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="floatingTextarea" name="price" value="{{ @old('price') }}">
                        <label for="floatingTextarea">Harga (Rp)</label>
                        @error('price')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <select class="form-select" id="is_with_driver" name="is_with_driver" aria-label="Floating label select example">
                            <option value="0">Tanpa Driver</option>
                            <option value="1">Dengan Driver</option>
                        </select>
                        <label for="is_with_driver">Keterlibatan Driver</label>
                    </div>
                </div>

                <div class="col-12 d-none">
                    <div class="form-floating">
                        <input type="number" class="form-control @error('price_with_driver') is-invalid @enderror" id="price_with_driver" name="price_with_driver" value="{{ @old('price_with_driver') }}">
                        <label for="price_with_driver">Harga Dengan Driver (Rp)</label>
                        @error('price_with_driver')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12 "> 
                    <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-12"> 
                      <input type="file" id="image" class="dropify" data-height="300" name="image" data-max-file-size="3M" data-allowed-file-extensions="jpg png jpeg" data-show-errors="true"/>
                      @error('image')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                      @enderror
                    </div>
                  </div>
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
      </div>
    </section>
  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

  <script>
   $('#is_with_driver').on('change', function(){
    if($(this).val() == '1'){  // Ensuring '1' is a string if necessary
        $('#price_with_driver').parent().parent().removeClass('d-none'); // Removed the dot before 'd-none'
    } else {
        $('#price_with_driver').parent().parent().addClass('d-none'); // Removed the dot before 'd-none'
    }
});

    // $.(document).ready(function({
    //     $
    // }));
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<script>
  $('.dropify').dropify();
</script>

  @endsection