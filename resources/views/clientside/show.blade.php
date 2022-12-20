@extends('layouts.master')
@section('content')

<div class="container">

<!-- Breadcrumb- categorie de produse -->

@php

$categorie=$product->product_category;
$categorie = strtolower($categorie);
    foreach ($discounts as $discount) {
      if ($product->id==$discount->product_id) {
        $new_price=$discount->new_price;
        break;
      }
    }
@endphp

<div class="pt-2">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('category', ['category' =>  $categorie])}}">
          {{ $product->product_category }}
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        {{ $product->product_name }}
      </li>
    </ol>
  </nav>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 p-4">
      <div class="container">
        <div class="row">
          <img src="{{ asset('images/' .  $product->product_image) }}" width="75%" class="img-thumbnail" />
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="container pt-2">
        <div class="row pt-5 d-flex pb-3">
            <h1 class="fs-2 pb-2 fs-4">{{$product->product_name}}</h1>
            <h2  class="brand fs-5" >
              David Janes
            </h2>
        </div>
        <div class="d-flex flex-row py-2">

          @if(isset($new_price))
            <div class="text-decoration-line-through px-1">{{$product->product_price}} RON </div>
            <div class="fw-semibold text-danger px-1">{{$new_price}} RON </div>
          @else
            <div class="fw-semibold text-danger px-1">{{$product->product_price}} RON </div> 
          @endif
          
        </div>
        <div class="py-1">
          {{$product->description}}
        </div>
        <div class="py-1">
          <p class="fw-semibold">
            Culoare: 
            <span class="fw-normal">{{$product->product_color}}</span>
          </p>
        </div>
        <div class="py-1">
          <p class="fw-semibold">
            Cost transport: 
            <span class="fw-normal">18 RON</span>
          </p>
        </div>
        <div class="pt-1 pb-3">
          <p class="fw-semibold">
            Cod produs: 
            <span class="fw-normal">{{$product->id}}</span>
          </p>
        </div>
        @if ($product->quantity==0)
          <div class="pt-1 pb-3">
            <p class="fw-semibold text-danger">
              Produs indipsonibil momentan
            </p>
          </div>
          @else
            <form method='post' action="{{ route('addToCart')}}">
              <div class="d-flex flex-row pt-2">

              @csrf

              <input type="number" value="1" min="1" max="{{ $product->quantity }}" class="form-control border border-0 rounded" style="width: 10%;" name="quantity">
              <button type="submit" class="btn green-button btn-md px-4 mx-3">Adauga in cos</button>
              <input type="hidden" value="{{ $product->id }}" name="id">
            </div>
            </form>
        @endif
      </div>
      <div class="pt-3">
        <h2 class="separator display-6 text-center pb-5 fw-bold"></h2>
      </div>
      <div>
        <Button> <span><i class="bi bi-heart"></i></span> Adauga la favorite</Button>
        <Button> <span><i class="bi bi-info"></i></span> Cere informatii</Button>
      </div>
    </div>
  </div>
</div>
</div>



@endsection