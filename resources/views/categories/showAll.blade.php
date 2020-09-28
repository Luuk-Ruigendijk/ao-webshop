@extends ('layouts.altLayout')

@section ('content')
	@foreach ($categories as $category)
	<a href="/homepage/{{ $category->id }}">{{ $category->category }}</a>
	@endforeach
@endsection