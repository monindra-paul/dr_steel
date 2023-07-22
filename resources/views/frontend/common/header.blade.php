<body>
	<div class="page-wrapper">
		<!-- menu dropdown start-->
		<div class="menu-dropdown">
			<div class="menu-dropdown__inner" data-value="start">
				<div class="screen screen--start">
					<div class="menu-dropdown__close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="d-block d-lg-none bottom-20">
						<div class="screen__item screen--trigger item--active" data-category="screen-one">
							<span><a href="{{ url('/') }}" style="text-decoration:none;">Home</a></span>
						</div>
						<div class="screen__item screen--trigger item--active" data-category="screen-two">
							<span><a href="{{ url('/about') }}" style="text-decoration:none;">About</a></span></div>
						<div class="screen__item screen--trigger item--active" data-category="screen-two">
							<span><a href="{{ url('/product') }}" style="text-decoration:none;">Product</a></span></div>
						<div class="screen__item screen--trigger item--active" data-category="screen-three">
							<span>Facilities</span><span>
								<svg class="icon">
									<use xlink:href="#chevron-right"></use>
								</svg></span>
						</div>
						<div class="screen__item screen--trigger item--active" data-category="screen-two">
							<span><a href="{{ url('/csr') }}" style="text-decoration:none;">CSR</a></span></div>
						<div class="screen__item screen--trigger item--active" data-category="screen-two">
							<span><a href="{{ url('/gallery') }}" style="text-decoration:none;">Gallery</a></span></div>
						<div class="screen__item screen--trigger item--active" data-category="screen-two"><span><a href="{{ url('/contact') }}" style="text-decoration:none;">Contact
								Us</a></span></div>


					</div>


					<div class="page-header__logo"><a href="index.html">
						<img src="{{('assets/img/drsteel/logo/drsteel-logo-side.png')}}" alt="logo" /></a>
				</div>
					<div class="menu-dropdown__block top-50"><span class="block__title">Email</span><a
							class="screen__link" href="mailto:info@drsteel.in">info@drsteel.in</a></div>
					<div class="menu-dropdown__block top-20"><span class="block__title">Phone numbers</span><a
							class="screen__link" href="#">( 033 ) 25594853</a></div>
					<div class="menu-dropdown__block">
						<ul class="socials list--reset">
							<li class="socials__item"><a class="socials__link" href="#">
									<svg class="icon">
										<use xlink:href="#youtube"></use>
									</svg></a></li>
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
									</svg></a></li>
							<li class="socials__item"><a class="socials__link" href="#">
									<svg class="icon">
										<use xlink:href="#inst"></use>
									</svg></a></li>
						</ul>
					</div>

				</div>
			</div>


			<div class="menu-dropdown__inner" data-value="screen-three">
				<div class="screen screen--sub">
					<div class="screen__heading">
						<h6 class="screen__back">
							<svg class="icon">
								<use xlink:href="#chevron-left"></use>
							</svg> <span>Facilities</span>
						</h6>
					</div>
					<div class="screen__item"><a class="screen__link" href="{{ url('/equipments') }}">Equipments</a>
					</div>
					<div class="screen__item"><a class="screen__link" href="{{ url('/our-plants') }}">Plants</a></div>
					<div class="screen__item"><a class="screen__link" href="{{ url('/quality') }}">Quality</a>
					</div>
					<div class="screen__item"><a class="screen__link" href="{{ url('/certifications') }}">Certifications</a>
					</div>
				</div>
			</div>
		</div>
		<!-- menu dropdown end-->
		<!-- header start-->




		<header class="page-header_4">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-8 col-md-6 col-lg-3 d-flex align-items-center">
						<!-- menu-trigger start-->
						<div class="hamburger d-none d-md-inline-block">
							<div class="hamburger-inner"></div>
						</div>
						<!-- menu-trigger end-->
						<div class="page-header__logo"><a href="{{ url('/') }}">
								<img src="{{('assets/img/drsteel/logo/drsteel-logo.png')}}" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-6 d-none d-lg-block">
						<!-- main menu start-->
						<ul class="main-menu ">
							<li class="main-menu__item main-menu__item main-menu__item"><a class="main-menu__link"
									href="{{ url('/') }}"><span>Home</span></a>
								<!-- sub menu start-->

								<!-- sub menu end-->
							</li>
							<li class="main-menu__item main-menu__item"><a class="main-menu__link"
									href="{{ url('/about-us') }}"><span>About</span></a>
								<!-- sub menu start-->

								<!-- sub menu end-->
							</li>
							<li class="main-menu__item main-menu__item"><a class="main-menu__link"
									href="{{ url('/product') }}"><span>Products</span></a>
								<!-- sub menu start-->

								<!-- sub menu end-->
							</li>

							<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link"
									href="javascript:void(0);"><span>Facilities</span></a>
								<!-- sub menu start-->
								<ul class="main-menu__sub-list">
									<li><a href="{{ url('/equipments') }}"><span>Equipments</span></a></li>
									<li><a href="{{ url('/our-plants') }}"><span>Plants</span></a></li>
									<li><a href="{{ url('/quality') }}"><span>Quality</span></a></li>
									<li><a href="{{ url('/certifications') }}"><span>Certifications</span></a></li>
								</ul>
								<!-- sub menu end-->
							</li>
							<li class="main-menu__item main-menu__item ml-1"><a class="main-menu__link"
									href="{{ url('/csr') }}"><span>CSR</span></a>
								
							</li>
							<li class="main-menu__item main-menu__item"><a class="main-menu__link"
									href="{{ url('/gallery') }}"><span>Gallery</span></a>
								
							</li>


						</ul>
						<!-- main menu end-->
					</div>
					<div class="col-2 col-md-6 col-lg-3 d-flex justify-content-end align-items-center">
						<a class="button button--filled" href="{{ url('/contact') }}">Contact Us</a>
						<!-- menu-trigger start-->
						<div class="hamburger d-inline-block d-md-none">
							<div class="hamburger-inner"></div>
						</div>
						<!-- menu-trigger end-->
					</div>
				</div>
			</div>
		</header>
		<!-- header end-->