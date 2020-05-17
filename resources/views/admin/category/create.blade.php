@extends('admin.layouts.app')
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/jquery.tagsinput-revisited.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin/blog.css') }}">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('title')
	Create New Category
@endsection
@section('content')

	@component('admin.components.formCategory')
		@slot('categories', $categories)
		@slot('category', null)
	@endcomponent

@endsection
@section('scripts')
	<script>
    const modalError = $('#modalError');
    const modalSuccess = $('#modalSuccess');
    const loader = $('#loader');
    $(document).ready(function() {
      // Material Select Initialization
      $('.mdb-select').materialSelect();

      $(document).on('click', '#createCategory', function () {
        create();
        $('.text-button', this).css('display', 'none');
        $('#loader').css('display', 'block').addClass('spinner-border spinner-border-sm');
      });

      $('#modalSuccessOk').click(function () {
        $('#modalSuccess').modal('hide');
      });
		});


    function create(){
      let form = $('#fCategory');
      let create = $("#createCategory");
      let action = create.data('action');
      $('.is-invalid').removeClass('is-invalid');
      //  Ajax Petition
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
        }
      });
      $.ajax({
        data: {
          name: $('#name').val(),
          selParent: $('#selParent').val()
        },
        type: form.attr('method'),
        url: action,
        success: function (response) {
          console.log('Response --->', response);
          loader.removeClass('spinner-border spinner-border-sm');
          loader.append('<i class="fas fa-check"></i>');
          setTimeout(function() {
            loader.hide('slow',function () {
              $('.fas.fa-check').remove();
            });
            $('.text-button').show('slow', function () {
              $(this).css('display', 'block');
            });
          }, 2000);
          $('.message', modalSuccess).html('Your category was created successfully');
          modalSuccess.modal();
        },
        error: function (request, status, error) {
          if(request.status === 419){
            throwError('Your session has expired please reload the page and login');
          }else if(request.status === 500){
            throwError(`Error ${request.responseJSON.code}! Please contact with administrator`);
            console.log(request.responseJSON.error);
          }
          else{
            $.each(request.responseJSON.errors, function(key,value) {
              $(`#${key}`).addClass('is-invalid');
              $(`#${key} ~ .invalid-feedback`).text(value);
            });
            console.log(request.responseJSON.error);
            throwError('Please, check your form');
          }

        }
      });
		}
	</script>
@endsection