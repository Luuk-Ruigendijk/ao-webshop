@extends ('layouts.altLayout')

@section ('content')

<?php //$data = $request->session()->all();
use Illuminate\Support\Facades\Auth;
?>
    <div class="rowContainer">
        <div class="row">
            <table width="100%">
                <tr>
                    <th>total</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->total }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{ $order }}
    
@endsection