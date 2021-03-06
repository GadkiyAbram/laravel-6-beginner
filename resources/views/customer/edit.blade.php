<h1>Change Customer details</h1>

<form action="/customers/{{ $customer->id }}" method="post">
	@method('PATCH')

	<div>
		<label for="name">Name</label>
		<input type="text" name="name" autocomplete="off" value="{{ $customer->name }}">
		@error('name') <p style="color: gray">{{ $message }}</p>@enderror
	</div>

	<div>
		<label for="email">Email</label>
		<input type="text" name="email" autocomplete="off" value="{{ $customer->email }}">
		@error('email') <p style="color: gray">{{ $message }}</p>@enderror
	</div>

	@csrf

	<button>Save Customer</button>

</form>