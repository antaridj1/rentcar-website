<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link {{Request::is('dashboard') || Request::is('profile')? '' : 'collapsed'}}" href="{{route('dashboard')}}">
				<i class="bi bi-house-door"></i>
				<span>Dashboard</span>
			</a>
		</li>

		{{-- <li class="nav-item">
			<a class="nav-link {{Route::is('laporan.create')? '' : 'collapsed'}}" href="{{route('laporan.create')}}">
				<i class="bi bi-pencil"></i>
				<span>Buat Booking</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link {{Route::is('laporan.edit', 'laporan.index', 'laporan.show')? '' : 'collapsed'}}" href="{{route('laporan.index')}}">
				<i class="bi bi-journal-text"></i>
				<span>Mobil</span>
			</a>
		</li> --}}


	</ul>

</aside><!-- End Sidebar-->