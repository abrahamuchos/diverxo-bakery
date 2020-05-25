@extends('layouts.app')

@section('title')
	{{ $product->name }}
@endsection
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/zoomy.css') }}">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.green.min.css') }}" rel="stylesheet">
@endsection

@section('content')
	{{-- Messages and errors--}}
	<div class="container">
		<div class="row mt-3">
			<div class="col-12">
				@if (session()->has('successMessage'))
					<div class="alert alert-success">
						{{ session()->get('successMessage') }}
					</div>
				@endif
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
		</div>
	</div>
	{{--/End Messages and errors--}}
	<section id="ProductDetail" class="container mt-3">
		<div class="row product-header">
			<div class="col-12 col-md-6">
				<div id="myGallery"></div>
			</div>
			{{-- Product Header --}}
			<div class="col-12 col-md-6">
				<h1 class="title-2">{{ $product->name }}</h1>
				<div class="col-12 pl-0 stars">
					<img src="{{ asset('img/svg/estrella-llena.svg') }}" alt="Star all">
					<img src="{{ asset('img/svg/estrella-llena.svg') }}" alt="Star all">
					<img src="{{ asset('img/svg/estrella-llena.svg') }}" alt="Star all">
					<img src="{{ asset('img/svg/estrella-llena.svg') }}" alt="Star all">
					<img src="{{ asset('img/svg/estrella-vacia.svg') }}" alt="Star">
				</div>
				<div class="col-12 mt-3 pl-0 product-header-info">
					@if($product->size)
						<p class="title-3">Size:{{ ' '.$product->size.''. $product->sizeUnit->value }}</p>
					@elseif($product->weight)
						<p class="title-3">Weight:{{ ' '.$product->weight.''. $product->weightUnit->value }}</p>
					@elseif($product->volume)
						<p class="title-3">Volume:{{ ' '.$product->volume.''.$product->volumeUnit->value }}</p>
					@endif
				</div>
				{{-- CTA --}}
				<div class="col-12 d-flex mt-5">
					@if ($product->stock > 0)
						<form class="col-5" action="{{ route('cart.store', $product) }}" method="POST">
							{{ csrf_field() }}
							<button type="submit" class="btn btn-outline-primary col-12">Add to Cart</button>
						</form>
					@endif
					<form class="col-5" action="{{ route('wishlist.store', $product) }}" method="POST">
						{{ csrf_field() }}
						<button type="submit" class="btn btn-outline-tertiary col-12">Add to list</button>
					</form>
						{{--<a href="#" class="btn btn-outline-tertiary col-5 offset-1">Add to list</a>--}}
				</div>
				{{--/end CTA --}}
				{{-- Predescription--}}
				<article class="col-12 mt-3">
					<p>{{ $product->pre_description }}</p>
				</article>
				{{--/end Predescription--}}
			</div>
			{{--/end Product Header --}}

		</div>

		{{-- Product Description --}}
		@if($product->description)
			<div class="row mt-5">
				<div class="col-12 col-lg-10 offset-lg-1">
					{!! $product->description !!}
				</div>
			</div>
		@endif
		{{--/End Product Description --}}
	</section>

	<section id="mightAlsoLike" class="container-fluid mt-5">
		<div class="row">
			<div class="owl-carousel">
				@forelse($mightAlsoLikes as $product)
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
	</section>
@endsection

@section('scripts')
	<script src="{{ asset('js/vendor/zoomy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/vendor/owl.carousel.min.js') }}"></script>
	<script>
		$(function(){
      let urls = [
        'https://i.picsum.photos/id/273/1000/1000.jpg',
        'https://i.picsum.photos/id/1052/500/500.jpg',
        'https://i.picsum.photos/id/558/200/300.jpg',
        'https://i.picsum.photos/id/522/500/700.jpg'
      ];
      $('#myGallery').zoomy(urls,{
        thumbLeft:false,
			});
		});

		{{-- OwlCarousel --}}

    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        autoPlay: 3000,
        lazyLoad:true,
        items : 1,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        center: true,
        nav:false,
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
    });

	</script>
@endsection
