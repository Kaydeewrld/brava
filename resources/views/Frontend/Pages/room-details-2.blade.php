@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "About Us";
        $desc = "Welcome to Bokinn, where luxury meets comfort in the heart of canada.";
    @endphp
    @include('Frontend.Components.page-hero-no-text',compact('title','desc'))
    <!-- room details two top -->
    <div class="rts__section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="room__details__top">
                        <span class="h2 price">122$</span>
                        <h1>Executive Room</h1>
                        <div class="room__meta">
                            <span><i class="flaticon-construction"></i>35 sqm</span>
                            <span><i class="flaticon-user"></i>5 Person</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- room details two top end -->

    <!-- room details area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-5 sticky-wrap">
                <div class="col-lg-8">
                    <div class="room__details">    
                        <h4 class="mb-30">Room Description</h4>                    
                        <p>
                            Our elegantly appointed rooms and suites are designed to offer the utmost in comfort and
                            style. Each room features modern amenities, plush furnishings, and thoughtful touches to
                            ensure a relaxing stay.
                            <br> <br>
                            Indulge in a culinary journey at our on-site restaurants, where our talented chefs create
                            mouthwatering dishes using the freshest local ingredients. Start your day with a sumptuous
                            breakfast, enjoy a leisurely lunch, and savor a gourmet dinner in an elegant setting.
                        </p>
                        <h4 class="mb-40">Room Video</h4>
                        
                        <div class="video__area mb-50 position-relative wow fadeInUp">
                            <div class="video__area__image is__room__details jara-mask-2 jarallax">
                                <img class="radius-10 jarallax-img" src="{{asset('assets/images/pages/video-bg.webp')}}" alt="">
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
                        
                        <span class="h4 d-block mb-30">Room Amenities</span>
                        <div class="room__amenity mb-50">
                            <div class="group__row if__room__details__two">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/wifi.svg')}}" height="30" width="36" alt="">
                                    <span>Free Wifi</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/shower.svg')}}" height="30" width="36" alt="">
                                    <span>Shower</span>
                                </div>
                            </div>
                            <div class="group__row if__room__details__two">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/aeroplane.svg')}}" height="30" width="36" alt="">
                                    <span>Airport transport</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/balcony.svg')}}" height="30" width="36" alt="">
                                    <span>Balcony</span>
                                </div>
                            </div>
                            <div class="group__row if__room__details__two">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/refrigerator.svg')}}" height="30" width="36" alt="">
                                    <span>Refrigerator</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/support.svg')}}" height="30" width="36" alt="">
                                    <span>24/7 Support</span>
                                </div>
                            </div>
                            <div class="group__row if__room__details__two">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/desk.svg')}}" height="30" width="36" alt="">
                                    <span>Work Desk</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/fitness.svg')}}" height="30" width="36" alt="">
                                    <span>Fitness Center</span>
                                </div>
                            </div>

                        </div>
                        <span class="h4 d-block mb-50">Room Features</span>
                        <div class="room__feature mb-20">
                            <div class="room__image__group row row-cols-md-2 row-cols-sm-1 mt-30 mb-50 gap-4 gap-md-0">
                                <div class="room__image__item">
                                    <img class="rounded-2" src="{{asset('assets/images/pages/room/r-d-1.webp')}}" alt="">
                                </div>
                                <div class="room__image__item">
                                    <img class="rounded-2" src="{{asset('assets/images/pages/room/r-d-2.webp')}}" alt="">
                                </div>
                            </div>
                            <div class="group__row is__room__details">
                                <ul class="list__item">
                                    <li>Children and extra beds</li>
                                    <li>Climate Control</li>
                                </ul>
                                <ul class="list__item">
                                    <li>Art and Decor</li>
                                    <li>Coffee/Tea Maker</li>
                                </ul>
                                <ul class="list__item">
                                    <li>High-End Bedding</li>
                                    <li>Smart Technology</li>
                                </ul>
                            </div>
                        </div>
                        <p>Our elegantly appointed rooms and suites are designed to offer the utmost in comfort and style. Each room features modern amenities, plush furnishings, and thoughtful touches to ensure a relaxing stay.</p>
                    </div>
                </div>
                <div class="col-lg-4 sticky-item">
                    <div class="rts__booking__form has__background is__room__details">
                        <form action="#" method="post" class="advance__search">
                            <h5 class="pt-0">Book Your Stay</h5>
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

                                <!-- single input -->
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="room" class="query__label">Room</label>
                                    <div class="query__input__position">
                                        <select name="room" id="room" class="form-select">
                                            <option value="1">1 Room</option>
                                            <option value="2">2 Room</option>
                                            <option value="3">3 Room</option>
                                            <option value="4">4 Room</option>
                                            <option value="5">5 Room</option>
                                        </select>
                                        <div class="query__input__icon is__svg">
                                            <img src="{{asset('assets/images/icon/room.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->
                                <!-- single input -->
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="exbed" class="query__label">Extra Bed</label>
                                    <div class="query__input__position">
                                        <select name="exbed" id="exbed" class="form-select">
                                            <option value="1">1 Bed</option>
                                            <option value="2">2 Bed</option>
                                            <option value="3">3 Bed</option>
                                            <option value="4">4 Bed</option>
                                        </select>
                                        <div class="query__input__icon is__svg">
                                            <img src="{{asset('assets/images/icon/bed-alt.svg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- single input end -->



                                <h5 class="p-0 mt-20">Extra Services</h5>

                                <!-- checkbox item -->
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="clean" id="clean">
                                    <label for="clean">Room Clean</label>
                                    <span>$12 / Night</span>
                                </div>
                                <!-- checkbox item end -->
                                <!-- checkbox item -->
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="parking" id="parking">
                                    <label for="parking">Parking</label>
                                    <span>Free</span>
                                </div>
                                <!-- checkbox item end -->
                                <!-- checkbox item -->
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="transport" id="transport">
                                    <label for="transport">Airport transport</label>
                                    <span>$30 / Night</span>
                                </div>
                                <!-- checkbox item end -->
                                <!-- checkbox item -->
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="pet" id="pet">
                                    <label for="pet">Pet-Friendly</label>
                                    <span>$40 / Night</span>
                                </div>
                                <!-- checkbox item end -->
                                 <!-- calculation -->
                                  <div class="total__price">
                                    <span class="total h6 mb-0">Total Price</span>
                                    <span class="price h6 m-0">$82</span>
                                  </div>
                                 <!-- calculation end -->
                                <!-- submit button -->
                                <button class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
                                    <span>Book Your Room</span>
                                </button>
                                <!-- submit button end -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- room details area end -->

    <!-- similar room area -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Similar Rooms";
                        $title = "Similar Rooms";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))

                </div>
            </div>
            <div class="row g-30">
                <div class="col-lg-6 col-xl-4 col-md-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "120$";
                        $title = "Executive Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    @php 
                        $thumb = "2.webp";
                        $price = "140$";
                        $title = "Single Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    @php 
                        $thumb = "3.webp";
                        $price = "122$";
                        $title = "Tripple Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
            </div>
        </div>
    </div>
    <!-- similar room area end -->

    @include('Frontend.Footer.footer__common')
@endsection
