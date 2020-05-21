@extends('layouts.app')

@section('styles')
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.green.min.css') }}" rel="stylesheet">
@endsection

@section('title')
	Home
@endsection

@section('content')
	<section id="hero"></section>

	<section id="category" class="mt-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="col-lg-12 p-0 grid-margin stretch-card">
						<div class="owl-carousel">
							@forelse($categories as $category)
								<div class="item">
									<div class="slide-item owl-lazy" data-src="{{ asset($category->medias->first()->src) }}">
										<p class="slide-caption">{{ $category->name }}</p>
										<a class="slide-cta btn btn-outline-secondary" href="#">View more</a>
									</div>
								</div>
							@empty
								<h1>Upss You may add categories with images</h1>
							@endforelse
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="about-us" class="container-fluid">
		<div class="row">
			<div class="col-8 offset-2 text-center">
				<h1 class="title-1">About us</h1>
			</div>
			<div class="col-2 p-0">
				<img src="{{ asset('img/svg/trigo1.svg') }}" alt="trigo" class="w-100">
			</div>
			<div class="col-2 p-0 d-flex align-items-end">
				<img src="{{ asset('img/svg/trigo2.svg') }}" alt="trigo" class="w-100">
			</div>
			<div class="col-8 text-center">
				<p class="col-12 col-md-6 offset-md-3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in ante nec ex congue ullamcorper eu ut
					tortor.
					Aenean egestas scelerisque maximus. Nulla facilisi. Morbi pulvinar enim vitae massa efficitur, non feugiat
					ligula
					elementum.
				</p>
			</div>
		</div>


	</section>

	<section id="products">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mb-5">
					<h1 class="title-1 text-center">Featured Product</h1>
				</div>
				<div class="owl-carousel">
					@forelse($products as $product)
						<div class="card ml-3">
							<img class="card-img-top" src="{{ asset('Uploads/Products/pan.jpg') }}" alt="Card image cap">
							<div class="card-body">
								<div class="row">
									{{-- Product name and price --}}
									<div class="col-8">
										<h5 class="card-title title-muted font-weight-bold truncate">{{ $product->name }}</h5>
									</div>
									<div class="col-4 text-center">
										@if($product->old_price)
											<span class="text-line-through text-muted">${{ $product->old_price }}</span>
										@else
											<span class="text-line-through text-muted"></span>
										@endif

										<span class="title-muted font-weight-bold">${{ $product->price }}</span>
									</div>
									{{--/End Product name and price --}}
									{{--Product  size, volume, weight --}}
									@if($product->size)
										<div class="col-12">
											<p class="text-muted">{{'Size '. $product->size.''. $product->sizeUnit->value }}</p>
										</div>
									@elseif($product->weight)
										<div class="col-12">
											<p class="text-muted">{{'Weight '. $product->weight.''. $product->weightUnit->value }}</p>
										</div>
									@elseif($product->volume)
										<div class="col-12">
											<p class="text-muted">{{'Volume '. $product->volume.''.$product->volumeUnit->value }}</p>
										</div>
									@endif
									{{--/End Product size, volume, weight --}}

									{{-- Cta--}}
									<div class="col-6">
										<a href="#" class="btn btn-outline-tertiary col-12">View more</a>
									</div>
									<div class="col-6">
										@if ($product->stock > 0)
											<form class="col-12 p-0" action="{{ route('cart.store', $product) }}" method="POST">
												{{ csrf_field() }}
												<button type="submit" class="btn btn-outline-primary col-12">Add to Cart</button>
											</form>
										@else
											<a href="#" class="btn btn-outline-primary col-12 disabled">Add cart</a>
										@endif
									</div>
									{{--/End Cta--}}
								</div>


							</div>
						</div>
					@empty
						<h1>Upss you may add products</h1>
					@endforelse
				</div>

			</div>
		</div>

	</section>

	<section id="contact-us">
		<div class="container mt-5">
			<div class="row">
				<h1 class="col-12 title-1 text-center text-lg-left">CONTACT US</h1>
				<div class="col-lg-6 text-center text-lg-left">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in ante nec ex congue ullamcorper eu ut
						tortor.
						Aenean egestas scelerisque maximus. Nulla facilisi. Morbi pulvinar enim vitae massa efficitur, non feugiat
						ligula
						elementum.
					</p>
				</div>
			</div>
		</div>

		<div id="maps" class="container-fluid">
			<div class="row">

				<div class="col-12 col-md-6 col-lg-7">
					<div id="map"></div>
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<div class="card" id="card-contact">
						<div class="card-body">
							<form id="fContactUs" action="{{ route('email.contact-us') }}" method="POST" class="container">
								@csrf
								<div class="row">
									<div class="form-group col-12 mb-5">
										<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" autofocus maxlength="75">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group col-12 mb-5">
										<input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name">
									</div>
									<div class="form-group col-12 mb-5">
										<input type="text" class="form-control" id="phonenumber" name="phonenumber" aria-describedby="PhoneHelp" placeholder="Phone Number">
									</div>
									<div class="form-group col-12 mb-5">
										<input type="text" class="form-control" id="message" name="message" aria-describedby="messageHelp" placeholder="Message">
									</div>
								</div>
								<div class="col-8 offset-2">
									<button id="btn-success" type="button" class="btn btn-outline-primary w-100">Send</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</section>

	<div id="modalContactSuccess" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Successful !!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>The message was sent successfully, soon one of our executives will contact you.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary px-5" data-dismiss="modal">Ok!</button>
				</div>
			</div>
		</div>
	</div>

	<div class="margin"></div>


@endsection

@section('scripts')
	{{-- OwlCarousel --}}
	<script type="text/javascript" src="{{ asset('/js/vendor/owl.carousel.min.js') }}"></script>

	<script>
    $(document).ready(function() {
			let windowWidth = $(window).width();
      let cardHeight = $("#card-contact").height();
      $(".owl-carousel").owlCarousel({
        autoPlay: 3000,
        lazyLoad:true,
        items : 1,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        center: true,
        nav:true,
        loop:true,
        responsive: {
          0:{
            items: 1
					},
          768: {
            items: 2
          },
          992:{
            items: 4
					}

        }

      });

      if(windowWidth > 991){
      	$('#map').css('height', (cardHeight - 80))
			}else{
        $('#map').css('height', cardHeight)
			}

      $(document).on('click', '#btn-success', function () {
        contactUsMail();
      });


      function contactUsMail() {
        const form = $('#fContactUs');

        //  Ajax Petition
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
          }
        });

        $.ajax({
          data:{
            email: $('#email').val(),
						name: $('#name').val(),
						phonenumber: $('#phonenumber').val(),
						message: $('#message').val(),
					},
          type: form.attr('method'),
          url: form.attr('action'),
          success: function (response) {
            $('#modalContactSuccess').modal('show')
          },
          error: function (request, status, error) {
						console.log('Error!!', error)
          }
        });
      }


    });
	</script>

	{{-- Google Maps--}}
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYH8-bg4dKYolktWGdZDHIYPEpdZA7i7Y&callback=initMap" async defer></script>
	<script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      });
    }
	</script>
@endsection
