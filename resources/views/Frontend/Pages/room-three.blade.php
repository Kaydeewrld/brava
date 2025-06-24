@extends('Frontend.Layouts.app')
@section('page_title', 'Room Style Three Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Deluxe Room";
        $desc = "A step up from the standard room, often with better views, more space, and additional amenities.";
    @endphp
    @include('Frontend.Components.page-hero-with-search',compact('title','desc'))

    <!-- single rooms -->
    <div class="rts__section section__padding">
        <div class="container">
            <!-- row -->
            <div class="row g-30">
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "120$";
                        $title = "Deluxe Room";
                        $desc = "A step up from the standard room, often with better views, more space, and additional amenities.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "2.webp";
                        $price = "140$";
                        $title = "Single Room";
                        $desc = "A step up from the standard room, often with better views, more space, and additional amenities.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "3.webp";
                        $price = "122$";
                        $title = "Tripple Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "4.webp";
                        $price = "120$";
                        $title = "Connecting Room";
                        $desc = "Designed for business travelers, these rooms usually have additional workspaces and business amenities.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "5.webp";
                        $price = "120$";
                        $title = "Accessible Room";
                        $desc = "A larger room or a series of connected rooms, often with separate living and sleeping areas. Types of suites include.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    @php 
                        $thumb = "6.webp";
                        $price = "130$";
                        $title = "Double Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card-three',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
            </div>
            <!-- row end -->
            <div class="load__more__link">
                <a href="#">Load More</a>
            </div>
        </div>
    </div>
    <!-- single rooms end -->

    <!-- client testimonial  -->
    <div class="rts__section testimonial is__home__five pb-120">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Testimonial";
                        $title = "What Our Client Say";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                </div>
            </div>
            <div class="row justify-content-between align-items-center position-relative">
                <div class="col-lg-8">
                    <div class="testimonial__item__content  tm__slider__five">
                        <div class="swiper-wrapper">
                            <!-- single slide -->
                            <div class="swiper-slide">
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
                                                <h6 class="mb-0">Al Amin Khan</h6>
                                                <span>COO of Apex Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                            <!-- single slide -->
                            <div class="swiper-slide">
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
                                                <span>Fortune It Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-end justify-content-md-start">
                    <div class="testimonial__slider__style__three">
                        <div class="testimonial__author is__thumb overflow-hidden">
                            <div class="swiper-wrapper">
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial__author__image">
                                        <img width="265" height="285" src="{{asset('assets/images/author/author-2x.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- single slide end -->

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial__author__image">
                                        <img width="265" height="285" src="{{asset('assets/images/author/author-4.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- single slide end -->

                            </div>
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
            </div>
        </div>
    </div>
    <!-- client testimonial  end -->
    @include('Frontend.Footer.footer__common')
@endsection
