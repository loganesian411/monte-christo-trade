@extends ('layouts.base')

<!-- Orders page -->
@section ('body')
<div class="container">

	<h1> Review your information </h1>

	<hr>

	<h3> Contact information </h3>

	<div id="customer_name">
		<div class="row mobile-center">
			@include('customers.customer', compact($customer))
	 	</div>
	</div>

	<hr>

	<h3> Address information </h3>
	
	<div id="addresses">
		<div class="row mobile-center">
			@foreach ($customer->addresses as $address)
				@include('addresses.address', compact($address))
			@endforeach
		</div>

		<div class="row mobile-center">
			<div class="col-md-6">
				<form action="/addresses/create" method="get">
					<button type="submit" class="btn btn-default">Add a new address</button>
				</form>
			</div>
		</div>

	</div>

</div>

<!-- main container end -->
@endsection