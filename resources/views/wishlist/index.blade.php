@extends('layouts.app')
@section('title')
	Wish list
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

	<section class="container">
		<div class="row my-5">

			{{--@dd(Cart::instance('wishlist')->content());--}}
			@forelse(Cart::instance('wishlist')->content() as $product)
				<div class="col-12 col-md-6 col-lg-4 mt-4">
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
								<div class="col-6 text-left">
									<a href="#">{{ $product->model->category->name }}</a>
								</div>
								{{--Product  size, volume, weight --}}
								@if($product->size)
									<div class="col-6 text-right">
										<p class="text-muted">{{'Size '. $product->size.''. $product->model->sizeUnit->value }}</p>
									</div>
								@elseif($product->weight)
									<div class="col-6 text-right">
										<p class="text-muted">{{'Weight '. $product->weight.''. $product->model->weightUnit->value }}</p>
									</div>
								@elseif($product->volume)
									<div class="col-6 text-right">
										<p class="text-muted">{{'Volume '. $product->volume.''.$product->model->volumeUnit->value }}</p>
									</div>
								@endif
								{{--/End Product size, volume, weight --}}

								{{-- Cta--}}
								<div class="col-10 offset-1">
										<form class="col-12 p-0" action="{{ route('wishlist.switchToCart', $product->rowId) }}" method="POST">
											{{ csrf_field() }}
											<button type="submit" class="btn btn-outline-primary col-12">Add to Cart</button>
										</form>
								</div>
								{{--/End Cta--}}
							</div>


						</div>
					</div>
				</div>
			@empty
				<div class="col-12 col-md-10 offset-md-1 text-center mt-md-5">
					<h4 class="text-muted">In this space you can add those things you want and you are not going to buy yet.</h4>
					<h4 class="text-muted">Check our store and have fun.</h4>
				</div>
			@endforelse
		</div>
	</section>
@endsection