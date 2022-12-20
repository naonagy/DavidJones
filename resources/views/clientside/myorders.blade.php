@extends('layouts.master')
@section('content')

<div class="container">
    <style>
        table {
	border-collapse: collapse;
    font-family: Tahoma, Geneva, sans-serif;
}
table td {
	padding: 15px;
}
table thead td {
	background-color: #54585d;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
table tbody td {
	color: #636363;
	border: 1px solid #dddfe1;
}
table tbody tr {
	background-color: #f9fafb;
}
table tbody tr:nth-child(odd) {
	background-color: #ffffff;
}
    </style>
    <div class="container-fluid pt-5">

    <table class="w-100">
        <thead>
            <tr>
                <td>ID Comanda</td>
                <td>Status Comanda</td>
                <td>Pret</td>
                <td></td>

            </tr>
        </thead>
        <tbody>
            @if(count((array)$orders)>0)
            @foreach ($orders as $row)
            <tr>
                <td>                
                    {{$row->order_id}}
                </td>
                <td>
                    {{$row->status}}
                </td>
                <td>
                    {{$row->total_price}}
                </td>
                <td>
                    <a href="{{ route('showmyorder', ['order_id' => $row->order_id])}}" class="btn btn-primary btn-sm">Vezi detalii</a>
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
        </tbody>
    </table>
</div>


</div>

<div class="pb-4">
    <p class="pb-4">{!! $orders->links() !!}</p>

</div>

@endsection('content')