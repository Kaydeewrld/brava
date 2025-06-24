@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')
@php $theme = 'dark'; @endphp
@section('content')
    @include('Frontend.Header.header-dark')

    <!-- banner area -->
    <div class="rts__section banner__area is__home__one banner__height banner__center">
        <div class="banner__slider overflow-hidden">
            <div class="swiper-wrapper">
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{asset('assets/images/banner/slides-1.webp')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Our Hotel</span>
                                    <h1>Luxury Stay Hotel Experience Comfort & Elegance</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="#" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{asset('assets/images/banner/slides-2.webp')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Our Spa</span>
                                    <h1>Lavish Getaway A Blend of Comfort & Style</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="#" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->
            </div>
            <div class="rts__slider__nav">
                <div class="rts__slide">
                    <div class="next">
                        <svg width="40" height="22" viewBox="0 0 40 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.255 9.75546H39.0404C39.7331 9.75546 40.2927 10.3151 40.2927 11.0078C40.2927 11.7005 39.7331 12.2601 39.0404 12.2601H4.28018L11.8803 19.8603C12.3695 20.3495 12.3695 21.1439 11.8803 21.6331C11.3911 22.1223 10.5967 22.1223 10.1075 21.6331L0.366619 11.8923C0.00657272 11.5322 -0.0990982 10.9961 0.0965805 10.5264C0.292259 10.0607 0.750149 9.75546 1.255 9.75546Z" fill="#F1F1F1"/>
                            <path d="M11.0077 0.00274277C11.3286 0.00274277 11.6495 0.124063 11.8921 0.370618C12.3813 0.859813 12.3813 1.65426 11.8921 2.14346L2.13955 11.896C1.65036 12.3852 0.855906 12.3852 0.366712 11.896C-0.122483 11.4068 -0.122483 10.6124 0.366712 10.1232L10.1193 0.370618C10.3658 0.124063 10.6868 0.00274277 11.0077 0.00274277Z" fill="#F1F1F1"/>
                        </svg>  
                    </div>
                </div>
                <div class="rts__slide">
                    <div class="prev">
                        <svg width="40" height="22" viewBox="0 0 40 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.0377 12.2445L1.25234 12.2445C0.559636 12.2445 -2.04305e-06 11.6849 -1.92194e-06 10.9922C-1.80082e-06 10.2995 0.559637 9.73987 1.25234 9.73987L36.0125 9.73987L28.4124 2.13974C27.9232 1.65055 27.9232 0.856096 28.4124 0.366901C28.9016 -0.122294 29.6961 -0.122293 30.1853 0.366901L39.9261 10.1077C40.2861 10.4678 40.3918 11.004 40.1961 11.4736C40.0005 11.9393 39.5426 12.2445 39.0377 12.2445Z" fill="#F1F1F1"/>
                            <path d="M29.2852 21.9973C28.9643 21.9973 28.6433 21.8759 28.4007 21.6294C27.9115 21.1402 27.9115 20.3457 28.4007 19.8565L38.1533 10.104C38.6425 9.61476 39.4369 9.61476 39.9261 10.104C40.4153 10.5932 40.4153 11.3876 39.9261 11.8768L30.1736 21.6294C29.927 21.8759 29.6061 21.9973 29.2852 21.9973Z" fill="#F1F1F1"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- banner area end -->

    <!-- advance search -->
    @php
        $class = "is__home__one";
        $attr = "";
    @endphp
    @include('Frontend.Partials.advance__search',compact('class','attr'))
    <!-- advance search end -->
     
    <!-- about us -->
    <div class="rts__section about__area is__home__one section__padding">
        <div class="section__shape">
            <img src="{{asset('assets/images/about/section__shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="about__wrapper">
                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">About Us</span>
                        <h2 class="content__title wow fadeInUp">Welcome To Our Moonlit Hotel & Resort</h2>
                        <p class="content__subtitle wow fadeInUp" data-wow-delay=".3s">Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.</p>
                        <a href="#" class="theme-btn btn-style fill no-border wow fadeInUp" data-wow-delay=".5s"><span>Learn More</span></a>
                    </div>
                    <div class="image ">
                        <div class="position-relative  wow fadeInUp" data-wow-delay=".3s">   
                            <div class="jara-mask-1 jarallax image-height">
                                <img src="{{asset('assets/images/about/about-1.webp')}}" class="jarallax-img" alt="">
                            </div>
                        </div>
                        <div class="image__card radius-10 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon radius-10 center-item">
                                <i class="flaticon-people"></i>
                            </div>
                            <div class="content">
                                <span class="h5">50+</span>
                                <p>Experience Staff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- facilities -->
    <div class="rts__section facilities__area has__background has__shape py-90">
        <div class="section__shape">
            <img src="{{asset('assets/images/shape/facility-dark.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Facilities";
                        $title = "Hotel Facilities";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                </div>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    @php
                        $class = 'no-border is__home radius-6';
                        $icon = 'assets/images/icon/bed.svg';
                        $link = '#';
                        $title = 'Rooms and Suites';
                        $desc = 'Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.';
                    @endphp
                    @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    @php
                        $class = 'no-border is__home radius-6';
                        $icon = 'assets/images/icon/security.svg';
                        $link = '#';
                        $title = '24-Hour Security';
                        $desc = 'On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.';
                    @endphp
                    @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    @php
                        $class = 'no-border is__home radius-6';
                        $icon = 'assets/images/icon/gym.svg';
                        $link = '#';
                        $title = 'Fitness Center';
                        $desc = 'Equipped with exercise machines and weights.Offering massages, facials, and other treatments.';
                    @endphp
                    @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    @php
                        $class = 'no-border is__home radius-6';
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
    <!-- facilities end -->

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
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/room/1.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>The Ritz-Carlton</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i> 35 sqm</span>
                                        <span><i class="flaticon-user"></i> 2 Person</span>
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
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/room/2.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Four Seasons Hotels</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i> 35 sqm</span>
                                        <span><i class="flaticon-user"></i> 2 Person</span>
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
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/room/3.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Waldorf Astoria Hotels</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i> 35 sqm</span>
                                        <span><i class="flaticon-user"></i> 2 Person</span>
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
                                    <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/room/4.webp')}}" alt="">
                                </div>
                                <div class="room__content">
                                    <a href="{{route('room-details-2')}}" class="room__title"><h5>Waldorf Astoria Hotels</h5></a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-construction"></i> 35 sqm</span>
                                        <span><i class="flaticon-user"></i> 2 Person</span>
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

    <!-- client testimonial -->
    <div class="rts__section client__testimonial is__home__one has__background has__shape py-90">
        <div class="section__shape">
            <div class="shape__one">
                <img src="{{asset('assets/images/shape/testimonial-dark.svg')}}" alt="">
            </div>
            <div class="shape__two">
                <img src="{{asset('assets/images/shape/testimonial-dark-2.svg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp">
                    @php
                        $top = "Testimonial";
                        $title = "What Our Client Say";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))

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

                        </div>
                    </div>
                </div>
                <div class="full__width__nav">
                    <div class="rts__slide">
                        <div class="next slider-button-prev">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25536 9.75546H39.0408C39.7335 9.75546 40.2931 10.3151 40.2931 11.0078C40.2931 11.7005 39.7335 12.2601 39.0408 12.2601H4.28054L11.8807 19.8603C12.3699 20.3495 12.3699 21.1439 11.8807 21.6331C11.3915 22.1223 10.597 22.1223 10.1078 21.6331L0.366985 11.8923C0.00693893 11.5322 -0.098732 10.9961 0.0969467 10.5264C0.292625 10.0607 0.750515 9.75546 1.25536 9.75546Z" fill="#65676B"/>
                                <path d="M11.0079 0.0028038C11.3288 0.0028038 11.6497 0.124125 11.8924 0.370679C12.3816 0.859874 12.3816 1.65432 11.8924 2.14352L2.13979 11.8961C1.6506 12.3853 0.856151 12.3853 0.366956 11.8961C-0.122239 11.4069 -0.122239 10.6125 0.366956 10.1233L10.1195 0.370679C10.3661 0.124125 10.687 0.0028038 11.0079 0.0028038Z" fill="#65676B"/>
                            </svg>
                                
                        </div>
                    </div>
                    <div class="rts__slide">
                        <div class="prev slider-button-next">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.0374 12.2499L1.25198 12.245C0.55928 12.2449 -0.000286104 11.6852 -0.000196778 10.9925C-0.000107452 10.2998 0.559603 9.74024 1.2523 9.74033L36.0125 9.74481L28.4134 2.14371C27.9242 1.65445 27.9243 0.859997 28.4136 0.370865C28.9029 -0.118267 29.6973 -0.118164 30.1864 0.371094L39.926 10.1132C40.286 10.4733 40.3916 11.0095 40.1959 11.4791C40.0001 11.9447 39.5422 12.2499 39.0374 12.2499Z" fill="#65676B"/>
                                <path d="M29.2835 22.0013C28.9626 22.0012 28.6417 21.8799 28.3991 21.6333C27.9099 21.144 27.91 20.3496 28.3993 19.8604L38.1531 10.1091C38.6424 9.61998 39.4368 9.62008 39.926 10.1093C40.4151 10.5986 40.415 11.393 39.9257 11.8822L30.1719 21.6335C29.9253 21.88 29.6044 22.0013 29.2835 22.0013Z" fill="#65676B"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client testimonial end -->

    <!-- video section start -->
     <div class="rts__section section__padding video has__shape">
        <div class="section__shape">
            <div class="shape__1">
                <img src="{{asset('assets/images/shape/video-dark.svg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video__area position-relative wow fadeInUp">
                        <div class="video__area__image jara-mask-2 jarallax">
                            <img class="radius-10 jarallax-img" src="{{asset('assets/images/video/video-bg.webp')}}" alt="">
                        </div>
                        <div class="video--spinner__wrapper ">
                            <div class="rts__circle">
                                <svg class="spinner" viewBox="0 0 100 100">
                                    <defs>
                                        <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle-2">Watch Now * Watch Now * Watch Full Video *</textPath>
                                    </text>
                                </svg>
                                <div class="rts__circle--icon">
                                    <a href="https://www.youtube.com/watch?v=qOwxqRGHy5Q" class="video-play">
                                        <i class="flaticon-play"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- video section end -->

    <!-- special section start -->
    <div class="rts__section offer__area is__home__one has__shape">
        <div class="section__shape">
            <img src="{{asset('assets/images/shape/offer-dark.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Special Offer</span>
                        <h2 class="content__title h2 lh-1">Special Offer</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Experience the ultimate in luxury and relaxation with our exclusive special offer! Book your stay now and enjoy 20% off our best available rates.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->

            <div class="row row-60">
                <!-- single offer item -->
                <div class="col-xl-6 col-lg-10 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single__offer">
                        <div class="single__offer__image">
                            <img src="{{asset('assets/images/offer/1.webp')}}" width="310" height="310" alt="">
                        </div>
                        <div class="single__offer__content">
                            <a href="#"><h6>Family Fun Package</h6></a>
                            <ul class="offer__included">
                                <li><i class="flaticon-check-circle"></i> 15% off on family suites</li>
                                <li><i class="flaticon-check-circle"></i> Free meals for kids under 12</li>
                                <li><i class="flaticon-check-circle"></i> Complimentary tickets</li>
                                <li><i class="flaticon-check-circle"></i> The local amusement park</li>
                                <li><i class="flaticon-check-circle"></i> Daily family-friendly activities</li>
                            </ul>
                            <a href="#" class="underline__style">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- single offer item end -->

                <!-- single offer item -->
                <div class="col-xl-6 col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single__offer">
                        <div class="single__offer__image">
                            <img src="{{asset('assets/images/offer/2.webp')}}" width="310" height="310" alt="">
                        </div>
                        <div class="single__offer__content">
                            <a href="#"><h6>Spa Retreat</h6></a>
                            <ul class="offer__included">
                                <li><i class="flaticon-check-circle"></i> A two-night stay in a premium room</li>
                                <li><i class="flaticon-check-circle"></i> Daily spa treatments</li>
                                <li><i class="flaticon-check-circle"></i> Healthy breakfast and lunch options</li>
                                <li><i class="flaticon-check-circle"></i> Access to all spa facilities</li>
                                <li><i class="flaticon-check-circle"></i> 25% off for stays of 7 nights or more</li>
                            </ul>
                            <a href="#" class="underline__style">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- single offer item end -->

                <!-- single offer item -->
                <div class="col-xl-6 col-lg-10 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single__offer">
                        <div class="single__offer__image">
                            <img src="{{asset('assets/images/offer/3.webp')}}" width="310" height="310" alt="">
                        </div>
                        <div class="single__offer__content">
                            <a href="#"><h6>Business Traveler Special</h6></a>
                            <ul class="offer__included">
                                <li><i class="flaticon-check-circle"></i> 10% off on executive rooms</li>
                                <li><i class="flaticon-check-circle"></i> Complimentary high-speed Wi-Fi</li>
                                <li><i class="flaticon-check-circle"></i> Access to the business lounge</li>
                                <li><i class="flaticon-check-circle"></i> Free airport shuttle service</li>
                                <li><i class="flaticon-check-circle"></i> Daily family-friendly activities</li>
                            </ul>
                            <a href="#" class="underline__style">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- single offer item end -->

                <!-- single offer item -->
                <div class="col-xl-6 col-lg-10 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single__offer">
                        <div class="single__offer__image">
                            <img src="{{asset('assets/images/offer/4.webp')}}" width="310" height="310" alt="">
                        </div>
                        <div class="single__offer__content">
                            <a href="#"><h6>Romantic Getaway</h6></a>
                            <ul class="offer__included">
                                <li><i class="flaticon-check-circle"></i> A two-night stay in a deluxe suite</li>
                                <li><i class="flaticon-check-circle"></i> A bottle of champagne and chocolates</li>
                                <li><i class="flaticon-check-circle"></i> Romantic dinner for two</li>
                                <li><i class="flaticon-check-circle"></i> Couples massage at our spa</li>
                                <li><i class="flaticon-check-circle"></i> Couples massage at our spa</li>
                            </ul>
                            <a href="#" class="underline__style">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- single offer item end -->
            </div>
        </div>
    </div>
    <!-- special section end -->
    @include('Frontend.Footer.footer__common')
@endsection