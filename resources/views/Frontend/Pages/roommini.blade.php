@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "About Us";
        $desc = "Welcome to Bokinn, where luxury meets comfort in the heart of canada.";
    @endphp
    @include('Frontend.Components.page-hero-no-text',compact('title','desc'))

    <!-- room details area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-5 sticky-wrap">
                <div class="col-xxl-8 col-xl-7">
                    <div class="room__details">
                        <span class="h4 price">₦60,000</span>
                        <h2 class="room__title">Mini Room</h2>
                        <div class="room__meta">
                            <span><i class="flaticon-construction"></i>35 sqm</span>
                            <span><i class="flaticon-user"></i>1 Person</span>
                        </div>
                        <p>
                            Discover comfort and value in our well-designed Mini Room, perfect for solo travelers or couples. Enjoy a cozy atmosphere with essential amenities for a restful stay. 
                            <br> <br>
                           Each Mini Room features soft bedding, modern décor, and convenient touches to make your experience seamless.
                        </p>
                        <div class="room__image__group row row-cols-md-2 row-cols-sm-1 mt-30 mb-50 gap-4 gap-md-0">
                            <div class="room__image__item">
                                <img class="rounded-2" src="{{asset('assets/images/pages/room/r-d-1.webp')}}" alt="">
                            </div>
                            <div class="room__image__item">
                                <img class="rounded-2" src="{{asset('assets/images/pages/room/r-d-2.webp')}}" alt="">
                            </div>
                        </div>
                        <span class="h4 d-block mb-30">Room Amenities</span>
                        <div class="room__amenity mb-50">
                            <div class="group__row">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/wifi.svg')}}" height="30" width="36" alt="">
                                    <span>Free Wifi</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/shower.svg')}}" height="30" width="36" alt="">
                                    <span>Shower</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/aeroplane.svg')}}" height="30" width="36" alt="">
                                    <span>Airport transport</span>
                                </div>
                            </div>
                            <div class="group__row">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/balcony.svg')}}" height="30" width="36" alt="">
                                    <span>Balcony</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/refrigerator.svg')}}" height="30" width="36" alt="">
                                    <span>Refrigerator</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/support.svg')}}" height="30" width="36" alt="">
                                    <span>24/7 Support</span>
                                </div>
                            </div>
                            <div class="group__row">
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/desk.svg')}}" height="30" width="36" alt="">
                                    <span>Work Desk</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/fitness.svg')}}" height="30" width="36" alt="">
                                    <span>Fitness Center</span>
                                </div>
                                <div class="single__item">
                                    <img src="{{asset('assets/images/icon/swimming-pool.svg')}}" height="30" width="36" alt="">
                                    <span>Swimming Pool</span>
                                </div>
                            </div>

                        </div>
                        <span class="h4 d-block mb-50">Room Features</span>
                        <div class="room__feature mb-30">
                            <div class="room__feature__image mb-50">
                                <img class="rounded-2" src="{{asset('assets/images/pages/room/r-d-3.webp')}}" alt="">
                            </div>
                            <div class="group__row">
                                <ul class="list__item">
                                    <li>Children and extra beds</li>
                                    <li>Climate Control</li>
                                    <li>Art and Decor</li>
                                    <li>Coffee/Tea Maker</li>
                                    <li>High-End Bedding</li>
                                    <li>Smart Technology</li>
                                </ul>
                            </div>
                        </div>
                        <p>Our elegantly appointed rooms and suites are designed to offer the utmost in comfort and style. Each room features modern amenities, plush furnishings, and thoughtful touches to ensure a relaxing stay.</p>
                    </div>
                </div>
              <div class="col-xxl-4 col-xl-5 sticky-item">
    <div class="rts__booking__form has__background is__room__details">
                       
      <form action="{{ route('book-room') }}" method="post" class="advance__search">
    @csrf
    <h5 class="pt-0">Book Your Stay</h5>
    <div class="advance__search__wrapper">
        <!-- Full Name (REQUIRED) -->
        <div class="query__input wow fadeInUp" data-wow-delay=".1s">
            <label for="guest_name" class="query__label">Full Name</label>
            <div class="query__input__position">
                <input type="text" name="name" id="guest_name" placeholder="Full Name" required>
            </div>
        </div>

        <!-- Hidden Room Type (REQUIRED) -->
      <input type="hidden" name="room_type" id="room_type" value="Mini Room">
      <input type="hidden" name="base_price" id="base_price" value="60000">


        <!-- Check In -->
        <div class="query__input wow fadeInUp">
            <label for="check__in" class="query__label">Check In</label>
            <div class="query__input__position">
                <input type="text" id="check__in" name="check_in" placeholder="15 Jun 2024" required>
                <div class="query__input__icon">
                    <i class="flaticon-calendar"></i>
                </div>
            </div>
        </div>

        <!-- Check Out -->
        <div class="query__input wow fadeInUp" data-wow-delay=".3s">
            <label for="check__out" class="query__label">Check Out</label>
            <div class="query__input__position">
                <input type="text" id="check__out" name="check_out" placeholder="15 May 2024" required>
                <div class="query__input__icon">
                    <i class="flaticon-calendar"></i>
                </div>
            </div>
        </div>

        <!-- Email -->
        <div class="query__input wow fadeInUp" data-wow-delay=".3s">
            <label for="email" class="query__label">Email</label>
            <div class="query__input__position">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
        </div>

        <!-- Adult -->
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

        <!-- Child -->
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

        <!-- Room -->
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
                    <img src="{{ asset('assets/images/icon/room.svg') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Extra Bed -->
        <div class="query__input wow fadeInUp" data-wow-delay=".5s">
            <label for="exbed" class="query__label">Extra Bed</label>
            <div class="query__input__position">
                <select name="exbed" id="exbed" class="form-select">
                    <option value="0">0 Bed</option>
                    <option value="1">1 Bed</option>
                    <option value="2">2 Bed</option>
                    <option value="3">3 Bed</option>
                    <option value="4">4 Bed</option>
                </select>
                <div class="query__input__icon is__svg">
                    <img src="{{ asset('assets/images/icon/bed-alt.svg') }}" alt="">
                </div>
            </div>
        </div>

        <h5 class="p-0 mt-20">Extra Services</h5>

        <!-- Room Clean -->
        <div class="query__input checkbox wow fadeInUp">
            <input type="checkbox" name="clean" id="clean">
            <label for="clean">Room Clean</label>
            <span>₦3,000 / Night</span>
        </div>

        <!-- Parking -->
        <div class="query__input checkbox wow fadeInUp">
            <input type="checkbox" name="parking" id="parking">
            <label for="parking">Parking</label>
            <span>Free</span>
        </div>

        <!-- Gym -->
        <div class="query__input checkbox wow fadeInUp">
            <input type="checkbox" name="gym" id="gym">
            <label for="gym">Gym</label>
            <span>₦3,000 / Day</span>
        </div>

        <!-- Spa -->
        <div class="query__input checkbox wow fadeInUp">
            <input type="checkbox" name="spa" id="spa">
            <label for="spa">Spa</label>
            <span>₦3,000 / Session</span>
        </div>

        <!-- Total Price -->
        <div class="total__price">
            <span class="total h6 mb-0">Total Price</span>
            <span class="price h6 m-0" id="total-price">₦60,000</span>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
            <span>Book Your Room</span>
        </button>
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
                        $price = "₦75,000";
                        $title = "Deluxe Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    @php 
                        $thumb = "2.webp";
                        $price = "₦80,000";
                        $title = "Premium Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    @php 
                        $thumb = "3.webp";
                        $price = "₦120,000";
                        $title = "Executive Room";
                    @endphp
                    @include('Frontend.Components.room-card-two',compact('thumb','price','title'))
                </div>
            </div>
        </div>
    </div>
    <!-- similar room area end -->

  <script>
