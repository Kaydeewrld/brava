
    <!-- footer style three -->
    <footer class="rts__section rts__footer is__home__three footer__background has__shape">
        <div class="section__shape">
            <div class="shape__1 wow fadeInLeft">
                <img src="{{asset('assets/images/footer/shape-1.svg')}}" alt="">
            </div>
            <div class="shape__2">
                <img src="{{asset('assets/images/footer/shape-2.svg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="footer__widget__wrapper">
                    <div class="rts__widget">
                        <a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo.svg')}}" alt="footer logo"></a>
                        <p class="font-sm max-290 mt-20">
                            Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.
                        </p>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Quick Links</span>
                        <ul>
                            <li><a href="{{route('room-one')}}">Rooms & Suites</a></li>
                            <li><a href="{{route('restaurant')}}">Dining</a></li>
                            <li><a href="#">Spa & Wellness</a></li>
                            <li><a href="#">Special Offers</a></li>
                           
                        </ul>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Contact Us</span>
                        <ul>
                            <li><a href="tel:+23470470000608"><i class="flaticon-phone-flip"></i> +2347047000608</a></li>
                            <li><a href="mailto:bravahotelgroup@gmail.com"><i class="flaticon-envelope"></i>bravahotelgroup@gmail.com</a></li>
                        <li><a aria-label="footer__contact" href="#"><i class="flaticon-marker"></i>59 Samonda Avenue, Adjacent Aerodrome Estate Ibadan Oyo State</a></li>
                        </ul>
                    </div>
                    <div class="rts__widget if__is__newsletter">
                        <span class="widget__title">Get In Touch</span>
                        <form action="#" class="footer__form">
                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <div class="query__input__icon">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->

                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                                    <div class="query__input__icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->
                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <textarea id="msg" name="msg" placeholder="Your Message" required></textarea>
                                    <div class="query__input__icon if__is__textarea">
                                        <img src="{{asset('assets/images/icon/message.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->
                            <button type="submit" class="theme-btn btn-style fill no-border submit__btn">
                                <span>
                                    Submit Now
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__text">
            <div class="container">
                <div class="row">
                    <div class="copyright__wrapper">
                    <p class="mb-0">Copyright © {{ date('Y') }} Brava Hotel Group. All rights reserved.</p>
                        <div class="footer__social__link">
                             <a href="https://www.facebook.com/p/Brava-Hotels-Suites-100066721483402/" aria-label="footer__social" class="link__item">Facebook</a>
                        <a href="https://www.instagram.com/bravahotelgroup/"  aria-label="footer__social" class="link__item">Instagram</a>
                        <a href="#" aria-label="footer__social" class="link__item">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </footer>
    <!-- footer style three end -->