@extends ('layouts.base')

<!-- Carousel and main block -->
@section ('body')
<div class="container">
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img-responsive" src="images/one.jpg" alt="carousel_one">
			</div>

			<div class="item">
				<img class="img-responsive" src="images/two.jpg" alt="carousel_two">
			</div>

			<div class="item">
				<img class="img-responsive" src="images/three.jpg" alt="carousel_three">
			</div>

			<div class="item">
				<img class="img-responsive" src="images/four.jpg" alt="carousel_four">
			</div>

			<div class="item">
				<img class="img-responsive" src="images/five.jpg" alt="carousel_five"></img>
			</div>
		</div>
	</div>

	<div id="home">
		<div>
			<h2 align="center">Monte Christo Trade Corp.</h2>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p>Located in the heart of Downtown Los Angeles, Monte Christo Trade Corp. was founded in 1997. It has been operating under
					the same ownership since inception. Manufacturing and wholesaling jewelry and fashion accessories is our specialty.</p>
			</div>
		</div>
	</div>

	<hr>

	<!-- Movie Block -->
	<div id="movie">
		<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://player.vimeo.com/video/101231747?title=0&amp;byline=0&amp;portrait=0&amp;color=FFFFFF&amp;autoplay=0&amp;loop=0&amp;wmode=transparent"
					    height="300" frameborder="0" class="col-md-12"></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h3>MADE IN THE USA</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>We proudly embrace our culture and community.&nbsp; We are dedicated to bringing jobs and prosperity back to the United
							States, while utilizing high standards in our manufacturing processes and components.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<!-- Manufacturing information block -->
	<div id="manufacturing">
		<div class="row">
			<div class="col-md-12">
				<h3>Manufacturing</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>Monte Christo Trade Corp. is equipped with the latest hi-tech induction casting and spin casting machinery, gas-fired
					furnaces, high speed tumbling machines, and latest 3D CAD and CNC design/printing software and equipment. We also maintain
					a wide variety of vintage machinery for specialty needs. We are constantly acquiring new machinery and extending our
					capabilities in order to keep up with our clients needs and demands. The content on this page highlights some basic
					capabilities and is intended for educational use.</p>
			</div>
		</div>
	</div>
	<!-- Wrapper for slides -->
	<div class="row">
		<div id="machine-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img id="casting-img" class="img-responsive" src="/images/casting.jpg" alt="carousel_one">
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/casting" role="button">
								Casting
							</a>
					</div>
				</div>

				<div class="item">
					<img id="forging-pressing-img" class="img-responsive" src="/images/forging-pressing.jpg" alt="carousel_two">
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/forging_pressing" role="button">
							Forging and Pressing
						</a>
					</div>
				</div>

				<div class="item">
					<img id="annealing-soldering-img" class="img-responsive" src="/images/annealing-soldering.jpg" alt="carousel_three">
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/annealing_soldering" role="button">
							Annealing and Soldering
						</a>
					</div>
				</div>

				<div class="item">
					<img id="polishing-img" class="img-responsive" src="/images/polishing.jpg" alt="carousel_four">
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/polishing" role="button">
							Polishing
						</a>
					</div>
				</div>

				<div class="item">
					<img id="wirerolling-img" class="img-responsive" src="/images/wirerolling.jpg" alt="carousel_five"></img>
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/wire_rolling" role="button">
							Wire Rolling
						</a>
					</div>
				</div>

				<div class="item">
					<img id="chainmaking-img" class="img-responsive" src="/images/chainmaking.jpg" alt="carousel_five"></img>
					<div class="carousel-caption">
						<a class="btn btn-lg btn-grey" href="/machines/chainmaking" role="button">
							Chainmaking
						</a>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#machine-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#machine-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<hr>

	<!-- Quote block -->
	<div id="quote">
		<div class="row">
			<div class="col-md-12">
				<blockquote>
					<p>&quot;If you hear a voice within you say 'you cannot paint,' then by all means paint and that voice will be silenced.&quot;</p>
					<footer><cite title="Vincent Van Gogh">Vincent Van Gogh</cite></footer>
				</blockquote>
			</div>
		</div>
	</div>

	<hr>

	<!-- Every step block -->
	<div id="services">
		<div class="row">
			<div class="col-md-12">
				<h3>Our Services</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>We will be there every step of the way.</h4>
			</div>
		</div>
		<br>
		<div class="row text-center">
			<div class="col-md-3">
				<p><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i> DESIGN </p>
			</div>
			<div class="col-md-3">
				<p><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i> PACKAGE </p>
			</div>
			<div class="col-md-3">
				<p><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i> MANUFACTURE </p>
			</div>
			<div class="col-md-3">
				<p><i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i> SELL </p>
			</div>
		</div>
	</div>

	<hr>

	<!-- Client list -->
	<div id="client-list">
		<div class="row">
			<div class="col-md-12">
				<h3>Some Of Our Clients</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4 col-xs-12">
				<h4>Ed Hardy</h4>
			</div>
			<div class="col-md-4 col-xs-12">
				<h4>Harley Davidson Motorcycles</h4>
			</div>
			<div class="col-md-4 col-xs-12">
				<a href="http://room101brand.com/">
					<h4>Room 101</h4>
				</a>
			</div>
			<div class="col-md-4 col-xs-12">
				<a href="https://whitetrashcharms.com/">
					<h4>White Trash Charms</h4>
				</a>
			</div>
			<div class="col-md-4 col-xs-12">
				<h4>A &amp; G Rock</h4>
			</div>
			<div class="col-md-4 col-xs-12">
				<a href="https://alberesbuckles.com/">
					<h4> Al Beres </h4>
				</a>
			</div>
		</div>
	</div>

	<hr>

	<!-- Quote block -->
	<div id="quote-2">
		<div class="row">
			<div class="col-md-12">
				<blockquote class="blockquote-reverse">
					<p>&quot;I put my heart and my soul into my work, and have lost my mind in the process.&quot;</p>
					<small><cite title="Source Title">Vincent Van Gogh</cite></small>
				</blockquote>
			</div>
		</div>
	</div>

	<hr>

	<!-- Address and contact -->
	<div id="contact">
		<div class="row">
			<div class="col-md-12">
				<h3>Get In Touch</h3>
			</div>
		</div>
		<div class="row mobile-center">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<address>
							<h4>Address</h4>
							<p>707 S. Broadway Suite 901</p>
							<p>Los Angeles, CA 90014</p>
						</address>
					</div>
					<div class="col-md-6">
						<h4>Business Hours</h4>
						<p>M-F 9 am to 6 pm (PST)</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4>Phone</h4>
						<p><abbr title="Phone"></abbr> (213) 629-2958</p>
					</div>
					<div class="col-md-6">
						<h4>Email</h4>
						<p><strong>General:</strong> <a href="mailto:mcc901@cs.com">mcc901@cs.com</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>Map</h4>
						<div style="padding-bottom: 15px">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwZlIWbXHwoARfMTs3uF5Bxk&key=AIzaSyD81qM8an7Z_A2RZwgreT0Vf1JcprB8noc"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<form action="/contact_us" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-4">
							<div class="fieldWrapper form-group">
								<label class="control-label" for="name">Your name:</label>
								<input type="name" class="form-control" id="contact-name" name="name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group fieldWrapper">
								<label class="control-label" for="contact-email">Your email:</label>
								<input type="email" class="form-control" id="contact-email" name="email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group fieldWrapper">
								<label class="control-label" for="">Subject:</label>
								<input type="subject" class="form-control" id="contact-subject" name="subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group fieldWrapper">
								<label class="control-label" for="">Message body:</label>
								<textarea class="form-control" id="contact-message" name="body" rows="15"></textarea>
							</div>
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
	</div>

</div>

<!-- main container end -->
@endsection

@section ('additional-js')
<!-- Carousel -->
<script language="JavaScript" type="text/javascript">
	$(document).ready(function () {
		$('.carousel').carousel({
			interval: 5000
		})
		$('#machine-carousel').carousel({
			interval: 1000
		})
	});
</script>
@endsection
