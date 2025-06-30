@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "About Us";
        $desc = "Welcome to Brava, where luxury meets comfort in the heart of Ibadan.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- about us -->
    <div class="rts__section about is__home__four section__padding">
        <div class="container">
            <div class="row g-4 align-items-center  ">
                <div class="col-lg-5">
                    <div class="about__images">
                        <div class="image__left wow fadeInUp">
                            <img height="474" width="450" src="{{asset('assets/images/index-4/about/1.webp')}}" alt="">
                        </div>
                        <div class="image__right wow fadeInLeft">
                            <img width="365" height="385" src="{{asset('assets/images/index-4/about/2.webp')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content">
                       <span class="h6 subtitle__icon__two d-block wow fadeInUp">About Us</span>
                        <h2 class="font-xl wow fadeInUp">Welcome To Our Brava Hotel & Resort</h2>
                        <p class="font-sm mt-30 wow fadeInUp" data-wow-delay=".3s">
                            Welcome to Brava, where luxury meets comfort. Since 2012, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.
                        </p>
                        <div class="hotel__owner__sign mt-40 wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{asset('assets/images/index-4/about/sign.webp')}}" alt="sign">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- our facility -->
    <div class="rts__section facility__area is__about has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="{{asset('assets/images/pages/about-shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="facility__content">
                        <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Facility</span>
                            <h2 class="content__title h2 lh-1">Hotel Facilities</h2>
                        </div>
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
                                    $desc = 'Indoor or outdoor pools for leisure or exercise.Offering massages, facials, and other treatments.';
                                @endphp
                                @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="facility__image jara-mask-3 jarallax">
                        <img height="765" width="605" class="jarallax-img" src="{{asset('assets/images/index-3/facility.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our facility end -->

    <!-- team -->
  
    <!-- team end -->

    <!-- client testimonial  -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row mb-40">
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Testimonial</span>
                        <h2 class="content__title h2 lh-1">What Our Client Say</h2>
                    </div>
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
                                        <img src="{{asset('assets/images/author/author.jpeg')}}" alt="">
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
                                            <span class="slider__text d-block">My stay at Brava Hotel was simply exceptional. The rooms are always clean, the staff are courteous, and I always feel at home here in Ibadan.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Mr. Funmi Adeyemi</h6>
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
                                        <img src="{{asset('assets/images/IMG_2344.JPG')}}" alt="">
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
                                            <span class="slider__text d-block">As a frequent business traveler to Ibadan, Brava Hotel is always my first choice. Their executive rooms are world-class and perfect for my meetings.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Emran Hossain</h6>
                                                    <span>CTO of Tritron Tech</span>
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
    @include('Frontend.Footer.footer__common')
@endsection