document.addEventListener('DOMContentLoaded', function() {
    const basePrice = parseInt(document.getElementById('base_price').value) || 60000;
    const extraBedPrice = 3000;
    const cleanPrice = 3000;
    const gymPrice = 3000;
    const spaPrice = 3000;

    const roomSelect = document.getElementById('room');
    const exbedSelect = document.getElementById('exbed');
    const cleanCheck = document.getElementById('clean');
    const gymCheck = document.getElementById('gym');
    const spaCheck = document.getElementById('spa');
    const checkInInput = document.getElementById('check__in');
    const checkOutInput = document.getElementById('check__out');
    const totalPriceSpan = document.getElementById('total-price');

    function getNights() {
        let checkIn = checkInInput.value;
        let checkOut = checkOutInput.value;
        if (!checkIn || !checkOut) return 1;
        let inDate = new Date(checkIn);
        let outDate = new Date(checkOut);
        let diff = (outDate - inDate) / (1000 * 60 * 60 * 24);
        return diff > 0 ? diff : 1;
    }

    function updateTotal() {
        const rooms = parseInt(roomSelect.value) || 1;
        const extraBeds = parseInt(exbedSelect.value) || 0;
        const nights = getNights();

        let total = (basePrice * rooms * nights) + (extraBedPrice * extraBeds * nights);
        if (cleanCheck && cleanCheck.checked) total += cleanPrice * rooms * nights;
        if (gymCheck && gymCheck.checked) total += gymPrice * rooms * nights;
        if (spaCheck && spaCheck.checked) total += spaPrice * rooms * nights;

        totalPriceSpan.textContent = '₦' + total.toLocaleString();
    }

    // Attach event listeners
    [roomSelect, exbedSelect, cleanCheck, gymCheck, spaCheck, checkInInput, checkOutInput]
        .forEach(el => { if (el) el.addEventListener('change', updateTotal); });

    updateTotal(); // Initial price
});
</script>


@if(session('success'))
    <div id="customSuccessModal" style="position: fixed; z-index: 99999; inset: 0; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center;">
        <div style="background: #fff; border-radius: 10px; max-width: 90vw; width: 400px; box-shadow: 0 8px 40px rgba(0,0,0,0.2); padding: 32px 24px; text-align: center;">
            <h4 style="color: #43be8b; font-weight: bold; margin-bottom: 10px;">Booking Successful!</h4>
            <div style="margin-bottom: 18px;">{{ session('success') }}</div>
            <button onclick="document.getElementById('customSuccessModal').remove()" class="theme-btn btn-style">
                Close
            </button>
        </div>
    </div>
    <script>
        setTimeout(function(){
            var m = document.getElementById('customSuccessModal');
            if(m) m.remove();
        }, 5000);
    </script>
@endif
    @include('Frontend.Footer.footer__common')
@endsection
