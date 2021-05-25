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
                    <td>Product id: {{ $orderedProduct->product_id }}</td>
                </tr>
                <tr>
                    <td>Product amount: {{ $orderedProduct->amount }}</td>
                </tr>
                @endforeach
            </table>
        
    {{ $order }}
</div>
@endsection