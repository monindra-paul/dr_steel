@extends('frontend.layout.app')
@section('mainsection')


<main class="main">
    <!-- section start-->
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
                            <h1 class="hero-block__title">Equipments</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">PRODUCTION EQUIPMENTS
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">Hydraulic Press Brake 100T</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">Hydraulic Press Brake 500T
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">CNC Brake Press 150T
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            CNC Brake Press 160T
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Shaping Machine 600 MM STOKE
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Power Operating Shaw
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Plate Bending Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Hand Operating Bending Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Hand Operating Pipe Bending Machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Flamingo Portable Gas Cutting Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Straightening Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Air Plasma Cutting machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Rolling Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            CNC Oxy-Plasma Cutting Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            CNC Plasma Cutting Machine
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">LIST OF TOOL ROOM EQUIPMENTS
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Lathe 12'
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Lathe 8'6''

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Bench grinding machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Portable Grinding

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Milling Machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Drilling machine stand / portable / radial
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Automatic Tapping Machine M16

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Automatic Tapping Machine 12 MM

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Hand Operating Pipe Bending Machine
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">LIST OF ASSEMBLY & PACKIGING MC

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">Pneumatic Nut inserting machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Pneumatic Pop riveting machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Pneumatic tools- nut runners/screw drivers

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Torque wrench
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">MATERIAL HANDELING EQUIPMENTS


                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-6 col-lg-6 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            E.O.T Crane

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Manual stacker / Trolly
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">UTILITY EQUIPMENTS


                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">
                            Air Compressors

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            UPS

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Air dryer

                        </h6>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-12">
                    <div class="heading heading--center"><span class="heading__pre-title">Equipments</span>
                        <h3 class="heading__title">LIST OF FINISHING EQUIPMENTS

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row offset-50">
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Portable Buffing machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Hand Grinding machine

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Bench Grinding machines
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Drill guns

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">


                            Pencil Die Grinder

                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Bench Motor Polishing machine
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">


                            Portable Polishing Machine


                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">

                            Weld Clearing Machine


                        </h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-4 text-center">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <!-- <img src="{{('assets/img/drsteel/svg/correct.svg')}}" alt="" srcset=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                viewBox="0,0,256,256" style="fill:#000000;">
                                <g fill="#00c7fb" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8.53333,8.53333)">
                                        <path
                                            d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-2.17938 -0.59,-4.21686 -1.60547,-5.97852l-11.24805,11.24609c-0.187,0.187 -0.44103,0.29297 -0.70703,0.29297c-0.265,0 -0.52003,-0.10497 -0.70703,-0.29297l-4.45313,-4.45312c-0.391,-0.391 -0.391,-1.02306 0,-1.41406c0.391,-0.391 1.02306,-0.391 1.41406,0l3.74609,3.74609l10.80078,-10.80078c-2.201,-2.655 -5.52223,-4.3457 -9.24023,-4.3457zM24.24023,7.3457c0.43165,0.52058 0.81351,1.08435 1.1543,1.67383l2.3125,-2.3125c0.391,-0.392 0.391,-1.02306 0,-1.41406c-0.391,-0.391 -1.02306,-0.391 -1.41406,0z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="icon-item__title bottom-0">


                            Paint Booth
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

@endsection