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
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Small Plates</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cold" aria-controls="cold">Main Course</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegan" aria-controls="vegan">Vegetarian & Vegan</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#burger" type="button" role="tab" aria-controls="burger" aria-selected="true">Burgers & Sandwiches</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dips" aria-controls="dips">Sides</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seafood" aria-controls="seafood">Seafood Specialties</button>
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
                                            <img height="78" width="78" src="{{asset('assets/images/chicken suya.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Suya Spiced Chicken Wings</a>
                                                <span class="h6">₦8,000</span>
                                            </div>
                                            <span>Grilled wings with Nigerian suya pepper rub</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/asun.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Asun (Peppered Goat Meat)</a>
                                                <span class="h6">₦9,000</span>
                                            </div>
                                            <span>Spicy diced goat meat</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/puff.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Puff Puff & Pepper Sauce</a>
                                                <span class="h6">₦4,000</span>
                                            </div>
                                            <span>Sweet balls & spicy dip</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/gizdodo.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Peppered Fry Giz-dodo Cup</a>
                                                <span class="h6">₦6,000</span>
                                            </div>
                                            <span>Gizzard & plantain stir fry in pepper sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fishroll.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Fish Roll Bites</a>
                                                <span class="h6">₦4,500</span>
                                            </div>
                                            <span>Pastry roll stuffed with seasoned fish</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/meatpie.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6"> Special Beef Mini Meat Pie</a>
                                                <span class="h6">₦3,500</span>
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
                                            <img height="78" width="78" src="{{asset('assets/images/jollof.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Jollof Rice with  Chicken	</a>
                                                <span class="h6">₦10,500</span>
                                            </div>
                                            <span>Classic Nigerian jollof with well-spiced grilled chicken</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/ofada.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Ofada Rice with  Sauce</a>
                                                <span class="h6">₦13,000</span>
                                            </div>
                                            <span>Local ofada rice, spicy green pepper sauce, assorted meats</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/fried.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Fried Rice with Turkey </a>
                                                <span class="h6">₦11,500</span>
                                            </div>
                                            <span>Party-style fried rice, plantain, and smoked turkey</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/poundo2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Efo Riro with Pounded Yam</a>
                                                <span class="h6">₦12,000</span>
                                            </div>
                                            <span>Rich spinach stew with assorted meats and pounded yam</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6"> Chicken & Carribean Rice</a>
                                                <span class="h6">₦12,000</span>
                                            </div>
                                            <span>Classic Carribean rice with well-spiced grilled chicken</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/egusi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Egusi Soup with Stockfish</a>
                                                <span class="h6">₦12,500
