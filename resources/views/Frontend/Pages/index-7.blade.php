@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')

    @include('Frontend.Header.header-four')

    <!-- banner area -->
    <div class="rts__section banner__area is__home__six banner__height banner__center">
        <div class="banner__content">
            <div class="banner__slider__image">
                <img src="{{asset('assets/images/index-6/banner/banner.webp')}}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner__slide__content">
                            <h1 class="wow fadeInUp">Discover the Beauty of Our Coastal Haven</h1>
                        </div>
                    </div>
                    @php 
                        $class = "is__home__six wow fadeInUp";
                        $attr = "data-wow-delay='.5s'";
                    @endphp
                    @include('Frontend.Partials.advance__search', compact('class','attr'))-
                </div>
            </div>
        </div>
     </div>
    <!-- banner area end -->

    <!-- our room -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Room</span>
                        <h2 class="content__title h2 lh-1">Our Rooms</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="room__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/index-6/room/1.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Sunset Shores Hotel</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>2 Person</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">100$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->

                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/index-6/room/2.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Paradise Palms Beach</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>2 Person</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">130$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->

                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/index-6/room/3.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Sunshine Bay Hotel</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>2 Person</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">150$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->

                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/room/1.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Waldorf Astoria Hotels</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>2 Person</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">150$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->
                    </div>
                </div>
                <!-- pagination button -->
                <div class="rts__pagination">
                    <div class="rts-pagination"></div>
                </div>
               <!-- pagination button end -->
            </div>
        </div>
    </div>
    <!-- our room end -->

    <!-- about us -->
    <div class="rts__section about is__home__six has__background">
        <div class="container">
            <div class="row about__content">
                <div class="col-lg-5">
                    <div class="about__image">
                        <img height="730" width="850" src="{{asset('assets/images/index-6/about.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content__full">
                        @php 
                            $title = "About Us";
                            $bigTitle = "Welcome To Our Moonlit Hotel & Resort";
                        @endphp
                        @include('Frontend.Components.sec-top-3', compact('title', 'bigTitle'))
                        <p class="font-sm mt-30 mb-40">Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.
                        </p>
                        <img height="75" width="110" src="{{asset('assets/images/index-5/sign.webp')}}" alt="" class="signature">
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- our service  -->
    <div class="rts__section service is__home__six section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        @php 
                            $title = "Our Service";
                            $bigTitle = "Our Services";
                        @endphp
                        @include('Frontend.Components.sec-top-3',compact('title','bigTitle'))
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="service__item__slide if__is__home__six">
                        <div class="service__thumb">
                            <a href="#">
                                <img height="275" width="305" src="{{asset('assets/images/index-6/service/1.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="service__meta">
                            <h5><a href="#">Family Fun Package</a></h5>
                            <span class="d-block h4 price">250$</span>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="service__item__slide if__is__home__six">
                        <div class="service__thumb">
                            <a href="#">
                                <img height="275" width="305" src="{{asset('assets/images/index-6/service/2.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="service__meta">
                            <h5><a href="#">Spa Retreat</a></h5>
                            <span class="d-block h4 price">120$</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service__item__slide if__is__home__six">
                        <div class="service__thumb">
                            <a href="#">
                                <img height="275" width="305" src="{{asset('assets/images/index-6/service/3.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="service__meta">
                            <h5><a href="#">Romantic Getaway</a></h5>
                            <span class="d-block h4 price">100$</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service__item__slide if__is__home__six">
                        <div class="service__thumb">
                            <a href="#">
                                <img height="275" width="305" src="{{asset('assets/images/index-6/service/4.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="service__meta">
                            <h5><a href="#">Velvet Red Reserve</a></h5>
                            <span class="d-block h4 price">450$</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- our service  end -->

    <!-- testimonial -->
    <div class="rts__section client__testimonial is__home__six has__background py-90">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="section__topbar is__home__two">
                        <span class="h6 subtitle__icon__four mx-auto text-white">Testimonial</span>
                        <h2 class="section__title text-white">What Our Client Say</h2>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center ">
                <div class="col-lg-10">
                    <div class="testimonial__slider overflow-hidden wow fadeInUp" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            <!-- single slider item -->
                            <div class="swiper-slide">
                                <div class="single__slider__item is__home ">
                                    <div class="slider__rating mb-30">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star-sharp-half-stroke"></i>
                                    </div>
                                    <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                    <div class="slider__author__info">
                                        <div class="slider__author__info__image">
                                            <img src="{{asset('assets/images/author/author-1.png')}}" alt="">
                                        </div>
                                        <div class="slider__author__info__content">
                                            <h6 class="mb-0">Sarah Martinez</h6>
                                            <span>COO of Apex Solutions</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->

                            <!-- single slider item -->
                            <div class="swiper-slide">
                                <div class="single__slider__item is__home ">
                                    <div class="slider__rating mb-30">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star-sharp-half-stroke"></i>
                                    </div>
                                    <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                    <div class="slider__author__info">
                                        <div class="slider__author__info__image">
                                            <img src="{{asset('assets/images/author/author-2x.webp')}}" alt="">
                                        </div>
                                        <div class="slider__author__info__content">
                                            <h6 class="mb-0">Alamin Hossen</h6>
                                            <span>Sr. Frontend</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->

                            <!-- single slider item -->
                            <div class="swiper-slide">
                                <div class="single__slider__item is__home ">
                                    <div class="slider__rating mb-30">
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star-sharp-half-stroke"></i>
                                    </div>
                                    <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                    <div class="slider__author__info">
                                        <div class="slider__author__info__image">
                                            <img src="{{asset('assets/images/author/author-3.webp')}}" alt="">
                                        </div>
                                        <div class="slider__author__info__content">
                                            <h6 class="mb-0">Sarah Martinez</h6>
                                            <span>COO of Apex Solutions</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->
                        </div>
                    </div>
                </div>
                <div class="full__width__nav">
                    <div class="rts__slide">
                        <div class="next slider-button-prev">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25536 9.75546H39.0408C39.7335 9.75546 40.2931 10.3151 40.2931 11.0078C40.2931 11.7005 39.7335 12.2601 39.0408 12.2601H4.28054L11.8807 19.8603C12.3699 20.3495 12.3699 21.1439 11.8807 21.6331C11.3915 22.1223 10.597 22.1223 10.1078 21.6331L0.366985 11.8923C0.00693893 11.5322 -0.098732 10.9961 0.0969467 10.5264C0.292625 10.0607 0.750515 9.75546 1.25536 9.75546Z" fill="#fff"/>
                                <path d="M11.0079 0.0028038C11.3288 0.0028038 11.6497 0.124125 11.8924 0.370679C12.3816 0.859874 12.3816 1.65432 11.8924 2.14352L2.13979 11.8961C1.6506 12.3853 0.856151 12.3853 0.366956 11.8961C-0.122239 11.4069 -0.122239 10.6125 0.366956 10.1233L10.1195 0.370679C10.3661 0.124125 10.687 0.0028038 11.0079 0.0028038Z" fill="#fff"/>
                            </svg>
                                
                        </div>
                    </div>
                    <div class="rts__slide">
                        <div class="prev slider-button-next">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.0374 12.2499L1.25198 12.245C0.55928 12.2449 -0.000286104 11.6852 -0.000196778 10.9925C-0.000107452 10.2998 0.559603 9.74024 1.2523 9.74033L36.0125 9.74481L28.4134 2.14371C27.9242 1.65445 27.9243 0.859997 28.4136 0.370865C28.9029 -0.118267 29.6973 -0.118164 30.1864 0.371094L39.926 10.1132C40.286 10.4733 40.3916 11.0095 40.1959 11.4791C40.0001 11.9447 39.5422 12.2499 39.0374 12.2499Z" fill="#fff"/>
                                <path d="M29.2835 22.0013C28.9626 22.0012 28.6417 21.8799 28.3991 21.6333C27.9099 21.144 27.91 20.3496 28.3993 19.8604L38.1531 10.1091C38.6424 9.61998 39.4368 9.62008 39.926 10.1093C40.4151 10.5986 40.415 11.393 39.9257 11.8822L30.1719 21.6335C29.9253 21.88 29.6044 22.0013 29.2835 22.0013Z" fill="#fff"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- testimonial end -->

     <!-- facility -->
    <div class="rts__section facility is__home__six">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="facility__content py-60">
                                @php 
                                    $title = "Facility";
                                    $big_title = "Apartment Facilities";
                                @endphp
                                @include('Frontend.Components.sec-top-3',compact('title','big_title'))
                               
                                <div class="row gy-5 mt-0">
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__six';
                                            $icon = 'assets/images/icon/bed.svg';
                                            $link = '#';
                                            $title = 'Rooms and Suites';
                                            $desc = 'Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__six';
                                            $icon = 'assets/images/icon/security.svg';
                                            $link = '#';
                                            $title = '24-Hour Security';
                                            $desc = 'On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__six';
                                            $icon = 'assets/images/icon/gym.svg';
                                            $link = '#';
                                            $title = 'Fitness Center';
                                            $desc = 'Equipped with exercise machines and weights.Offering massages, facials, and other treatments.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__six';
                                            $icon = 'assets/images/icon/swimming-pool.svg';
                                            $link = '#';
                                            $title = 'Swimming Pool';
                                            $desc = 'Indoor or outdoor pools for leisure or exercise.Offering massages, facials, and other treatments.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="facility__image__container">
                                <div class="facility__image wow fadeInRight">
                                    <img height="745" width="850" class="" src="{{asset('assets/images/index-6/facility.webp')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- facility end -->

    
    <!-- blog style -->
    <div class="rts__section blog is__home__three section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-20">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s"> 
                    @php 
                        $top = "Event";
                        $title = "Our Recent Beachside Events";
                    @endphp
                    @include('Frontend.Components.sec-top-2',compact('top','title'))
                </div>
            </div>
            <!-- row end -->
            <div class="row align-items-center g-30">
                <div class="col-lg-6">
                    <div class="blog__item is__full is__event">
                        <div class="blog__item__thumb">
                            <a href="{{route('event')}}">
                                <img src="{{asset('assets/images/index-6/event/1.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="blog__item__meta">
                            <div class="blog__item__meta__list mb-20">
                                <span class="blog__item__meta__list__item">
                                    <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                </span>
                            </div>
                            <a href="{{route('event')}}" class="blog__item__meta__title">
                                <h5>Your Perfect Event, Our Oceanfront Paradise</h5>
                            </a>
                            <div class="blog__item__meta__list">
                                <span class="blog__item__meta__list__item">
                                    <img src="{{asset('assets/images/icon/locatin.svg')}}" alt="">The Ritz-Carlton (California, USA)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog__small__list">
                        
                        <!-- single blog -->
                        <div class="blog__item if__is__small is__event">
                            <div class="blog__item__thumb">
                                <a href="{{route('event')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-6/event/2.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <div class="blog__item__meta__list mb-20">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                    </span>
                                </div>
                                <a href="{{route('event')}}" class="blog__item__meta__title">
                                    <h5>Coastal Elegance for Unforgettable Moments</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/locatin.svg')}}" alt="">The Ritz-Carlton (USA)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->

                        <!-- single blog -->
                        <div class="blog__item if__is__small is__event">
                            <div class="blog__item__thumb">
                                <a href="{{route('event')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-3/blog/3.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <div class="blog__item__meta__list mb-20">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                    </span>
                                </div>
                                <a href="{{route('event')}}" class="blog__item__meta__title">
                                    <h5>Comfortable Room with En-Suite Bathroom</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/locatin.svg')}}" alt="">The Ritz-Carlton (USA)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->

                        <!-- single blog -->
                        <div class="blog__item if__is__small is__event">
                            <div class="blog__item__thumb">
                                <a href="{{route('event')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-3/blog/4.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <div class="blog__item__meta__list mb-20">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                    </span>
                                </div>
                                <a href="{{route('event')}}" class="blog__item__meta__title">
                                    <h5>Elegant Apartment with Private Terrace</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/locatin.svg')}}" alt="">The Ritz-Carlton (California, USA)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog style end -->
    @include('Frontend.Footer.footer__six')
@endsection