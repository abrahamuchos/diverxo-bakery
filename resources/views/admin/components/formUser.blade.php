<section class="section team-section">
	<div class="row text-center justify-content-center">
		<div class="col-md-8 mb-4">
			{{-- Card --}}
			<div class="card card-cascade cascading-admin-card">
				{{-- Card Data --}}
				<div class="admin-up d-flex justify-content-start">
					<i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
					<div class="data">
						<h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
                      profile</span></h5>
					</div>
				</div>
				{{-- Card Data --}}

				{{-- Card content --}}
				<div class="card-body card-body-cascade">

					<form id="fUser">
						@csrf
						<div class="row">
							<div class="col-lg-8 col-md-7">
								<div class="md-form  mb-0 not-allowed">
									<input type="email" id="email" name="email" class="form-control form-control-sm" value="{{ $user->email }}" disabled>
									<label for="email" class="">Email address</label>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="md-form mb-0">
									<label for="document" class="">Document</label>
									<input type="text" id="document" name="document" class="form-control mb-1" value="{{ $user->document }}" required>
								</div>
							</div>

						</div>

						<div class="row">

							<div class="col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="name" name="name" class="form-control form-control-sm" value="{{ $user->name }}" required>
									<label for="form5" class="">First name</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="lastName" name="lastName" class="form-control form-control-sm" value="{{ $user->last_name }}" required>
									<label for="lastName" class="">Last name</label>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<select id="gender" name="gender" class="mdb-select md-form">
										<option value="" disabled >Choose your gender</option>
										<option value="0" {{ ($user->gender == 0)? 'selected' : ''  }}>Female</option>
										<option value="1" {{ ($user->gender == 1)? 'selected' : '' }}>Male</option>
									</select>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="isSubscriber" name="isSubscriber" {{ $user->is_subscriber ? 'checked' : '' }}>
										<label class="form-check-label" for="isSubscriber">Is subscriber</label>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="password" id="password" name="password" class="form-control form-control-sm">
									<label for="password" class="">Password</label>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control form-control-sm">
									<label for="passwordConfirm" class="">Password confirm</label>
								</div>
							</div>


						</div>

						<div class="row mt-5">
							<div class="col-10 text-left">
								<h5 class="font-weight-bold dark-grey-text">Contact information</h5>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="country" name="country" class="form-control form-control-sm" value="{{ $user->country }}">
									<label for="country" class="">Country</label>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="state" name="state" class="form-control form-control-sm" value="{{ $user->state }}">
									<label for="state" class="">State</label>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="city" name="city" class="form-control form-control-sm" value="{{ $user->city }}">
									<label for="city" class="">City</label>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="md-form form-sm mb-0">
									<input type="text" id="phoneNumber" name="phoneNumber" class="form-control form-control-sm" value="{{ $user->phone_number }}">
									<label for="phoneNumber" class="">Phone Number</label>
								</div>
							</div>

							<div class="col-12">
								<div class="md-form form-sm mb-0">
									<input type="text" id="addressLine1" name="addressLine1" class="form-control form-control-sm" value="{{ $user->address_line1 }}">
									<label for="addressLine1" class="">Address Line 1</label>
								</div>
							</div>

							<div class="col-12">
								<div class="md-form form-sm mb-0">
									<input type="text" id="addressLine2" name="addressLine2" class="form-control form-control-sm" value="{{ $user->address_line2 }}">
									<label for="addressLine2" class="">Address Line 2</label>
								</div>
							</div>


						</div>

						{{-- Errors --}}
						<div class="row justify-content-center">
							<div class="col-12">
								<div id="errors"></div>
							</div>
						</div>
						{{-- /End Errors--}}
					</form>

					{{--Actions --}}
					<div class="row justify-content-center mt-5">
						<div class="col-6 pr-0 text-right">
							@if(Auth::user()->id == $user->id)
								<a href="{{ route('admin.user.index') }}" class="btn btn-danger" >Cancel</a>
							@else
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
									Delete
								</button>
							@endif

						</div>
						<div class="col-6 text-left pr-0">
							<button id="success" type="button" class="btn btn-success" value="Success">
								<span id="loader" class="" role="status" aria-hidden="true"></span>
								Update
							</button>
						</div>
					</div>
					{{--/End Actions --}}
				</div>
				{{-- Card content --}}
			</div>
			{{-- Card --}}
		</div>
	</div>

	{{-- Modal delete--}}
	<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">{{ 'Delete User - '. $user->name }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="text-muted">
						To confirm deletion, type <i>delete me</i> into the filed
					</p>
					<input type="text" id="deleteMe" maxlength="9" class="form-control form-control-sm" required autocomplete="off">
				</div>
				<div class="modal-footer">
					<div class="col-6 text-right">
						<a type="button" class="text-muted mr-4" data-dismiss="modal">Cancel</a>
					</div>
					<form class="col-6  pl-0" action="{{  route('admin.user.destroy', $user->id) }}" method="post">
						@csrf
						{{ method_field('DELETE') }}
						<div class="form-group text-left mb-0">
							<button id="deleteMeBtn" type="submit" class="btn btn-success delete-user" disabled="">
								Delete
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{--/End Modal Delete--}}

	{{-- Modal Success--}}
	<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			 aria-hidden="true">
		<div class="modal-dialog modal-notify modal-success" role="document">

			<div class="modal-content">

				<div class="modal-header">
					<p class="heading lead font-weight-bolder">User was updated</p>
				</div>

				<div class="modal-body">
					<div class="text-center">
						<i class="fas fa-check fa-4x animated rotateIn"></i>
					</div>
				</div>

				<div class="modal-footer justify-content-center">
					<a href="{{  route('admin.user.index') }}" class="btn btn-success">Ok</a>
				</div>
			</div>

		</div>
	</div>
	{{--/End Modal Success--}}

</section>