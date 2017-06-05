<div class="col-xs-6 col-md-4 panel panel-default">
	<div class="panel-body">
		<div class="row" align="center">
			<address>
				{{ $address->street_one }}
				@if ($address->street_two), {{ $address->street_two }} @endif
				<br>
				{{ $address->city }}, {{ $address->state }} {{ $address->zip_code }}<br>
			</address>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form action="" method="">
					<button type="submit" class="btn btn-default outline">Use this address</button>
				</form>
			</div>
			<div class="col-md-6">
				<form action="/shop/orders/addresses/{id}" method="delete">
					<button type="submit" class="btn btn-default btn-outline-danger">Delete this address</button>
				</form>
			</div>
		</div>
	</div>
</div>
