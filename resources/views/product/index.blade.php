@extends('layouts.app')

@section('title')
	Shop
@endsection

@section('content')
	<div class="d-flex" id="wrapper">
		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			{{--<div class="sidebar-heading">Filters </div>--}}
			<div class="list-group list-group-flush">
				@forelse($categories as $category)
					<a href="{{ route('product.index', ['findByPrice'=> request()->findByPrice,'findByCategory' => $category->slug]) }}" class="list-group-item list-group-item-action bg-light">
						{{ $category->name }}
					</a>
				@empty
				@endforelse

					{{--<a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">--}}
						{{--Link with href--}}
					{{--</a>--}}
					{{--<div class="collapse" id="collapseExample">--}}
						{{--<div class="card card-body">--}}
							{{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<a href="#" class="list-group-item list-group-item-action bg-light">Status</a>--}}
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<div class="container-fluid">
				<div class="row">
					<div class="col-6 mt-2">
						<button class="btn btn-outline-secondary" id="menu-toggle">
							<img src="{{ asset('img/svg/icon-filter.svg') }}" alt="Filters icon">
							Filters
						</button>
					</div>
					<div class="col-6 mt-2 text-right">
						<div class="dropdown">
							<button  class="btn btn-outline-secondary dropdown-toggle" type="button" id="orderDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="{{ asset('img/svg/order.svg') }}" alt="Filters icon"> Order By
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="{{ route('product.index',['findByPrice' => 'asc', 'findByCategory' => request()->findByCategory]) }}">
									Price: Low to Hight
								</a>
								<a class="dropdown-item" href="{{ route('product.index', ['findByPrice' => 'desc', 'findByCategory' => request()->findByCategory]) }}">
									Price: Hight to Low
								</a>
							</div>
						</div>
					</div>

					@forelse($products as $product)
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
											<a href="#">{{ $product->category->name }}</a>
										</div>
										{{--Product  size, volume, weight --}}
										@if($product->size)
											<div class="col-6 text-right">
												<p class="text-muted">{{'Size '. $product->size.''. $product->sizeUnit->value }}</p>
											</div>
										@elseif($product->weight)
											<div class="col-6 text-right">
												<p class="text-muted">{{'Weight '. $product->weight.''. $product->weightUnit->value }}</p>
											</div>
										@elseif($product->volume)
											<div class="col-6 text-right">
												<p class="text-muted">{{'Volume '. $product->volume.''.$product->volumeUnit->value }}</p>
											</div>
										@endif
										{{--/End Product size, volume, weight --}}

										{{-- Cta--}}
										<div class="col-6">
											<a href="#" class="btn btn-outline-tertiary col-12">View more</a>
										</div>
										<div class="col-6">
											<a href="#" class="btn btn-outline-primary col-12">Add cart</a>
										</div>
										{{--/End Cta--}}
									</div>


								</div>
							</div>
						</div>
					@empty
						{{-- TODO hacer una sugerencia para cuando no haya productos por el tema de los filtros--}}
						<h1>Upss you may add products</h1>
					@endforelse

					{{-- Pagination --}}
					@if($products)
						<div class="col-12 mt-5 mb-3">
							{{ $products->appends(request()->input())->links() }}
						</div>
					@endif
					{{--/End Pagination --}}

				</div>
			</div>
		</div>
		<!--/End Page Content -->

	</div>




@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
      // $('.collapse').collapse();
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
		});

	</script>
@endsection