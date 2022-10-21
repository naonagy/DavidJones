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
                    {{ $subtotal=0 }}
                @foreach ($cart as $product)
                    
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $product->product_id }}</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
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
                    {{ $subtotal += $product->price_each*$product->quantity }}
                 @endforeach 

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>
                            {{ $subtotal }} RON
                        </strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>{{ $deliverycost=18 }} RON</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
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
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection('content')