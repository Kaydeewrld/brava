@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')

    @include('Frontend.Header.header-three')

    <!-- banner area -->
    <div class="rts__section banner__area is__home__three banner__height banner__center">
    <div class="container">
        <div class="row">
            <div class="banner__content not__slider">
                <div class="banner__slide__content not__slider">
                    <h1 class="wow fadeInUp">Energy-Efficient Apartment with Smart Hotel </h1>
                </div>
                <div class="banner__image wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{asset('assets/images/index-3/banner/banner.webp')}}" height="910" width="985" alt="">
                </div>
            </div>
            @php 
                $class = "is__home__three wow fadeInUp";
                $attr = "data-wow-delay='.5s'";
            @endphp
            @include('Frontend.Partials.advance__search',compact('class','attr'))
        </div>
    </div>
    </div>
    <!-- banner area end -->

    <!-- our apartment -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Apartment";
                        $title = " Our Apartment";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest Each room features plush bedding.";
                    @endphp
                    @include('Frontend.Components.sec-top-2',compact('top','title','desc'))
                </div>
            </div>
            <!-- row end -->
        </div>
        <div class="full__width">
            <div class="apartment__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/1.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-2')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/2.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-2')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->
                     
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/3.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-2')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->

                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/4.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-2')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->

                </div>
                <!-- pagination button -->
                <div class="rts__pagination">
                    <div class="rts-pagination"></div>
                </div>
               <!-- pagination button end -->
            </div>
        </div>
    </div>
    <!-- our apartment end -->

    <!-- our facility -->
    <div class="rts__section  facility__area has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="{{asset('assets/images/index-3/facility-shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="facility__image jara-mask-3 jarallax">
                        <img height="765" width="605" class="jarallax-img" src="{{asset('assets/images/index-3/facility.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facility__content">
                        @php 
                            $title = "Facility";
                            $big_title = "Apartment Facilities";
                        @endphp
                        @include('Frontend.Components.sec-top-3',compact('title','big_title'))

                        <div class="row mt-20 g-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="col-lg-6 col-md-6">
                                @php
                                    $class = 'no-border is__home__three';
                                    $icon = 'assets/images/icon/bed.svg';
                                    $link = '#';
                                    $title = 'Rooms and Suites';
                                    $desc = 'Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.';
                                @endphp
                                @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                            </div>
                            <div class="col-lg-6 col-md-6">
                                @php
                                    $class = 'no-border is__home__three';
                                    $icon = 'assets/images/icon/security.svg';
                                    $link = '#';
                                    $title = '24-Hour Security';
                                    $desc = 'On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.';
                                @endphp
                                @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                            </div>
                            <div class="col-lg-6 col-md-6">
                               
                                @php
                                    $class = 'no-border is__home__three';
                                    $icon = 'assets/images/icon/gym.svg';
                                    $link = '#';
                                    $title = 'Fitness Center';
                                    $desc = 'Equipped with exercise machines and weights.Offering massages, facials, and other treatments.';
                                @endphp
                                @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                            </div>
                            <div class="col-lg-6 col-md-6">
                                @php
                                    $class = 'no-border is__home__three';
                                    $icon = 'assets/images/icon/swimming-pool.svg';
                                    $link = '#';
                                    $title = 'Swimming Pool';
                                    $desc = 'Indoor or outdoor pools for leisure or exercise.Offering massages, facials, and other treatments';
                                @endphp
                                @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our facility end -->

    <!-- client testimonial  -->
     <div class="rts__section section__padding testimonial has__shape">
        <div class="section__shape">
            <div class="shape__1">
                <img src="{{asset('assets/images/shape/video-1.svg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row mb-40">
                <div class="d-flex align-items-center justify-content-between">
                    @php 
                        $title = "Testimonial";
                        $bigTitle = "What Our Client Say";
                    @endphp
                    @include('Frontend.Components.sec-top-3',compact('title','bigTitle'))
                    <div class="slider__navigation">
                        <div class="nav__btn button-next">
                            <img src="{{asset('assets/images/icon/arrow-left-short.svg')}}" alt="">
                        </div>
                        <div class="nav__btn button-prev">
                            <img src="{{asset('assets/images/icon/arrow-right-short.svg')}}" alt="">
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="testimonial__slider overflow-hidden">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="{{asset('assets/images/author/author-2x.webp')}}" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star-sharp-half-stroke"></i>
                                            </div>
                                            <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Sarah Martinez</h6>
                                                    <span>COO of Apex Solutions</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="{{asset('assets/images/author/author-4.webp')}}" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star-sharp-half-stroke"></i>
                                            </div>
                                            <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Sarah Martinez</h6>
                                                    <span>COO of Apex Solutions</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- client testimonial  end -->

    <!-- video section start -->
    <div class="rts__section">
        <div class="full__width w-100">
            <div class="video__area position-relative wow fadeInUp">
                <div class="video__area__image is__home__three jara-mask-3 jarallax">
                    <img class="jarallax-img rounded-0" src="{{asset('assets/images/video/video-bg-3.webp')}}" alt="">
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
    <!-- video section end -->

    <!-- blog style -->
    <div class="rts__section blog is__home__three section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Blog";
                        $title = "See Our Latest Blog";
                    @endphp
                    @include('Frontend.Components.sec-top-2',compact('top','title'))
                </div>
            </div>
            <!-- row end -->
            <div class="row g-30">
                <div class="col-lg-6">
                    <div class="blog__item is__full">
                        <div class="blog__item__thumb">
                            <a href="{{route('blog-details')}}">
                                <img src="{{asset('assets/images/index-3/blog/1.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="blog__item__meta">
                            <a href="#" class="blog__item__meta__cat">Urban Oasis Living</a>
                            <a href="{{route('blog-details')}}" class="blog__item__meta__title">
                                <h5>Live Elegantly in Our Contemporary Suite for Apartment</h5>
                            </a>
                            <div class="blog__item__meta__list">
                                <span class="blog__item__meta__list__item">
                                    <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                </span>
                                <span class="blog__item__meta__list__item">
                                   <a href="#"><img src="{{asset('assets/images/icon/person.svg')}}" alt="">Amin</a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog__small__list">
                        
                        <!-- single blog -->
                        <div class="blog__item if__is__small">
                            <div class="blog__item__thumb">
                                <a href="{{route('blog-details')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-3/blog/2.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <a href="#" class="blog__item__meta__cat">The Cozy Corner Suite</a>
                                <a href="{{route('blog-details')}}" class="blog__item__meta__title">
                                    <h5>Spacious One-Bedroom in Prime Location</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                    </span>
                                    <span class="blog__item__meta__list__item">
                                       <a href="#"><img src="{{asset('assets/images/icon/person.svg')}}" alt="">Amin</a> 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->

                        <!-- single blog -->
                        <div class="blog__item if__is__small">
                            <div class="blog__item__thumb">
                                <a href="{{route('blog-details')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-3/blog/3.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <a href="#" class="blog__item__meta__cat">Urban Chic Bedroom</a>
                                <a href="{{route('blog-details')}}" class="blog__item__meta__title">
                                    <h5>Comfortable Room with En-Suite Bathroom</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">March 26, 2024
                                    </span>
                                    <span class="blog__item__meta__list__item">
                                       <a href="#"><img src="{{asset('assets/images/icon/person.svg')}}" alt="">Rubel</a> 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog end -->

                        <!-- single blog -->
                        <div class="blog__item if__is__small">
                            <div class="blog__item__thumb">
                                <a href="{{route('blog-details')}}">
                                    <img width="195" height="168" src="{{asset('assets/images/index-3/blog/4.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="blog__item__meta">
                                <a href="#" class="blog__item__meta__cat">Stylish City Homes</a>
                                <a href="{{route('blog-details')}}" class="blog__item__meta__title">
                                    <h5>Elegant Apartment with Private Terrace</h5>
                                </a>
                                <div class="blog__item__meta__list">
                                    <span class="blog__item__meta__list__item">
                                        <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">October 26, 2024
                                    </span>
                                    <span class="blog__item__meta__list__item">
                                       <a href="#"><img src="{{asset('assets/images/icon/person.svg')}}" alt="">Ashiq</a> 
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

    <!-- our service -->
    <div class="rts__section service is__home__three has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="{{asset('assets/images/index-3/service/sec-bg.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row mb-40">
                @php 
                    $title = "Our Service";
                    $bigTitle = "Our Services";
                @endphp
                @include('Frontend.Components.sec-top-3',compact('title','bigTitle'))
            </div>
            <div class="row">
                
                <!-- single service item -->
                <div class="single__service__item if__is__default">
                    <div class="service__thumb jarallax">
                        <img class="jarallax-img" src="{{asset('assets/images/index-3/service/1.webp')}}" width="605" height="535" alt="service image">
                    </div>
                    <div class="service__content">
                        <div class="section__topbar">
                            <span class="h6 subtitle__icon__five d-block wow fadeInUp">Spa &amp; Wellness</span>
                            <h2 class="content__title h3 lh-1 wow fadeInUp ">Spa &amp; Wellness</h2>
                        </div>
                        <p class="font-sm mt-30 wow fadeInUp">At our Fitness & Yoga Services, we are dedicated to helping you achieve your health and wellness goals. Our comprehensive program offers a variety of classes designed to suit all levels, from beginners to advanced practitioners.</p>
                        <a href="#" class="underline__style wow fadeInUp" data-wow-delay=".4s">Read More</a>
                    </div>
                </div>
                <!-- single service item end -->

                <!-- single service item -->
                <div class="single__service__item if__is__reverse">
                    <div class="service__thumb jarallax">
                        <img class="jarallax-img" src="{{asset('assets/images/index-3/service/2.webp')}}" width="605" height="535" alt="service image">
                    </div>
                    <div class="service__content">
                        <div class="section__topbar">
                            <span class="h6 subtitle__icon__five d-block wow fadeInUp">Romantic Getaway</span>
                            <h2 class="content__title h3 lh-1 wow fadeInUp ">Romantic Getaway</h2>
                        </div>
                        <p class="font-sm mt-30 wow fadeInUp">At our Fitness & Yoga Services, we are dedicated to helping you achieve your health and wellness goals. Our comprehensive program offers a variety of classes designed to suit all levels, from beginners to advanced practitioners.</p>
                        <a href="#" class="underline__style wow fadeInUp" data-wow-delay=".4s">Read More</a>
                    </div>
                </div>
                <!-- single service item end -->
            </div>
        </div>
    </div>
    <!-- our service end -->

    <!-- our gallery -->
    <div class="rts__section gallery is__home__three pt-120 is__home__main">
        <div class="container-fluid">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Gallery";
                        $title = "Our Gallery";
                    @endphp
                    @include('Frontend.Components.sec-top-2',compact('top','title'))
                </div>
            </div>
            <div class="row">
                <div class="insta__gallery__slider overflow-hidden">
                    <div class="swiper-wrapper gallery">
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/1.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/1.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/2.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/2.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/3.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/3.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/4.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/4.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/5.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/5.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                         
                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/6.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/6.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->

                        <!-- single gallery image -->
                         <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{asset('assets/images/insta/1.webp')}}" height="300" width="300" alt="">
                                <a href="{{asset('assets/images/insta/1.webp')}}" class="gallery__popup">
                                    <img src="{{asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                         </div>
                        <!-- single gallery image end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our gallery end -->
    @include('Frontend.Footer.footer__three')
@endsection