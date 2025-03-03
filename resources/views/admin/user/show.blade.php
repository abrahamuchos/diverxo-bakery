@extends('admin.layouts.app')
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection
@section('title')
	Profile {{ $user->name }}
@endsection

@section('content')
	<div class="container-fluid">
		{{-- Breadcrumb--}}
		<div class="row">
			<div class="col-12 px-0">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
						<li class="breadcrumb-item active">Edit User</li>
					</ol>
				</nav>
			</div>
		</div>
		{{-- /End Breadcrumb--}}

	</div>

	<div class="container">

		{{-- Setion: User Details--}}
		@component('admin.components.formUser')
			@slot('user', $user)
		@endcomponent
		{{--/End Setion: User Details--}}

		{{-- Section: Orders by user --}}
		<section class="section team-section">
			<div class="row text-center justify-content-center">
				<div class="col-12 mb-4">
					{{-- Card --}}
					<div class="card card-cascade cascading-admin-card">
						{{-- Card Data --}}
						<div class="admin-up d-flex justify-content-start">
							<i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
							<div class="data">
								<h5 class="font-weight-bold dark-grey-text">Orders <span class="text-muted">Complete your
                      profile</span></h5>
							</div>
						</div>
						{{-- Card Data --}}

						{{-- Card Content --}}
						<div class="card-body card-body-cascade">
							{{-- Orders --}}
							<div class="row px-md-4 pb-4">
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
										@foreach( $user->orders as $order)
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
							</div>
							{{--/End orders --}}
						</div>
						{{--/End Card Content --}}

					</div>
					{{--/End Card --}}
				</div>
			</div>

		</section>
		{{--/End Section: Orders by user --}}

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

    $(document).on('click', '#success', function(){
      updateUser();
    });

    const deleteMeInput = $('#deleteMe');
    const deleteMeBtn = $('#deleteMeBtn');
    $('#modalDelete').on('show.bs.modal', function(){
      deleteMeInput.attr('placeholder', '');
      deleteMeInput.val('');
      deleteMeBtn.attr("disabled", true);
    });

    deleteMeInput.keyup(function(e){
      if( deleteMeInput.val() == 'delete me'){
        deleteMeBtn.attr("disabled", false);
      }else{
        deleteMeBtn.attr("disabled", true);
      }
    });

    function updateUser() {
      let form = $('#fUser');
      let loader = $('#loader');
      const action = '{{ route('admin.user.update', $user->id) }}';
      loader.addClass('spinner-border spinner-border-sm');
      $('.alert.alert-danger').remove();
      $('#errors').empty();
      //  Ajax Petition
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        data: $(form).serialize(),
        type: 'PATCH',
        url: action,
        success: function (response) {
          $('#loader').removeClass('spinner-border spinner-border-sm');
          loader.append('<i class="fas fa-check"></i>');
          setTimeout(function() {
            $('#loader>.fas.fa-check').hide('slow',function () {
              $('#loader>.fas.fa-check').remove();
            });
          }, 1000);
          $('#modalSuccess').modal();
          console.log('SUCCESS', response);
        },
        error: function (request, status, error) {
          console.log(request);
          if(request.status === 422){
            $.each(request.responseJSON.errors, function(key,value) {
              $("#"+key).after('<small class="form-error-message">'+value+'</small>');
            });
          }
          loader.removeClass('spinner-border spinner-border-sm');
          loader.append('<i class="fas fa-times"></i>');
          setTimeout(function() {
            $('#loader>.fas.fa-times').hide('slow',function () {
              $('#loader>.fas.fa-times').remove();
            })
          }, 2000);
        }
      });
    }
	</script>

@endsection