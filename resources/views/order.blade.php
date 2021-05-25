@extends ('layouts.altLayout')

@section ('content')

<?php //$data = $request->session()->all();
use Illuminate\Support\Facades\Auth;
?>
<div class="container">
    
            <table>
                <tr>
                    <th>total</th>
                </tr>
                @foreach ($orderedProducts as $orderedProduct)
                <tr>
                    <td>{{ $orderedProduct->product_id }}</td>
                </tr>
                <tr>
                    <td>{{ $orderedProduct->amount }}</td>
                </tr>
                @endforeach
            </table>
        
    {{ $order }}
</div>
@endsection