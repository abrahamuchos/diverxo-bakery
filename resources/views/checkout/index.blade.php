@extends('layouts.app')

@section('title')
	Checkout
@endsection
@section('styles')
	<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/regular.min.css') }}">
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

	<section class="container mb-5">
		<div class="row">
			<div class="col-12 text-left mt-5">
				<h4 class="text-muted">Select a card</h4>
			</div>
		</div>

		{{-- Cards --}}
		<div class="row">
			@if($cards)
				<table class="col-12 table table-cards">
					<thead>
					<tr>
						<th scope="col">
							<form action="{{ route('checkout.confirm') }}" method="post" class="d-none" id="fCard">
								@csrf
							</form>
						</th>
						<th scope="col">Brand</th>
						<th scope="col">Number</th>
						<th scope="col">End</th>
						<th scope="col">Type</th>
					</tr>
					</thead>
					<tbody>
					@endif
					@forelse($cards as $card)
						<tr>
							<th class="text-center">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="cardId" value="{{ $card['id'] }}" form="fCard" >
								</div>
							</th>
							<td>
								@if($card['brand'] === 'Visa')
									<i class="fab fa-cc-visa"></i>
								@elseif($card['brand'] === 'MasterCard')
									<i class="fab fa-cc-mastercard"></i>
								@elseif($card['brand'] === 'American Express')
									<i class="fab fa-cc-amex"></i>
								@elseif($card['brand'] === 'JCB')
									<i class="fab fa-cc-jcb"></i>
								@elseif($card['brand'] === 'Discover')
									<i class="fab fa-cc-discover"></i>
								@elseif($card['brand'] === 'Diners Club')
									<i class="fab fa-cc-diners-club"></i>
								@else
									<i class="far fa-credit-card"></i>
								@endif
							</td>
							<td>{{ '••••'.$card['last4'] }}</td>
							<td>{{ $card['exp_month'].'/'.$card['exp_year'] }}</td>
							<td class="text-capitalize">{{ $card['funding'] }}</td>
						</tr>
					@empty
						<div class="row text-center">
							<div class="col-12">
								<p>You do not have an associated payment method. You can add one </p>
							</div>
						</div>
					@endforelse
					@if($cards)
					</tbody>
				</table>
			@endif
			<div class="col-12">
				<a class="text-muted" data-toggle="collapse" href="#collapseCard">
					Can't find your card? You can add one. Click here
				</a>
			</div>
		</div>
		{{--/End Cards --}}

		{{-- Add new card --}}
		<div class="row collapse" id="collapseCard">
			<form class="col-12 col-md-10 col-lg-8 offset-lg-2 mt-5" action="{{ route('user.paymentMethod.store') }}"
						method="post" id="payment-form">
				@csrf
				<div class="form-row">
					<h5 class="col-12 mb-0 p-0"> Add new credit or debit card</h5>
				</div>
				<div class="form-row">
					<label for="card-element">
						Please, enter your information credit or debit card:
					</label>
					<div id="card-element">
					</div>
					<div id="card-errors" role="alert"></div>
				</div>

				<div class="form-group mt-3 col-12 text-center text-md-right">
					<button type="submit" class="btn btn-outline-tertiary col-md-2 col-lg-3">Add</button>
				</div>
			</form>
		</div>
		{{--/End Add new card --}}

		{{-- CTA --}}
		<div class="row mb-5">
			<div class="col-12 text-right">
				<input type="submit" class="btn btn-outline-primary col-12 col-md-4 col-lg-3" name="save" id="cta" value="Next" form="fCard" disabled/>
			</div>
		</div>
		{{--/End CTA --}}
	</section>

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

	<script>
		(function(){
		  $('.form-check-input').click(function(){
		    $('#cta').removeAttr('disabled');
			});
		}());
	</script>
@endsection