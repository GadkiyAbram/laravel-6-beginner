<h1>Customer details</h1>

<div>
	<a href="/customers">< Back to Customers</a>

	<a href="/customers/{{ $customer->id }}/edit">Edit Customer</a>
</div>

<p><strong>Name</strong></p>
<p>{{ $customer->name }}</p>

<p><strong>Email</strong></p>
<p>{{ $customer->email }}</p>