@extends ('layouts.altLayout')

@section ('content')

<?php //$data = $request->session()->all();
?>
<div class="container">
    
            <table>
                <tr>
                    <th>total</th>
                </tr>
                @foreach ($orderedProducts as $orderedProduct)
                <tr>
                    <td>Product name: {{$orderedProduct->product->productName}}</td>
                </tr>
                <tr>
                    <td>Product amount: {{ $orderedProduct->amount }}</td>
                </tr>


                @endforeach
            </table>
        
</div>
@endsection