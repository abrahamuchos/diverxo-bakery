@extends('admin.layouts.app')
@section('title')
	Orders
@endsection

@section('content')
	<div class="container">

		<section id="paymentDetails" class="my-2">
			<div class="row justify-content-center">
				<div class="col-11">
					{{--First card--}}
					<div class="card card-cascade narrower mb-5 post-title-panel">
						{{--Card image--}}
						<div class="view view-cascade gradient-card-header blue-gradient">
							<h4 class="font-weight-500 mb-0" style="color: white !important">Payment details</h4>
						</div>
						{{--/End Card image--}}
						<div class="card-body">
							{{-- Payments Details --}}
							<div class="row">
								{{-- Payments --}}
								<div class="col-12 col-lg-6 text-center">
									<p class="text-muted">
										<i class="fab fa-cc-stripe"></i>
										Payment
									</p>
									<h3 class="h5 d-flex justify-content-center align-items-center">
										{{ money_format('%i', $order->total) }}
										@if($order->status === "succeeded")
											<span class="ml-2 badge badge-success">Success</span>
										@elseif($order->status === "pending")
											<span class="ml-2 badge badge-warning">Pending</span>
										@elseif($order->status === "failed")
											<span class="ml-2 badge badge-danger">Failed</span>
										@else
											<span class="ml-2 badge badge-light">Unknown</span>
										@endif
									</h3>
								</div>
								{{-- /End Payments --}}
								{{-- Charge ID--}}
								<div class="col-12 col-lg-6 text-center">
									<p class="text-muted">
										<i class="fas fa-cash-register"></i>
										Charge id
									</p>
									<h3 class="h5">{{ $order->charge_id }}</h3>
								</div>
								{{--/End Charge ID--}}
							</div>
							<div class="row pt-4">
								<div class="col-4 text-center">
									<p class="text-muted m-0">Date</p>
									<span>{{ date('M d, g:ia', strtotime($order->created_at)) }}</span>
								</div>
								<div class="col-4 text-center">
									<p class="text-muted m-0">Payment method</p>
									<span>
										@if($charge['billing_details']['name'] === "Master Card")
											<i class="fab fa-cc-mastercard mr-2"></i>
										@elseif($charge['billing_details']['name'] === "Visa")
											<i class="fab fa-cc-visa mr-2"></i>
										@elseif($charge['billing_details']['name'] === "American Express")
											<i class="fab fa-cc-amex mr-2"></i>
										@elseif($charge['billing_details']['name'] === "Discover")
											<i class="fab fa-cc-discover mr-2"></i>
										@elseif($charge['billing_details']['name'] === "Diners Club")
											<i class="fab fa-cc-diners-club mr-2"></i>
										@elseif($charge['billing_details']['name'] === "JCB")
											<i class="fab fa-cc-jcb mr-2"></i>
										@else
											<i class="far fa-credit-card mr-2"></i>
										@endif
										{{ '••••'.' '.$charge['payment_method_details']['card']['last4'] }}
									</span>
								</div>
								<div class="col-4 text-center">
									<p class="text-muted m-0">Risk Level</p>
									<span class="text-uppercase">{{ $order->risk_level }}</span>
								</div>
							</div>
							{{--/End Payments Details --}}
							{{-- Buttons Payments Details--}}
							<div class="row pt-4">
								<div class="col-12 text-center">
									<button type="button" class="btn btn-light">Refund</button>
									<a href="{{ $order->receipt_url }}" target="_blank" class="btn btn-info">Receipt</a>
								</div>
							</div>
							{{--/End Buttons Payments Details--}}
						</div>
					</div>
				</div>

			</div>

		</section>

		<section id="paymentMethod">
			<div class="card card-cascade narrower mb-5 post-title-panel">
				{{--Card image--}}
				<div class="view view-cascade gradient-card-header blue-gradient">
					<h4 class="font-weight-500 mb-0" style="color: white !important">Payment method</h4>
				</div>
				{{--/End Card image--}}
				<div class="card-body">
					<div class="row px-lg-5">
						<ul class="col-12 col-lg-5">
							<li class="d-flex justify-content-between">
								<span class="text-muted">Name</span> <span>{{ $charge['billing_details']['name'] }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Fingerprint</span> <span>{{ $charge['payment_method_details']['card']['fingerprint'] }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Expires</span>
								<span>{{ $charge['payment_method_details']['card']['exp_month'] .'/'. $charge['payment_method_details']['card']['exp_year']	}}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Type</span> <span>{{ $charge['payment_method_details']['card']['funding'] }}</span>
							</li>
						</ul>

						<ul class="col-12 col-lg-5 offset-lg-2">
							<li class="d-flex justify-content-between">
								<span class="text-muted">Billing address</span>
								<span>
									{{ $charge['billing_details']['address']['line1'] .', '. $charge['billing_details']['address']['city'] .', '. $charge['billing_details']['address']['state'].', '. $charge['billing_details']['address']['postal_code']}}
								</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">CVC check</span>
								<span>
									<i class="fas fa-check"></i>
									{{  $charge['payment_method_details']['card']['checks']['cvc_check']  }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Street check</span>
								<span>
									<i class="fas fa-check"></i>
									{{  $charge['payment_method_details']['card']['checks']['address_line1_check']  }}
								</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Zip check</span>
								<span>
									<i class="fas fa-check"></i>
									{{  $charge['payment_method_details']['card']['checks']['address_postal_code_check']  }}
								</span>
							</li>
						</ul>

					</div>

				</div>
			</div>
		</section>

		<section id="userDetails">
			<div class="card card-cascade narrower mb-5 post-title-panel">
				{{--Card image--}}
				<div class="view view-cascade gradient-card-header blue-gradient">
					<h4 class="font-weight-500 mb-0" style="color: white !important">Customer Details</h4>
				</div>
				{{--/End Card image--}}
				<div class="card-body">
					<div class="row">
						<ul class="col-12 col-lg-5">
							<li class="d-flex justify-content-between">
								<span class="text-muted">Full name</span> <span>{{ $order->user->name .' '. $order->user->last_name }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Email</span> <span>{{ $order->user->email }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Document</span> <span>{{ $order->user->document }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">PhoneNumber</span>
								<span>{{ $order->user->phonenumber	}}</span>
							</li>
						</ul>

						<ul class="col-12 col-lg-5 offset-lg-2">
							<li class="d-flex justify-content-between">
								<span class="text-muted">Country</span> <span>{{ $order->user->country }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">State</span>
								<span>{{ $order->user->state }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">City</span>
								<span class="text-capitalize">{{ $order->user->city }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Address Line</span>
								<span>{{  $order->user->adress_line1  }}</span>
							</li>
							<li class="d-flex justify-content-between">
								<span class="text-muted">Zipcode</span>
								{{--<span>{{ $order->usergroup->user->zipcode }}</span>--}}
							</li>
						</ul>

					</div>

				</div>
			</div>
		</section>

		<section id="itemsDetails">
			<div class="card card-cascade narrower mb-5 post-title-panel">
				{{--Card image--}}
				<div class="view view-cascade gradient-card-header blue-gradient">
					<h4 class="font-weight-500 mb-0" style="color: white !important">Items Details</h4>
				</div>
				{{--/End Card image--}}
				<div class="card-body">
					<div class="row px-lg-4">
						<table class="table">
							<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">SKU</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
							</tr>
							</thead>
							<tbody>
							@php($count = 1)
							@foreach($order->items as $item)
								<tr>
									<th scope="row">{{ $count }}</th>
									<td>{{ $item->product->sku }}</td>
									<td>{{ $item->product->name }}</td>
									<td>{{ money_format('%i', $item->price) }}</td>
									<td>{{ $item->qty }}</td>
									@php( $count++)
								</tr>
							@endforeach

							</tbody>
						</table>

					</div>

				</div>
			</div>
		</section>

	</div>
@endsection