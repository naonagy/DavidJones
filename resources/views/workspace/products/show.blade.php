@extends('dashboard')

@section('content')
<a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>

<div class="container-fluid">
	<div class="row">
	  <div class="col-6">
		<div class="container">
		  <div class="row">
			<img src="{{ asset('images/' .  $product->product_image) }}" width="100%" class="img-thumbnail" />
  
		  </div>
		</div>
	  </div>
	  <div class="col-6">
		<div class="container pt-5">
		  <div class="row pt-5 pb-1">
			  <h1 class="pt-5 fs-2s">Nume Produs: {{$product->product_name}}</h1>
		  </div>
		  <div class="pb-1">
			Pret Produs: {{$product->product_price}} RON
		  </div>
		  <div class="pb-1">
			Descriere Produs: {{$product->description}}
		  </div>
		  <div class="pb-1">
			Culoare Produs: {{$product->product_color}}
		  </div>
		  <div class="pb-1">
			Cantitate Produs: {{$product->quantity}}
		  </div>
		  <div class="pb-1">
			Cost transport: 18 RON
		  </div>
		  <div class="pb-1">
			ID Produs: {{$product->id}}
		  </div>
  
		</div>
		<div class="pt-5">
		  <h2 class="separator display-6 text-center pb-5 fw-bold"></h2>
		</div>
	  </div>
	</div>
  </div>

			
	


@endsection('content')