@extends('layouts.master')
@section('content')

<div class="container">
<a href="{{ route('produse.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
	
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
        <div class="row pt-5">
            <h1 class="pt-5 fs-2s">{{$product->product_name}}</h1>
        </div>
        <div>
          {{$product->product_price}} RON
        </div>
        <div>
          {{$product->description}}
        </div>
        <div>
          {{$product->product_color}}
        </div>
        <div>
          {{$product->quantity}}
        </div>
        <div>
          Cost transport: 18 RON
        </div>
        <div>
          {{$product->quantity}}

        <form method='post' action="{{ route('addToCart')}}">

          @csrf

          <input type="number" value="1" min="1" max="{{ $product->quantity }}" class="form-control" style="width: 100px" name="quantity">
          
          <br>
          <button type="submit" class="btn btn-primary btn-sm">Adauga in cos</button>
          <input type="hidden" value="{{ $product->id }}" name="id">
            
        </form>

        </div>
        <div>
          {{$product->id}}
        </div>

      </div>
      <div class="pt-5">
        <h2 class="separator display-6 text-center pb-5 fw-bold"></h2>
      </div>
      <div>
        <Button>Adauga la favorite</Button>
        <Button>Cere informatii</Button>
      </div>
    </div>
  </div>
</div>
</div>



@endsection