@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"><b>ID Client</b></label>
				<div class="col-sm-10" style="text-align: center">
					<a href="{{ route('customers.show', $order->customer_id) }}">
						{{ 	$order->customer_id	}}
					</a>
				</div>
				<label class="col-sm-2 col-label-form"><b>ID Comanda</b></label>
				<div class="col-sm-10" style="text-align: center">
					{{ 	$order->order_id	}}
				</div>
				<label class="col-sm-2 col-label-form"><b>Status Comanda</b></label>
				<div class="col-sm-10" style="text-align: center">
					{{ 	$order->status	}}
				</div>
			</div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Cantitate</th>
                        <th class="text-center">Pret</th>
                        <th class="text-center">Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $subtotal=0 @endphp

                @foreach ($orderline as $line)
                    
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <div class="media-body">
								<h4 class="media-heading">
									<a href="{{ route('products.show', $line->product_id) }}">
										{{ $line->product_id }}
									</a>
								</h4>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
							{{ $line->quantity }}
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $line->price_each }} RON</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $line->price_each*$line->quantity }} RON</strong></td>
                        <td class="col-sm-1 col-md-1">
                        
                    	</tr>
                    @php $subtotal += $line->price_each*$line->quantity @endphp
					@endforeach	

                    <tr>
                        <td> Adresa </td>
                        <td> {{ $order->address }}  </td>
                        
                    </tr>
                    <tr>
                        <td> Localitate </td>
                        <td> {{ $order->city }} </td>
                        
                    </tr>
                    <tr>
                        <td> Tara </td>
                        <td> {{ $order->country }} </td>
                        
                    </tr>
					<tr>
						<td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>
                            {{ $subtotal }} RON
                        </strong></h5></td>
					</tr>
					<tr>
						<td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>{{ $deliverycost=18 }} RON</strong></h5></td>
					</tr>
					<tr>
						<td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>
                        {{ $subtotal+$deliverycost }} RON   
                        </strong></h3></td>
					</tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')
