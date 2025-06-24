    <!-- header area -->
    <div class="header__top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="social__links">
                        <a class="link__item gap-10" href="tel:+2347047000608"><i class="flaticon-phone-flip"></i> +2347047000608</a>
                        <a class="link__item gap-10" href="mailto:bravahotelgroup@gmail.com"><i class="flaticon-envelope"></i> bravahotelgroup@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="location">
                       <a class="link__item gap-10" href="https://maps.app.goo.gl/btJvG4XrJjKc6oym8"><i class="flaticon-marker"></i>59 Samonda Avenue, Adjacent Aerodrome Estate Ibadan Oyo State</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="main__header header__function">
        <div class="container">
            <div class="row">
                <div class="main__header__wrapper">
                    <div class="main__nav">
                        @include('Frontend.Header.nav')
                    </div>
                    <div class="main__logo">
                        <a href="{{route('index')}}"><img class="logo__class" src="{{asset('assets/images/logo/logo.svg')}}" alt="moonlit"></a>
                    </div>
                    <div class="main__right">

                        <a href="{{route('room-one')}}" class="theme-btn btn-style sm-btn fill"><span>Book Now</span></a>
                        <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span><img src="{{asset('assets/images/icon/menu-icon.svg')}}" alt=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->