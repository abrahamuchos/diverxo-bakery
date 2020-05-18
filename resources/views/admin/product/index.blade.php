@extends('admin.layouts.app')
@section('title')
	Products
@endsection
@section('styles')
	{{--<link href="{{ asset('css/admin/addons/datatables.min.css') }}" rel="stylesheet">--}}
	{{--<link href="{{ asset('css/admin/addons/datatables-select.min.css') }}" rel="stylesheet">--}}
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection

@section('content')
	<div class="container">
		@if (session('status'))
			<div class="row justify-content-center">
				<div class="alert alert-success col-12 col-md-8">
					{{ session('status') }}
				</div>
			</div>
		@elseif(session('error'))
			<div class="row justify-content-center">
				<div class="alert alert-danger col-12 col-md-8">
					{{ session('error') }}
				</div>
			</div>
		@endif
		{{-- Section: Table --}}
		<section>
			<div class="card card-cascade narrower z-depth-0">
				<div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">
					<a href="{{ route('admin.product.index') }}" class="white-text m-2">Products</a>
					<a href="{{ route('admin.product.create') }}" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light align-self-end"><i class="fas fa-plus mt-0"></i></a>
				</div>

				<div class="px-4">
					<div class="table-responsive">
						{{--Table--}}
						<table id="dtMaterialDesignExample" class="table table-hover mb-0">

							{{-- Table head --}}
							<thead>
							<tr>
								<th class="th-lg"><a>SKU <i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Name <i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Category<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Stock<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Updated At<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Edit<i class="fas fa-sort ml-1"></i></a></th>
							</tr>
							</thead>
							{{-- Table head --}}

							{{-- Table body --}}
							<tbody>
							{{--@php( $count =0)--}}
							@foreach( $products as $product)
								{{--@php( $count++)--}}
								<tr class='clickable-row'>
									<th scope="row">{{ $product->sku }}</th>
									<td>{{ $product->name }}</td>
									<td>{{ $product->category->name }}</td>
									<td>{{ $product->stock }}</td>
									<td>{{ date('d, M Y', strtotime($product->updated_at))  }}</td>

									<td>
										<a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-primary">
											<i class="fas fa-edit"></i>
										</a>
									</td>
								</tr>
							@endforeach
							</tbody>
							{{-- Table body --}}
						</table>
						{{-- Table --}}
					</div>
					<hr class="my-0">
				</div>
			</div>
		</section>
		{{--/End Section: Table--}}
	</div>

@endsection

@section('scripts')
	<script src="{{ asset('js/vendor/addons/datatables.min.js') }}"></script>
	<script src="{{ asset('js/vendor/addons/datatables-select.min.js') }}"></script>
	<script>
    $(document).ready(function () {
      // Material Select Initialization
      $('.mdb-select').materialSelect();
      // Tooltips Initialization
      $('[data-toggle="tooltip"]').tooltip();

      //  Material Desing Table
      $('#dtMaterialDesignExample').DataTable();
      $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
        $(this).parent().append($(this).children());
      });
      $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
      });
      $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
      $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
      $('#dtMaterialDesignExample_wrapper select').removeClass(
        'custom-select custom-select-sm form-control form-control-sm');
      $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
      $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
      $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();

    });
	</script>
@endsection