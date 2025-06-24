    <!-- offcanvase menu -->
    <div class="offcanvas offcanvas-start" id="offcanvasRight">
        <div class="rts__btstrp__offcanvase">
            <div class="offcanvase__wrapper">
                <div class="left__side mobile__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="offcanvase__top">
                        <div class="offcanvase__logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('assets/images/logo/logo.svg')}}" alt="logo">
                            </a>
                        </div>
                        <p class="description">
                            Welcome to Brava, where luxury meets comfort in the heart of Ibadan. Since 2012, we have been dedicated to providing.
                        </p>
                    </div>
                    <div class="offcanvase__mobile__menu">
                        <div class="mobile__menu__active"></div>
                    </div>
                    <div class="offcanvase__bottom">
                        <div class="offcanvase__address">

                            <div class="item">
                                <span class="h6">Phone</span>
                                <a href="tel:+1234567890"><i class="flaticon-phone-flip"></i> +2347047000608</a>
                            </div>
                            <div class="item">
                                <span class="h6">Email</span>
                                <a href="mailto:info@hostie.com"><i class="flaticon-envelope"></i>bravahotelgroup@gmail.com</a>
                            </div>
                            <div class="item">
                                <span class="h6">Address</span>
                                <a href="#"><i class="flaticon-marker"></i> 9 Samonda Avenue, Adjacent Aerodrome Estate Ibadan Oyo State</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="right__side desktop__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="rts__desktop__menu">
                       <nav class="desktop__menu offcanvas__menu">
                            <ul class="list-unstyled">
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="{{route('index')}}">Home
                                    <span class="toggle"></span>
                                    </a>
                                    
                                </li>
                                <li class="slide">
                                    <a class="slide__menu__item" href="{{route('about')}}l">About us
                                    </a>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Rooms
                                    <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="{{route('roommini')}}">Mini Room</a></li>
                                        <li><a href="{{route('deluxeroom')}}">Deluxe Room</a></li>
                                        <li><a href="{{route('premiumroom')}}">Premium Room</a></li>
                                        <li><a href="{{route('executiveroom')}}">Executive Room</a></li>
                                        <li><a href="{{route('executiveterrace')}}">Executive Terrace</a></li>
                                        <li><a href="{{route('presidential')}}">Presidential Suite 1 Room</a></li>
                                        <li><a href="{{route('presidentialroom')}}">Presidential Suite 2 Room</a></li>
                                    </ul>
                                </li>
                               
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Services
                                    <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="{{route('restaurant')}}">Resturant & Bar</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('service')}}">Service</a></li>
                                       
                                    </ul>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="{{route('contact')}}">Contact Us
                                    </a>
                                    
                                </li>
                            </ul>
                       </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvase menu end -->