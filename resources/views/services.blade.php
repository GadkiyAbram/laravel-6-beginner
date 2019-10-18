@extends('app')

@section('title', 'Services')

@section('content')
	<div>
		<div>
			Here you can find an information about our current Services
		</div>
		<ul>
			@forelse($services as $service)
				<li>{{ $service->name }}</li>
			@empty
				<li>Under maintenance</li>
			@endforelse
		</ul>
	</div>

@endsection