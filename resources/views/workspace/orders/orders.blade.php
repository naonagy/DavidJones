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
        <a href="{{ route('orders.create') }}" class="btn btn-success btn-sm ">Adauga comanda</a>
        </div>
    </div>
</div>
<div class="container">
    <table>
        <tr>
            <th>ID client</th>
            <th>Status Comanda</th>
            <th>Pret total</th>
        </tr>
        @if(count((array)$orders)>0)
        @foreach ($orders as $row)
        <tr>
            <td>
                {{$row->customer_id}}
            </td>
            <td>
                {{$row->status}}
            </td>
            <td>
                {{$row->total_price}}
            </td>
            <td>
                @php
                $order_id= $row->order_id
                @endphp
                <form method="post" action="{{route('orders.destroy', $order_id)}}">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('orders.show', $order_id)}}" class="btn btn-primary btn-sm">Vezi detalii</a>
                    <a href="{{ route('orders.edit',$order_id)}}" class="btn btn-primary btn-sm">Edit</a>

                    <input type="submit" class="btn btn-danger btn-sm" value="Sterge" />
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="4">
                Nu exista comenzi
            </td>
        </tr>
        @endif
    </table>
    {!! $orders->links() !!}


</div>

@endsection
