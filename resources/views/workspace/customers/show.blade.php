@extends('dashboard')

@section('content')


			
	<a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
					
	<div class="card-body">
		
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>ID client</b></label>
			<div class="col-sm-10">
				{{ $user->id }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Nume client</b></label>
			<div class="col-sm-10">
				{{ $user->name }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Adresa de email</b></label>
			<div class="col-sm-10">
				{{ $user->email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Numar telefon</b></label>
			<div class="col-sm-10">
				{{ $user->phone }}
			</div>
		</div>
		
	</div>
	@forelse ($order as $row)
	<div class="row mb-4">
		<div class="col-sm-10">
			<label class="col-sm-2 col-label-form">
				<b>
				Id Comanda:
				</b>
			</label>
			<a href="{{ route('orders.show', $row->order_id ) }}">
				{{ $row->order_id }}
			</a>
		</div>
	</div>
	@empty
		<div>Clientul nu are comenzi inca</div>
	@endforelse


@endsection('content')