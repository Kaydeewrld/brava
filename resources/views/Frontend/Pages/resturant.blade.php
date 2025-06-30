@extends('Frontend.Layouts.app')
@section('page_title', 'Resturant Page Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "The Resturant";
        $desc = "Whether you are in the mood for a leisurely breakfast, a business lunch, or a romantic dinner.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))
    
    <!-- about us -->
    <div class="rts__section about is__resturant section__padding">
        <div class="container">
            <div class="row g-4 align-items-center  ">
                <div class="col-lg-5">
                    <div class="about__images">
                        <div class="image__left wow fadeInUp">
                            <img height="648" width="428" src="{{asset('assets/images/pages/resturant/1.webp')}}" alt="">
                        </div>
                        <div class="image__right wow fadeInUp">
                            <img width="428" height="648" src="{{asset('assets/images/pages/resturant/2.webp')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Hotel Experience</span>
                        <h2 class="font-xl wow fadeInUp">Freshly Sourced, Expertly Prepared: A Taste of Nigeria and Beyond at Brava</h2>
                        <p class="font-sm mt-30 wow fadeInUp" data-wow-delay=".3s">
                            Welcome to Brava, where luxury meets comfort. Since 2012, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.
                        </p>
                        <div class="reservation__meta wow fadeInUp">
                            <div class="reservation__item">
                                <p class="font-sm">Reservation By Phone</p>
                                <a href="tel:+2347047000608"><img src="{{asset('assets/images/icon/phone.svg')}}" alt=""> +2347047000608</a>
                            </div>
                            <div class="reservation__item">
                                <p class="font-sm">Opening Hours</p>
                                <span><img src="{{asset('assets/images/icon/clock.svg')}}" alt="">10 Am - 12Pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- restaurant room -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                    
                    @php 
                        $top = "Gallery";
                        $title = "Our Restaurant Gallery";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                    <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest Each room features plush bedding.</p>
                </div>
            </div>
            <div class="row g-30 gallery">
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/1.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/1.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/2.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/2.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/3.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/3.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/4.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/4.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/5.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/5.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant room end -->

    <!-- restaurant menu -->
    <div class="rts__section resturant__menu__bg section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Menu</span>
                        <h2 class="content__title h2 lh-1">Restaurant Menu</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="resturant__menu__list">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Breakfast</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cold" aria-controls="cold">Appetizers</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegan" aria-controls="vegan">Buffets</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#burger" type="button" role="tab" aria-controls="burger" aria-selected="true">Pasta & Rice</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dips" aria-controls="dips">Grill & Platters</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seafood" aria-controls="seafood">Seafood Dishes</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#local" aria-controls="local">Local Dishes</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#side" aria-controls="side">Sides</button>
                        </div>
                    </div>
                    <!-- resturant menu content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/scrambled.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Scrambled Egg</a>
                                                <span class="h6">7,500</span>
                                            </div>
                                            <span>Fluffy eggs, served with bread or yam.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/omelette.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Omelette</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Egg omelette with optional veggies or sausage.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/yam-egg.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  " class="h6"> Yam & Egg</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Boiled yam served with tasty egg sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/cereal.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Cereal with milk</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Choice of cereal with cold or warm milk and sugar.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/toast.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Toasted Bread</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Sliced bread served with sausage and butter.</span>08101220378
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/akara.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6"> Akara & Moi-Moi </a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Choose between bean cakes (akara) .</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fish-stew.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Fish Sauce with Side</a>
                                                <span class="h6">₦10,000</span>
                                            </div>
                                            <span>Spicy fish sauce with your choice of bread or tubers.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/oats.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6"> Oats </a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Flaky pastry stuffed with minced beef</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="cold"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/turkey-gizzard.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Turkey Gizzard	</a>
                                                <span class="h6">₦7000</span>
                                            </div>
                                            <span>Peppered turkey gizzard pieces.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pepper-beef.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Peppered Beef</a>
                                                <span class="h6">₦7000</span>
                                            </div>
                                            <span>Tender beef in a rich pepper sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/asun.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Peppered Goat </a>
                                                <span class="h6">₦8000</span>
                                            </div>
                                            <span>Spicy diced goat meat.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/chicken-wings.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Chicken Wings</a>
                                                <span class="h6">₦8,000</span>
                                            </div>
                                            <span>Grilled chicken wings in suya or spicy sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                          
                                 
                            </div></div>
                        <div class="tab-pane fade" id="vegan" role="tabpanel" aria-labelledby="vegan"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/buffer.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6"> Breakfast Buffet	</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>A selection of International & Local Breakfast favorites	</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/asaro.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Brunch Buffet	</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>A selection of International & Local Brunch favorites</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                              
                            </div></div>
                        <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/stir-fry.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Stir Fried Spaghetti with Plantain</a>
                                                <span class="h6">₦14,000</span>
                                            </div>
                                            <span>Spaghetti stir-fried with veggies, plantain, and your protein of choice.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/jlf.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Jollof Rice with Plantain or Coleslaw</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>Classic Nigerian Jollof rice with plantain or coleslaw, plus protein.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/noodles.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Noodles with Boiled/Fried Eggs</a>
                                                <span class="h6">₦7,000</span>
                                            </div>
                                            <span>Instant noodles served with eggs and sausage.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/white.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">White Rice, Beans, Plantain, Boiled Egg, Chicken </a>
                                                <span class="h6">₦17,000</span>
                                            </div>
                                            <span>A hearty combo of rice, beans, plantain, egg, chicken and native sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fried-rice.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Special Fried Rice with Plantain or Coleslaw</a>
                                                <span class="h6">₦16,000</span>
                                            </div>
                                            <span>Fried rice with veggies and your protein choice, plus plantain or coleslaw.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/white.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">White Rice with Plantain and Sauce</a>
                                                <span class="h6">₦13,000</span>
                                            </div>
                                            <span>Steamed rice served with plantain and a savory sauce plus protein.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div></div>
                            <div class="tab-pane fade" id="dips" role="tabpanel" aria-labelledby="dips"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/catfish.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">BBQ Catfish</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>Honey Glazed, Spicy or Ketchup, with French Fries & Coleslaw</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/bbq-turkey.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">BBQ Turkey</a>
                                                <span class="h6">₦14,000</span>
                                            </div>
                                            <span>Honey Glazed, Spicy or Ketchup, with French Fries & Coleslaw</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/bbq-chicken.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">BBQ Chicken</a>
                                                <span class="h6">₦13000</span>
                                            </div>
                                            <span>Honey Glazed, Spicy or Ketchup, with French Fries & Coleslaw</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/plan.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Grilled Plantain with Sauce</a>
                                                <span class="h6">₦3,000</span>
                                            </div>
                                            <span>Grilled ripe or unripe plantains, served with spicy sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/platter.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">King’s Platter</a>
                                                <span class="h6">₦60,000</span>
                                            </div>
                                            <span>Chicken, fries, gizzard, sausage, plantain, wings, snail, asun, and sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/platters.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Queen’s Platter</a>
                                                <span class="h6">₦55,000</span>
                                            </div>
                                            <span>Turkey wings, fries, gizzard, plantain, wings, sausage, snail, asun, and sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/platterss.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Prince’s Platter</a>
                                                <span class="h6">₦50,000</span>
                                            </div>
                                            <span>Mixed fish, fries, gizzard, sausage, plantain, wings, snail, asun, and sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/plater.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Emperor’s Platter</a>
                                                <span class="h6">₦120,000</span>
                                            </div>
                                            <span>Tiger/jumbo prawns, suya, snail, fries, gizzard, sausage, plantain, wings, and sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="seafood" role="tabpanel" aria-labelledby="seafood"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/spag.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Seafood Pasta</a>
                                                <span class="h6">₦18,000</span>
                                            </div>
                                            <span>Pasta cooked with mixed seafood in a creamy sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/seafoodo.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Seafood Okra Soup</a>
                                                <span class="h6">₦23,000</span>
                                            </div>
                                            <span>With Prawns, Shrimps & Fish, with Choice of Swallow</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/seafood.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Seafood Okra</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>With Shrimps & Fish, with Choice of Swallow</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/seafood-jollof.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Seafood Jollof Rice</a>
                                                <span class="h6">₦12,500</span>
                                            </div>
                                            <span>Flavored jollof rice with prawns, calamari & grilled fish fillet</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                           </div></div>
                            <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/abula.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Swallow & Soup with Protein </a>
                                                <span class="h6">₦12,500</span>
                                            </div>
                                            <span>(Eba, Amala, Poundo, Semo).</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fufu.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Swallow & Soup with Protein (Fufu)</a>
                                                <span class="h6">₦10,500</span>
                                            </div>
                                            <span>Fufu with rich soup and choice protein.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/poundo.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a class="h6">Swallow & Soup with Protein (Pounded Yam)</a>
                                                <span class="h6">₦14,500</span>
                                            </div>
                                            <span>Pounded yam with any Nigerian soup and protein.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/asaro.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Asaro/Yam Porridge</a>
                                                <span class="h6">₦12,000</span>
                                            </div>
                                            <span>Yam porridge with your protein choice, in tomato-pepper sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/isi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Isi Ewu</a>
                                                <span class="h6">₦20,000</span>
                                            </div>
                                            <span>Spicy goat head delicacy.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/wobi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Nkwobi</a>
                                                <span class="h6">₦20,000</span>
                                            </div>
                                            <span>Cow foot in spicy palm oil sauce.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/isi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Chicken Isi Ewu</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>Spicy goat head delicacy.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/wrap.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Extra Wraps</a>
                                                <span class="h6">₦1,000-₦5,000</span>
                                            </div>
                                            <span>Eba, Amala, Poundo, Semo, Fufu Pounded Yam </span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                
                          </div></div>
                            <div class="tab-pane fade" id="side" role="tabpanel" aria-labelledby="side"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/beef.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Beef</a>
                                                <span class="h6">₦3,000</span>
                                            </div>
                                            <span>Tender beef pieces.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fried.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a  class="h6">Special Fried Rice</a>
                                                <span class="h6">₦5,000</span>
                                            </div>
                                            <span>Savory fried rice with mixed veggies.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/jollof.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Jollof Rice</a>
                                                <span class="h6">₦4,500</span>
                                            </div>
                                            <span>Nigerian party-style jollof rice.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/native.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a   class="h6">Native Rice </a>
                                                <span class="h6">₦5,000</span>
                                            </div>
                                            <span>Smoky, traditional Nigerian native rice.</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
  <!-- single menu item -->
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/coconut.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Coconut Rice</a>
        <span class="h6">₦5,000</span>
      </div>
      <span>Fragrant coconut-infused rice.</span>
    </div>
  </div>
  <!-- single menu item end -->
  <!-- single menu item -->
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/white.webp')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Rice & Beans</a>
        <span class="h6">₦5,000</span>
      </div>
      <span>Combination of rice and beans, lightly spiced.</span>
    </div>
  </div>
  <!-- single menu item end -->
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/spag.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Jollof Spaghetti</a>
        <span class="h6">₦4,500</span>
      </div>
      <span>Pasta in rich tomato-based jollof sauce.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/spag.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Stir Fried Spaghetti</a>
        <span class="h6">₦5,500</span>
      </div>
      <span>Stir-fried pasta with veggies and light sauce.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/gizzard.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Gizzard</a>
        <span class="h6">₦7,000</span>
      </div>
      <span>Peppered chicken gizzards.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/cow-leg.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Cow Leg</a>
        <span class="h6">₦7,000</span>
      </div>
      <span>Stewed cow leg pieces.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/cowtail.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Cow Tail</a>
        <span class="h6">₦7,000</span>
      </div>
      <span>Rich, tender cow tail stew.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/goat.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Goat Meat</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>Juicy, spicy goat meat.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/chickenn.webp')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Chicken</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>Fried or stewed chicken.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/assorted.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Assorted</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>Mix of meats (beef, tripe, shaki, etc).</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/turkey.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Turkey</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>Well-seasoned turkey pieces.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/salad.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Chicken & Vegetables Salad</a>
        <span class="h6">₦5,000</span>
      </div>
      <span>Chicken tossed with fresh veggies and creamy dressing.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/corn.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Sweet Corn (4 Pcs)</a>
        <span class="h6">₦3,000</span>
      </div>
      <span>Boiled or grilled sweet corn on the cob.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/fries.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">French Fries</a>
        <span class="h6">₦4,000</span>
      </div>
      <span>Crispy golden fries.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/friesy.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Yam Fries</a>
        <span class="h6">₦3,000</span>
      </div>
      <span>Fried yam chips.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/coleslaw.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a class="h6">Coleslaw</a>
        <span class="h6">₦3,000</span>
      </div>
      <span>Creamy coleslaw salad.</span>
    </div>
  </div>
</div>

<!-- FISH & PEPPER SOUP -->

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/croaker.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Croaker fish</a>
        <span class="h6">₦9,000</span>
      </div>
      <span>Lightly spiced fish pepper soup.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/hake.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Hake fish</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>White fish, mild flavor, pepper soup.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/redpacu.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a class="h6">Red pacu fish</a>
        <span class="h6">₦12,000</span>
      </div>
      <span>Rich, meaty pacu fish in pepper soup.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/tilapia.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Tilapia fish</a>
        <span class="h6">₦8,000</span>
      </div>
      <span>Tilapia fish, peppery broth.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/catfish.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Cat fish</a>
        <span class="h6">₦7,000</span>
      </div>
      <span>Catfish, traditional pepper soup style.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/peppersoup.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Pepper soup goatmeat</a>
        <span class="h6">₦9,000</span>
      </div>
      <span>Peppered goat meat soup.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/catfishsoup.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a  class="h6">Pepper soup catfish</a>
        <span class="h6">₦9,000</span>
      </div>
      <span>Catfish, cooked in spicy soup.</span>
    </div>
  </div>
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/catfishsoup.jpg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Pepper soup tilapia</a>
        <span class="h6">₦9,000</span>
      </div>
      <span>Tilapia in spicy, herbal broth.</span>
    </div>
  </div>
</div>

<div class="single__menu__item__list">
  <div class="single__menu__item">
    <div class="menu__thumb">
      <img height="78" width="78" src="{{asset('assets/images/peppersoup.jpeg')}}" alt="">
    </div>
    <div class="menu__meta">
      <div class="menu__link__price">
        <a   class="h6">Pepper soup assorted</a>
        <span class="h6">₦9,000</span>
      </div>
      <span>Mix of meats, in rich pepper soup.</span>
    </div>
  </div>
</div>

                            </div>
                                  
                            </div>
                        </div>
                    </div>
                    <!-- resturant menu content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant menu end -->

    <!-- client testimonial  -->
  <div class="rts__section resturant__menu__bg section__padding">
    <div class="container">
        <div class="row">
            <div class="section__wrapper mb-40 wow fadeInUp">
                <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Bar Menu</span>
                    <h2 class="content__title h2 lh-1">Bar & Drinks</h2>
                </div>
                <div class="section__content__right">
                    <p>Discover our wide selection of classic cocktails, beers, wines, spirits, and signature non-alcoholic creations. Cheers to a great time at Brava!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="resturant__menu__list">
                    <div class="nav nav-tabs" id="nav-tab-bar" role="tablist">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bar-all" type="button" role="tab" aria-controls="bar-all" aria-selected="true">Cocktails
</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-cold" type="button" role="tab" aria-controls="bar-cold" aria-selected="false">Mocktails
</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-vegan" type="button" role="tab" aria-controls="bar-vegan" aria-selected="false">Beers & Ciders</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-burger" type="button" role="tab" aria-controls="bar-burger" aria-selected="false">Energy Drinks</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-dips" type="button" role="tab" aria-controls="bar-dips" aria-selected="false">Wines</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-seafood" type="button" role="tab" aria-controls="bar-seafood" aria-selected="false">Champagne</button>
                    </div>
                </div>
                <!-- bar menu content -->
                <div class="tab-content" id="nav-tabContent-bar">
                    <!-- Classic Cocktails -->
                   <div class="tab-pane fade show active" id="bar-all" role="tabpanel" aria-labelledby="bar-all">
    <div class="all__menu__list">
        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/longisland.jpg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a  class="h6">Long Island Tea</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Vodka, gin, rum, tequila, triple sec, citrus, cola.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/sex.jpeg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a   class="h6">Sex on The Beach</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Vodka, peach schnapps, orange juice, cranberry.</span>
                </div>
            </div>
        </div>
        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/margarita.jpg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a   class="h6">Margarita</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Tequila, triple sec, lime juice, served on the rocks.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/daiquiri.jpg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a  class="h6">Daiquiri</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Rum, lime juice, sugar, served frozen or shaken.</span>
                </div>
            </div>
        </div>
        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/mojito1.webp')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Mojito</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Rum, lime, mint leaves, soda, and sugar.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/sunrise.webp')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a  class="h6">Tequila Sunrise</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Tequila, orange juice, grenadine syrup.</span>
                </div>
            </div>
        </div>
        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/twistedchapman.jpg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a  class="h6">Twisted Chapman</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Chapman with an alcoholic twist—bitters, citrus, grenadine, spirits.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/passion.jpeg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Passion Sunrise</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Passion fruit, citrus, grenadine, spirits.</span>
                </div>
            </div>
        </div>
        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/collins.jpeg')}}" alt="">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a   class="h6">Passion Collins</a>
                        <span class="h6">₦8,000</span>
                    </div>
                    <span>Passion fruit, lemon juice, soda, spirits.</span>
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- Beers & Ciders -->
                    <div class="tab-pane fade" id="bar-cold" role="tabpanel" aria-labelledby="bar-cold">
                        <div class="all__menu__list">
                          <div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/mojito.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Mojito (Mocktail)</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Mint, lime, soda, and sugar. Refreshing & alcohol-free.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/wiselady.jpeg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a  class="h6">Wise Lady</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Exotic blend of fruit juices, sweet and tangy.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/blue.webp')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Blue Slush</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Blue curacao syrup, lemon, soda, crushed ice.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/colada.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Virgin Colada</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Pineapple, coconut cream—classic piña colada, no alcohol.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/redsea.jpeg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Red Sea</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Fruit punch, grenadine, citrus, and soda.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/chapmanmocktail.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Chapman (Mocktail)</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Nigerian classic: bitters, grenadine, citrus, soda (no alcohol).</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/lavender.webp')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a  class="h6">Cloudy Lavender</a>
                <span class="h6">₦7,000</span>
            </div>
            <span>Lavender syrup, citrus, soda, sweet and floral.</span>
        </div>
    </div>
