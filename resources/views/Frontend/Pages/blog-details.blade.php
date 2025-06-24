@extends('Frontend.Layouts.app')
@section('page_title', 'Blog Details Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Discover Luxury: A Journey Through Our Hotel's Unique Offerings";
        $author = "Madison Roy";
    @endphp
    @include('Frontend.Components.blog-details-hero',compact('title','author'))

    <!-- blog -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="blog__details">
                        <div class="blog__details__content">
                            <p class="description">
                                Welcome to Career Compass, your ultimate destination for career advice, job search
                                strategies, and professional development insights. Whether you're a recent graduate,
                                seasoned professional, or someone considering a career change, our blog is your trusted
                                guide to help you navigate the ever-evolving landscape of the job market.
                                <br>
                                At Career Compass, we understand that finding the right career path can be daunting.
                                That's why we offer a wealth of resources to empower you on your journey. From resume
                                writing tips and interview techniques to networking advice and skill-building
                                strategies, our expert contributors share their knowledge and expertise to equip you
                                with the tools you need to succeed.
                            </p>
                            <img class="rounded-3 my-4 img-fluid" width="870" height="500" src="{{asset('assets/images/pages/blog/details.webp')}}"
                                alt="">
                            <h6 class="mb-4 mt-4">Hotel Service</h6>
                            <ul class="service-list list-unstyled">
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Romantic Getaway</li>
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Family Vacation</li>
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Event Planning</li>
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Seasonal Promotions</li>
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Conference Venues</li>
                                <li><img src="{{asset('assets/images/icon/check-fill.svg')}}" alt="">Special Offers</li>
                            </ul>
                            <h6 class="mb-4 mt-4">Real Guest Stories: Unforgettable Stays at Bokinn</h6>
                            <p class="description">
                                Welcome to Career Compass, your ultimate destination for career advice, job search
                                strategies, and professional development insights. Whether you're a recent graduate,
                                seasoned professional, or someone considering a career change, our blog is your trusted
                                guide to help you navigate the ever-evolving landscape of the job market.
                            </p>
                            <blockquote class="rts__blockquote">
                                <span class="blockquote__text">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                                </span>
                            </blockquote>
                            <p class="description">At Career Compass, we understand that finding the right career path
                                can be daunting. That's why we offer a wealth of resources to empower you on your
                                journey. From resume writing tips and interview techniques to networking advice and
                                skill-building strategies, our expert contributors share their knowledge and expertise
                                to equip you with the tools you need to succeed.</p>

                            <h6 class="mb-30">Tags</h6>
                            <div class="tag__list mb-30">
                                <div class="tags__list">
                                    <a href="#">Hotel Stay</a>
                                    <a href="#">Travel Blog</a>
                                    <a href="#">Guest Experience</a>
                                    <a href="#"> Hotel Guide</a>
                                    <a href="#">Hotel Review</a>
                                </div>
                            </div>
                            <div class="share mb-30">
                                <h6 class="mb-20">Share</h6>
                                <div class="social__link">
                                    <a href="#"><i class="flaticon-linkedin"></i></a>
                                    <a href="#"><i class="flaticon-twitter-alt-circle"></i></a>
                                    <a href="#"><i class="flaticon-whatsapp"></i></a>
                                    <a href="#"><i class="flaticon-facebook-messenger"></i></a>
                                </div>
                            </div>
                            <h6 class="mb-30">Comment</h6>
                            <div class="comment__list">

                                <div class="comment__item">
                                    <div class="comment__item__author">
                                        <div class="author__img">
                                            <img class="rounded-1" src="{{asset('assets/images/author/3.webp')}}" width="60"
                                                height="60" alt="">
                                        </div>
                                        <div class="author__info">
                                            <h6 class="font-20 mb-0">Jonathon Doe</h6>
                                            <span>A week ago</span>
                                        </div>
                                    </div>
                                    <div class="comment__text">
                                        <p class="font-sm">I still have a lot of studying to do using this course and
                                            the other practice exams, but so far it's been great! I have not taken my
                                            Security+ exam as well, so I'll update this at a later time.</p>
                                        <a href="#"><img src="{{asset('assets/images/icon/reply.svg')}}" alt="">Reply</a>
                                    </div>
                                </div>
                                <div class="comment__item">
                                    <div class="comment__item__author">
                                        <div class="author__img">
                                            <img class="rounded-1" src="{{asset('assets/images/author/4.webp')}}" width="60"
                                                height="60" alt="">
                                        </div>
                                        <div class="author__info">
                                            <h6 class="font-20 mb-0">Michael Roy </h6>
                                            <span>A week ago</span>
                                        </div>
                                    </div>
                                    <div class="comment__text">
                                        <p class="font-sm">I still have a lot of studying to do using this course and
                                            the other practice exams, but so far it's been great! I have not taken my
                                            Security+ exam as well, so I'll update this at a later time.</p>
                                        <a href="#"><img src="{{asset('assets/images/icon/reply.svg')}}" alt="">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- comment form -->
                            <div class="comment__form mt-40">
                                <h6 class="mb-3">Leave a Comment</h6>
                                <form action="#" class="comment__form__content">
                                    <div class="input-group">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="msg">Your Comment</label>
                                        <textarea id="msg" name="msg" class="form-control" placeholder="Your message"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn btn-style fill mt-4"><span>Submit
                                            Comment</span></button>
                                </form>
                            </div>
                            <!-- comment form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
    @include('Frontend.Footer.footer__common')
@endsection
