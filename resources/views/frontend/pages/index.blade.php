@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Home')

@section('content')

<section class="section home-slider">
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div
            class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker"
            data-loop="false"
            data-autoplay="3400"
            data-simulate-touch="false"
            data-slide-effect="fade"
          >
            <div class="swiper-wrapper">
              <div
                class="swiper-slide"
                data-slide-bg="{{ asset('img/mecca.jpg') }}"
              >
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div
                      class="row row-fix justify-content-sm-center justify-content-md-start"
                    >
                      <div
                        class="col-md-6 col-lg-5 col-xl-4 col-xxl-5 position-relative"
                      >
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
                          <a
                            class="button button-default-outline button-nina button-sm"
                            href="#"
                            >learn more</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-slide-bg="{{ asset('images/tour_slider/1.jpg') }}"
              >
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div
                      class="row row-fix justify-content-sm-center justify-content-md-start"
                    >
                      <div
                        class="col-md-6 col-lg-5 col-xl-4 col-xxl-5 position-relative"
                      >
                        <h3>Hundreds of Amazing Destinations</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm">
                          We offer a variety of destinations to travel to,
                          ranging from exotic to some extreme ones. They include
                          very popular countries and cities like Paris, Rio de
                          Janeiro, Cairo and a lot of others.
                        </p>
                        <a
                          class="button button-default-outline button-nina button-sm"
                          href="#"
                          >learn more</a
                        >
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
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
                <div class="col-lg-6 col-xxl-5">
                    <div class="form-request form-request-modern bg-gray-lighter novi-background">
                        <h4>Find your Tour</h4>
                        <!-- RD Mailform-->
                        <form class="rd-mailform form-fix">
                            <div class="row row-20 row-fix">

                                <div class="col-sm-12">
                                    <label class="form-label-outside">To</label>
                                    <div class="form-wrap form-wrap-inline">
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="tour" id="tour-type" onchange="category()">
                                            <option value="1">Umrah</option>
                                            <option value="2">Hajj</option>
                                            <option value="3">Tour</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="destination-container" style="display: none;">
                                    <label class="form-label-outside">Destination</label>
                                    <div class="form-wrap form-wrap-inline">
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="destination" id="destination-select">
                                            <option value="1">India</option>
                                            <option value="2">Thailand</option>
                                            <option value="3">Abu dhabi</option>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="col-sm-12 col-lg-6" id="depart-container" style="display: block;">
                                    <label class="form-label-outside">Depart Date</label>
                                    <div class="form-wrap form-wrap-validation">
                                        <!-- Select -->
                                        <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
                                        <label class="form-label" for="dateForm">Choose the date</label>
                                        <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                                        <!--  option(value="1") Choose the date-->
                                        <!--  option(value="2") Primary-->
                                        <!--  option(value="3") Middle-->
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6" id="lenght-container" style="display: block;">
                                    <label class="form-label-outside">Duration</label>
                                    <div class="form-wrap form-wrap-validation">
                                        <!-- Select 2-->
                                        <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                        <option value="1">Any length</option>
                                        <option value="7">7 days</option>
                                        <option value="15">15 days</option>
                                        <option value="30">30 days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wrap form-button">
                                <button class="button button-block button-secondary" type="submit">Search package</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </section>

      <section class="section section-variant-1 bg-default novi-background bg-cover"> 
        <div class="container container-wide">
            <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
            <div class="col-xl-8">
                <div class="parallax-text-wrap">
                <h3>Our Best Packages</h3><span class="parallax-text">Best Package</span>
                </div>
                <hr class="divider divider-decorate">
            </div>
            <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="#">view all packages</a></div>
            </div>
            <div class="row row-50">
              <div class="col-md-12">
                <div class="">
                  <div class="row justify-content-center align-items-center">

                    <!--Basic card start -->
                    <div class="card ml-2 mr-2 mb-5" style="width: 295px;">
                      <div class="image-container" style="overflow: hidden; width:100%; height:auto;">
                            <img class="card-img-top" src="{{ asset('images/hajj_package/hajj_1.jpeg') }}" alt="package_1.jpg">
                        </div>
                      <div class="card-body p-3">
                        <h5 class="card-title mb-0">Basic</h5>
                      </div>
                      <ul class="list-group list-group-flush">

                        <li class="list-group-item pb-2">
                            <div class="row align-items-center mx-auto">
                                <div class="col-auto mx-auto px-0">
                                  <img class="c-logo" src="{{ asset('images/umrah/hotel-1.png') }}"  alt="Hotel 1">
                                </div>
                                <div class="col-auto mx-auto px-0">
                                  
                                    <p class="p-thin"> Macca: 4pr/Room</p>
                                    <p class="p-bold"> 1KM to Haram</p>                                   
                                  
                                  <!-- hr -->
                                  
                                    <p class="p-thin"class="p-thin"> Madina: 4pr/Room</p>
                                    <p class="p-bold" > 1KM to Haram</p>
                                  
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item font-weight-bold text-start"><span style="color: blueviolet; font-weight:bold">Fee:</span> 500K per person</li>
                        
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-6">
                              <p class="mb-0" style="color: blueviolet; font-weight:bold">Booked:</p>
                            </div>
                            <div class="col-6 my-auto">
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60/100</div>
                              </div>
                            </div>
                          </div>
                        </li>

                      </ul>
                      <div class="card-body d-flex justify-content-center">
                        <a href="#" class="button button-sm button-secondary">Book Now</a>
                      </div>
                    </div>
                    <!-- card end -->
                  

                    <!--Basic card start -->
                    <div class="card ml-2 mr-2 mb-5" style="width: 295px;">
                      <div class="image-container" style="overflow: hidden; width:100%; height:auto;">
                            <img class="card-img-top" src="{{ asset('images/umrah/package_1.jpg') }}" alt="package_1.jpg">
                        </div>
                      <div class="card-body p-3">
                        <h5 class="card-title mb-0">Standard</h5>
                      </div>
                      <ul class="list-group list-group-flush">

                        <li class="list-group-item pb-2">
                            <div class="row align-items-center mx-auto">
                                <div class="col-auto mx-auto px-0">
                                  <img class="c-logo" src="{{ asset('images/umrah/hotel-1.png') }}"  alt="Hotel 1">
                                </div>
                                <div class="col-auto mx-auto px-0">
                                  
                                    <p class="p-thin"> Macca: 2pr/Room</p>
                                    <p class="p-bold"> 600M to Haram</p>                                   
                                  
                                  <!-- hr -->
                                  
                                    <p class="p-thin"class="p-thin"> Madina: 2pr/Room</p>
                                    <p class="p-bold" > 600M to Haram</p>
                                  
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item font-weight-bold text-start"><span style="color: blueviolet; font-weight:bold">Fee:</span> 600K per person</li>
                        
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-6">
                              <p class="mb-0" style="color: blueviolet; font-weight:bold">Booked:</p>
                            </div>
                            <div class="col-6 my-auto">
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50/100</div>
                              </div>
                            </div>
                          </div>
                        </li>

                      </ul>
                      <div class="card-body d-flex justify-content-center">
                        <a href="#" class="button button-sm button-secondary">Book Now</a>
                      </div>
                    </div>
                    <!-- card end -->
                  

                    <!--Basic card start -->
                    <div class="card ml-2 mr-2 mb-5" style="width: 295px;">
                      <div class="image-container" style="overflow: hidden; width:100%; height:auto;">
                            <img class="card-img-top" src="{{ asset('images/hajj_package/1.jpg') }}" alt="package_1.jpg">
                        </div>
                      <div class="card-body p-3">
                        <h5 class="card-title mb-0">Premium</h5>
                      </div>
                      <ul class="list-group list-group-flush">

                        <li class="list-group-item pb-2">
                            <div class="row align-items-center mx-auto">
                                <div class="col-auto mx-auto px-0">
                                  <img class="c-logo" src="{{ asset('images/umrah/hotel-1.png') }}"  alt="Hotel 1">
                                </div>
                                <div class="col-auto mx-auto px-0">
                                  
                                    <p class="p-thin"> Macca: Single Room</p>
                                    <p class="p-bold"> 200M to Haram</p>                                   
                                  
                                  <!-- hr -->
                                  
                                    <p class="p-thin"class="p-thin"> Madina: Single Room</p>
                                    <p class="p-bold" > 200M to Haram</p>
                                  
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item font-weight-bold text-start"><span style="color: blueviolet; font-weight:bold">Fee:</span> 700K per person</li>
                        
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-6">
                              <p class="mb-0" style="color: blueviolet; font-weight:bold">Booked:</p>
                            </div>
                            <div class="col-6 my-auto">
                              <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30/100</div>
                              </div>
                            </div>
                          </div>
                        </li>

                      </ul>
                      <div class="card-body d-flex justify-content-center">
                        <a href="#" class="button button-sm button-secondary">Book Now</a>
                      </div>
                    </div>
                    <!-- card end -->
                  
                  
                  </div>
                </div>
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
                <div class="box-minimal-text text-spacing-sm">At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-map"></div>
                <p class="big box-minimal-title">Tour & Travels</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers looking for awesome experiences.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-city"></div>
                <p class="big box-minimal-title">Hotel Bookings</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
                <p class="big box-minimal-title">Tours</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Our agency provides varied tours including tours for clients who are searching for an exclusive and memorable vacation.</div>
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
                {{$newsCount}}
                    <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="{{ $newsCount > 2 ? 2 : $newsCount }}" data-xl-items="{{ $newsCount > 3 ? 3 : $newsCount }}" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
                      
                    @foreach($featuredNews as $news)
                    <article class="post-blog"><a class="post-blog-image" href="#"><img src="images/landing-private-airlines-7-570x415.jpg" alt="" width="570" height="415"/></a>
                          <div class="post-blog-caption">
                          <div class="post-blog-caption-header">
                              <ul class="post-blog-tags">
                              <li><a class="button-tags" href="#">{{$news->newsCategory->name}}</a></li>
                              </ul>
                              <ul class="post-blog-meta">
                              <li><span>by</span>&nbsp;<a href="#">{{$news->user->name}}</a></li>
                              </ul>
                          </div>
                          <div class="post-blog-caption-body">
                              <h5><a class="post-blog-title" href="#">{{$news->title}}</a></h5>
                          </div>
                          <div class="post-blog-caption-footer">
                              <time>Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                          </div>
                          </div>
                      </article>
                     @endforeach 
                      
                    </div>
              </div>
              <div class="col-12">
                <a class="button button-secondary button-nina button-offset-lg" href="{{ route('news.index') }}">view all news</a>
              </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')

<script>

    function category(){
        var selected = document.getElementById('tour-type').value;
        var destination = document.getElementById('destination-container');
        var lenght = document.getElementById('lenght-container');
        var depart = document.getElementById('depart-container');

        //1= umra 2 = hajj 3 = tour

        if(selected == 3){
            destination.style.display = 'block';
            lenght.style.display = 'block';
            depart.style.display = 'block';
        }
        else if(selected == 2){
            destination.style.display = 'none';
            lenght.style.display = 'none';
            depart.style.display = 'none';
        }
        else{
            destination.style.display = 'none';
            lenght.style.display = 'block';
            depart.style.display = 'block';
        }

    }
</script>

@endpush