@extends('layouts.app')

@section('title')
	My Account
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

	<section class="container my-5">
		<div class="row">
			<div class="col-12 col-md-10 offset-1 mt-5">
				<ul class="nav nav-tabs" id="tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#myProfile" role="tab" aria-controls="myProfile" aria-selected="true">My profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#myPayments" role="tab" aria-controls="myPayments" aria-selected="false">My payments</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#myOrders" role="tab" aria-controls="myOrders" aria-selected="false">My orders</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#myPassword" role="tab" aria-controls="myPassword" aria-selected="false">My password</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">


					{{-- My Profile --}}
					<div class="tab-pane fade show active mt-4" id="myProfile" role="tabpanel" aria-labelledby="home-tab">
						<form method="post" action="{{ route('user.update', $user) }}">
							@csrf
							@method('patch')
							<div class="form-row">

								{{--  Email  --}}
								<div class="form-group col-12 col-md-10 col-lg-7">
									<label for="email" class="">{{ __('Email') }}</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
												 value="{{ $user->email }}" required autocomplete="email" maxlength="255" placeholder="email">

									@error('email')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End  Email  --}}

							</div>

							<div class="form-row">
								{{-- Name --}}
								<div class="form-group col-12 col-md-6">
									<label for="name" class="">{{ __('First name') }}</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
												 value="{{ $user->name  }}"  autocomplete="name"  maxlength="32">

									@error('name')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End Name --}}

								{{-- Last name --}}
								<div class="form-group col-12 col-md-6">
									<label for="lastName">{{ __('Last name') }}</label>
									<input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName"
												 value="{{ $user->last_name }}" required maxlength="32">

									@error('lastName')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror

								</div>
								{{--/End Last name --}}

								{{-- Gender --}}
								<div class="form-group col-12 col-md-4">
									<label for="gender">Gender</label>
									<select class="form-control" id="gender" name="gender">
										<option disabled >Please choose any gender</option>
										<option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>Male</option>
										<option value="0" {{ $user->gender == 0 ? 'selected' : '' }}>Female</option>
									</select>
								</div>
								{{--/End Gender --}}

								{{-- Document --}}
								<div class="form-group col-12 col-md-4">
									<label for="document" class="">{{ __('Document ') }}<small>(Optional)</small></label>
									<input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document"
												 value="{{ $user->document  }}"  maxlength="32">

									@error('document')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End Document --}}

								{{-- Phone Number --}}
								<div class="form-group col-12 col-md-4">
									<label for="phoneNumber">{{ __('Phone Number ') }}<small>(Optional)</small></label>
									<input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror"
												 name="phoneNumber" value="{{ $user->phone_number }}"  maxlength="200" placeholder="Phone number">

									@error('phoneNumber')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End Phone Number --}}
							</div>

							<div class="form-row">

								{{-- Country --}}
								<div class="form-group col-12 col-md-4">
									<label for="country">{{ __('Country ') }}<small>(Optional)</small></label>
									<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country"
												 value="{{ $user->country }}"  maxlength="65" placeholder="Country">

									@error('country')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End Country --}}

								{{-- State --}}
								<div class="form-group col-12 col-md-4">
									<label for="state">{{ __('State ') }}<small>(Optional)</small></label>
									<input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state"
												 value="{{ $user->country }}"  maxlength="65" placeholder="State">

									@error('state')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror

								</div>
								{{--/End State --}}

								{{-- City --}}
								<div class="form-group col-12 col-md-4">
									<label for="city">{{ __('City ') }}<small>(Optional)</small></label>
									<input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
												 value="{{ $user->city }}"  maxlength="65" placeholder="City">

									@error('city')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror

								</div>
								{{--/End City --}}

								{{-- addressLine1 --}}
								<div class="form-group col-12">
									<label for="addressLine1">{{ __('Address line ') }}<small>(Optional)</small></label>
									<input id="addressLine1" type="text" class="form-control @error('addressLine1') is-invalid @enderror"
												 name="addressLine1" value="{{ $user->address_line1 }}"  maxlength="255" placeholder="Address">

									@error('addressLine1')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror

								</div>
								{{--/End addressLine1 --}}

								{{-- addressLine2 --}}
								<div class="form-row col-12">
									<label for="addressLine2">{{ __('Address line ') }}<small>(Optional)</small></label>
									<input id="addressLine2" type="text" class="form-control @error('addressLine2') is-invalid @enderror"
												 name="addressLine2" value="{{ $user->address_line2 }}"  maxlength="255">

									@error('addressLine2')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
								{{--/End addressLine2--}}

								{{-- Is subcriber --}}
								<div class="form-group col-12 text-center mt-3">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="isSubscriber" name="isSubscriber" value="true" {{ $user->is_subscriber ? 'checked' : '' }}>
										<label class="form-check-label" for="isSubscriber">
											Would you like to receive the latest information from us?
										</label>
									</div>
								</div>
								{{--/End Is subcriber --}}

							</div>

							{{-- CTA --}}
							<div class="form-group col-12 text-center mt-3 mb-5">
								<button type="submit" class="btn btn-outline-primary col-6">{{ __('Update') }}</button>
							</div>
							{{--/End CTA --}}

						</form>

					</div>
					{{--/End Profile--}}




					{{-- My Payments--}}
					<div class="tab-pane fade mt-4" id="myPayments" role="tabpanel" aria-labelledby="profile-tab">
						@if($cards)
							<table class="col-12 table table-cards">
								<thead>
								<tr>
									<th scope="col">Brand</th>
									<th scope="col">Number</th>
									<th scope="col">End</th>
									<th scope="col">Type</th>
									<th scope="col"></th>
								</tr>
								</thead>
								<tbody>
						@endif
						@forelse($cards as $card)
									<tr>
										<th class="pl-2">
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
										</th>
										<td>{{ '••••'.$card['last4'] }}</td>
										<td>{{ $card['exp_month'].'/'.$card['exp_year'] }}</td>
										<td class="text-capitalize">{{ $card['funding'] }}</td>
										<td>
											<form action="{{ route('user.paymentMethod.destroy') }}" method="post">
												@csrf
												{{method_field('DELETE')}}
												<input type="hidden" name="_cardId" value="{{ $card['id'] }}">
												<button class="btn btn-outline-tertiary">Remove</button>
											</form>
										</td>
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
						{{-- Add new card --}}
						<form class="col-12 col-md-10 col-lg-8 offset-lg-2 mt-5" action="{{ route('user.paymentMethod.store') }}" method="post" id="payment-form">
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
								<button type="submit" class="btn btn-outline-primary col-md-2 col-lg-3">Add</button>
							</div>
							</form>
					  {{--/End Add new card --}}
					</div>
					{{--/End My Payments--}}


					{{-- My Orders --}}
					<div class="tab-pane fade" id="myOrders" role="tabpanel" aria-labelledby="contact-tab">
						@if($orders)
							<table class="table">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Date</th>
									<th scope="col">Status</th>
									<th scope="col">Total</th>
									<th scope="col"></th>
								</tr>
								</thead>
								<tbody>
								@php($i = 0)
								@foreach($orders as $order)
									@php( $i++)
									<tr>
										<th scope="row">{{ $i }}</th>
										<td>{{ $order->created_at }}</td>
										<td>{{ $order->status }}</td>
										<td>{{ env('STRIPE_CURRENCY_SYMBOL').$order->total }}</td>
										<td>
											<a href="{{ route('order.show', $order->id) }}" class="btn btn-outline-tertiary col-6"> View </a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						@else
							<h3 class="text-muted mt-5">You don't have an order yet</h3>
						@endif

					</div>
					{{--/End My Orders --}}

					{{-- Password --}}
					<div class="tab-pane fade" id="myPassword" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row my-5">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
								<p class="text-muted">Are you sure reset your password?</p>
								<a href="{{ route('password.request') }}" class="btn btn-outline-primary">Reset Password</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

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

      $('#tab a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show')
      })
		}());
	</script>
@endsection