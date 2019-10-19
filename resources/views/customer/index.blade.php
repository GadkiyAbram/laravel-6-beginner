@include('nav')

<h1>Customers</h1>

<a href="/customers/create">Add New Customer</a>

<ul>
	@forelse($customers as $customer)
		<li><strong>
				<a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
			</strong> ({{ $customer->email }})</li>

	@empty
		<p>No customers to show</p>

	@endforelse
</ul>
