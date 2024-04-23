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
              <form method="post" action="{{route('car.store')}}" class="row g-3">
                @csrf
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control @error('detail') is-invalid @enderror" id="floatingTextarea" name="detail" style="height: 200px;" value="{{ @old('detail') }}"></textarea>
                    <label for="floatingTextarea">Detail Mobil</label>
                    @error('detail')
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
  @endsection