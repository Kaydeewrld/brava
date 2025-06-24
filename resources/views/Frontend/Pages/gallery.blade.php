@extends('Frontend.Layouts.app')
@section('page_title', 'Gallery Page Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Gallery";
        $desc = "Where every image tells a story of luxury, comfort, and unparalleled hospitality.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- gallery -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30 gallery">
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/1.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/1.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/2.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/2.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/3.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/3.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/4.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/4.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/5.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/5.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/6.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/6.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/7.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/7.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/gallery/8.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/gallery/8.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->

    <!-- video section start -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Our Video</span>
                        <h2 class="section__title">Our Restaurant Overview</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="video__area position-relative wow fadeInUp">
                        <div class="video__area__image jara-mask-2 jarallax">
                            <img class="radius-10 jarallax-img" src="{{asset('assets/images/pages/gallery/video.webp')}}" alt="">
                        </div>
                        <div class="video--spinner__wrapper ">
                            <div class="rts__circle">
                                <svg class="spinner" viewBox="0 0 100 100">
                                    <defs>
                                        <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle-2">Watch Now * Watch Now * Watch Full Video *</textPath>
                                    </text>
                                </svg>
                                <div class="rts__circle--icon">
                                    <a href="https://www.youtube.com/watch?v=9jBAmTfD-oY" class="video-play">
                                        <i class="flaticon-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- video section end -->
    @include('Frontend.Footer.footer__common')
@endsection
