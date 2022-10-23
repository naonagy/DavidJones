@extends('dashboard')
@section('content')

@if($message= Session::get("success"))
<div class="alert alert-succes">
    {{$message}}
</div>

@endif

<div class="container">
    <table>
        <tr style="margin-right: 100px">
            <th style="text-align:start">Nume client</th>
            <th style="text-align:end">Adresa de email</th>

        </tr>
        @if(count((array)$user)>0)
        @foreach ($user as $row)
        <tr>
            <td style="text-align: start">
                {{$row->name}}
            </td>
            <td style="text-align: end">
                {{$row->email}}
            </td>
            <td>
                    <a href="{{ route('customers.show',$row->id)}}" class="btn  btn-sm">Vezi detalii</a>
                    
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
    {!! $user->links() !!}


</div>

@endsection
