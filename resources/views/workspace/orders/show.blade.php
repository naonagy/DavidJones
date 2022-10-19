@extends('dashboard')

@section('content')


	<h2>{{ $order->id }}</h2>
			
	<a href="{{ route('orders.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
					
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Status Comanda</b></label>
			<div class="col-sm-10">
				{{ 	$order->orderline->id	}}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Status Comanda</b></label>
			<div class="col-sm-10">
				{{ $order->status }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Pret total</b></label>
			<div class="col-sm-10">
				{{ $order->pret_total }}
			</div>
		</div>
		
	</div>


@endsection('content')