@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
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
                @foreach ($cart as $product)
                    
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#">           
                                <img src="{{ asset('images/' .  $product->product_image) }}" width="100%" class="img-thumbnail" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{ route('produse.show',$product->product_id)}}">{{ $product->product_name }}</a></h4>
                                <h5 class="media-heading"><a href="#">{{ $product->product_id }}</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        {{ $product->quantity }}
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $product->price_each }} RON</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $product->price_each*$product->quantity }} RON</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <form method='post' action="{{ route('removeCart')}}">

                            @csrf
                            
                            <br>
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> Remove
                            </button></td>
                            <input type="hidden" value="{{ $product->cart_id }}" name="cart_id">
                                
                        </form>
                        
                    </tr>
                    @php $subtotal += $product->price_each*$product->quantity @endphp
                 @endforeach 

                 <form method='post' action="{{ route('checkout')}}">

                    @csrf
                
                    <input type="hidden" value="{{ $product->cart_id }}" name="cart_id">
                        
                    <tr>
                        <td> Adresa </td>
                        <td colspan="2"> <input type="text" name="address" id="address">  </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>
                            {{ $subtotal }} RON
                        </strong></h5></td>
                    </tr>
                    <tr>
                        <td> Localitate </td>
                        <td colspan="2"> <input type="text" name="city" id="city">  </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>{{ $deliverycost=18 }} RON</strong></h5></td>
                    </tr>
                    <tr>
                        <td> Tara </td>
                        <td colspan="2"> <input type="text" name="country" id="country">  </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>
                        {{ $subtotal+$deliverycost }} RON   
                        </strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <a href="{{ route('master') }}"> Continue Shopping</a>
                        </button></td>
                        <td>
                        <button type="submit" class="btn btn-success">
                            <a href="{{ route('checkout') }}">Checkout</a>  
                            <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection('content')