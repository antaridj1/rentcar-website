@extends('admin.layouts.app')
@section('section')

<main id="main" class="main">
    <div class="pagetitle">   
        <h1>Mobil</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Mobil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
		<div class="row">
			<!-- Recent Sales -->
			<div class="col-12">
				{{-- @if(session()->has('status'))
					<div class="alert alert-{{(session()->get('status') == 'success')? 'success' : 'danger'}} alert-dismissible fade show" role="alert">
						{{session()->get('message')}}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif --}}
				<div class="card recent-sales overflow-auto">
					<div class="card-body">
						<div class="d-flex justify-content-between">
							<h5 class="card-title">Mobil</h5>
							<a href="{{route('car.create')}}" class="btn btn-primary rounded-pill m-3"> <i class="bi bi-plus-circle"></i> Tambah Mobil</a>
						</div>
						@include('admin.car._table')
					</div>

				</div>
			</div><!-- End Recent Sales -->
		</div>
    </section>
    {{-- @if(session()->has('status'))
      @include('layout.alert')
    @endif --}}
  </main><!-- End #main -->
  @endsection