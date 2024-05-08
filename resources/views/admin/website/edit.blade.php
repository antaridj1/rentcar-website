@extends('admin.layouts.app')
@section('section')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Informasi Website</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Informasi Webiste</li>
            </ol>
        </nav>
        @include('admin.includes.alert')
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title pb-0">Form Website</h5>
                <p class="mb-4">Mengubah data ini akan mengubah informasi yang tercantum pada landing page</p>
              <!-- Floating Labels Form -->
              <form method="post" action="{{route('website.update')}}" class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{$user->address}}" id="address" name="address" value="{{ @old('address') }}">
                        <label for="address">Alamat</label>
                        @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" id="phone" name="phone" value="{{ @old('phone') }}">
                        <label for="phone">Telp (WA)</label>
                        <span style="color: grey; font-size:12px">Contoh: +62xxxxxxxxxxx</span>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('instagram_username') is-invalid @enderror" value="{{$user->instagram_username}}" id="instagram_username" name="instagram_username" value="{{ @old('instagram_username') }}">
                        <label for="instagram_username">Instagram Username</label>
                        <span style="color: grey; font-size:12px">Contoh: @contoh123</span>
                        @error('instagram_username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('instagram_link') is-invalid @enderror" value="{{$user->instagram_link}}" id="instagram_link" name="instagram_link" value="{{ @old('instagram_link') }}">
                        <label for="instagram_link">Instagram Link</label>
                        @error('instagram_link')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('maps_link') is-invalid @enderror" value="{{$user->maps_link}}" id="maps_link" name="maps_link" value="{{ @old('maps_link') }}">
                        <label for="maps_link">Link Google Maps</label>
                        @error('maps_link')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('embed_maps') is-invalid @enderror" value="{{$user->embed_maps}}" id="embed_maps" name="embed_maps" value="{{ @old('embed_maps') }}">
                        <label for="embed_maps">Embed Google Maps</label>
                        <span style="color: grey; font-size:12px">Website Google Maps > Bagikan > Sematkan Peta > Salin HTML</span>
                        @error('embed_maps')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-left">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- End floating Labels Form -->

            </div>
          </div>
      </div>
    </section>
  </main><!-- End #main -->
  @endsection