</span>
                                            </div>
                                            <span>Melon seed soup, assorted meat, stockfish & pounded yam</span>
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
                                            <img height="78" width="78" src="{{asset('assets/images/efo.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6"> Efo Riro	</a>
                                                <span class="h6">₦8,500</span>
                                            </div>
                                            <span>Spinach stew with mushrooms	</span>
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
                                                <a href="#" class="h6">Yam Porridge	</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Soft yam, tomato-pepper sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/moi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Moi Moi</a>
                                                <span class="h6">₦4,500</span>
                                            </div>
                                            <span>Steamed bean pudding</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/seafood.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Seafood Okro</a>
                                                <span class="h6">₦8,000</span>
                                            </div>
                                            <span>Okra, fluted pumpkin leaves</span>
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
                                                <a href="#" class="h6">Coconut Rice</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Fragrant coconut infused rice</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/egusi.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Egusi Soup</a>
                                                <span class="h6">₦12,500</span>
                                            </div>
                                            <span>Melon seed soup & stockfish</span>
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
                                            <img height="78" width="78" src="{{asset('assets/images/shawarma.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Chicken Shawarma</a>
                                                <span class="h6">₦6,500</span>
                                            </div>
                                            <span>Creamy garlic sauce, chicken, veggies, wrapped in pita</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/sandwich.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Spicy Catfish Sandwich</a>
                                                <span class="h6">₦9,000</span>
                                            </div>
                                            <span>Smoked catfish filet with house pepper sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/burger.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Brava Signature Burger</a>
                                                <span class="h6">₦9,500</span>
                                            </div>
                                            <span>Juicy beef patty, cheese, lettuce, tomato, pepper sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/sandwich.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Chicken Suya Sandwich</a>
                                                <span class="h6">₦8,500</span>
                                            </div>
                                            <span>Grilled suya chicken, mayo, cabbage & tomatoes</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/burger.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Plantain Burger</a>
                                                <span class="h6">₦7,500</span>
                                            </div>
                                            <span>Fried plantain, avocado, egg & spicy sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/sandwich.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Club Sandwich (Naija)</a>
                                                <span class="h6">₦8,500</span>
                                            </div>
                                            <span>Grilled chicken, egg, lettuce, toast bread, served with fries</span>
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
                                            <img height="78" width="78" src="{{asset('assets/images/plantain.webp')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Fried Plantain</a>
                                                <span class="h6">₦2,500</span>
                                            </div>
                                            <span>Golden sliced ripe plantains, fried to perfection</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/turkey.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Grilled Turkey</a>
                                                <span class="h6">₦4,000</span>
                                            </div>
                                            <span>Spicy, well-seasoned turkey grilled to perfection</span>
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
                                                <a href="#" class="h6">Peppered Goat Meat</a>
                                                <span class="h6">₦4,500</span>
                                            </div>
                                            <span>Soft goat meat tossed in rich pepper sauce</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/chicken.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Fried Chicken</a>
                                                <span class="h6">₦3,500</span>
                                            </div>
                                            <span>Classic crispy fried chicken with mild spice</span>
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
                                                <a href="#" class="h6">Assorted Meat</a>
                                                <span class="h6">₦4,500</span>
                                            </div>
                                            <span>Mixture of beef, shaki, roundabout</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Nigerian Salad</a>
                                                <span class="h6">₦2,500</span>
                                            </div>
                                            <span>Creamy coleslaw-style salad with egg & veggies</span>
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
                                            <img height="78" width="78" src="{{asset('assets/images/croaker.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Grilled Croaker Fish</a>
                                                <span class="h6">₦15,000</span>
                                            </div>
                                            <span>Whole croaker fish grilled with pepper sauce and sides</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/seafood.jpeg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Seafood Okra Soup</a>
                                                <span class="h6">₦14,500</span>
                                            </div>
                                            <span>Rich okra soup with prawns, periwinkle & fish</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Catfish Pepper Soup</a>
                                                <span class="h6">₦10,000</span>
                                            </div>
                                            <span>Spicy catfish broth seasoned with local herbs and scent leaves</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Seafood Jollof Rice</a>
                                                <span class="h6">₦12,500</span>
                                            </div>
                                            <span>Flavored jollof rice with prawns, calamari & grilled fish fillet</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
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
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bar-all" type="button" role="tab" aria-controls="bar-all" aria-selected="true">Classic Cocktails</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-cold" type="button" role="tab" aria-controls="bar-cold" aria-selected="false">Beers & Ciders</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-vegan" type="button" role="tab" aria-controls="bar-vegan" aria-selected="false">Wines & Champagne</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-burger" type="button" role="tab" aria-controls="bar-burger" aria-selected="false">Spirits & Liqueurs</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-dips" type="button" role="tab" aria-controls="bar-dips" aria-selected="false">Mocktails & Smoothies</button>
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bar-seafood" type="button" role="tab" aria-controls="bar-seafood" aria-selected="false">Specialty Shots</button>
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
                                        <img height="78" width="78" src="{{asset('assets/images/chapman.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Chapman</a>
                                            <span class="h6">₦3,500</span>
                                        </div>
                                        <span>Nigeria’s classic cocktail with bitters, citrus, grenadine</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/icedtea.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Long Island Iced Tea</a>
                                            <span class="h6">₦5,000</span>
                                        </div>
                                        <span>Vodka, gin, rum, tequila, triple sec, lime, cola</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/mojito.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Mojito</a>
                                            <span class="h6">₦4,000</span>
                                        </div>
                                        <span>White rum, mint, lime, sugar, soda water</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/brava.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Brava Signature</a>
                                            <span class="h6">₦4,500</span>
                                        </div>
                                        <span>Our house-blend of tropical fruit and premium spirits</span>
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
                                        <img height="78" width="78" src="{{asset('assets/images/heneken.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Heineken</a>
                                            <span class="h6">₦2,000</span>
                                        </div>
                                        <span>Premium international lager</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/star.jpeg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Star Lager</a>
                                            <span class="h6">₦1,800</span>
                                        </div>
                                        <span>Classic Nigerian beer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/origin.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Orijin Cider</a>
                                            <span class="h6">₦1,700</span>
                                        </div>
                                        <span>Refreshing bittersweet cider with herbs & fruits</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/smirnoff.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Smirnoff Ice</a>
                                            <span class="h6">₦1,500</span>
                                        </div>
                                        <span>Vodka-based ready-to-drink beverage</span>
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
                                        <img height="78" width="78" src="{{asset('assets/images/pages/bar/winered.png')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Red Wine (Glass)</a>
                                            <span class="h6">₦4,000</span>
                                        </div>
                                        <span>Imported red wine, full bodied and smooth</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/moet.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Moët & Chandon</a>
                                            <span class="h6">₦65,000</span>
                                        </div>
                                        <span>Luxury French champagne</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/winewhite.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">White Wine (Glass)</a>
                                            <span class="h6">₦4,000</span>
                                        </div>
                                        <span>Crisp, chilled, floral notes</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/rose.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Rosé</a>
                                            <span class="h6">₦4,500</span>
                                        </div>
                                        <span>Fresh, light, summer wine</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Spirits & Liqueurs -->
                    <div class="tab-pane fade" id="bar-burger" role="tabpanel" aria-labelledby="bar-burger">
                        <div class="all__menu__list">
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/hennesy.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Hennessy VSOP (Shot)</a>
                                            <span class="h6">₦7,000</span>
                                        </div>
                                        <span>Premium cognac, rich and bold</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/johnny.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Johnnie Walker Black</a>
                                            <span class="h6">₦6,500</span>
                                        </div>
                                        <span>Blended Scotch whisky</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/pages/bar/spirit3.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Smirnoff Vodka (Shot)</a>
                                            <span class="h6">₦2,500</span>
                                        </div>
                                        <span>Crisp and clean vodka</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/baileys.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Baileys Irish Cream</a>
                                            <span class="h6">₦5,000</span>
                                        </div>
                                        <span>Creamy liqueur with chocolate notes</span>
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
                                        <img height="78" width="78" src="{{asset('assets/images/pages/bar/mocktail1.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Chapman Mocktail</a>
                                            <span class="h6">₦2,500</span>
                                        </div>
                                        <span>All the Chapman flavor, no alcohol</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/ginger.jpeg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Pineapple Ginger Cooler</a>
                                            <span class="h6">₦2,000</span>
                                        </div>
                                        <span>Pineapple, ginger, soda—refreshing zing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/berry.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Berry Fizz</a>
                                            <span class="h6">₦2,200</span>
                                        </div>
                                        <span>Strawberry, blueberry, lemon, sparkling</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/mongo.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Mango Smoothie</a>
                                            <span class="h6">₦2,500</span>
                                        </div>
                                        <span>Fresh mango, yoghurt & honey</span>
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
                                        <img height="78" width="78" src="{{asset('assets/images/tequila.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Tequila Slammer</a>
                                            <span class="h6">₦2,000</span>
                                        </div>
                                        <span>Tequila, lime, a dash of soda</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/b52.webp')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">B52 Shot</a>
                                            <span class="h6">₦2,200</span>
                                        </div>
                                        <span>Kahlua, Baileys, Grand Marnier—layered</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single__menu__item__list">
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/coconutdrink.jpeg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Coconut Cream Shot</a>
                                            <span class="h6">₦2,300</span>
                                        </div>
                                        <span>Creamy coconut liqueur shot</span>
                                    </div>
                                </div>
                                <div class="single__menu__item">
                                    <div class="menu__thumb">
                                        <img height="78" width="78" src="{{asset('assets/images/jager.jpg')}}" alt="">
                                    </div>
                                    <div class="menu__meta">
                                        <div class="menu__link__price">
                                            <a href="#" class="h6">Jägerbomb</a>
                                            <span class="h6">₦2,700</span>
                                        </div>
                                        <span>Jägermeister & energy drink</span>
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
