@extends ('layouts.base')

<!-- Login or continue as guest page -->
@section ('body')
<div class="container">

	<div id="login">
		<div class="row mobile-center">
			<h2 align="center">Design a Custom Product</h2>
		</div>

		<div class="row mobile-center" align="center">
			<div class="col-md-6 col-md-offset-3 panel panel-default">
				<div class="panel-body">
					<form action="/shop/orders/" method="get">
						{{ csrf_field() }}
						<div class="row">
							<div class="form-group fieldWrapper">
								<label class="control-label" for="login-username">Username:</label>
								<input type="text" class="form-control" id="login-username" name="username">
							</div>
						</div>
						<div class="row">
							<div class="form-group fieldWrapper">
								<label class="control-label" for="login-password">Password:</label>
								<input type="text" class="form-control" id="login-password" name="password">
							</div>
						</div>
						<div class="col-md-12 mobile-center">
							<button type="submit" class="btn btn-default outline">Login</button>
						</div>
					</form>
				</div>

				<hr>

                <div class="panel-body">
                	<form action="/shop/orders/0" method="get">
						<button type="submit" class="btn btn-default outline">Continue as guest</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- main container end -->
@endsection