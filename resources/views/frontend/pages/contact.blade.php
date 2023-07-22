@extends('frontend.layout.app')
@section('mainsection')

<main class="main">
	<!-- section start-->
	<section class="hero-block">
		<picture>
			<source srcset="{{('assets/img/service-details.jpg')}}" media="(min-width: 992px)" /><img class="img--bg"
				src="img/service-details.jpg" alt="img" />
		</picture>
		<div class="hero-block__layout"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="align-container">
						<div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
							<h1 class="hero-block__title">Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end-->
	<!-- section start-->
	<section class="section contacts pb-0"><img class="contacts__bg" src="{{('assets/img/contacts-map.png')}}"
			alt="map" />
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h5 class="contacts__title">Marketing Office:</h5>
					<div class="contacts-item">
						<div class="contacts-item__img">
							<svg class="icon">
								<use xlink:href="#phone"></use>
							</svg>
						</div>
						<div class="contacts-item__details"><a class="contacts-item__link" href="tel:+22628908002">( 033
								) 25594853
							</a></div>
					</div>
					<div class="contacts-item">
						<div class="contacts-item__img">
							<svg class="icon">
								<use xlink:href="#mail"></use>
							</svg>
						</div>
						<div class="contacts-item__details"><a class="contacts-item__link" href="mailto:
								info@drsteel.in
								">
								info@drsteel.in
							</a></div>
					</div>
					<div class="contacts-item">
						<div class="contacts-item__img">
							<svg class="icon">
								<use xlink:href="#pin"></use>
							</svg>
						</div>
						<div class="contacts-item__details"><span><a href="https://goo.gl/maps/mhBiAwWxrYn5hGvS8" target="blank" style="text-decoration:none; color:#414A53;">17/1/1, Mall Rd, K.B.Sarani, Golpark, Dum Dum,
								Kolkata, West Bengal 700080</a></span></div>
					</div>
					<div class="contacts-item">
						<div class="contacts-item__img">
							<svg class="icon">
								<use xlink:href="#share"></use>
							</svg>
						</div>
						<div class="contacts-item__details">
							<ul class="socials socials--dark list--reset">
								<li class="socials__item"><a class="socials__link" href="#">
										<svg class="icon">
											<use xlink:href="#facebook"></use>
										</svg></a></li>
								<li class="socials__item"><a class="socials__link" href="#">
										<svg class="icon">
											<use xlink:href="#twitter"></use>
										</svg></a></li>
								<li class="socials__item"><a class="socials__link" href="#">
										<svg class="icon">
											<use xlink:href="#linkedin"></use>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<form class="form contact-form" id="" action="{{url('/contact')}}" method="post" autocomplete="">
						@csrf
						<div class="row">
							<div class="col-12">
								<h5 class="contact-form__subtitle">Please Ask Your Query</h5>
							</div>
							<div class="col-md-6">
								@if ($errors->has('name'))
								<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif
								<input class="form__field" type="text" name="name" placeholder="Your Name"
									value="{{ old('name') }}" />
							</div>
							<div class="col-md-6">
								@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif
								<input class="form__field" type="email" name="email" placeholder="Your Email"
									value="{{ old('email') }}" />
							</div>
							<div class="col-md-12">
								@if ($errors->has('phone'))
								<span class="text-danger">{{ $errors->first('phone') }}</span>
								@endif
								<input class="form__field" type="text" name="phone" placeholder="Your Phone" {{
									old('phone') }} />
							</div>

							<div class="col-12">
								@if ($errors->has('message'))
								<span class="text-danger">{{ $errors->first('message') }}</span>
								@endif
								<textarea class="form__field form__message message--large" name="message"
									placeholder="Enter Your Message"></textarea>
							</div>
							<div class="col-12">
								<button class="button button--green" type="submit"><span>Send Us</span>
									<svg class="icon">
										<use xlink:href="#arrow"></use>
									</svg>
								</button>
								@if(session('success'))
								<div class="alert alert-success">{{session('success')}}</div>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- section end-->
	<!-- section start-->
	<section class="section">
		<div class="container-fluid">
			<div class="row flex-column-reverse flex-lg-row">
				<div class="col-lg-12">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235683.38721510704!2d88.26479150606808!3d22.633164281127062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e3eb94369af%3A0x99fad8046c3551bf!2sD.R.STEEL%20INDUSTRIES%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1687513329387!5m2!1sen!2sin"
						width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
			</div>
	</section>
	<!-- section end-->
</main>


@endsection