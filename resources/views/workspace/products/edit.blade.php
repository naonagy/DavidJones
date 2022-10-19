@extends('dashboard')

@section('content')
<form method="post" action="{{route("products.update", $product->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="hidden_id" value="{{$product->id}}"/>
    <div class="container">

        <div class="row">
        
            <div class="col">
            <label for="product_name"> Nume Produs</label>
            </div>
            
            <div class="col">
            <input type="text" name="product_name" id="product_name" required value="{{$product->product_name}}">
            </div>


        </div>
        <div class="row">
        
            <div class="col">
            <label for="description" > Descriere</label>
            </div>
            
            <div class="col">
            <textarea type="text" name="description" id="description" required>
            {{$product->description}}
            </textarea>
            </div>

            
        </div>
        <div class="row">
        
            <div class="col">
            <label for="product_category"> Categorie</label>
            </div>
            
            <div class="col">
            <select type="text" name="product_category" id="product_category" required>
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
        
        <div class="row">
        
            <div class="col">
            <label for="product_price"> Pret Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="product_price" id="product_price" required  value="{{$product->product_price}}"/>
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="quantity">Cantitate Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="quantity" id="quantity" required value="{{$product->quantity}}">
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="product_color"> Culoare Produs</label>
            </div>
            
            <div class="col">
            <input type="text" name="product_color" id="product_color" required value="{{$product->product_color}}">
            </div>


        </div>
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-primary" value="Modifica">
    </div>
</form>
<script>
document.getElementsByName('product_category')[0].value = "{{ $product->product_category }}";
</script>
@endsection('content')