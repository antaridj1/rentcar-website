@extends('admin.layouts.app')
@section('section')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Admin</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Admin</li>
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
                <h5 class="card-title">Form Admin</h5>
              <!-- Floating Labels Form -->
              <form method="post" action="{{route('profile.update',$user->id)}}" class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" id="name" name="name" value="{{ @old('name') }}">
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" id="email" name="email" value="{{ @old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ @old('password') }}">
                        <label for="password">Password</label>
                        <span style="color: grey; font-size:12px">Kosongkan jika tidak ingin mengubah password</span>
                        @error('password')
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