
     <!-- header area -->
    <div class="header__position">
        <header class="main__header header__function is__color__theme is__home__six ">
            <div class="container">
                <div class="row">
                    <div class="main__header__wrapper">
                        <div class="main__nav">
                           @include('Frontend.Header.nav')
                        </div>
                        <div class="main__logo">
                            <a href="{{route('index')}}"><img class="logo__class" src="assets/images/logo/logo.png" alt="brava"></a>
                        </div>
                        <div class="main__right">
                            
                            <a href="{{route('room-one')}}" class="theme-btn btn-style sm-btn fill"><span>Book Now</span></a>
                            <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span><img src="assets/images/icon/menu-icon.svg" alt=""></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
   <!-- header area end -->