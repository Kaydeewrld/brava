@extends('Frontend.Layouts.app')
@section('page_title', 'Room Style One Template')

@section('content')
    @include('Frontend.Header.header')
    
  

    <!-- advance search -->
    
    <!-- advance search end -->

    <!-- single rooms -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row g-30">
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "₦60,000";
                        $title = "Mini Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "₦75,000";
                        $title = "Deluxe Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "3.webp";
                        $price = "₦80,000";
                        $title = "Premium Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "4.webp";
                        $price = "₦120,000";
                        $title = "Executive Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "5.webp";
                        $price = "₦150,000";
                        $title = "Executive Terrace";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "6.webp";
                        $price = "₦200,000";
                        $title = "Presidential Suite";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
            </div>
            <!-- row end -->
            
        </div>
    </div>
    <!-- single rooms end -->

    <!-- client testimonial  -->
  
    <!-- client testimonial  end -->
    @include('Frontend.Footer.footer__common')
@endsection
