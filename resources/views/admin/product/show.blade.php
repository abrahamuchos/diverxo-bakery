@extends('admin.layouts.app')
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/admin/mdb-dashboard.min.css') }}">
@endsection
@section('title')
	Create new product
@endsection
@section('content')
	@component('admin.components.formProduct')
		@slot('product', $product)
		@slot('categories', $categories)
		@slot('sizeUnits', $sizeUnits)
		@slot('weightUnits', $weightUnits)
		@slot('volumeUnits', $volumeUnits)
	@endcomponent
@endsection

@section('scripts')
	<script src="{{ asset('js/vendor/dropzone.min.js') }}"></script>
	<script src="https://cdn.tiny.cloud/1/i9em2s4x0q2106gpephbtpwmay53pf7ge6rgupst8sopg8d9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

	{{-- Dropzone image blog --}}
	<script>
    Dropzone.options.imageDropZone = false;
    Dropzone.autoDiscover = false;
    $(document).ready(function(){
      $("#imageDropZone").dropzone({
        url: "{{ route('admin.media.store', $product->id) }}",
        maxFilesize: 2,
        maxFiles: 5,
        addRemoveLinks: true,
        autoProcessQueue : false,
        acceptedFiles: 'image/*',
        parallelUploads:10,
        uploadMultiple:true,
        thumbnailWidth: 800,
        thumbnailHeight: 800,
        removedfile: function(file) {
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
            }
          });
          $.ajax({
            type: 'DELETE',
            url: "{{ route('admin.media.destroy') }}",
            data: {
              id: file.id,
              src: file.src,
              name: file.name
            },
            success: function (data) {
              var _ref;
              return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            error: function (response) {
              console.log(response);
              throwError("You image don't be remove");
              var _ref;
              return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
          });

        },
        error: function (file, response) {
          var _ref;
          throwError('Remember you only upload 1 image less than 2MB');
          $('.dropzone.dz-started .dz-message').css("display",'block');
          return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(response){
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
          $('.message', modalSuccess).html('Your post was created successfully');
          modalSuccess.modal();
        },
        init: function () {
          var thisDropzone = Dropzone.forElement("#imageDropZone");
          let route = "{{ route('admin.media.show', ['id' => $product->id, 'type' => 'product']) }}";
          $(document).on('click', '#createProduct', function(){
            thisDropzone.processQueue();
          });

          $.get(route, function (image) {
						image.forEach(function(img){
              var url = '{{ env('APP_URL') }}';
              var mockFile = { id: img.id, name: img.name, src: image.src};
              thisDropzone.options.addedfile.call(thisDropzone, mockFile);
              thisDropzone.options.thumbnail.call(thisDropzone, mockFile, url +'/'+ img.src);
              mockFile.previewElement.classList.remove('dz-error-mark');
              mockFile.previewElement.classList.add('dz-success');
              mockFile.previewElement.classList.add('dz-complete');
              mockFile.previewElement.classList.add('dz-filename', 'HELLO');
              $('#imageDropZone').find('[data-dz-name]').html(`<a href="${url +'/'+ img.src}" target="_blank">${img.name}</a>`);
						});

          });
        }

      });
    });
	</script>
	{{-- /End Dropzone image blog --}}

	<script>
    const modalError = $('#modalError');
    const modalSuccess = $('#modalSuccess');
    const loader = $('#loader');
    let dropzoneActive = false;

    $(document).ready(function () {
      // Variables
      let content = ( typeof $('#productDescription').data("value") == 'undefined') ? '': $('#productDescription').data("value");
      // Material Select Initialization
      $('.mdb-select').materialSelect();

      // TinyMCE Initialization
      tinymce.init({
        selector:'#productDescription',
        menubar: false,
        height : "500",
        plugins: "image lists anchor print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media  template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount  imagetools textpattern help   ",
        // menubar: "insert | edit",
        toolbar: "preview | formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment",
        images_upload_handler: function(blobInfo, success, failure){
          let xhr, formData;
          xhr = new XMLHttpRequest();
          xhr.withCredentials = false;
          xhr.open('POST', '{{ route('admin.simple.image') }}');
          let token = '{{ csrf_token() }}';
          xhr.setRequestHeader("X-CSRF-Token", token);
          xhr.onload = function() {
            let json;
            if (xhr.status != 200) {
              failure('HTTP Error: ' + xhr.status);
              return;
            }
            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
              failure('Invalid JSON: ' + xhr.responseText);
              return;
            }
            success(json.location);
          };
          formData = new FormData();
          formData.append('file', blobInfo.blob(), blobInfo.filename());
          xhr.send(formData);
        },
        setup: function (editor) {
          editor.on('init', function () {
            editor.setContent(content);
          });
        }
      });

      // Action Button
      $(document).on('click', '#createProduct', function () {
        updateProduct();
        $('.text-button', this).css('display', 'none');
        $('#loader').css('display', 'block').addClass('spinner-border spinner-border-sm');
      });

      //Determine if dropzone is active to modal
      $(document).on('click', '#imageDropZone', function(){
        dropzoneActive = true;
			});

      //Modal delete
      $(document).on('click', '#deleteProduct', function () {
        deleteProduct();
      });
      $('#deleteMe').keyup(function(e){
        if( $('#deleteMe').val() == 'delete me'){
          $('#deleteMeBtn').attr("disabled", false);
        }else{
          $('#deleteMeBtn').attr("disabled", true);
        }
      });
      $('#modalDelete').on('hide.bs.modal', function(){
        $('#deleteMe').val('');
        $('#deleteMeBtn').attr("disabled", true);
      });

      // Modal
      $('#modalSuccessOk').click(function () {
        $('#modalSuccess').modal('hide');
      });
    });

    /**
     * This function create new post entrance
     **/
    function updateProduct() {
      let description = getContentPost();
      let form = $('#fProduct');
      let create = $("#createProduct");
      let action = create.data('action');
      $('.is-invalid').removeClass('is-invalid');

      if( !validateDropzone()){
        return;
      }

      //  Ajax Petition
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
        }
      });
      $.ajax({
        data: {
          sku: $('#sku').val(),
          name: $('#name').val(),
          brand: $('#brand').val(),
          category: $('#category').val(),
          preDescription: $('#preDescription').val(),
          oldPrice: $('#oldPrice').val(),
          price: $('#price').val(),
          stock: $('#stock').val(),
          size: $('#size').val(),
          sizeUnit: $('#sizeUnit').val(),
          weight: $('#weight').val(),
          weightUnit: $('#weightUnit').val(),
          volume: $('#volume').val(),
          volumeUnit: $('#volumeUnit').val(),
          description: description
        },
        type: form.attr('method'),
        url: '{{ route('admin.product.update', $product->id) }}',
        success: function (response) {
					window.productId = response.id;
					// When dropzone is not used to update product
					if(!dropzoneActive){
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
            $('.message', modalSuccess).html('Your post was created successfully');
            modalSuccess.modal();
					}
        },
        error: function (request, status, error) {
          console.warn('**Error request create**');
          console.log('request ==>', request);
          console.log('error ==>', error);
          if(request.status === 419) {
            throwError('Your session has expired please reload the page and login');
          }else if(request.status === 500){
            throwError(`Error ${request.responseJSON.code}! Please contact with administrator`);
            console.log(request.responseJSON.error);
          }else{
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

    /**
     * Function delete existing post
     */
    function deleteProduct() {
      let form = $('#modalDelete form');
      let token = $('#modalDelete form input[name=_token]').val();
      let redirect = $('#deleteMeBtn').data("redirect");

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': token
        }
      });
      $.ajax({
        type: 'DELETE',
        url: form.attr('action'),
        data: {
          "_token": token,
        },
        success: function (response) {
          window.location.replace(redirect);

        },
        error: function (request, status, error) {
          alert(request.status+' '+status+' '+error);
          console.log(request.responseText);
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

    /**
     * Function retrieve all values about tinymce textarea
     * @returns {*}
     */
    function getContentPost() {
      // Get the HTML contents of the currently active editor
      console.debug(tinymce.activeEditor.getContent());
      // Get the raw contents of the currently active editor
      tinymce.activeEditor.getContent({format: 'raw'});
      // Get content of a specific editor:
      return tinymce.get('productDescription').getContent();
    }

    /**
     * This method validate if dropzone has elements
     * @returns {boolean} - Return true if dropzone is valid
     */
    function validateDropzone(){
      if(!$('.dz-image-preview').length){
        $('#imageDropZone').addClass('twinkle-border').delay(5000).queue((function(){
          $(this).removeClass("twinkle-border").dequeue();
        }));
        throwError('Remember to upload an image to your product less than 2mb');
        return false;
      }
      return true;
    }

    /**
     * This funtion throw modal error (with message), and remove spin and add equis in #loader
     * @param {string} message - Message show in modal error
     */
    function throwError(message = 'Error please contact with administrator'){
      $('.message', modalError).html(message);
      modalError.modal();
      modalError.on('hidden.bs.modal', function(){
        loader.removeClass('spinner-border spinner-border-sm');
        loader.append('<i class="fas fa-times"></i>');
        setTimeout(function() {
          loader.hide('slow',function () {
            $('.fas.fa-times').remove();
          });
          $('.text-button').show('slow', function () {
            $(this).css('display', 'block');
          });
        }, 2000);

      });
    }
	</script>




@endsection