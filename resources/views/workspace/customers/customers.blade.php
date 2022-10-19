@extends('dashboard')
@section('content')

@if($message= Session::get("success"))
<div class="alert alert-succes">
    {{$message}}
</div>

@endif

<div class="container">
    <table>
        <tr>
            <th>Nume client</th>
            <th>Adresa de email</th>

        </tr>
        @if(count((array)$user)>0)
        @foreach ($user as $row)
        <tr>
            <td>
                {{$row->name}}
            </td>
            <td>
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
