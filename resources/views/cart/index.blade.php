@extends('layouts.app')
@section('title')
	Shopping Cart
@endsection
@section('styles')
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

	<section id="Cart" class="container-fluid">
		<div class="row mt-4">
			<div class="col-12 col-md-7 d-flex cart-header p-4">
				<h1 class="m-0 text-uppercase">{{ 'YOUR CART ('.Cart::count().')' }}</h1>
			</div>
		</div>

		<div class="row mt-3">

			@if (Cart::count() > 0)
				{{-- Carts Items --}}
				<div class="col-12 col-md-7">
					@foreach (Cart::content() as $item)
						<div class="col-12 row cart-item pl-md-5 mb-5">
							<div class="col-5 cart-image">
								<img class="img-thumbnail" src="{{ asset('Uploads/Products/croasan.jpg') }}" alt="Image cart">
							</div>
							<div class="col-7">
								<div class="col-12 d-flex justify-content-between">
									<h3>{{ $item->name }}</h3>
									<h3>{{ '$'.$item->price }}</h3>
								</div>
								{{--<p class="col-12">Size:</p>--}}
								<div class="col-12">
									@if($item->options->size)
										<p class="title-3">Size:{{ ' '.$item->options->size.''. $item->options->sizeUnit->value }}</p>
									@elseif($item->options->weight)
										<p class="title-3">Weight:{{ ' '.$item->options->weight.''. $item->options->weightUnit->value }}</p>
									@elseif($item->options->volume)
										<p class="title-3">Volume:{{ ' '.$item->options->volume.''.$item->options->volumeUnit->value }}</p>
									@endif
								</div>
								<div class="col-12 form-group">
									<label for="selQty">Quantity</label>
									<select class="form-control selQty" name="selQty" data-id="{{ $item->rowId }}" data-productQty="{{ $item->model->stock }}">
										@for ($i = 1; $i < 10 + 1 ; $i++)
											<option value="{{ $i }}" {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
										@endfor
									</select>
								</div>
								<form class="col-12 d-flex justify-content-around" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button type="submit" class="btn btn-outline-tertiary px-4">Remove</button>
								</form>
							</div>
							<div class="col-12 cart-item-line"></div>
						</div>
					@endforeach

				</div>
				{{--/End Carts Items --}}

				{{-- Summary --}}
				<div class="col-12 col-md-4 offset-md-1 p-5 align-self-start cart-summary">
					<h2 class="col-12 mb-5 text-uppercase">SUMMARY</h2>
					<div class="col-12 mb-3 d-flex justify-content-between">
						<h5>Sub total</h5>
						<h5>${{ Cart::subtotal() }}</h5>
					</div>
					<div class="col-12 mb-3 d-flex justify-content-between">
						<div>
							<h5 class="m-0">Shipping</h5>
							<small>and handling</small>
						</div>
						<h5>${{ Cart::tax() }}</h5>
					</div>

					<div class="col-12 mb-3 cart-summary-total d-flex justify-content-between">
						<h4 class=" text-uppercase mb-3">Total</h4>
						<h4 class="text-uppercase mb-3">{{ Cart::total() }}</h4>
					</div>
					{{-- CTA --}}
					<a href="#" class="btn btn-outline-secondary text-uppercase col-8 offset-2">Checkout</a>
				</div>
				{{--/End Summary --}}
			@else

				<div class="col-12 text-center">
					<h2>
						Your cart is empty for the moment. You can visit our
						<a href="{{ route('product.index') }}">store</a> and add items
					</h2>
				</div>
			@endif

		</div>

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
	<script type="text/javascript" src="{{ asset('/js/vendor/owl.carousel.min.js') }}"></script>
	<script>
    (function(){
			let qty = $('.selQty');

			// Update Quantity
      Array.from(qty).forEach(function(e) {
        e.addEventListener('change', function() {
					const id = e.getAttribute('data-id');
					const productQty = e.getAttribute('data-productQty');

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': '{{ @csrf_token() }}'
            }
          });

          $.ajax({
						data: {
              qty: this.value,
							productQty: productQty
						},
            type: 'PATCH',
            url: `/cart/${id}`,
						success: function (response) {
              location.reload();
            },
						error: function (request, status, error) {
							console.log('**Error**');
							console.log(error)
            }
					})

        })
      })

		//	Owl Carousel
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
    })();

	</script>

@endsection