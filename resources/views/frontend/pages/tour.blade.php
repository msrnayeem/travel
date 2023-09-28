@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Tour')

@section('content')

    <section class="section home-slider">
        <div class="swiper-form-wrap">
            <!-- Swiper-->
            <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker"
                data-loop="false" data-autoplay="3400" data-simulate-touch="false" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="{{ asset('images/tour_slider/1.jpg') }}">
                        <div class="swiper-slide-caption">
                            <div class="container container-bigger swiper-main-section">
                                <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5 position-relative">
                                        <div class="slider-content">
                                            <h3>The Trip of Your Dream</h3>
                                            <div class="divider divider-decorate"></div>
                                            <p class="text-spacing-sm">
                                                Our travel agency is ready to offer you an exciting
                                                vacation that is designed to fit your own needs and
                                                wishes. Whether it’s an exotic cruise or a trip to
                                                your favorite resort, you will surely have the best
                                                experience.
                                            </p>

                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('images/tour_slider/2.jpg') }}">
                        <div class="swiper-slide-caption">
                            <div class="container container-bigger swiper-main-section">
                                <div class="row row-fix justify-content-sm-center justify-content-md-start">
                                    <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5 position-relative">
                                        <h3>Hundreds of Amazing Destinations</h3>
                                        <div class="divider divider-decorate"></div>
                                        <p class="text-spacing-sm">
                                            We offer a variety of destinations to travel to,
                                            ranging from exotic to some extreme ones. They include
                                            very popular countries and cities like Paris, Rio de
                                            Janeiro, Cairo and a lot of others.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Swiper controls-->
                <div class="swiper-pagination-wrap">
                    <div class="container container-bigger">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-bigger form-request-wrap form-request-wrap-modern" style="opacity: 0.9;">

            </div>
        </div>
    </section>

    <section class="section section-variant-1 bg-default novi-background bg-cover">
        <div class="container container-wide">
            <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
                <div class="col-xl-8">
                    <div class="parallax-text-wrap">
                        <h3>Our Tour Packages</h3><span class="parallax-text">Best Package</span>
                    </div>
                    <hr class="divider divider-decorate">
                </div>
                <div class="col-xl-3 text-xl-right"><a class="btn sbmt" href="#">view all
                        packages</a></div>
            </div>
            <div class="row row-50">
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{ asset('images/tours/paris.jpg') }}"
                                    alt="paris" width="570" height="370" />
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina"
                                    href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">France, Paris</a></h5><span
                                class="heading-5">from $280</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{ asset('images/tours/boston.jpg') }}"
                                    alt="boston" width="570" height="370" />
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina"
                                    href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">USA, Boston</a></h5><span
                                class="heading-5">from $480</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{ asset('images/tours/italy.jpg') }}"
                                    alt="italy" width="570" height="370" />
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina"
                                    href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">Italy, Venice</a></h5><span
                                class="heading-5">from $350</span>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{ asset('images/tours/egypt.jpg') }}"
                                    alt="egypt" width="570" height="370" />
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina"
                                    href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">Egypt, Sharm El Sheikh</a></h5><span
                                class="heading-5">from $520</span>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                        <div class="event-default">
                            <figure class="event-default-image"><img src="{{ asset('images/tours/london.jpg') }}"
                                    alt="london" width="570" height="370" />
                            </figure>
                            <div class="event-default-caption"><a class="button button-xs button-secondary button-nina"
                                    href="#">learn more</a></div>
                        </div>
                        <div class="event-default-inner">
                            <h5><a class="event-default-title" href="#">UK, London</a></h5><span
                                class="heading-5">from $600</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- our advantages-->
    <section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
        <div class="container container-wide">
            <h3>our services</h3>
            <div class="divider divider-decorate"></div>
            <div class="row row-50 justify-content-sm-center text-left">
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-airplane"></div>
                        <p class="big box-minimal-title">Air Tickets</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">At our travel agency, you can book air tickets to any
                            world destination. We also provide online ticket booking via our website in just a couple of
                            steps.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-map"></div>
                        <p class="big box-minimal-title">Voyages & Cruises</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">Besides regular tours and excursions, we also offer a
                            variety of cruises & sea voyages for different customers looking for awesome experiences.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-city"></div>
                        <p class="big box-minimal-title">Hotel Bookings</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">We offer a wide selection of hotel ranging from
                            5-star ones to small properties located worldwide so that you could book a hotel you like.</div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-3">
                    <article class="box-minimal box-minimal-border">
                        <div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
                        <p class="big box-minimal-title">Tailored Summer Tours</p>
                        <hr>
                        <div class="box-minimal-text text-spacing-sm">Our agency provides varied tours including tailored
                            summer tours for clients who are searching for an exclusive and memorable vacation.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips & tricks-->
    <section class="section section-lg novi-background bg-cover bg-default text-center">
        <div class="container-wide">
            <div class="row row-50">
                <div class="col-sm-12">
                    <h3>Latest News</h3>
                    <div class="divider divider-decorate"></div>
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="2"
                        data-xl-items="2" data-stage-padding="15" data-loop="true" data-margin="30"
                        data-mouse-drag="false" data-dots="true" data-autoplay="true">
                        <article class="post-blog">
                            <a class="post-blog-image" href="#"><img
                                    src="{{ asset('images/news/Top10Hotels.jpg') }}" alt="" width="570"
                                    height="415" /></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Hotels</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li>
                                            <span>by</span>&nbsp;<a href="#">Ronald Chen</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5>
                                        <a class="post-blog-title" href="#">Top 10 Hotels to Stay At: Exclusive
                                            Rating by Sealine
                                            Travel Experts</a>
                                    </h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment"
                                        href="#"><span
                                            class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="post-blog">
                            <a class="post-blog-image" href="#"><img src="{{ asset('images/news/HowtoPlan.jpg') }}"
                                    alt="" width="570" height="415" /></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Tips</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li>
                                            <span>by</span>&nbsp;<a href="#">Ronald Chen</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5>
                                        <a class="post-blog-title" href="#">How to Plan Your Vacation in Advance and
                                            Why It’s
                                            Beneficial</a>
                                    </h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment"
                                        href="#"><span
                                            class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="post-blog">
                            <a class="post-blog-image" href="#"><img
                                    src="{{ asset('images/news/personalGuide.jpg') }}" alt="" width="570"
                                    height="415" /></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Traveling</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li>
                                            <span>by</span>&nbsp;<a href="#">Ronald Chen</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5>
                                        <a class="post-blog-title" href="#">Your Personal Guide to 5 Best Places to
                                            Visit on
                                            Earth</a>
                                    </h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment"
                                        href="#"><span
                                            class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                        <article class="post-blog">
                            <a class="post-blog-image" href="#"><img
                                    src="{{ asset('images/news/HowtoPlan.jpg') }}" alt="" width="570"
                                    height="415" /></a>
                            <div class="post-blog-caption">
                                <div class="post-blog-caption-header">
                                    <ul class="post-blog-tags">
                                        <li><a class="button-tags" href="#">Traveling</a></li>
                                    </ul>
                                    <ul class="post-blog-meta">
                                        <li>
                                            <span>by</span>&nbsp;<a href="#">Ronald Chen</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-blog-caption-body">
                                    <h5>
                                        <a class="post-blog-title" href="#">Best Places to Visit on
                                            Earth</a>
                                    </h5>
                                </div>
                                <div class="post-blog-caption-footer">
                                    <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment"
                                        href="#"><span
                                            class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn sbmt" href="#">view all blog posts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-md text-center text-md-left bg-gray-700 novi-background bg-cover">
        <div class="container container-wide">
            <div class="row row-fix row-50 justify-content-sm-center">
                <div class="col-xxl-8">
                    <div class="box-cta box-cta-inline">
                        <div class="box-cta-inner">
                            <h3 class="box-cta-title">Buy a tour without leaving your home</h3>
                            <p>Using our website, you can book any tour just in a couple of clicks.</p>
                        </div>
                        <div class="box-cta-inner"><a class="btn sbmt" href="#">Book
                                Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
