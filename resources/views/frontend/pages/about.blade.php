@extends('frontend.layout.app')
@section('mainsection')


<main class="main">



	<section class="hero-block">
		<picture>
			<source srcset="{{asset('assets/img/drsteel/c-bg.webp')}}" media="(min-width: 992px)" /><img class="img--bg"
				src="{{asset('assets/img/drsteel/c-bg.webp')}}" alt="img" />
		</picture>
		<div class="hero-block__layout"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="align-container">
						<div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
							<h1 class="hero-block__title">About Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="section testimonials testimonials--style-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="heading"><span class="heading__pre-title">Profile</span>
						<h1 class="heading__title">About<br />DR Steel Industries & Pvt. Ltd.</h1>
						<img src="{{('assets/img/drsteel/logo/drsteel-logo.png')}}" alt="" srcset="" width="180px"
							class="mt-3">
					</div>
					<div class="testimonials__nav"></div>
				</div>
				<div class="col-lg-6"><img class="quote-icon" src="{{('assets/img/quotes.png')}}" alt="img" />
					<div class="testimonials-slider">
						<div class="testimonials-slider__item">
							<p>“<strong>DR Steel </strong>was founded in the year 1984, engaged in manufacturing items
								related to the Indian Railways.</p>
							<p>It has its manufacturing unit at <strong> Dumdum, Kolkata-80, with its Head Office
									Located at 24 N.S. Road, Kolkata-700001.</strong>
								<br>
								<br>
								Our manufacturing facilities include latest state of art machineries and adequate
								material handling facilities. It is an ISO 9001: 2015 certified company. Our customers
								are from various Industries and spread all over multiple locations across India."
							</p>
							<div class="testimonials-slider__author">
								<h6>Team DR Steel</h6><span>Since 1984</span>
							</div>
						</div>
						<div class="testimonials-slider__item">
							<p>“<strong>DR Steel </strong>was founded in the year 1984, engaged in manufacturing items
								related to the Indian Railways.</p>
							<p>It has its manufacturing unit at <strong> Dumdum, Kolkata-80, with its Head Office
									Located at 24 N.S. Road, Kolkata-700001.</strong>
								<br>
								<br>
								Our manufacturing facilities include latest state of art machineries and adequate
								material handling facilities. It is an ISO 9001: 2015 certified company. Our customers
								are from various Industries and spread all over multiple locations across India."
							</p>
							<div class="testimonials-slider__author">
								<h6>Team DR Steel</h6><span>Since 1984</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-5"><img class="w-100 drcustom_img_about"
						src="{{('assets/img/drsteel/jpg/about_dr_steel.jpg')}}" alt="img" />
					<div class="img-badge"><img class="img-badge__img" src="{{('assets/img/badge-img.png')}}"
							alt="img" />
						<h3 class="img-badge__title bottom-0">Quality Standards</h3>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6 offset-xl-1">
					<div class="heading bottom-20"><span class="heading__pre-title">Quality</span>
						<h3 class="heading__title">Quality Standards of <br><span class="color--green">DR Steel</span>
						</h3>
					</div>
					<p>We are an ISO 9001: 2015 certified company. Our products are tested different activity with the
						help of various Poke-Yoke, full proofing methods, which we have evolved thru the past years by
						developing. We have built various check parameter into our production system, which ensure our
						customers get the best quality.</p>
					<p>We are R.D.S.O approved sources for all kinds of reservoirs. We have our wielders qualified as
						per EN standards.
					</p>
					<a class="button button--green" href="{{ url('/quality') }}"><span>Explore Our Quality </span>
						<svg class="icon pl-1">
							<use xlink:href="#arrow"></use>
						</svg>
					</a>

				</div>
			</div>
		</div>
	</section>

	<div class="section">
		<div class="container">
			<img src="{{('assets/img/drsteel/png/strength.png')}}" alt="" srcset="">
		</div>
	</div>

	<section class="section positions-archive">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h3 class="positions-archive__title">Our Strength</h3>
					<div class="accordion position-accordion accordion--primary ">
						<div class="accordion__title-block ">
							<h5 class="accordion__title">Engineering Capabilities</h5><span
								class="accordion__close "></span>
						</div>
						<div class="accordion__text-block">

							<ul class="list list--check list--reset">
								<li class="list__item">
									3D modelling and drafting.</li>
								<li class="list__item">Tool designing</li>
								<li class="list__item">Jig Fixture and gauge designing</li>
								<li class="list__item">R & D activities</li>

							</ul>

						</div>
					</div>
					<div class="accordion position-accordion accordion--primary">
						<div class="accordion__title-block">
							<h5 class="accordion__title">
								Quality Control Capabilities</h5><span class="accordion__close"></span>
						</div>
						<div class="accordion__text-block">
							<p>Our Commitment is to providecustomers quality service with service with highest safety
								standards products. We follow ISO 9001:2015 compliancevfor quality control to ensure a
								rigorous quality checkprocess on all thethree lavels wiz :</p>
							<ul class="list list--check list--reset">
								<li class="list__item">Inward Quality Check</li>
								<li class="list__item">In Process Quality Check
								</li>
								<li class="list__item">Final Quality Check
								</li>

							</ul><a class="button button--green" href="{{url('/quality')}}"><span>Know More</span>
								<svg class="icon">
									<use xlink:href="#arrow"></use>
								</svg></a>
						</div>
					</div>
					<div class="accordion position-accordion accordion--primary">
						<div class="accordion__title-block">
							<h5 class="accordion__title">
								Technical Capabilities</h5><span class="accordion__close"></span>
						</div>
						<div class="accordion__text-block">
							<p>We use technology to bring about improvements for consumers on the basis of carefully
								measured & evaluated feedback mechanism. The technological tools give us an advantage
								over our competitiors & bring a significant dimension to our customeroffer & also open
								the door to lowering costs.</p>
							
						</div>
					</div>
					
				</div>
				<div class="col-lg-4 col-xl-3 offset-xl-1">
					<div class="contact-trigger contact-trigger--style-2 "><img class="contact-trigger__img"
							src="{{('assets/img/contact_background.png')}}" alt="img" />
						<h4 class="contact-trigger__title">How we can help you!</h4>
						<p class="contact-trigger__text">Have You Any Query? Feel Free to Ask.</p><a
							class="button button--white" href="{{url('/contact')}}"><span>Contact
								us</span>
							<svg class="icon">
								<use xlink:href="#arrow"></use>
							</svg></a>
					</div>
				</div>
			</div>
		</div>
	</section>


</main>


@endsection