<div class="container">
	<div class="row justify-content-center">

		<div class="col-12 col-lg-10 order-lg-0 dropzone-one">
			<form class="col-12 m-0 dropzone dropzone-header row text-center p-0" id="imageDropZone">
				@csrf
				<div class="col-12 dz-message text-muted" data-dz-message>
					<p class="mb-1">Drop an image header here to upload</p>
					<small>(We recommend horizontal images)</small>
				</div>
			</form>

			{{-- Form to details products --}}
			<form class="col-12 mt-4 mr-0 p-0" id="fProduct" method="POST">
				@csrf
				<div class="col-lg-12 p-0">

					{{--First card  --}}
					<div class="card mb-4 post-title-panel">
						<div class="card-body">

							<div class="row">
								<div class="col-12 text-right">
									<div class="switch">
										<label>
											Off
											<input id="isActive" name="isActive" type="checkbox" checked>
											<span class="lever"></span> On
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-5">
									<div class="md-form mb-0">
										<label class="form-check-label" for="sku">SKU</label>
										<input type="text" id="sku" name="sku" class="form-control mb-1" value="{{ $product->sku ?? ''}}"  maxlength="60">
										<small class="text-muted">Code product (Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
								<div class="col-12 col-md-7">
									<div class="md-form mb-0">
										<label class="form-check-label" for="name">Name</label>
										<input type="text" id="name" name="name" class="form-control mb-1" value="{{ $product->name ?? ''}}"  minlength="2" maxlength="60">
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-12 col-md-6">
									<div class="md-form mb-0">
										<label class="form-check-label" for="brand">Brand</label>
										<input type="text" id="brand" name="brand" class="form-control mb-1" value="{{ $product->brand ?? ''}}"  minlength="2" maxlength="100">
										<small class="text-muted">(Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<select id="category" name="category" class="mdb-select md-form">
										<option value="" disabled selected>Choose your category</option>
										@foreach( $categories as $parent)
											@if($parent->children->count() > 0)
												<optgroup label="{{ $parent->name }}">
													@foreach( $parent->children as $child)
														@if($product)
															<option
																value="{{ $child->id }}" {{ $child->id == $product->category->id ? 'selected' : '' }}>{{ $child->name }}</option>
														@else
															<option value="{{ $child->id }}">{{ $child->name }}</option>
														@endif
													@endforeach
												</optgroup>
											@else
												<optgroup label="{{ $parent->name .' (Category without child)'}}">
													@if($product)
														<option
															value="{{ $parent->id }}" {{ $parent->id == $product->category->id ? 'selected' : '' }}>{{ $parent->name }}</option>
													@else
														<option value="{{ $parent->id }}">{{ $parent->name }}</option>
													@endif
												</optgroup>
											@endif

										@endforeach
									</select>
									<label class="mdb-main-label">Category</label>
								</div>

							</div>

							<div class="row mt-4">
								<div class="col-12">
									<div class="md-form mb-0">
										<label class="form-check-label" for="preDescription">Pre description</label>
										<input type="text" id="preDescription" name="preDescription" class="form-control" value="{{ $product->pre_description ?? ''}}" maxlength="70">
										<small class="text-muted">Please write a short description for your product, it has a maximum of 70 characters</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-6 col-md-4">
									<div class="md-form mb-0">
										<label class="form-check-label" for="oldPrice">Old Price</label>
										<input type="number" id="oldPrice" name="oldPrice" class="form-control" value="{{ $product->old_price ?? ''}}">
										<small class="text-muted">Price to be crossed out (Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
								<div class="col-6 col-md-4">
									<div class="md-form mb-0">
										<label class="form-check-label" for="price">Price</label>
										<input type="number" id="price" name="price" class="form-control" value="{{ $product->price ?? ''}}">
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
								<div class="col-6 col-md-4">
									<div class="md-form mb-0">
										<label class="form-check-label" for="stock">Stock</label>
										<input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock ?? ''}}">
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>
							</div>

							<div class="row mt-4 mb-4">
								<div class="col-8 col-md-2">
									<div class="md-form mb-0">
										<label class="form-check-label" for="oldPrice">Size</label>
										<input type="number" id="size" name="size" class="form-control" value="{{ $product->size ?? ''}}">
										<small class="text-muted">(Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>

								<div class="col-4 col-md-2">
									<select id="sizeUnit" name="sizeUnit" class="mdb-select md-form">
										<option value="" disabled selected>Unit</option>
										@foreach( $sizeUnits as $sizeUnit)
											<option value="{{ $sizeUnit->id }}" {{ $product->size_unit_id == $sizeUnit->id ? 'selected' : ''}}>
												{{ $sizeUnit->value }}
											</option>
										@endforeach
									</select>
									<label class="mdb-main-label">Size Unit</label>
								</div>

								<div class="col-8 col-md-2">
									<div class="md-form mb-0">
										<label class="form-check-label" for="weight">Weight</label>
										<input type="number" id="weight" name="weight" class="form-control" value="{{ $product->weight ?? ''}}">
										<small class="text-muted">(Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>

								<div class="col-4 col-md-2">
									<select id="weightUnit" name="weightUnit" class="mdb-select md-form">
										<option value="" disabled selected>Unit</option>
										@foreach( $weightUnits as $weightUnit)
											<option value="{{ $weightUnit->id }}" {{ $weightUnit->id == $product->weight_unit_id ? 'selected' : '' }}>
												{{ $weightUnit->value }}
											</option>
										@endforeach
									</select>
									<label class="mdb-main-label">Weight Unit</label>
								</div>

								<div class="col-8 col-md-2">
									<div class="md-form mb-0">
										<label class="form-check-label" for="volume">Volume</label>
										<input type="number" id="volume" name="volume" class="form-control" value="{{ $product->volume ?? ''}}">
										<small class="text-muted">(Optional)</small>
										<div class="invalid-feedback text-left"></div>
									</div>
								</div>

								<div class="col-4 col-md-2">
									<select id="volumeUnit" name="volumeUnit" class="mdb-select md-form">
										<option value="" disabled selected>Unit</option>
										@foreach( $volumeUnits as $volumeUnit)
											<option value="{{ $volumeUnit->id }}"{{ $volumeUnit->id == $product->volume_unit_id ? 'selected' : '' }}>
												{{ $volumeUnit->value }}
											</option>
										@endforeach
									</select>
									<label class="mdb-main-label">Volume Unit</label>
								</div>

							</div>

						</div>
					</div>
					{{-- End First card - Info post --}}


				</div>
			</form>
			{{--/End Form to details products --}}
		</div>

		{{-- TinyMCE --}}
		<div class="col-12 col-lg-10">
			<textarea name="article" id="productDescription" data-value=""></textarea>
		</div>
		{{--/End TinyMCE --}}

		{{-- Actions Buttons --}}
		<div class=" col-12 col-lg-10 mt-5 text-center text-lg-right ">
			@if($product)
				<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">Delete</a>
			@else
				<a href="{{ route('admin.product.index') }}" class="btn btn-danger">Cancel</a>
			@endif
			<button id="createProduct" type="button" class="btn btn-success m-0 ml-lg-4"
							data-action="{{ route('admin.product.store') }}">
				<span id="loader" class="" role="status" aria-hidden="true"></span>
				<span class="text-button">{{ $product ? 'Update' : 'Create' }}</span>
			</button>
		</div>
		{{-- Actions Buttons --}}

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

{{-- Modal delete--}}
@if($product)
	<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center p-0 pt-3">
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
					<form class="col-12 col-md-5  pl-0" action="{{  route('admin.product.destroy', $product->id) }}" method="post">
						@csrf
						{{ method_field('DELETE') }}
						<div class="form-group text-left mb-0">
							<button id="deleteMeBtn" class="btn btn-success" type="submit" data-redirect="{{ route('admin.product.index') }}" disabled>
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