@extends('dashboard')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
@foreach ($errors ->all() as $error)
    {{$error}}
@endforeach
</div>
@endif

<form method="post" action="{{route("products.store")}}" enctype="multipart/form-data">
@csrf

    <div class="container">

        <div class="row">
        
            <div class="col">
            <label for="product_name"> Nume Produs</label>
            </div>
            
            <div class="col">
            <input type="text" name="product_name" id="product_name" required >
            </div>


        </div>
        <div class="row">
        
            <div class="col">
            <label for="description" > Descriere</label>
            </div>
            
            <div class="col">
            <textarea type="text" name="description" id="description" required>
            
            </textarea>
            </div>

            
        </div>
        <div class="row">
        
            <div class="col">
            <label for="product_category"> Categorie</label>
            </div>
            
            <div class="col">
            <select type="enum" name="product_category" id="product_category" required>
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
           
           </div>

            
        </div>

        <div class="row">
        
            <div class="col">
            <label for="quantity">Cantitate Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="quantity" id="quantity" required >
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="product_price"> Pret Produs</label>
            </div>
            
            <div class="col">
            <input type="number" name="product_price" id="product_price" required >
            </div>


        </div>

        <div class="row">
        
            <div class="col">
            <label for="product_color"> Culoare Produs</label>
            </div>
            
            <div class="col">
            <input type="text" name="product_color" id="product_color" required >
            </div>


        </div>
    
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-primary" value="Add">
    </div>
</form>
@endsection('content')