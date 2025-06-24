@extends('Frontend.Layouts.app')
@section('page_title', 'Activities Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Activities";
        $desc = "Our diverse range of activities is designed to offer something for everyone.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- our activities -->
    <div class="rts__section activites section__padding">
        <div class="container">
            <div class="row">
                <!-- single service item -->
                <div class="single__service__item if__is__default if__activities">
                    <div class="service__thumb jarallax">
                        <img class="jarallax-img" src="{{asset('assets/images/pages/activities/1.webp')}}" width="605" height="650" alt="service image">
                    </div>
                    <div class="service__content">
                        <div class="section__content__left">
                            <span class="h6 subtitle__icon__two d-block wow fadeInUp">Winter Activities</span>
                            <h2 class="content__title h2 wow fadeInUp lh-1">Winter Activities</h2>
                        </div>
                        <p class="font-sm mt-20 wow fadeInUp">Enjoy access to nearby slopes, perfect for both beginners and experienced skiers. Explore serene winter landscapes on guided snowshoe tours through nearby trails.</p>
                        <div class="activity__feature wow fadeInUp mt-20">
                            <ul class="list-unstyled">
                                <li><img src="{{asset('assets/images/icon/sketing.svg')}}" alt="">Skiing & Snowboarding</li>
                                <li><img src="{{asset('assets/images/icon/wild.svg')}}" alt="">Winter Wildlife Tours</li>
                                <li><img src="{{asset('assets/images/icon/hot-coffe.svg')}}" alt="">Hot Cocoa by the Fire</li>
                                <li><img src="{{asset('assets/images/icon/snow.svg')}}" alt="">Snowshoeing</li>
                                <li><img src="{{asset('assets/images/icon/spa.svg')}}" alt="">Spa & Wellness</li>
                            </ul>
                        </div>
                        <a href="#" class="underline__style wow fadeInUp" data-wow-delay=".4s">Discover More</a>
                    </div>
                </div>
                <!-- single service item end -->

                <!-- single service item -->
                <div class="single__service__item if__is__reverse if__activities">
                    <div class="service__thumb jarallax">
                        <img class="jarallax-img" src="{{asset('assets/images/pages/activities/2.webp')}}" width="605" height="650" alt="service image">
                    </div>
                    <div class="service__content">
                        <div class="section__content__left">
                            <span class="h6 subtitle__icon__two d-block wow fadeInUp">Summer Activities</span>
                            <h2 class="content__title h2 wow fadeInUp lh-1">Summer Activities</h2>
                        </div>
                        <p class="font-sm mt-20 wow fadeInUp">Enjoy access to nearby slopes, perfect for both beginners and experienced skiers. Explore serene winter landscapes on guided snowshoe tours through nearby trails.</p>
                        <div class="activity__feature wow fadeInUp mt-20">
                            <ul class="list-unstyled">
                                <li><img src="{{asset('assets/images/icon/sketing.svg')}}" alt="">Guided Hiking Tours</li>
                                <li><img src="{{asset('assets/images/icon/biking.svg')}}" alt="">Mountain Biking</li>
                                <li><img src="{{asset('assets/images/icon/swimming.svg')}}" alt="">Outdoor Swimming Pool</li>
                                <li><img src="{{asset('assets/images/icon/home-theater.svg')}}" alt="">Outdoor Movie Nights</li>
                                <li><img src="{{asset('assets/images/icon/tenis.svg')}}" alt="">Tennis & Sports Courts</li>
                            </ul>
                        </div>
                        <a href="#" class="underline__style wow fadeInUp" data-wow-delay=".4s">Discover More</a>
                    </div>
                </div>
                <!-- single service item end -->
            </div>
        </div>
        <div class="container pt-120">
            <div class="row g-30">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="activities__image__card">
                        <div class="activities__thumb">
                            <img src="{{asset('assets/images/pages/activities/3.webp')}}" width="420" height="585" alt="">
                        </div>
                        <div class="activities__meta">
                            <a href="#" class="h4 title d-block">Cultural Tours</a>
                            <a href="#" class="theme-btn btn-style border"><span>View More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="activities__image__card">
                        <div class="activities__thumb">
                            <img src="{{asset('assets/images/pages/activities/4.webp')}}" width="420" height="585" alt="">
                        </div>
                        <div class="activities__meta">
                            <a href="#" class="h4 title d-block">Cooking Classes</a>
                            <a href="#" class="theme-btn btn-style border"><span>View More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="activities__image__card">
                        <div class="activities__thumb">
                            <img src="{{asset('assets/images/pages/activities/5.webp')}}" width="420" height="585" alt="">
                        </div>
                        <div class="activities__meta">
                            <a href="#" class="h4 title d-block">Spa & Wellness</a>
                            <a href="#" class="theme-btn btn-style border"><span>View More</span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- our activites end -->
    @include('Frontend.Footer.footer__common')
@endsection
