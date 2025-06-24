<footer class="rts__section rts__footer is__common__footer footer__background has__shape">
    <div class="section__shape">
        <div class="shape__1">
            <img src="{{asset('assets/images/footer/shape-1.svg')}}" alt="">
        </div>
        <div class="shape__2">
            <img src="{{asset('assets/images/footer/shape-2.svg')}}" alt="">
        </div>
        <div class="shape__3">
            <img src="{{asset('assets/images/footer/shape-3.svg')}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="footer__newsletter">
                <span class="h2">Join Our Newsletter</span>
                <div class="rts__form">
                    <form action="#" method="post">
                        <input type="email" name="email" id="subscription" placeholder="Enter your mail" required>
                        <button type="submit" >Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer__widget__wrapper">
                <div class="rts__widget">
                    <a href="{{route('index')}}"><img class="footer__logo" src="{{asset('assets/images/logo/logo.svg')}}" alt="footer logo"></a>
                    <p class="font-sm max-290 mt-20">
                        Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.
                    </p>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Quick Links</span>
                    <ul>
                        <li><a href="{{route('room-one')}}" aria-label="footer__link">Rooms & Suites</a></li>
                        <li><a href="{{route('restaurant')}}" aria-label="footer__link">Dining</a></li>
                        <li><a href="#" aria-label="footer__link">Spa & Wellness</a></li>
                        <li><a href="#" aria-label="footer__link">Special Offers</a></li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Guest Service</span>
                    <ul>
                        <li>24/7 Front Desk</li>
                        <li>Parking</li>
                        <li>Room Service</li>
                        <li>Free Wi-Fi</li>
                        <li>Concierge Service</li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Contact Us</span>
                    <ul>
                        <li><a aria-label="footer__contact" href="tel:+12505550199"><i class="flaticon-phone-flip"></i> +2347047000608</a></li>
                        <li><a aria-label="footer__contact" href="mailto:UjJw6@example.com"><i class="flaticon-envelope"></i>bravahotelgroup@gmail.com</a></li>
                        <li><a aria-label="footer__contact" href="#"><i class="flaticon-marker"></i>59 Samonda Avenue, Adjacent Aerodrome Estate Ibadan Oyo State</a></li>
                    </ul>
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