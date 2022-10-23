@extends('dashboard')

@section('content')


	<h2>{{ $order->order_id }}</h2>
			
	<a href="{{ route('orders.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
		@foreach ($orderline as $line)
			
			
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Status Comanda</b></label>
			<div class="col-sm-10">
				{{ 	$line->orderline_id	}}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Status Comanda</b></label>
			<div class="col-sm-10">
				{{ $line->product_id }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Pret total</b></label>
			<div class="col-sm-10">
				{{ $line->quantity }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Pret total</b></label>
			<div class="col-sm-10">
				{{ $line->price_each }}
			</div>
		</div>
		@endforeach	
	</div>


@endsection('content')