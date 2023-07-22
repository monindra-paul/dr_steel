@extends('frontend.layout.app')
@section('mainsection')

<main class="main">

	<!-- promo start-->
	<div class="promo promo--f4">
		<div class="promo-mainslider">
			<div class="promo-slider__item">
				<div class="promo-slider__layout"></div>
				<picture>
					<source srcset="{{('assets/img/drsteel/locomotive2.webp')}}" media="(min-width: 992px)" /><img
						class="img--bg" src="{{('assets/img/drsteel/locomotive2.webp')}}" alt="img" />
				</picture>
				<div class="align-container">
					<div class="align-container__item">
						<div class="container">
							<div class="row">
								<div class="col-xl-10 offset-xl-1 text-center">
									<div class="promo-slider__wrapper-1"><span class="promo-slider__overlay">DRSteel
											Industries & Pvt. Ltd.</span>
										<h2 class="promo-slider__title">Welcome to <br></h2>
									</div>
									<div class="promo-slider__wrapper-2">
										<p class="promo-slider__subtitle">D.R. Steel & Industries Pvt. Ltd. - Complete
											Sheet Matel Fabrication & Solution in India.</p>
									</div>
									<div class="promo-slider__wrapper-3"><a class="button button--promo"
											href="{{ url('/about-us') }}"><span>Explore more</span>
											<svg class="icon">
												<use xlink:href="#arrow"></use>
											</svg></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="promo-slider__item">
				<div class="promo-slider__layout"></div>
				<picture>
					<source srcset="{{('assets/img/drsteel/plants/dumdum.webp')}}" media="(min-width: 992px)" /><img
						class="img--bg" src="{{('assets/img/drsteel/plants/dumdum.webp')}}" alt="img" />
				</picture>
				<div class="align-container">
					<div class="align-container__item">
						<div class="container">
							<div class="row">
								<div class="col-xl-10 offset-xl-1 text-center">
									<div class="promo-slider__wrapper-1"><span class="promo-slider__overlay">DRSteel
											Industries & Pvt. Ltd.</span>
										<h2 class="promo-slider__title">Dum Dum Plant</h2>
									</div>
									<div class="promo-slider__wrapper-2">
										<p class="promo-slider__subtitle"></p>
									</div>
									<div class="promo-slider__wrapper-3"><a class="button button--promo"
											href="{{ url('our-plants') }}"><span>Explore more</span>
											<svg class="icon">
												<use xlink:href="#arrow"></use>
											</svg></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="promo-slider__item">
				<div class="promo-slider__layout"></div>
				<picture>
					<source srcset="{{('assets/img/drsteel/plants/khardha.jpeg')}}" media="(min-width: 992px)" /><img
						class="img--bg" src="{{('assets/img/drsteel/plants/khardha.jpeg')}}" alt="img" />
				</picture>
				<div class="align-container">
					<div class="align-container__item">
						<div class="container">
							<div class="row">
								<div class="col-xl-10 offset-xl-1 text-center">
									<div class="promo-slider__wrapper-1"><span class="promo-slider__overlay">DRSteel
											Industries & Pvt. Ltd.</span>
										<h2 class="promo-slider__title">Khardha Plant</h2>
									</div>
									<div class="promo-slider__wrapper-2">
										<p class="promo-slider__subtitle"></p>
									</div>
									<div class="promo-slider__wrapper-3"><a class="button button--promo"
											href="{{ url('our-plants') }}"><span>Explore more</span>
											<svg class="icon">
												<use xlink:href="#arrow"></use>
											</svg></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="promo-subslider">
			<div class="promo-subslider__item">
				<div class="promo-subslider__inner"><img src="{{('assets/img/sl_3.svg')}}" alt="icon" /><span>DR
						Steel</span></div>
			</div>
			<div class="promo-subslider__item">
				<div class="promo-subslider__inner"><img src="{{('assets/img/sl_2.svg')}}" alt="icon" /><span>DumDum
						Plant</span></div>
			</div>
			<div class="promo-subslider__item">
				<div class="promo-subslider__inner"><img src="{{('assets/img/sl_1.svg')}}" alt="icon" /><span>Khardha
						Plant</span></div>
			</div>

		</div>
	</div>
	<!-- promo end-->

	<section class="section mt-5">
		<div class="container">
			<div class="row ">
				<div class="col-12">
					<div class="heading heading--center"><span class="heading__pre-title">DR Steel</span>
						<h3 class="heading__title">Our Facilities</h3><span class="heading__layout">Our
							Facilities</span>
					</div>
				</div>
			</div>
			<div class="row offset-50">

				<div class="col-sm-6 col-xl-4">
					<div class="count-item">
						<div class="count-item__img icon-item__img--small justify-content-center">
							<img
								src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADl0lEQVR4nO1aWWgTURS9pmKdsVUqCi4FxYILKkpFEBU3BDsGzKS0xbohgvpjsaLW+uHWj9IfK0hVXDOoH7WgFhsjUqQfIjMJKhpNqWgrpBGkNjI/CibgkUnqVpul6UwSk3fhwPCSvPfuuefe+zIzRMyYMWOWRAvayRywky9gJ0RFG/UG75NAmWaBNuqN6fxveCnTLJDtBATvkxAnCd6gnUooY01SEBUZbxIjAEwBEksBsBogsSII1gUk1gYRIuFCB3JqroKrOAZerB0ROOvRT7xYk8b/JaQhol5/G1z58RE7/xtHvP8XAXUtOjofBqWtSYwAMAVILAXAaoD0dxGk4i36grK9CNa1hOe2yb0kyUL2EiBpkL3Z2waldLvTJDECwBQgZXgKuPI3zVF4y2mFFz+EYTn9JK90bujD84+0ypx5BDioJNfJWcsVTmyXefG7wosYAk/F0nqMPdEManSALj82/hxgNAHOMeJshRMbFM7SF8Hpf9BeUIHa5YdQVHUJ1NAaVoD1qIFtUGcCHPFFOy5Is3YhpIql22ESDmCs+WD6EuAayG2Zs/RHdWyciGcLV8KzuzAE7Vobi/abh/lW7C8sw4wFlTAt24kx6/eBtxxJfQ1wDCPazolmvFi3GF3Hx8N3laDeCkO7fnMqD27zfLgmC7FVMbEU4qwKcMVbMXrVnoRUMWICnMPI7aez1+D1jpnoPpuDj9cJX+78+9Dz611C301CzzkTOvdOx/NFK2Kqoj3PitppZSiav3nYqkiIAEeC0fZeIXxuJnxri/3oW/uO2kLwXUtQFUu2IXdDtf4EKLzVHDPaf+R2d5MpYrTjxZ+qiLdWPMi3Yvm8SiMIEH0Roz1pI14KC9B1Mn9Y0Y4Xg1WhraWtGWk/rRNK9T8HyLzoNTLaeqriXkGZ/m1Q5kVB5i29rqkbDI32SFThmlICe0E51q2oMu4c8P4ioe8G4Wtr8p2OqoobBG1vhrfBQBo4HA1JJ6DfVY1Ozyu43e6kwuNxo99ZlXoCet69ht/vh6qqSYW2Zs/bV6knwD/g/OrDTb8mX3O46ddGjRzX1k45AerABgcvkKzxwfsx/H5AIM0JiFsBibbBQAQCNFn+nHxtTVPSxtOGADVFSJsaoDICVKYAlaWAymqAmuIiaNw5wKaYyab4Yr7OnmKMutCB3L1nDGiDNu1FgtQ7GC8JjABR73OAJAv/gwpCKbCn0biDEDNmzCgb7Adfk+9flxIKJAAAAABJRU5ErkJggg==">
						</div>
						<h6 class="count-item__title"><span class="count-item__count">02</span> <span>Plants</span></h6>
						<p class="count-item__text">Personalized Manufacturing Plants for manufacture variour
							equipments.</p>
						<div class="count-item__inner text-center"><a class="button button--green"
								href="{{('/plants')}}"><span>Explore</span>
								<svg class="icon">
									<use xlink:href="#arrow"></use>
								</svg></a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-xl-4">
					<div class="count-item">
						<div class="count-item__img icon-item__img--small justify-content-center">
							<img width="64" height="64"
								src="https://img.icons8.com/external-flat-andi-nur-abdillah/64/external-Steel-blacksmith-(flat)-flat-andi-nur-abdillah.png"
								alt="external-Steel-blacksmith-(flat)-flat-andi-nur-abdillah" />
						</div>
						<h6 class="count-item__title"><span class="count-item__count">01</span> <span>Equipments</span>
						</h6>
						<p class="count-item__text">Equipments we manufacture for locomotives, metro & many others</p>
						<div class="count-item__inner text-center"><a class="button button--green"
								href="{{('/equipments')}}"><span>Explore</span>
								<svg class="icon">
									<use xlink:href="#arrow"></use>
								</svg></a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-xl-4">
					<div class="count-item">
						<div class="count-item__img icon-item__img--small justify-content-center">
							<img width="80" height="96" src="https://img.icons8.com/fluency/96/warranty-card.png"
								alt="warranty-card" />
						</div>
						<h6 class="count-item__title"><span class="count-item__count">03</span> <span>Quality</span>
						</h6>
						<p class="count-item__text">We are R.D.S.O approved sources for all kinds of reservoirs. We have
							our wielders qualified as per EN standards.

						</p>
						<div class="count-item__inner text-center"><a class="button button--green"
								href="{{('/quality')}}"><span>Explore</span>
								<svg class="icon">
									<use xlink:href="#arrow"></use>
								</svg></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="section bg--lgray pb-0 services-inner">
		<div class="container bottom-70">
			<div class="row">
				<div class="col-12">
					<div class="heading heading--center"><span class="heading__pre-title">Products</span>
						<h3 class="heading__title">Our Products</h3><span class="heading__layout layout--lgray">Our
							Products</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container container--wide">
			<div class="row offset-50">
				<div class="col-md-6 col-xl-4">
					<a href="{{('/product')}}">
						<div class="img-box">
							<div class="img-box__overlay"></div>
							<div class="img-box__text-layout">Our Products</div><img class="img--bg"
								src="{{('assets/img/drsteel/locomotive-p.webp')}}" alt="img" />
							<div class="img-box__details">
								<h5 class="img-box__title">Locomotives
					</a></h5>
					<div class="img-box__count">01</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<a href="{{('/product')}}">
				<div class="img-box">
					<div class="img-box__overlay"></div>
					<div class="img-box__text-layout">Our Products</div><img class="img--bg"
						src="{{('assets/img/drsteel/pune-metro.webp')}}" alt="img" />
					<div class="img-box__details">
						<h5 class="img-box__title">Metro Coaches
			</a></h5>
			<div class="img-box__count">02</div>
		</div>
		</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<a href="{{('/product')}}">
				<div class="img-box">
					<div class="img-box__overlay"></div>
					<div class="img-box__text-layout">Our Products</div><img class="img--bg"
						src="{{('assets/img/drsteel/jpg/cuit.jpg')}}" alt="img" />
					<div class="img-box__details">
						<h5 class="img-box__title">Customised Items
			</a></h5>
			<div class="img-box__count">03</div>
		</div>
		</div>
		</div>

		</div>
		</div>
	</section>

	<!-- logo -->
	<section class="mt-3">
		<div class="col-12 mt-5 pt-5">
			<div class="heading heading--center"><span class="heading__pre-title">Clients</span>
				<h3 class="heading__title">Our Clients</h3><span class="heading__layout layout--lgray">Our
					Clients</span>
			</div>
		</div>
		
		<div class="container">
		<div class="brand-carousel section-padding owl-carousel">
			
			<div class="single-logo">
				<img class = "main-logo-per" src="{{('assets/img/drsteel/svg/logo/danieli.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/indicon.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/viat.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/titagarh.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/texmaco.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/nivanirman.webp')}}" alt="">
			</div>
			<div class="single-logo">
				<img src="{{('assets/img/drsteel/svg/logo/wabtec.webp')}}" alt="">
			</div>
			
		</div>
		</div>

	</section>
</main>

@endsection