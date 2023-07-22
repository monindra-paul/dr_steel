@extends('frontend.layout.app')
@section('mainsection')


<main class="main">
    <!-- section start-->
    <section class="hero-block">
        <picture>
            <source srcset="{{asset('assets/img/about_bg.jpg')}}" media="(min-width: 992px)" /><img class="img--bg"
                src="{{asset('assets/img/about_bg.jpg')}}" alt="img" />
        </picture>
        <div class="hero-block__layout"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="align-container">
                        <div class="align-container__item"><span class="hero-block__overlay">DR Steel</span>
                            <h1 class="hero-block__title">Products</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- section start-->

    <section class="section service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center text-xl-left"><img class="truck-img" src="{{('assets/img/drsteel/locomotive-p.webp')}}"
                        alt="img" />
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="heading bottom-20"><span class="heading__pre-title">Our Product Range</span>
                        <h4 class="warehouse__subtitle">LOCOMOTIVES</h4>
                    </div>
                    <div class="row bottom-50 top-40">
                        <div class="col-sm-6 col-md-5 col-xl-5">
                            <ul class="list list--check list--reset">
                                <li class="list__item">Air Reservoirs of different capacities.</li>
                                <li class="list__item">Drivers Desk.</li>
                                <li class="list__item">Floor ventilation & ducting.</li>
                                <li class="list__item">M.S & S.S Battery boxes.</li>
                                <li class="list__item">Brake gear arrangement.</li>
                                <li class="list__item">Gear Case.</li>
                                <li class="list__item">Bare Filter cubicles.</li>
                                <li class="list__item">Bare Hb 1,Hb 2,Sb1 Sb2 panels</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-5 col-xl-5 top-50 top-sm-0">
                            <ul class="list list--check list--reset">
                                <li class="list__item">Junction box.</li>
                                <li class="list__item">Locomotive grill assembly.</li>
                                <li class="list__item">Stainless steel battery boxes and panel components.</li>
                                <li class="list__item">Locomotive doors & Windows.</li>
                                <li class="list__item">Stainless Steel louvre assembly.</li>
                                <li class="list__item">Sand Boxes.</li>
                                <li class="list__item">Cable trays.</li>
                                <li class="list__item">Cowcatcher.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
    </section>




    <section class="section service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center text-xl-left"><img class="truck-img" src="{{('assets/img/drsteel/pune-metro.webp')}}"
                        alt="img" />
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="heading bottom-20"><span class="heading__pre-title">Our Product Range</span>
                        <h4 class="warehouse__subtitle">METRO COACHES</h4>
                    </div>
                    <div class="row bottom-50 top-40">
                        <div class="col-sm-6 col-md-5 col-xl-5">
                            <ul class="list list--check list--reset">
                                <li class="list__item">Anti-climber.</li>
                                <li class="list__item">Bare Driver Desk.</li>
                                <li class="list__item">All types of bare Cubical Panels.</li>
                                <li class="list__item">Cable tray/Duct.</li>
                                <li class="list__item">All types of bracket for Bogie Assembly.</li>
                                <li class="list__item">Driver Step.</li>
                                <li class="list__item">All types of Stainless-steel components (B & C class) for Metro Coaches </li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-5 col-xl-5 top-50 top-sm-0">
                            <ul class="list list--check list--reset">
                                <li class="list__item">Different types of support &amp; frame for Underframe equipment’s &amp; brake pipe support.</li>
                                <li class="list__item">Different types of Shim.</li>
                                <li class="list__item">Different types of spacers.</li>
                            
                                <li class="list__item">
                                    Manufacturer plate.</li>
                                <li class="list__item">
                                    Different types of Junction Box.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
    </section>


    <section class="section service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 text-center text-xl-left"><img class="truck-img" src="{{('assets/img/drsteel/jpg/cuit.jpg')}}"
                        alt="img" />
                </div>
                <div class="col-lg-8 col-xl-8">
                    <div class="heading bottom-20"><span class="heading__pre-title">Our Product Range</span>
                        <h4 class="warehouse__subtitle">CUSTOMIZE ITEMS</h4>
                    </div>
                    <div class="row bottom-50 top-40">
                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <ul class="list list--check list--reset">
                                <li class="list__item">Fabrication and machining of any items according to Client specification/drawings.</li>
                                <li class="list__item">Panel Manufacturing</li>
                                <li class="list__item">Mining Equipments Manufacturing</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>

            </div>
    </section>




</main>



@endsection