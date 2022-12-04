@extends('layouts.master')
@section('content')


<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
                <div class="col-lg-7 ">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-3">
                    @php
                        $cartnumber= count($cart);
                    @endphp
                        <p class="mb-0">Ai {{ $cartnumber }} produse in cos</p>
                        <button class="btn"><a href="{{ route('master') }}" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Continua cumparaturile</a></button>
                    </div>
                  <hr>

                 @php $subtotal=0 @endphp
                 @forelse ($cart as $product)
                 @foreach ($products as $data)
                    @if ($product->product_id==$data->id)
                        
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                                src="{{asset('images/'.$data->product_image)}}"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5 class="media-heading fs-5">
                                <a href="{{ route('produse.show',$product->product_id)}}">
                                    {{ $product->product_name }}
                                </a>
                            </h5>
                            <p class="small mb-0 fs-bold">Cod produs: {{ $product->product_id }}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center flex-wrap">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">{{ $product->quantity }}</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">{{ $product->price_each*$product->quantity }} RON</h5>
                          </div>
                          <div>
                            <form method='post' action="{{ route('removeCart')}}">

                                @csrf
                                
                                <br>

                                <button type="submit" class="btn btn-outline-secondary">
                                    <span class="glyphicon glyphicon-remove"></span> Sterge
                                </button>
                                <input type="hidden" value="{{ $product->cart_id }}" name="cart_id">
                                    
                            </form>
                          </div>
                          <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                 @endforeach
                @php $subtotal += $product->price_each*$product->quantity @endphp
                @empty
                   <h1>Nu aveti nimic in cos</h1>
                @endforelse
            </div>

                <div class="col-lg-5">
  
                  <div class="card rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 text-center fw-semibold">Date de livrare</h5>
                      </div>
                      <form class="mt-4" method='post' action="{{ route('checkout')}}">

                        @csrf
                        <div class="form-outline form-white mb-4 ">
                          <input class="rounded-1 w-100" type="text" name="adress" class="form-control form-control-lg" siez="17"
                            placeholder="Adresa de livrare" required/>
                        </div>
  
                        <div class="form-outline form-white mb-4">
                          <input class="rounded-1 w-100" type="text" name="city" class="form-control form-control-lg" siez="17"
                            placeholder="Oras" minlength="19" required/>
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input class="rounded-1 w-100" type="text" name="country" class="form-control form-control-lg" siez="17"
                              placeholder="Tara" required/>
                          </div>

                        <div class="row mb-4">
                          <div class="col-md-6">
                            
                          </div>
                          <div class="col-md-6">
                            
                          </div>
                        </div>
  
  
                      <hr class="my-4">
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2 fw-semibold">Subtotal</p>
                        <p class="mb-2">{{ $subtotal }} RON</p>
                      </div>
  
                      <div class="d-flex justify-content-between">
                        <p class="mb-2 fw-semibold">Taxa de livrare</p>
                        <p class="mb-2">{{ $deliverycost=18 }} RON</p>
                      </div>
  
                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2 fw-semibold">Total</p>
                        <p class="mb-2">{{ $subtotal+$deliverycost }} RON</p>
                      </div>
  
                      <button type="submit" class="btn green-button btn-lg">
                          <span class="glyphicon glyphicon-play"></span>Checkout
                      </button>
                    </form>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection('content')