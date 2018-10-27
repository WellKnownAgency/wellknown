@extends('layout.main')

@section('title', 'Contact Us | WellKnown')

@section('description', 'Fill out a Form and contact WellKnown Digital Agency and we will get in touch with in the same hour')

@section('keywords', '')


@section('content')
<section id="contact" style="background: #f1f1f1;">
	<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Free Consultation</h2>
				<h3 class="section-subheading text-muted">Leave your information and we will contact you within an hour</h3>
			</div>
		</div>

		<div class="container">
			<div class="form-box">
		<form class="form-horizontal" action="{{ url('contact-us') }}" method="POST"  id="contact_form">
			{{csrf_field()}}
			<div class="row">
			<div class="col-lg-6">

			<!-- Text input-->
			<input type="text" name="botcheck" style="display: none;">

			<div class="form-group">
			  <div class="inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
				</div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group " style="::placeholder { color:red; opacity: 1;}">
				<div class="inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
				</div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
				<div class="inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			  <input name="phone" placeholder="(555)555-5555" class="form-control" type="text" required>
				</div>
			  </div>
			</div>

			<!-- Text input-->
				   <div class="form-group">
				<div class="inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
				</div>
			  </div>
			</div>

			</div>
			<div class="col-lg-6">

			<!-- Text input-->
			<div class="form-group">
			   <div class="inputGroupContainer">

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
			  <input name="website" placeholder="Website or domain name" class="form-control" type="text" required>
				</div>
			  </div>
			</div>


			<div class="form-group">
				<div class="inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<textarea class="form-control" name="body" placeholder="Your message" required></textarea>
			  </div>
			  </div>
			</div>
		</div>
</div>
			<!-- Button -->
			<div class="pull-right">
			<div class="form-group">
			  <div>
				<button type="submit" class="btn btn-send" >Send <span class="glyphicon glyphicon-send"></span></button>
			  </div>
			</div>
		</div>



		</form>
	</div>
		</div>

		<div class="row">
				<div class="col-lg-12 text-center">
					<h3 class="section-subheading text-muted">Or</br>Contact us through Social Media</h3>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<a href="https://www.facebook.com/WellKnown-153425045259276/"><img src="images/aicons/Facebook.png" height="100" width="100" class="img-fluid"></a>
						<a href="https://twitter.com/WKnownMarketing"><img src="images/aicons/Twitter.png" height="100" width="100" class="img-fluid"></a>
						<a href="https://www.linkedin.com/company/wellknown/"><img src="images/aicons/Linkedin.png" height="100" width="100" class="img-fluid"></a>
					</div>
				</div>


</section>

@stop
