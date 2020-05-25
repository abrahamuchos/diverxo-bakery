@extends('admin.layouts.app')
@section('title')
	Orders
@endsection
@section('styles')
	{{--<link href="{{ asset('css/admin/addons/datatables.min.css') }}" rel="stylesheet">--}}
	{{--<link href="{{ asset('css/admin/addons/datatables-select.min.css') }}" rel="stylesheet">--}}
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection

@section('content')
	<div class="container">
		{{-- Section: Table --}}
		<section>
			<div class="card card-cascade narrower z-depth-0">
				<div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">
					<a href="{{ route('admin.order.index') }}" class="white-text m-2">Orders</a>
				</div>

				<div class="px-4">
					<div class="table-responsive">
						{{--Table--}}
						<table id="dtMaterialDesignExample" class="table table-hover mb-0">

							{{-- Table head --}}
							<thead>
							<tr>
								<th class="th-lg"><a>Id <i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Charge id<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Created At <i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Total<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Status<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Action<i class="fas fa-sort ml-1"></i></a></th>
							</tr>
							</thead>
							{{-- Table head --}}

							{{-- Table body --}}
							<tbody>
							@foreach( $orders as $order)
								<tr class='clickable-row'>
									<th scope="row">{{ $order->id }}</th>
									<td>{{ $order->charge_id }}</td>
									<td>{{ $order->created_at  }}</td>
									<td>{{ env('STRIPE_CURRENCY_SYMBOL').$order->total }}</td>
									<td>{{ $order->status }}</td>
									<td>
										<a href="{{ route('admin.order.show', $order->id) }}" class="btn btn-primary">
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