</div>


                          
                        </div>
                    </div>
                    <!-- Wines & Champagne -->
                    <div class="tab-pane fade" id="bar-vegan" role="tabpanel" aria-labelledby="bar-vegan">
                        <div class="all__menu__list">
                          <div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/heineken.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a href="#" class="h6">Heineken (33cl)</a>
                <span class="h6">₦2,500</span>
            </div>
            <span>Premium Dutch lager, crisp and refreshing.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/star.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a  class="h6">Star (60cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Nigeria’s classic lager, smooth and light.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/gulder.webp')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a  class="h6">Gulder (60cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Bold and full-flavored Nigerian beer.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/origin.webp')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Orijin (60cl)</a>
                <span class="h6">₦2,500</span>
            </div>
            <span>Herbal bitters lager, bold and unique.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/origin.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Orijin (Can, 33cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Bittersweet herbal blend, canned version.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/legend.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Legend Stout (60cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Rich and dark Nigerian stout.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/tiger.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Tiger Beer (45cl)</a>
                <span class="h6">₦2,500</span>
            </div>
            <span>Asian lager, smooth and balanced.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/desperados.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Desperados (33cl)</a>
                <span class="h6">₦3,000</span>
            </div>
            <span>Tequila-flavored beer, lively and unique.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/smirnoff.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Smirnoff Ice Apple (33cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Apple-infused malt drink, crisp and cool.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/smirnoff.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Smirnoff Ice (66cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Classic Smirnoff malt, lemony and light.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/acepineapple.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Ace Pineapple (33cl)</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Pineapple cider, sweet and fruity.</span>
        </div>
    </div>
    <!-- If you want to add another cider, do so here; if not, this list stands alone. -->
</div>

                        </div>
                    </div>
                    <!-- Spirits & Liqueurs -->
                    <div class="tab-pane fade" id="bar-burger" role="tabpanel" aria-labelledby="bar-burger">
                        <div class="all__menu__list">
                          <div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/redbull.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Red Bull</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Classic energy boost, lightly carbonated.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/powerhorse.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Power Horse</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Popular energy drink for quick recharge.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/monster.webp')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Monster Energy</a>
                <span class="h6">₦2,500</span>
            </div>
            <span>Strong, bold flavor for lasting energy.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/climax.png')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Climax</a>
                <span class="h6">₦2,000</span>
            </div>
            <span>Refreshing drink, helps boost your stamina.</span>
        </div>
    </div>
</div>

                        </div>
                    </div>
                    <!-- Mocktails & Smoothies -->
                   <div class="tab-pane fade" id="bar-dips" role="tabpanel" aria-labelledby="bar-dips">
    <div class="all__menu__list">

        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/bgred.webp')}}" alt="B&G Red">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">B&amp;G (Red)</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Classic red wine, smooth and rich flavor.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/blue-nun.jpg')}}" alt="Blue Nun Pink Ice">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Blue Nun Pink Ice</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Refreshing pink sparkling wine, lightly sweet.</span>
                </div>
            </div>
        </div>

        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/carlo-rossi.jpg')}}" alt="Carlo Rossi Red">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Carlo Rossi (Red)</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Fruity and vibrant California red wine.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/chamdor.webp')}}" alt="Chamdor">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Chamdor</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Non-alcoholic sparkling grape juice, crisp and sweet.</span>
                </div>
            </div>
        </div>

        <div class="single__menu__item__list">
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/four-cousin.jpg')}}" alt="Four Cousin White">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Four Cousin (White)</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Sweet, lively South African white wine.</span>
                </div>
            </div>
            <div class="single__menu__item">
                <div class="menu__thumb">
                    <img height="78" width="78" src="{{asset('assets/images/four-cousin.jpg')}}" alt="Four Cousin Red">
                </div>
                <div class="menu__meta">
                    <div class="menu__link__price">
                        <a class="h6">Four Cousin (Red)</a>
                        <span class="h6">₦25,000</span>
                    </div>
                    <span>Rich, fruity South African red wine.</span>
                </div>
            </div>
        </div>

    </div>
