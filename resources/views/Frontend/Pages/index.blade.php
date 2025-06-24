@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')

    @include('Frontend.Header.header')
    <!-- banner area -->
    <div class="rts__section banner__area is__home__one banner__height banner__center">
        <div class="banner__slider overflow-hidden">
            <div class="swiper-wrapper">
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{asset('assets/images/banner/1.webp')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Brava Hotel</span>
                                    <h1>Experience Comfort, Style & Unmatched Hospitality</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="{{route('room-two')}}" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
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
                        <img src="{{asset('assets/images/banner/2.webp')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Brava Hotel</span>
                                    <h1>Luxury Redefined — Your Perfect Escape Awaits</h1>
                                    <p class="sub__text">At Brava Hotel, we blend modern elegance with personalized service to create an unforgettable stay for every guest.</p>
                                    <a href="{{route('room-one')}}" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
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
                        <img src="{{asset('assets/images/banner/banner-3.webp')}}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Brava </span>
                                    <h1> A Perfect Fusion of Comfort and Elegance</h1>
                                    <p class="sub__text">Discover a sanctuary of relaxation, world-class amenities, and impeccable service — designed to make every moment special.</p>
                                    <a href="{{route('room-one')}}" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
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
    <div class="rts__section about__area is__home__main section__padding">
        <div class="section__shape d-none d-xl-block">
            <img src="{{asset('assets/images/about/section__shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="about__wrapper">
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
                                <p>Experienced Staff</p>
                            </div>
                        </div>
                        <div class="image__card__image wow fadeInUp">
                            <img src="{{asset('assets/images/about/about-main.webp')}}" width="312" height="230" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">About Us</span>
                        <h2 class="content__title wow fadeInUp">Welcome To Brava Hotel & Resort</h2>
                        <p class="content__subtitle wow fadeInUp" data-wow-delay=".3s">Welcome to Brava, where luxury meets comfort in the heart of Ibadan. Since 2012, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.</p>
                        <a href="{{route('about')}}" class="theme-btn btn-style fill no-border wow fadeInUp" data-wow-delay=".5s"><span>Learn More</span></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- facilities -->
    <div class="rts__section facilities__area has__background has__shape py-90">
        <div class="section__shape">
            <img src="{{asset('assets/images/shape/facility-1.svg')}}" alt="">
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
    <div class="rts__section pt-120">
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
        </div>
        <!-- row end -->
        <div class="row">
            <div class="main__room__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    <!-- single room slider -->
                    <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/deluxe.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('roommini')}}" class="room__title"><h5>Mini Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i> 35 sqm</span>
                                    <span><i class="flaticon-user"></i>1 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦60,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- single room slider end -->

                    <!-- single room slider -->
                    <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/deluxe1.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('deluxeroom')}}" class="room__title"><h5>Deluxe Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>2 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦75,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- single room slider end -->

                    <!-- single room slider -->
                    <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/presidential3.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('premiumroom')}}" class="room__title"><h5>Premium Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>5 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦80,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- single room slider end -->

                    <!-- single room slider -->
                    <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/presidential.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('executiveroom')}}" class="room__title"><h5>Executive Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>5 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦120,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- single room slider end -->

                    <!-- single room slider -->
                    <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/presidential1.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('executiveterrace')}}" class="room__title"><h5>Executive Terrace</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>5 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦150,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- single room slider end -->
                       <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/presidential2.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('presidential')}}" class="room__title"><h5>Presidential Suite 1 Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>5 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦200,000</span>
                            </div>
                        </div>
                    </div>
                      <div class="swiper-slide">
                        <div class="room__slide__box radius-6">
                            <div class="room__thumbnail jara-mask-2 jarallax">
                                <img height="585" width="420" class="radius-6 jarallax-img" src="{{asset('assets/images/presidential4.jpeg')}}" alt="">
                            </div>
                            <div class="room__content">
                                <a href="{{route('presidentialroom')}}" class="room__title"><h5>Presidential Suite 2 Room</h5></a>
                                <div class="room__content__meta">
                                    <span><i class="flaticon-construction"></i>35 sqm</span>
                                    <span><i class="flaticon-user"></i>5 Person</span>
                                </div>
                                <span class="h4 rent mb-0 mt-15 d-block">₦250,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pagination button -->
            <div class="rts__pagination">
                <div class="rts-pagination"></div>
            </div>
            <!-- pagination button end -->
    </div>
    </div>
    <!-- our room end -->

    <!-- client testimonial  -->
  
    <!-- client testimonial  end -->

    <!-- video section start -->
     <div class="rts__section pb-120 video video__full">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="video__area position-relative wow fadeInUp">
                        <div class="video__area__image jara-mask-2 jarallax rounded-0">
                            <img class="radius-none jarallax-img" src="{{asset('assets/images/video/video-main.webp')}}" alt="">
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
                                    <a href="https://streamable.com/e/fs98i5?autoplay=1" class="video-play">
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
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    @php
                        $top = "Special Offer";
                        $title = "Special Offer";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                </div>
            </div>
            <!-- row end -->
            <div class="row justify-content-center g-30">
                <div class="col-lg-10 col-xl-6 col-xxl-5">
                    <div class="single__offer__card">
            <form >
                        <a href="{{route('presidential')}}">
                            <img src="{{asset('assets/images/offer/5.webp')}}" alt="">
                        </a>
                        <div class="single__offer__card__content">
                            <a href="{{route('presidential')}}" class="h4">Weekend Escape Deal</a>
                            <ul class="offer__included list-unstyled">
                                <li><i class="flaticon-check-circle"></i> 20% off all Presidential Suite </li>
                                <li><i class="flaticon-check-circle"></i> Free meal (Breakfast)</li>
                                <li><i class="flaticon-check-circle"></i> Free late check-out (up to 2PM)</li>
                              
                            </ul>
                            <h3 class="offer__price mb-0">₦200,000</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-xl-6 col-xxl-7">
                    <div class="d-flex flex-column gap-30">
                        
                        <div class="single__offer__card is__flex">
                            <a href="{{route('presidential')}}">
                                <img src="{{asset('assets/images/wedding.jpg')}}" width="265" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="{{route('presidential')}}" class="h5">Business Traveler Special</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i> 15% off Executive Rooms (Sunday - Thursday)</li>
                                    <li><i class="flaticon-check-circle"></i> Daily complimentary laundry (1 outfit per day)</li>
                                    <li><i class="flaticon-check-circle"></i> Healthy breakfast and lunch</li>
                                    <li><i class="flaticon-check-circle"></i> Access to  spa </li>
                                </ul>
                                <h4 class="offer__price mb-0">₦212,500</h4>
                            </div>
                        </div>
    
                        <div class="single__offer__card is__flex">
                            <a href="{{route('presidential')}}">
                                <img src="{{asset('assets/images/romantic.jpg')}}" width="265" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="{{route('presidential')}}" class="h5">Romantic Getaway</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i>  Decorated Suite with welcome Red Wine</li>
                                    <li><i class="flaticon-check-circle"></i> Daily spa treatments</li>
                                    <li><i class="flaticon-check-circle"></i> Healthy breakfast and lunch</li>
                                    <li><i class="flaticon-check-circle"></i> Access to all spa </li>
                                <h4 class="offer__price mb-0">₦120,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special section end -->

    <!-- gallery -->
    <div class="rts__section is__home__main">
        <div class="container-fluid">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    @php 
                        $top = "Instagram Post";
                        $title = "Follow on Instagram";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
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
    <!-- gallery end -->
     @include('Frontend.Footer.footer__common')
@endsection