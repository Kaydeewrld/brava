@extends('Frontend.Layouts.app')
@section('page_title', 'Room Style Two Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Deluxe Room";
        $desc = "A step up from the standard room, often with better views, more space, and additional amenities.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- single rooms -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30 main__content sticky-wrap">
                <div class="col-xl-8 col-lg-7 order-2 order-lg-1">
                    <!-- row -->
                    <div class="row g-30">
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            @php 
                                $thumb = "1.webp";
                                $price = "120$";
                                $title = "Deluxe Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                           
                            @php 
                                $thumb = "2.webp";
                                $price = "130$";
                                $title = "Single Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            @php 
                                $thumb = "3.webp";
                                $price = "140$";
                                $title = "Tripple Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            @php 
                                $thumb = "4.webp";
                                $price = "120$";
                                $title = "Connecting Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            @php 
                                $thumb = "5.webp";
                                $price = "120$";
                                $title = "Accessible Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                        <!-- single room -->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            @php 
                                $thumb = "6.webp";
                                $price = "130$";
                                $title = "Double Room";
                            @endphp
                            @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                        </div>
                        <!-- single room end -->
                    </div>
                    <!-- row end -->
                    <div class="load__more__link">
                       <a href="#">Load More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0 sticky-item">
                    <div class="rts__booking__form has__background no__shadow">
                        <form action="#" method="post" class="advance__search">
                            <h5>Book Your Stay</h5>
                            <div class="advance__search__wrapper">
                                <!-- single input -->
                                <div class="query__input wow fadeInUp">
                                    <label for="check__in" class="query__label">Check In</label>
                                    <div class="query__input__position">
                                        <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                                        <div class="query__input__icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->
            
                                    <!-- single input -->
                                <div class="query__input wow fadeInUp" data-wow-delay=".3s">
                                    <label for="check__out" class="query__label">Check Out</label>
                                    <div class="query__input__position">
                                        <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                                        <div class="query__input__icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->
                
                                <!-- single input -->
                                <div class="query__input wow fadeInUp" data-wow-delay=".4s">
                                    <label for="adult" class="query__label">Adult</label>
                                    <div class="query__input__position">
                                        <select name="adult" id="adult" class="form-select">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Person</option>
                                            <option value="3">3 Person</option>
                                            <option value="4">4 Person</option>
                                            <option value="5">5 Person</option>
                                            <option value="6">6 Person</option>
                                            <option value="7">7 Person</option>
                                        </select>
                                        <div class="query__input__icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->
                
                                <!-- single input -->
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="child" class="query__label">Child</label>
                                    <div class="query__input__position">
                                        <select name="child" id="child" class="form-select">
                                            <option value="1">1 Child</option>
                                            <option value="2">2 Child</option>
                                            <option value="3">3 Child</option>
                                            <option value="4">4 Child</option>
                                            <option value="5">5 Child</option>
                                            <option value="6">6 Child</option>
                                            <option value="7">7 Child</option>
                                        </select>
                                        <div class="query__input__icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->
                                <!-- submit button -->
                                <button class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
                                    <span><i class="flaticon-search-1"></i> Search</span>
                                </button>
                                <!-- submit button end -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single rooms end -->


    <!-- client testimonial  -->
    <div class="rts__section testimonial has__shape is__home__four pb-120">
        <div class="section__shape">
            <img src="{{asset('assets/images/about/section__shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row g-30">
                <div class="col-lg-5">
                    <div class="testimonial__left">
                        @php
                            $title = "Testimonial";
                            $bigTitle = "What Our Client Say About Us";
                        @endphp
                        @include('Frontend.Components.sec-top-3',compact('title','bigTitle'))
                        <div class="applicant__list mt-40">
                            <div class="single__list">
                                <img src="{{asset('assets/images/author/3.webp')}}" alt="">
                            </div>
                            <div class="single__list">
                                <img src="{{asset('assets/images/author/4.webp')}}" alt="">
                            </div>
                            <div class="single__list">
                                <img src="{{asset('assets/images/author/5.webp')}}" alt="">
                            </div>
                            <div class="single__list">
                                <img src="{{asset('assets/images/author/6.webp')}}" alt="">
                                <div class="icon-plus">+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__slider__style__two">
                        <div class="testimonial__slider overflow-hidden">
                            <div class="swiper-wrapper">
                                <!-- single testimonialial -->
                                <div class="swiper-slide">
                                    <div class="testimonial__item__content">
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
                                <!-- single testimonial end -->
                                <!-- single testimonialial -->
                                <div class="swiper-slide">
                                    <div class="testimonial__item__content">
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
                                <!-- single testimonial end -->
                                <!-- single testimonialial -->
                                <div class="swiper-slide">
                                    <div class="testimonial__item__content">
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
                                <!-- single testimonial end -->
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
