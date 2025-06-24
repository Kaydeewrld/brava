@extends('Frontend.Layouts.app')
@section('page_title', 'Room Style One Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Our Room";
        $desc = "A collection of our rooms, often with better views, more space, and additional amenities.";
    @endphp
   

    <!-- advance search -->
    @php 
        $class = "is__page has__border pt-120 pb-60";
        $attr = "";
    @endphp
   
    <!-- advance search end -->

    <!-- single rooms -->
 <div class="rts__section pb-120">
    <div class="container">
        <div class="row g-30">
            <!-- Mini Room -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "1.webp";
                    $price = "₦60,000";
                    $title = "Mini Room";
                    $desc = "Perfect for solo travelers or short stays. All essentials for a restful night in a cozy space.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Deluxe Room -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "2.webp";
                    $price = "₦75,000";
                    $title = "Deluxe Room";
                    $desc = "Enjoy upgraded comfort and space, modern décor, and plush bedding for a little extra luxury.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Premium Room -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "3.webp";
                    $price = "₦80,000";
                    $title = "Premium Room";
                    $desc = "Spacious and inviting, with elegant furnishings and a serene atmosphere for work or relaxation.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Executive Room -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "4.webp";
                    $price = "₦120,000";
                    $title = "Executive Room";
                    $desc = "Designed for business or leisure, this stylish room features premium amenities and comfort.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Executive Terrace -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "5.webp";
                    $price = "₦150,000";
                    $title = "Executive Terrace";
                    $desc = "Luxury meets outdoor living. Spacious room with a private terrace for beautiful city views.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Presidential Suite 1 Room -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                @php 
                    $thumb = "6.webp";
                    $price = "₦200,000";
                    $title = "Presidential Suite";
                    $desc = "Sophisticated suite with top-tier comfort and exclusive service for a VIP experience.";
                @endphp
                @include('Frontend.Components.room-card', compact('thumb','price','title','desc'))
            </div>
            <!-- Presidential Suite 2 Room -->
           
        </div>
        <!-- row end -->
      
    </div>
</div>

    <!-- single rooms end -->

    <!-- client testimonial  -->
 
    <!-- client testimonial  end -->
    @include('Frontend.Footer.footer__common')
@endsection
