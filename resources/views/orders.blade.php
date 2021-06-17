@extends ('layouts.altLayout')

@section ('content')

<?php //$data = $request->session()->all();
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
                <tr>
                    <td><a href="/order/{{ $order->id }}"/>View Order</a>{{ $order->total }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection