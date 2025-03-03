@extends('admin.layouts.app')
@section('title')
	Users
@endsection
@section('styles')
	{{--<link href="{{ asset('css/admin/addons/datatables.min.css') }}" rel="stylesheet">--}}
	{{--<link href="{{ asset('css/admin/addons/datatables-select.min.css') }}" rel="stylesheet">--}}
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection

@section('content')
	<div class="container-fluid">
		{{-- Breadcrumb--}}
		<div class="row">
			<div class="col-12 px-0">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item active">Users</li>
					</ol>
				</nav>
			</div>
		</div>
		{{-- /End Breadcrumb--}}

	</div>

	<div class="container">
		{{-- Messages --}}
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
		{{--/ End Messages --}}

		{{-- Section: Table --}}
		<section>
			<div class="card card-cascade narrower z-depth-0">
				<div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">
					<a href="{{ route('admin.user.index') }}" class="white-text m-2">Users</a>
					<a href="{{ route('admin.user.create') }}" type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light align-self-end"><i class="fas fa-plus mt-0"></i></a>
				</div>

				<div class="px-4">
					<div class="table-responsive">
						{{--Table--}}
						<table id="dtMaterialDesignExample" class="table table-hover mb-0">

							{{-- Table head --}}
							<thead>
							<tr>
								<th class="th-lg"><a>Email<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Is Admin <i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Full Name<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Is Subscriber<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Created at<i class="fas fa-sort ml-1"></i></a></th>
								<th class="th-lg"><a>Edit<i class="fas fa-sort ml-1"></i></a></th>
							</tr>
							</thead>
							{{-- Table head --}}

							{{-- Table body --}}
							<tbody>
							@foreach( $users as $user)
								<tr class='clickable-row'>
									<th scope="row">{{ $user->email }}</th>
									<td class="text-center">{!!  $user->is_admin ? '<i class="fas fa-check"></i>': '<i class="fas fa-times"></i>' !!}</td>
									<td>{{ $user->last_name.', '.$user->name }}</td>
									<td class="text-center">{!!  $user->is_subcriber ? '<i class="fas fa-check"></i>': '<i class="fas fa-times"></i>' !!}</td>
									<td>{{ date('d, M Y', strtotime($user->created_at))  }}</td>

									<td>
										<a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-primary">
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