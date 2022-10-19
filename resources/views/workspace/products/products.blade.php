@extends('dashboard')
@section('content')

@if($message= Session::get("success"))
<div class="alert alert-succes">
    {{$message}}
</div>

@endif
<div class="container">
    <div class="row">
        <div class="col">
        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm ">Adauga produs</a>
        </div>
    </div>
</div>
<div class="container">
    <table>
        <tr>
            <th>Imagine</th>
            <th>Nume Produs</th>
            <th>Categorie</th>
            <th>Pret</th>
            <th>Cantitate</th>
            <th>Culoare</th>
            <th>Descriere</th>
        </tr>
        @if(count((array)$data)>0)
        @foreach ($data as $row)
        <tr>
            <td>
                <img src="{{asset('images/'.$row->product_image)}}" style="width:100px" />
            </td>
            <td>
                {{$row->product_name}}
            </td>
            <td>
                {{$row->quantity}}
            </td>
            <td>
                <form method="post" action="{{route('products.destroy', $row->id)}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('products.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                    <a href="{{ route('products.edit',$row->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Sterge" />
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="4">
                Nu exista produse
            </td>
        </tr>
        @endif
    </table>
    {!! $data->links() !!}


</div>

@endsection
