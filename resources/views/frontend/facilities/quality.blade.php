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
                            <h1 class="hero-block__title">Quality</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section mt-5">
        <div class="container">
            <img src="{{('assets/img/drsteel/png/quality.png')}}" alt="" srcset="">
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row bottom-70">
                <div class="col-lg-4">
                    <div class="heading bottom-40"><span class="heading__pre-title">Quality</span>
                        <h3 class="heading__title">Quality Check</h3><span class="heading__layout"></span>
                    </div><a class="button button--green d-none d-lg-inline-block"
                        href="{{ url('/certifications') }}"><span>Quality Certificates</span>
                        <svg class="icon">
                            <use xlink:href="#arrow"></use>
                        </svg></a>
                </div>
                <div class="col-lg-8">
                    <p><strong>Our Commitment is to providecustomers quality service with service with highest safety
                            standards products. We follow ISO 9001:2015 compliancevfor quality control to ensure a
                            rigorous quality checkprocess on all thethree lavels wiz :</strong></p>

                </div>
            </div>
            <div class="row offset-50">
                <div class="col-sm-6 col-xl-4">
                    <div class="count-item">
                        <div class="count-item__im"><img width="64" height="64"
                                src="https://img.icons8.com/external-tal-revivo-tritone-tal-revivo/64/external-minimize-window-arrow-for-an-active-application-text-tritone-tal-revivo.png"
                                alt="external-minimize-window-arrow-for-an-active-application-text-tritone-tal-revivo" />
                        </div>
                        <!-- <div class="count-item__img"><img src="{{('assets/img/drsteel/svg/inward.svg')}}" alt="icon" /></div> -->
                        <h6 class="count-item__title"><span class="count-item__count">01</span> <span>Inward Quality
                                Check</span></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="count-item">
                        <div class="count-item__im"><img width="64" height="64"
                                src="https://img.icons8.com/nolan/64/process.png" alt="process" /></div>
                        <!-- <div class="count-item__img"><img src="{{('assets/img/front-serv_2.png')}}" alt="icon" /></div> -->
                        <h6 class="count-item__title"><span class="count-item__count">02</span> <span>In Process Quality
                                Check</span></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="count-item">
                        <div class="count-item__im"><img width="64" height="64"
                                src="https://img.icons8.com/fluency/96/output.png" alt="output" /></div>
                        <!-- <div class="count-item__img"><img src="{{('assets/img/front-serv_3.png')}}" alt="icon" /></div> -->
                        <h6 class="count-item__title"><span class="count-item__count">03</span> <span>Ouput Quality
                                Check</span></h6>
                    </div>
                </div>

            </div>
            <div class="row top-70 d-flex d-lg-none">
                <div class="col-12 text-center"><a class="button button--green" href="{{ url('/certifications') }}"><span>Quality Certificates</span>
                        <svg class="icon">
                            <use xlink:href="#arrow"></use>
                        </svg></a></div>
            </div>
        </div>
    </section>
</main>




@endsection