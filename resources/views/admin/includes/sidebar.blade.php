<aside id="sidebar" class="sidebar">

	<ul class="sidebar-nav" id="sidebar-nav">

		<li class="nav-item">
			<a class="nav-link {{Request::is('dashboard') || Request::is('profile')? '' : 'collapsed'}}" href="{{route('dashboard')}}">
				<i class="bi bi-house-door"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link {{Route::is('car.*')? '' : 'collapsed'}}" href="{{route('car.index')}}">
				<i class="bi bi-journal-text"></i>
				<span>Mobil</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link {{Route::is('website.edit')? '' : 'collapsed'}}" href="{{route('website.edit')}}">
				<i class="bi bi-journal-text"></i>
				<span>Edit Website</span>
			</a>
		</li>


	</ul>

</aside><!-- End Sidebar-->