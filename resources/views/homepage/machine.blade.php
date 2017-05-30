@extends ('layouts.base')

@section ('body')

<div class="container">
  <div id="machine">
			<div id="machine-name">
        @yield('machine_name')
			</div>

      <div class="row">
				<div id="machine-video" class="col-md-6">
				  <div class="embed-responsive embed-responsive-16by9">
            @yield('machine_video')
          </div>
				</div>
        <br>
        <div id="machine-description" class="col-md-6">
          @yield('machine_description')
        </div>
      </div>
  </div>
  <br>
  <div id="machine_navigation" class="row">
    <div align="center" class="col-md-12 col-xs-12">
      <a href="/#manufacturing">
        <i class="glyphicon glyphicon-th" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <br>
</div>

@endsection