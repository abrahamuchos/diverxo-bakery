@extends('layouts.app')

@section('title')
	Order Invoice
@endsection

@section('content')
	<section class="container my-5">
		<div class="card">
			<div class="card-header">
				Invoice
				<strong>{{ $order->created_at }}</strong>
				<span class="float-right text-capitalize"> <strong>Status:</strong> {{ $order->status }}</span>

			</div>
			<div class="card-body">

				{{-- Header invoice --}}
				<div class="row mb-4">
					<div class="col-sm-6">
						<h6 class="mb-3">From:</h6>
						<div>
							<strong>{{ env('COMPANY_NAME') }}</strong>
						</div>
						<div>{{ env('COMPANY_ADDRESS') }}</div>
						<div>{{ 'Email: '.env('MAIL_ADMIN') }}</div>
						<div>{{ 'Phone: '.env('COMPANY_PHONE') }}</div>
					</div>

					<div class="col-sm-6">
						<h6 class="mb-3">To:</h6>
						<div>
							<strong>{{ $user->last_name.','.$user->name }}</strong>
						</div>
						<div>{{ 'Attn: ' . env('COMPANY_NAME')}}</div>
						<div>{{ ($user->address_line1 ?? '').', '.($address->line2 ?? '') }}</div>
						<div>{{ ($user->state ?? '').', '.($user->country ?? '') }}</div>
						<div>{{ 'Email: '. $user->email }}</div>
						<div>{{ 'Phone: '. $user->phone_number }}</div>
					</div>


				</div>
				{{--/End Header invoice --}}

				{{-- Items --}}
				<div class="table-responsive-sm">
					<table class="table table-striped">
						<thead>
						<tr>
							<th class="center">#</th>
							<th>Item</th>
							<th>Description</th>

							<th class="right">Unit Cost</th>
							<th class="center">Qty</th>
							<th class="right">Total</th>
						</tr>
						</thead>
						<tbody>
						@php($i = 0)
						@foreach($order->items as $item)
							@php($i++)
							<tr>
								<td class="center">{{ $i }}</td>
								<td class="left strong">{{ $item->product->name }}</td>
								<td class="left">{{ $item->product->pre_description }}</td>

								<td class="right">{{ env('STRIPE_CURRENCY_SYMBOL').$item->price }}</td>
								<td class="center">{{ $item->qty }}</td>
								<td class="right">{{ env('STRIPE_CURRENCY_SYMBOL').($item->qty * $item->price) }}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				{{--/End Items --}}
				<div class="row">
					<div class="col-lg-4 col-sm-5">

					</div>

					<div class="col-lg-4 col-sm-5 ml-auto mt-5">
						<table class="table table-clear">
							<tbody>
							{{--<tr>--}}
								{{--<td class="left">--}}
									{{--<strong>Subtotal</strong>--}}
								{{--</td>--}}
								{{--<td class="right">$8.497,00</td>--}}
							{{--</tr>--}}
							{{--<tr>--}}
								{{--<td class="left">--}}
									{{--<strong>Discount (20%)</strong>--}}
								{{--</td>--}}
								{{--<td class="right">$1,699,40</td>--}}
							{{--</tr>--}}
							{{--<tr>--}}
								{{--<td class="left">--}}
									{{--<strong>VAT (10%)</strong>--}}
								{{--</td>--}}
								{{--<td class="right">$679,76</td>--}}
							{{--</tr>--}}
							<tr>
								<td class="left">
									<strong>Total</strong>
								</td>
								<td class="right">
									<strong>{{ env('STRIPE_CURRENCY').' '.$order->total }}</strong>
								</td>
							</tr>
							</tbody>
						</table>

					</div>

				</div>

			</div>
		</div>
	</section>
@endsection