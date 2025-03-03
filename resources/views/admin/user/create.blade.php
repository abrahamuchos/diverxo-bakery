@extends('admin.layouts.app')
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection
@section('title')
	Create new profile
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
			@slot('user', null)
		@endcomponent
		{{--/End Setion: User Details--}}




	</div>



@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
      // Material Select Initialization
      $('.mdb-select').materialSelect();
      // Tooltips Initialization
      $('[data-toggle="tooltip"]').tooltip();
		});

    $(document).on('click', '#success', function(){
      createUser();
    });

    function createUser() {
      let form = $('#fUser');
      let loader = $('#loader');
      const action = '{{ route('admin.user.store') }}';
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
        type: 'POST',
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