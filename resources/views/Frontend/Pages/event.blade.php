@extends('Frontend.Layouts.app')
@section('page_title', 'Event Page Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Events";
        $desc = "Our diverse range of activities is designed to offer something for everyone.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))
    <!-- event area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row">
                <div class="single__event if__is__default">
                    <div class="single__event__thumb">
                        <img src="{{asset('assets/images/pages/event/1.webp')}}" width="605" height="535" alt="">
                    </div>
                    <div class="single__event__meta">
                        <h2 class="wow fadeInUp mb-20">
                            A Night of Hope: Our
                            Charity Gala Room.
                        </h2>
                        <p class="font-sm wow fadeInUp">At our Fitness & Yoga Services, we are dedicated to helping you achieve your health and wellness goals. Our comprehensive program offers a variety of classes designed to suit all levels, from beginners to advanced practitioners.</p>
                        <div class="event__info mt-20 wow fadeInUp">
                            <div class="event__info__single">
                                <span class="h5 d-block">1000+</span>
                                <p>Guest Dinner</p>
                            </div>
                            <div class="event__info__single">
                                <span class="h5 d-block">100+</span>
                                <p>Service Man</p>
                            </div>
                            <div class="event__info__single">
                                <span class="h5 d-block">10+</span>
                                <p>Special Room</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__event if__is__reverse">
                    <div class="single__event__thumb">
                        <img src="{{asset('assets/images/pages/event/2.webp')}}" width="605" height="535" alt="">
                    </div>
                    <div class="single__event__meta">
                        <h2 class="wow fadeInUp mb-20">
                            Taste of Luxury: Food
                            & Wine Festival Event
                        </h2>
                        <p class="font-sm wow fadeInUp">At our Fitness & Yoga Services, we are dedicated to helping you achieve your health and wellness goals. Our comprehensive program offers a variety of classes designed to suit all levels, from beginners to advanced practitioners.</p>
                        <div class="event__info mt-20 wow fadeInUp">
                            <div class="event__info__single">
                                <span class="h5 d-block">800+</span>
                                <p>Guest Dinner</p>
                            </div>
                            <div class="event__info__single">
                                <span class="h5 d-block">70+</span>
                                <p>Service Man</p>
                            </div>
                            <div class="event__info__single">
                                <span class="h5 d-block">16+</span>
                                <p>Special Room</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- event area end -->

    <!-- event newsletter -->
    <div class="rts__section event__newsletter__bg">
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="event__newsletter__text">
                        <h2 class="mb-0">We're Here to Help
                            Reach Out to Us Today 
                            And Join Our Event
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event__newsletter__contact">
                        
                        <div class="contact__method">
                            <span class="h6">Reservation By Phone</span>
                            <a href="callto:121"><i class="flaticon-phone-flip"></i>+12505550199</a>
                        </div>

                        <div class="contact__method">
                            <span class="h6">Reservation By Email</span>
                            <a href="mailto:example@example.com"><img src="{{asset('assets/images/icon/mail.svg')}}" alt="">moonlit@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event newsletter end -->

    <!-- service -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__head text-center mb-40">
                        <h2 class="section__title">why choose our events</h2>
                    </div>
                </div>
            </div>
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
                            <img height="40" width="40" src="{{asset('assets/images/icon/bed.svg')}}" alt="">
                        </div>
                        <a href="#" class="h6">Quality Room</a>
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
                    
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    @include('Frontend.Footer.footer__common')
@endsection
