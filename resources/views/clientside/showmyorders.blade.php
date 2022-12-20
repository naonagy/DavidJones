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
                        <p class="mb-0">Numar comanda: {{$order->order_id }}</p>
                    </div>
                  <hr>

                 @php $subtotal=0 @endphp
                 @forelse ($orderline as $line)
                 @foreach ($products as $product)
                    @if ($line->product_id==$product->id)
                        
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                                src="{{asset('images/'.$product->product_image)}}"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5 class="media-heading fs-5">
                                <a href="{{ route('produse.show',$product->id)}}">
                                    {{ $product->product_name }}
                                </a>
                            </h5>
                            <p class="small mb-0 fs-bold">Cod produs: {{ $line->product_id }}</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center flex-wrap">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0">{{ $line->quantity }}</h5>
                          </div>
                          <div style="width: 80px;">
                            <h5 class="mb-0">{{ $line->price_each*$line->quantity }} RON</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                 @endforeach
                @php $subtotal += $line->price_each*$line->quantity @endphp
                @empty
                   <h1>Nu exista comanda</h1>
                @endforelse
            </div>

                <div class="col-lg-5">
                  <div class="card rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 text-center fw-semibold">Date de livrare</h5>
                      </div>
                    <div class="mb-4 ">
                        Adresa de livrare: {{ $order->address }}
                    </div>

                    <div class="mb-4 ">
                        Localitate: {{ $order->city }}
                    </div>

                    <div class="mb-4 ">
                        Tara: {{ $order->country }}
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
