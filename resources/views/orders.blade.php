@extends ('layouts.altLayout')

@section ('content')

<?php //$data = $request->session()->all();
use Illuminate\Support\Facades\Auth;
?>
    <div class="rowContainer">
        <div class="row">
            @foreach ($orders as $order)
            @endforeach
        </div>
    </div>
    
    
@endsection