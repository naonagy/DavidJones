
@extends('layouts.master')
@section('content')






<div class="album py-5 bg-light">
    <div class="container d-flex flex-wrap justify-content-center">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 w-75">
        @if(count((array) $data )>0)
       
        @foreach ($data as $row)
        @php
          foreach ($discounts as $discount)
          {
            $new_price=NULL;
            if($row->id==$discount->product_id) 
              {
                $new_price=$discount->new_price;
                break;
              }
          }
          
        @endphp
          
        <div class="col">
          <div class="card shadow-sm" width="50%" height="100px">
            <img src="{{asset('images/'.$row->product_image)}}" focusable="false" class="bd-placeholder-img card-img-top" width="75%" height="100px"/>
            

            <div class="card-body">
                <h3 class="card-text pb-4" style="text-align: center; font:bold">                
                    {{$row->product_name}}
                </h3>
                
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <a href="{{ route('produse.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                    </button>
                </div>
                <div>
                  @if($new_price)
                    <div class="text-decoration-line-through px-1">{{$row->product_price}} RON </div>
                    <div class="fw-semibold text-danger px-1">{{$new_price}} RON </div>
                  @else
                    <div class="fw-semibold text-danger px-1">{{ $row->product_price }} RON</div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

      @endforeach
      @else
      <tr>
          <td colspan="4">
              Nu exista produse
          </td>
      </tr>
      @endif
 
        <p>{!! $data->links() !!}</p>
    
      </div>
      
  </div>
</div>



@endsection('content')