</div>

                    <!-- Specialty Shots -->
                    <div class="tab-pane fade" id="bar-seafood" role="tabpanel" aria-labelledby="bar-seafood">
                        <div class="all__menu__list">
                           <div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/moet.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Moët & Chandon</a>
                <span class="h6">₦250,000</span>
            </div>
            <span>Iconic French champagne, crisp and elegant.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/belaire.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a  class="h6">Belaire</a>
                <span class="h6">₦150,000</span>
            </div>
            <span>Premium sparkling wine, smooth and lively bubbles.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/martinirosso.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Martini Rose</a>
                <span class="h6">₦40,000</span>
            </div>
            <span>Delicate Italian sparkling rosé, floral and fruity.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/brut.jpeg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Martini Brut</a>
                <span class="h6">₦35,000</span>
            </div>
            <span>Classic brut, dry and refreshing.</span>
        </div>
    </div>
</div>
<div class="single__menu__item__list">
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/andre.jpg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a class="h6">Andre Rose</a>
                <span class="h6">₦45,000</span>
            </div>
            <span>Soft sparkling rosé, fresh and lightly sweet.</span>
        </div>
    </div>
    <div class="single__menu__item">
        <div class="menu__thumb">
            <img height="78" width="78" src="{{asset('assets/images/andreb.jpeg')}}" alt="">
        </div>
        <div class="menu__meta">
            <div class="menu__link__price">
                <a   class="h6">Andre Brut</a>
                <span class="h6">₦40,000</span>
            </div>
            <span>Light, crisp, and great for celebrations.</span>
        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
                <!-- bar menu content end -->
            </div>
        </div>
    </div>
</div>

    <!-- client testimonial  end -->

    @include('Frontend.Footer.footer__common')
@endsection
