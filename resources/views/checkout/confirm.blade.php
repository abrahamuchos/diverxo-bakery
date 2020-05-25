@extends('layouts.app')

@section('title')
	Confirm Checkout
@endsection
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/regular.min.css') }}">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 text-center text-md-left">
				<h1 class="title-1">Review your order</h1>
			</div>
		</div>
	</div>

@endsection
@section('scripts')
	{{-- Stripe  --}}
	<script src="https://js.stripe.com/v3/"></script>
	<script>
    (function(){
      // Create a Stripe client.
      var stripe = Stripe('{{ env('STRIPE_PUBLIC_KEY') }}');
      var elements = stripe.elements();

      // Custom styling can be passed to options when creating an Element.
      // (Note that this demo uses a wider set of styles than the guide below.)
      var style = {
        base: {
          color: '#32325d',
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
          '::placeholder': {
            color: '#aab7c4'
          }
        },
        invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
        }
      };

      // Create an instance of the card Element.
      var card = elements.create('card', {style: style});

      // Add an instance of the card Element into the `card-element` <div>.
      card.mount('#card-element');

      // Handle real-time validation errors from the card Element.
      card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });

      // Handle form submission.
      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
          if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
          } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
          }
        });
      });

    }());


    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      // 'X-CSRF-TOKEN': $('[name="_token"]').attr('value')
      hiddenInput.setAttribute('X-CSRF-TOKEN', $('[name="_token"]').attr('value'));
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }
	</script>

@endsection