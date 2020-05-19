<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} |@yield('title')</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield('styles')

</head>
<body>
<div id="app">
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('img/svg/logo-blanco.svg') }}" alt="Diverxio Bakery">
			</a>
			<button class="navbar-toggler d-flex d-lg-none flex-column align-items-center justify-content-center"
							type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="hamburger-icon-short"></span>
				<span class="hamburger-icon"></span>
				<span class="hamburger-icon-short"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto d-lg-flex justify-content-around ">

					<li class="nav-item active text-center">
						<a class="nav-link" href="#">Home</a>
					</li>

					<li class="nav-item text-center">
						<a class="nav-link" href="#">Category</a>
					</li>

					<li class="nav-item text-center">
						<a class="nav-link" href="#">Shop</a>
					</li>

					<!-- Authentication Links -->
					@guest
						<li class="nav-item text-center">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item text-center">
								<a class="btn btn-outline-secondary" href="{{ route('register') }}">{{ __('Sign up') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								 aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest

					<li class="nav-item text-center">
						<a class="nav-link p-0" href="#">
							<img class="nav-cart" src="{{asset('img/svg/carrito.svg') }}" alt="Carrito">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main class="">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			<div class="row">

				<div class="footer-brand col-12 col-lg-3 text-center">
					<img src="{{ asset('img/svg/logo-blanco.svg') }}" alt="Logo Bakery">
				</div>

				<div class="footer-caption col-12 col-lg-5 mt-3 mt-lg-0 d-flex flex-column flex-lg-row justify-content-center align-items-center ">
					<p>1999-2020, DiverxoBakery.com, Inc.</p>
					<p><a href="#" class="ml-lg-4">Terms and conditions</a></p>
				</div>

				<div class="footer-social col-12 col-lg-4 d-flex flex-row justify-content-around align-items-center">
					<a href="#"><img src="{{ asset('img/svg/facebook.svg') }}" alt="Facebook"></a>
					<a href=""><img src="{{ asset('img/svg/Linkeding.svg') }}" alt="Linkedin"></a>
					<a href=""><img src="{{ asset('img/svg/instagram.svg') }}"alt="Instagram"></a>
					<a href=""><img src="{{ asset('img/svg/twitter.svg') }}"alt="Twitter"></a>
				</div>

				<div class="footer-wayu col-10 offset-1 mt-4 text-center">
					<p class="mt-2">Powered by <strong>WAYU INC</strong></p>
				</div>

			</div>
		</div>
	</footer>

</div>
</body>
</html>

{{-- SCRIPTS --}}
{{-- JQuery --}}
<script type="text/javascript" src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
{{-- Bootstrap tooltips --}}
<script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
{{-- Bootstrap core JavaScript --}}
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
@yield('scripts')
