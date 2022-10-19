@extends('layouts.master')
@section('content')

<div class="container">
<h2>{{$product->product_name}}</h2>
			
<a href="{{ route('produse.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
	
    <img src="{{ asset('images/' .  $product->product_image) }}" width="100%" class="img-thumbnail" />
				
	<div class="card-body">
		
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Descriere</b></label>
			<div class="col-sm-10">
				{{$product->description}}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Categorie</b></label>
			<div class="col-sm-10">
				{{$product->product_category}}
			</div>
		</div>
		
	</div>
</div>

@endsection