<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 col-lg-6">
			{{-- Card --}}
			<div class="card mb-4">
				<div class="card-body">
					<form id="fCategory" method="POST" class="row">
						@csrf
						<div class="col-12">
							<select id="selParent" class="mdb-select md-form">
								<option value="" disabled selected>Choose your option</option>
								@foreach($categories as $cat)
									@if($category)
										<option value="{{ $cat->id }}" {{ ($cat->id == $category->category_id) ? 'selected' : '' }}>{!! $cat->name !!}</option>
									@else
										<option value="{{ $cat->id }}">{!! $cat->name !!}</option>
									@endif
								@endforeach
							</select>
							<label class="mdb-main-label">Parent Category</label>
						</div>

						<div class="col-12">
							<div class="md-form mt-4 mb-0">
								<label class="form-check-label" for="author">Category name (max.64 characters)</label>
								<input type="text" id="name" name="name" class="form-control" value="{{ $category->name ?? ''}}" maxlength="64" required>
								<div class="invalid-feedback text-left"></div>
							</div>
						</div>

						<div class="col-12 mt-4 d-flex justify-content-center align-items-center">
							@if($category)
								<div class="col-md-6 d-flex justify-content-end align-items-center">
									<a type="button" class="btn btn-danger m-md-0" data-toggle="modal" data-target="#modalDelete">Delete</a>
								</div>
							@else
								<div class="col-md-6 d-flex justify-content-end align-items-center">
									{{--								<a href="{{ route('admin.blog.show') }}" class="link-danger">Cancel</a>--}}
									<button class="btn btn-danger m-0">Cancel</button>
								</div>
							@endif
							<div class="col-md-6">
								<button id="{{ $category ? 'updateCategory' : 'createCategory' }}" type="button" class="btn btn-success m-0"
												data-action="{{ $category ? route('admin.category.update', $category->id) : route('admin.category.store') }}">
									<span id="loader" class="" role="status" aria-hidden="true"></span>
									<span class="text-button">{{ $category ? 'Update' : 'Create' }}</span>
								</button>
							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
		{{-- /End Card --}}
	</div>
</div>

{{--Modal Success mesagges--}}
<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalSuccess" aria-hidden="true">

	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header text-center p-0 pt-3">
					<span class="modal-title w-100" id="myModalSuccess">
						<i class="far fa-check-circle"></i>
					</span>
			</div>
			<div class="modal-body text-center pt-3">
				<h2 class="text-muted">Great!</h2>
				<p class="message"></p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div>
{{--/ End Modal Success  mesagges--}}

{{-- Modal delete--}}
@if($category)
	<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center p-0 pt-3">
					{{--<h5 class="modal-title" id="exampleModalLabel">{{ 'Delete Post - '. $post->name }}</h5>--}}
					<span class="modal-title w-100" id="myModalLabel">
						<i class="far fa-trash-alt"></i>
					</span>
				</div>
				<div class="modal-body text-center pt-3">
					<h2 class="text-muted">Are you sure?</h2>
					<p class="text-muted">
						To confirm deletion, type <i class="font-weight-bold">delete me</i> into the filed
					</p>
					<input type="text" id="deleteMe" maxlength="9" class="form-control form-control-sm" required autocomplete="off">
				</div>
				<div class="modal-footer justify-content-center">
					<div class="col-12 col-md-5 text-right">
						<a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>
					</div>
					<form class="col-12 col-md-5  pl-0" action="{{  route('admin.category.destroy', $category->id) }}" method="post">
						@csrf
						{{ method_field('DELETE') }}
						<div class="form-group text-left mb-0">
							<button id="deleteMeBtn" class="btn btn-success" type="submit" data-redirect="{{ route('admin.category.index') }}" disabled>
								Delete
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endif
{{--/End Modal Delete--}}


{{--Modal dropzone error mesagges--}}
<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalError" aria-hidden="true">

	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header text-center p-0 pt-3">
					<span class="modal-title w-100" id="myModalLabel">
						<i class="far fa-times-circle"></i>
					</span>
			</div>
			<div class="modal-body text-center pt-3">
				<h2 class="text-muted">Ooops!</h2>
				<p class="message"></p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Try Again</button>
			</div>
		</div>
	</div>
</div>
{{--/ End Modal dropzone error mesagges--}}