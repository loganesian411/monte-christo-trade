@extends ('layouts.base')

<!-- Orders page -->
@section ('body')
<div class="container">

	<div id="order">
	  <h1> This is a stubbed order page, {{ $customer->name }}. </h1>
	  <form action="/shop/checkout/{{ $customer->id }}" method="get">
		<button type="submit" class="btn btn-default outline">Continue to checkout</button>
	  </form>
	</div>

</div>

<!-- main container end -->
@endsection