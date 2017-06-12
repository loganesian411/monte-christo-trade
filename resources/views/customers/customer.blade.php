<div class="col-xs-6 col-md-4">
	<div class="row">
		<strong> {{ $customer->name }} </strong> <br>
		{{ $customer->email }} <br>
		{{ $customer->phone }} <br>
	</div>

	<div class="row">
		<div class="col-md-6">
			<form action="/customer/{{ $customer->id }}/edit" method="GET">
				<button type="submit" class="btn btn-default outline">Edit your information</button>
			</form>
		</div>
	</div>
</div>
