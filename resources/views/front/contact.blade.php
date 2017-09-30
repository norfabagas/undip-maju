@extends('layouts.front2')

@section('heading')
HUBUNGI KAMI
@endsection

@section('content')
<!-- contact -->
<div class="contact" id="mail">
		<div class="container">
			<div class="agile-contact-grids">
				<div class="col-md-6 agile-contact-left">
					<div class="address-grid">
						<h4>ALAMAT KAMI</h4>
						<ul class="w3_address">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $alamat->config_value }}</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{ $email->config_value }}">{{ $email->config_value }}</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>{{ $telepon->config_value }}</li>
						</ul>
					</div>
					<div class="contact-form">
						<h4>FORM KONTAK</h4>
						<form action="{{ url()->current() }}" method="post">
                            {{ csrf_field() }}

							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								{!! $errors->first('Name', '<i>:message</i>') !!}
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								{!! $errors->first('Email', '<i>:message</i>') !!}
							</div>
							<div class="styled-input">
								<input type="text" name="Subject" required="">
								<label>Subject</label>
								{!! $errors->first('Subject', '<i>:message</i>') !!}
							</div>
							<div class="styled-input">
								<textarea name="Message" required=""></textarea>
								<label>Message</label>
								{!! $errors->first('Message', '<i>:message</i>') !!}
							</div>
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-6 agile-contact-right">
					<div class="agileits-map">
						<h4>Our Location</h4>
					</div>
					<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.8400948023!2d-74.25819082602831!3d40.70583163923578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1470295981376" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- //contact -->
@endsection
