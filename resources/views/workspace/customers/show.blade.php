@extends('dashboard')

@section('content')


	<h2>{{ $user->id }}</h2>
			
	<a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
					
	<div class="card-body">
		
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


@endsection('content')