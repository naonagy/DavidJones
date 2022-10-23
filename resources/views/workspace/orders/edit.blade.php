@extends('dashboard')

@section('content')
<form method="post" action="{{route("orders.update", $order->order_id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="hidden_id" value="{{$order->order_id}}"/>
    <div class="container">

        <div class="row">
        
            <div class="col">
            <label for="id"> Id comanda</label>
            </div>
            
            <div class="col">
            <input type="text" name="id" id="id" required value="{{$order->order_id}}">
            </div>


        </div>
        <div class="row">
        
            <div class="col">
            <label for="description" > Descriere</label>
            </div>
            
            <div class="col">
            <textarea type="text" name="description" id="description" required>
            {{$order->status}}
            </textarea>
            </div>

            
        </div>
        <div class="row">
        
            <div class="col">
            <label for="status"> Status</label>
            </div>
            
            <div class="col">
            <select type="text" name="status" id="status" required>
                <option value="Genti">Genti</option>
                <option value="Rucsacuri">Rucsacuri</option>
                <option value="Portofele">Portofele</option>
            </select>
            </div>

            
        </div>

         <div class="row">
        
            <div class="col">
            <label for="product_category"> Imagine Produs</label>
            </div>
            
            <div class="col">
            <input type="file" name="product_image"/>
            <img src="{{asset('images/'.$product->product_image) }}" style="width:300px"/>

            <input type="hidden" name="hidden_product_image" value="{{$product->product_image}}"/>
            </div>

            
        </div>
        @foreach ($orderline as $line)
            
        @endforeach
        <div class="row">
        
            <div class="col">
            <label for="product_id"> Pret Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="product_id" id="product_id" required  value="{{$line->product_id}}"/>
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="quantity">Cantitate Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="quantity" id="quantity" required value="{{$line->quantity}}">
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="price_each"> Culoare Produs</label>
            </div>
            
            <div class="col">
            <input type="text" name="price_each" id="price_each"  value="{{$line->price_each}}" required>
            </div>


        </div>
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-primary" value="Modifica">
    </div>
</form>
<script>
document.getElementsByName('status')[0].value = "{{ $order->status }}";
</script>
@endsection('content')