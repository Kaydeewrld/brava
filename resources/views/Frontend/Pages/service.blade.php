@extends('Frontend.Layouts.app')
@section('page_title', 'Service Page Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Our services";
        $desc = "At Moonlit we pride ourselves on delivering an exceptional experience.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- service -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row">
                <div class="service__list">
                    
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-24-hours"></i>
                        </div>
                        <a href="#" class="h6">24-Hour Security</a>
                        <p>A 24-hour security service provides and surveillance,  
                            properties, or sensitive information around the clock.
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-wifi"></i>
                        </div>
                        <a href="#" class="h6">Free Wifi</a>
                        <p>Free Wi-Fi has become an essential service in our increasingly connected world. It  by  people to access the internet
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-gym"></i>
                        </div>
                        <a href="#" class="h6">Fitness Center</a>
                        <p>A fitness center is a vibrant and dynamic environment designed to promote health and Fitnee Center well-being.
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-plane"></i>
                        </div>
                        <a href="#" class="h6">Airport transport</a>
                        <p>Airport transportation plays a crucial role in  travel experiences for passengers. It  various services, including taxis, ride-sharing
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                           <img src="{{asset('assets/images/icon/desk.svg')}}" width="40" height="40"  alt="">
                        </div>
                        <a href="#" class="h6">Work Desk</a>
                        <p>A well-organized work desk is more than just a place to complete tasks; it's a hub of productivity and creativity.
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-swimming"></i>
                        </div>
                        <a href="#" class="h6">Swimming Pool</a>
                        <p>A swimming pool is a refreshing oasis, offering a place to cool off, relax, and enjoy various water activities.
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                           <img src="{{asset('assets/images/icon/bed.svg')}}" width="40" height="40" alt="">
                        </div>
                        <a href="#" class="h6">Rooms and Suites</a>
                        <p>On-site security personnel and surveillance. from standard to luxury suites, Secure it is storage for valuables.
                        </p>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item -->
                    <div class="service__item">
                        <div class="service__item__icon">
                            <i class="flaticon-shower"></i>
                        </div>
                        <a href="#" class="h6">Shower</a>
                        <p>The warm water cascaded down, enveloping a soothing as I stood in the shower. Each droplet danced on my skin, washing.
                        </p>
                    </div>
                    <!-- single service item end -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- our service -->
    <div class="rts__section service is__home__three has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="{{asset('assets/images/index-3/service/sec-bg.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Our Service</span>
                        <h2 class="section__title">Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- single service item -->
                <div class="single__service__item if__is__default">
                    <div class="service__thumb jarallax">
                        <img class="jarallax-img" src="{{asset('assets/images/index-3/service/1.webp')}}" width="605" height="535" alt="service image">
                    </div>
                    <div class="service__content">
                        <div class="section__content__left">
                            <span class="h6 subtitle__icon__two d-block wow fadeInUp">Spa & Wellness</span>
                            <h2 class="content__title h3 lh-1">Spa & Wellness</h2>
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
    <div class="section__content__left">
        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Weddings & Celebrations</span>
        <h2 class="content__title h3 lh-1">Dream Weddings</h2>
    </div>
    <p class="font-sm mt-30 wow fadeInUp">
        Let us make your special day truly unforgettable. Our expert team crafts elegant weddings and receptions tailored to your vision—whether you desire an intimate gathering or a grand celebration. From beautiful décor to exquisite catering, we handle every detail so you can focus on making memories.
    </p>
    <a href="#" class="underline__style wow fadeInUp" data-wow-delay=".4s">Read More</a>
</div>
                </div>
                <!-- single service item end -->
            </div>
        </div>
    </div>
    <!-- our service end -->

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
                                        <img src="{{asset('assets/images/author/author2.jpg')}}" alt="">
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
