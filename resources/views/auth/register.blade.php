@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Register') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}">
							@csrf

							{{-- Name --}}
							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
												 value="{{ old('name') }}" required autocomplete="name" autofocus maxlength="32">

									@error('name')
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>
							{{--/End Name --}}

							{{-- Last name --}}
							<div class="form-group row">
								<label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

								<div class="col-md-6">
									<input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName"
												 value="{{ old('lastName') }}" required maxlength="32">

									@error('lastName')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End Last name --}}

							{{-- Gender --}}
							<div class="form-group row justify-content-center">
								<label for="gender">Gender</label>
								<div class="col-md-6">
									<select class="form-control" id="gender" name="gender">
										<option disabled selected>Please choose any gender</option>
										<option value="1">Male</option>
										<option value="0">Female</option>
									</select>
								</div>
							</div>
							{{--/End Gender --}}

							{{--  Email  --}}
							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
												 value="{{ old('email') }}" required autocomplete="email" maxlength="255">

									@error('email')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End  Email  --}}

							{{-- Password and pass confirm --}}
							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
												 name="password" required autocomplete="new-password" minlength="8" maxlength="100">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm"
											 class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation"
												 required autocomplete="new-password">
								</div>
							</div>
							{{--/End Password and pass confirm --}}

							{{-- Document --}}
							<div class="form-group row">
								<label for="document" class="col-md-4 col-form-label text-md-right">{{ __('Document') }}</label>

								<div class="col-md-6">
									<input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document"
												 value="{{ old('document') }}"  maxlength="32">

									@error('document')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End Document --}}

							{{-- Country --}}
							<div class="form-group row">
								<label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

								<div class="col-md-6">
									<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country"
												 value="{{ old('country') }}"  maxlength="65">

									@error('country')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End Country --}}

							{{-- State --}}
							<div class="form-group row">
								<label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

								<div class="col-md-6">
									<input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state"
												 value="{{ old('state') }}"  maxlength="65">

									@error('state')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End State --}}

							{{-- City --}}
							<div class="form-group row">
								<label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

								<div class="col-md-6">
									<input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
												 value="{{ old('city') }}"  maxlength="65">

									@error('city')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End City --}}

							{{-- addressLine1 --}}
							<div class="form-group row">
								<label for="addressLine1" class="col-md-4 col-form-label text-md-right">{{ __('Address line') }}</label>

								<div class="col-md-6">
									<input id="addressLine1" type="text" class="form-control @error('addressLine1') is-invalid @enderror"
												 name="addressLine1" value="{{ old('addressLine1') }}"  maxlength="255">

									@error('addressLine1')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End addressLine1 --}}

							{{-- addressLine2 --}}
							<div class="form-group row">
								<label for="addressLine2" class="col-md-4 col-form-label text-md-right">{{ __('Address line') }}</label>
								<div class="col-md-6">
									<input id="addressLine2" type="text" class="form-control @error('addressLine2') is-invalid @enderror"
												 name="addressLine2" value="{{ old('addressLine2') }}"  maxlength="255">

									@error('addressLine2')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End addressLine2--}}

							{{-- Phone Number --}}
							<div class="form-group row">
								<label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
								<div class="col-md-6">
									<input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror"
												 name="phoneNumber" value="{{ old('phoneNumber') }}"  maxlength="200">

									@error('phoneNumber')
									<span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
									@enderror
								</div>
							</div>
							{{--/End Phone Number --}}

							{{-- Is subcriber --}}
							<div class="form-group row justify-content-center">
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="isSubscriber" name="isSubscriber" value="option1">
										<label class="form-check-label" for="isSubscriber">
											Would you like to receive the latest information from us?
										</label>
									</div>
								</div>
							</div>
							{{--/End Is subcriber --}}

							{{-- Is subcriber --}}
							<div class="form-group row justify-content-center">
								<div class="col-md-8">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="terms" name="isSubscriber" required>
										<label class="form-check-label" for="terms">
											I accept the terms and conditions
										</label>
									</div>
								</div>
							</div>
							{{--/End Is subcriber --}}

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Register') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
