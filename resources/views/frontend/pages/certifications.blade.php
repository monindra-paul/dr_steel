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
										<h1 class="hero-block__title">Documents and Certifications</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- section start-->
				
				<!-- section end-->
				<!-- section start-->
				<section class="section">
					<div class="container">
						<div class="row offset-40">
							<div class="col-md-6 col-xl-4">
								<div class="document document--style-2">
									<div class="document__img"><img src="{{('assets/img/pdf.svg')}}" alt="img"/></div>
									<div class="document__details">
										<h6 class="document__title ml-1">ISO Certificates</h6><span class="document__date ml-1">4<sup>th</sup> May 2021</span>
									</div><a class="document__icon" href="https://drive.google.com/file/d/1VJY8FpPR-j-jcFl1VTIwAFfJJIKIOHoS/view" target="_blank" >
										<img src="{{('assets/img/drsteel/png/view.png')}}" alt="" srcset=""></a>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- section start-->
				
				<!-- section end-->
			</main>



@endsection