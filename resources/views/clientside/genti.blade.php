
@extends('layouts.master')
@section('content')






<div class="album py-5 bg-light">
    <div class="container d-flex flex-wrap justify-content-center">
       


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 w-75">
        @if(count((array) $data )>0)
       
        @foreach ($data as $row)

        <div class="col">
          <div class="card shadow-sm" width="50%" height="100px">
            <img src="{{asset('images/'.$row->product_image)}}" focusable="false" class="bd-placeholder-img card-img-top" width="75%" height="100px"/>
            

            <div class="card-body">
                <h3 class="card-text" style="text-align: center; font:bold">                
                    {{$row->product_name}}
                </h3>
                <p class="card-text">                
                 {{$row->description}}
                </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <a href="{{ route('produse.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                    </button>
                </div>
                <small class="text-muted">{{ $row->product_price }} RON</small>
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
      {!! $data->links() !!}
    </div>
  </div>
</div>



@endsection('content')