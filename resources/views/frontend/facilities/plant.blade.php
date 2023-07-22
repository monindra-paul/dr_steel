@extends('frontend.layout.app')
@section('mainsection')


<main class="main">
				<!-- section start-->
				<section class="hero-block">
					<picture>
						<source srcset="{{asset('assets/img/drsteel/c-bg.webp')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('assets/img/drsteel/c-bg.webp')}}" alt="img"/>
					</picture>
					<div class="hero-block__layout"></div>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="align-container">
									<div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
										<h1 class="hero-block__title">Plants</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- section start-->
				<section class="section">
					<div class="container">
						<div class="row offset-50">
							
							<div class="col-lg-6">
								<div class="location-item">
									<div class="location-item__img"><img class="img--bg" src="{{('assets/img/drsteel/plants/howrah.jpeg')}}" alt="img"/></div>
									<div class="location-item__lower">
										<h4 class="location-item__title"><a href="#">Howrah Plant</a></h4>
                                        <p>Almost 18000 SQ Ft Shop floor. This unit produced Driver desk for Locomotives.</p>
                                        <span class="location-item__details">J73W+8J9, Ramrajatala, Howrah, West Bengal 711113</span>
										<h6 class="location-item__subtitle">Features:</h6>
										<ul class="list list--check list--reset">
											<li class="list__item">Press Machine.</li>
											<li class="list__item">Plasma Cutting Machine.</li>
											<li class="list__item">Hydraulic Press.</li>
											<li class="list__item">Different type MIG/MAG/TIG Welding Machine.</li>
										</ul>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="location-item">
									<div class="location-item__img"><img class="img--bg" src="{{('assets/img/drsteel/plants/khardha.jpeg')}}" alt="img"/></div>
									<div class="location-item__lower">
										<h4 class="location-item__title"><a href="#">Khardha Plant</a></h4>
                                        <p>Almost 11000 SQ Ft Shop floor. This unit produced Junction Box & different small items for Locomotives.</p>
                                        <span class="location-item__details">Ruiya, Kolkata, West Bengal 700120</span>
										<h6 class="location-item__subtitle">Features:</h6>
										<ul class="list list--check list--reset">
                                        <li class="list__item">Press Machine.</li>
											<li class="list__item">Plasma Cutting Machine.</li>
											<li class="list__item">Hydraulic Press.</li>
											<li class="list__item">Different type MIG/MAG/TIG Welding Machine.</li>
										</ul>										
									</div>
								</div>
							</div>
							
							<div class="col-lg-2"></div>
							<div class="col-lg-8">
								<div class="location-item">
									<div class="location-item__img" id="drcustom_image-plants"><img class="img--bg" src="{{('assets/img/drsteel/plants/dumdum.jpg')}}" alt="img"/></div>
									<div class="location-item__lower">
										<h4 class="location-item__title"><a href="#">Dum Dum Plant</a></h4>
                                        <p>Almost 29000 SQ Ft Shop floor. This unit produced SS B & C Type material for METRO and different Brake items & reservoir for Locomotives.</p>
                                        <span class="location-item__details">17/1/1, Mall Rd, K.B.Sarani, Dum Dum, Kolkata, West Bengal 700080</span>
										<h6 class="location-item__subtitle">Features:</h6>
										<ul class="list list--check list--reset">
											<li class="list__item">Laser Cutting Machine.</li>
											<li class="list__item">CNC Oxy-Plasma Cutting Machine.</li>
											<li class="list__item">CNC Brake Press Machine.</li>
											<li class="list__item">CNC Plasma Cutting Machine.</li>
											<li class="list__item">Rolling Machine.</li>
											<li class="list__item">Milling Machine.</li>
											<li class="list__item">Automatic tapping Machine.</li>
											<li class="list__item">Different type Drill Machine.</li>
											<li class="list__item">Straightening Machine</li>
											<li class="list__item">Power Press.</li>
											<li class="list__item">Hydraulic Press.</li>
											<li class="list__item">Different type MIG/MAG/TIG Welding Machine.</li>
										</ul>
										
									</div>
								</div>
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- map start-->
				
				<!-- map end-->
			</main>


@endsection