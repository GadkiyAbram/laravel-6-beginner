<h1>Customer details</h1>

<div>
	<a href="/customers">< Back to Customers</a>

	<a href="/customers/{{ $customer->id }}/edit">Edit Customer</a>

</div>

<div>
	<div>
		<p><strong>Name: </strong>{{ $customer->name }}</p>
		<p><strong>Email: </strong>{{ $customer->email }}</p>
	</div>
</div>

<div>
	<form action="/customers/{{ $customer->id }}" method="post">
		@method('DELETE')
		@csrf

		<button style="color: red">Delete Customer</button>

	</form>
</div>