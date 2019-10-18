@extends('app')

@section('title', 'Services')

@section('content')
	<h1>Welcome to our current Services</h1>

	<form action="/service" method="post">
		<input type="text" name="name" autocomplete="off">

		@csrf

		<button>Add Service</button>
	</form>
	<p style="color: red">@error('name') {{ $message }} @enderror</p>

	<ul>
		@forelse($services as $service)
			<li>{{ $service->name }}</li>
		@empty
			<li>Under maintenance</li>
		@endforelse
	</ul>

@endsection