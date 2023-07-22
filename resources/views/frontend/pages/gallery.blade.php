@extends('frontend.layout.app')
@section('mainsection')

<main class="main">
				<!-- section start-->
				<section class="hero-block">
					<picture>
						<source srcset="{{('assets/img/typography.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="img/typography.jpg" alt="img"/>
					</picture>
					<div class="hero-block__layout"></div>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="align-container">
									<div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
										<h1 class="hero-block__title">Gallery</h1>
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
						
					</div>
					<div class="container">
						<div class="js-gallery gallery gallery--grid row no-gutters">
							<div class="js-gallery__item category_1 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/1.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/1.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_1 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/2.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/2.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_2 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/3.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/3.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_2 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/4.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/4.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_3 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/5.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/5.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_3 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/6.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/6.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_1 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/7.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/7.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_2 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/8.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/8.jpeg')}}" alt="img"/></a></div>
							<div class="js-gallery__item category_2 col-md-6 col-lg-4"><a class="gallery__item" href="{{('assets/img/drsteel/gallery/9.jpeg')}}" data-fancybox="gallery"><span class="overlay"></span><img class="img--bg" src="{{('assets/img/drsteel/gallery/9.jpeg')}}" alt="img"/></a></div>
						</div>
						
					</div>
				</section>
				<!-- section end-->
			</main>



			@endsection