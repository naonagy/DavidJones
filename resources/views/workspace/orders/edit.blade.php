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
                <h1>{{$order->order_id}}</h1>
            </div>
        </div>

        <div class="row">
        
            <div class="col">
                <label for="status"> Status</label>
            </div>
            
            <div class="col">
                <select type="text" name="status" id="status" required>
                    <option value="Comanda noua">Comanda noua</option>
                    <option value="Comanda anulata">Comanda anulata</option>
                    <option value="Comanda livrata">Comanda livrata</option>
                    <option value="Returnata">Returnata</option>
                </select>
            </div>

        </div>
        <div class="row">
        
            <div class="col">
                <label for="country" > Tara</label>
            </div>
            
            <div class="col">
                <textarea type="text" name="country" id="country" required>
                    {{$order->country}}
                </textarea>
            </div>
        </div>
        <div class="row">
        
            <div class="col">
                <label for="city" > Localitate</label>
            </div>
            
            <div class="col">
                <textarea type="text" name="city" id="city" required>
                    {{$order->city}}
                </textarea>
            </div>
        </div>        
        <div class="row">
        
            <div class="col">
            <label for="address" > Adresa</label>
            </div>
            
            <div class="col">
            <textarea type="text" name="address" id="address" required>
            {{$order->address}}
            </textarea>
            </div>
        </div>
        @foreach ($orderline as $line)

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <label for="product_id">
                            ID Produs
                       </label>
                    </th>
                    <th>
                        <label for="quantity">
                            Cantitate
                       </label>
                    </th>
                    <th class="text-center">
                        <label for="price_each">
                             Pret Produs
                        </label>
                    </th>
                    <th class="text-center">Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $subtotal=0 @endphp

                <tr>
                    <td class="col-sm-8 col-md-6">
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="{{ route('products.show', $line->product_id) }}">
                                        <input type="number" name="product_id" id="product_id" required  value="{{$line->product_id}}"/>
                                </a>
                            </h4>
                            <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                        </div>
                    </div></td>
                    <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" name="quantity" id="quantity" required value="{{$line->quantity}}">
                    </td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>
                        <input type="number" name="price_each" id="price_each" required  value="{{$line->price_each}}"/>
                    </strong></td>
                    <td class="col-sm-1 col-md-1 text-center"><strong>{{ $line->price_each*$line->quantity }} RON</strong></td>
                    <td class="col-sm-1 col-md-1">
                    
                    </tr>
                @php $subtotal += $line->price_each*$line->quantity @endphp
                @endforeach	
            </tbody>
        </table>
    </div>
       
    <div class="text-center">
        <input type="submit" class="btn btn-primary" value="Modifica">
    </div>
</form>
<script>
    document.getElementsByName('status')[0].value = "{{ $order->status }}";
</script>
@endsection('content')