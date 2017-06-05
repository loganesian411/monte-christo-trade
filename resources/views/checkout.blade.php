@extends ('layouts.base')

<!-- Orders page -->
@section ('body')
<div class="container">

	<h1> Review your information </h1>

	<hr>
	
	<div id="addresses">
		<div class="row mobile-center">
			@foreach ($customer->addresses as $address)
				@include('addresses.address', compact($address))
			@endforeach
		</div>
	</div>

</div>

<!-- main container end -->
@endsection