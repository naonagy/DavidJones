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
            <th>Nume Client</th>
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
                <form method="post" action="{{route('orders.destroy', $row->order_id)}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('orders.edit',$row->order_id)}}" class="btn btn-primary btn-sm">Edit</a>
                    @php
                        $order_id= $row->order_id
                    @endphp
                    <a href="{{ route('showOrder', $order_id)}}" class="btn btn-primary btn-sm">Vezi detalii</a>

                    <input type="submit" class="btn btn-danger btn-sm" value="Sterge" />
                    <input type="hidden" class="btn btn-danger btn-sm" value={{ $row->order_id }} name="order_id" />

                </form>
                <form method="post" action="{{route('showOrder', $row->order_id)}}">
                    @csrf
                    <input type="hidden" class="btn btn-danger btn-sm" value={{ $row->order_id }} name="order_id" />

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
