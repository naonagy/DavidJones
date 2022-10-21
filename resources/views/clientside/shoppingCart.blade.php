@extends('layouts.master')
@section('content')

<div class="container">


<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
            </div>  
            @foreach ($cart as $product)
                
 
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col">
                        <div class="row text-muted"></div>
                        {{ $product->product_id }}
                    </div>
                    <div class="col">
                        <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                    </div>
                    <div class="col"> {{ $product->price_each }} <span class="close">&#10005;</span></div>
                </div>
            </div>
            @endforeach 
    </div>
</div> 
</div>


@endsection('content')