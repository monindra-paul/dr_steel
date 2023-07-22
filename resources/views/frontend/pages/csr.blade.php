@extends('frontend.layout.app')
@section('mainsection')


<main class="main">
				<!-- section start-->
				<section class="hero-block">
					<picture>
						<source srcset="{{('assets/img/typography.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{('assets/img/typography.jpg')}}" alt="img"/>
					</picture>
					<div class="hero-block__layout"></div>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="align-container">
									<div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
										<h1 class="hero-block__title">Social Responsibility</h1>
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
						<div class="row">
							<div class="col-12">
								<ul class="filter-panel list--reset">
									<li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All images</span></li>
									<!-- <li class="filter-panel__item" data-filter=".category_1"><span>Freight</span></li>
									<li class="filter-panel__item" data-filter=".category_2"><span>Train</span></li>
									<li class="filter-panel__item" data-filter=".category_3"><span>Shipping</span></li> -->
								</ul>
							</div>
						</div>
					</div>
					<div class="js-gallery gallery gallery--tile row no-gutters">
					
						<div class="js-gallery__item category_1 col-md-6 col-lg-3"><a class="gallery__item gallery__item--size-2" href="{{ ('assets/img/drsteel/csr/1.jpeg') }}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{ ('assets/img/drsteel/csr/1.jpeg') }}" alt="img"/><span class="gallery__description"></span></a></div>
						<div class="js-gallery__item category_1 col-md-6 col-lg-3"><a class="gallery__item gallery__item--size-2" href="{{ ('assets/img/drsteel/csr/2.jpg') }}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{ ('assets/img/drsteel/csr/2.jpg') }}" alt="img"/><span class="gallery__description"></span></a></div>
						<div class="js-gallery__item category_2 col-md-6 col-lg-6"><a class="gallery__item gallery__item--size-1" href="{{ ('assets/img/drsteel/csr/3.jpeg') }}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{ ('assets/img/drsteel/csr/3.jpeg') }}" alt="img"/><span class="gallery__description"></span></a></div>
						
					</div>
					
				</section>
				<!-- section end-->
			</main>


@endsection