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
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{ $order }}
    
@endsection