@extends ('layouts.base')

@section ('body')
<div class="container">

	<div id="customer-edit">
		<h2 align="center">Edit Your Information</h2>

		<form action="/shop/checkout/{{ $customer->id }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}

			<div class="row">
				<div class="col-md-4">
					<div class="fieldWrapper form-group">
						<label class="control-label" for="name">Name:</label>
						<input type="name" class="form-control" id="customer-name" name="name" value="{{ $customer->name }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group fieldWrapper">
						<label class="control-label" for="contact-email">Email:</label>
						<input type="email" class="form-control" id="customer-email" name="email" value="{{ $customer->email }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group fieldWrapper">
						<label class="control-label" for="">Phone:</label>
						<input type="subject" class="form-control" id="customer-phone" name="phone" value="{{ $customer->phone }}">
					</div>
				</div>
			</div>

		    <div id="toggle-section">
				<div class="row">
					<label class="checkbox-inline col-md-2">
					  <input type="checkbox" id="optin-checkbox" v-model="optInStatus"> Opt-in for order updates
					</label>
				</div>

				<div class="row" id="contact-mode-preferences" style="display:none" v-show="optInStatus">
					<select class="custom-select" name="mode_of_contact">
					  <option selected value="email">Email</option>
					  <option value="phone">Phone</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mobile-center">
					<button type="submit" class="btn btn-default outline">Submit</button>
				</div>
			</div>

			<br>

			<div class="row">
				@include ('layouts.errors')
			</div>

		</form>
	</div>
</div>
@endsection

@section ('additional-js')
<!-- Toggle button -->
<script>
	var app = new Vue({
		
		el: '#toggle-section',

		data: {

			optInStatus: false,

		},
	})
</script>
@endsection