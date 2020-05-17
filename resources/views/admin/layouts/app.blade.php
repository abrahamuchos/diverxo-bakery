<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Admin |@yield('title')</title>

	<!-- Scripts -->

	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<!-- Styles -->
	{{-- Material Design Bootstrap --}}
	<link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
	@yield('styles')
</head>
<body>
<div id="app">
	<nav class="navbar navbar-expand-md navbar-dark shadow-sm">
		<div class="container">
			<a class="navbar-brand"
				 href="{{ route('dashboard')}}">
				<img src="{{ asset('image/svg/Alternos-Horizontal-02.svg') }}" alt="Alternos logo" width="150px">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">

				</ul>

				@auth()
					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav">
						{{--<li class="nav-item pr-md-3">--}}
							{{--<a class="nav-link text-center text-md-left" href="{{ route('dashboard') }}">Dashboard</a>--}}
						{{--</li>--}}
						<li class="nav-item pr-md-3">
							<a class="nav-link text-center text-md-left" href="{{--{{ route('admin.category.index') }}--}}">Category</a>
						</li>
						<li class="nav-item pr-md-3">
							<a class="nav-link text-center text-md-left" href="{{--{{ route('admin.blog.index') }}--}}">Posts</a>
						</li>
						<li class="nav-item pr-md-3">
							<a class="nav-link text-center text-md-left" href="{{--{{ route('admin.user.index') }}--}}">Users</a>
						</li>

						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link text-center text-md-left dropdown-toggle" href="/#" role="button" data-toggle="dropdown"
								 aria-haspopup="true" aria-expanded="false" v-pre>
								@if(Auth::user()->gender == 1)
									<img src="{{ asset('image/svg/man.svg') }}" alt="Avatar" class="md-avatar rounded-circle mr-md-1">
								@else
									<img src="{{ asset('image/svg/girl.svg') }}" alt="Avatar" class="md-avatar rounded-circle mr-md-1">
								@endif
								{{ Auth::user()->name }} <span class="caret"></span>

							</a>

							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{--{{ route('admin.user.show', Auth::user()->id) }}--}}">Edit Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{--{{ route('logout') }}--}}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{--{{ route('logout') }}--}}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>

					</ul>

				@endauth

			</div>
		</div>
	</nav>

	<main class="py-4">
		@yield('content')
	</main>
</div>

{{-- Footer --}}
<footer class="page-footer pt-0 mt-5 rgba-stylish-light">
	{{-- Copyright --}}
	<div class="footer-copyright py-3 text-center">
		<div class="container-fluid">
			© 2019 Copyright: <a href="http://wayuinc.com" target="_blank"> wayuinc.com </a>
		</div>
	</div>
</footer>
{{-- Footer --}}

{{-- SCRIPTS --}}
{{-- JQuery --}}
<script type="text/javascript" src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
{{-- Bootstrap tooltips --}}
<script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
{{-- Bootstrap core JavaScript --}}
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
{{-- MDB core JavaScript --}}
<script type="text/javascript" src="{{ asset('/js/vendor/mdb.min.js') }}"></script>

@yield('scripts')

</body>
</html>