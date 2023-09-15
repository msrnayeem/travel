@extends('frontend.layouts.frontend')

@section('title', 'Travel World || Contact')

@section('content')


<!-- Contact info-->
    <section class="section section-lg bg-default text-center">
        <div class="container container-wide">
          <div class="row row-fix row-50 row-custom-bordered">
            <div class="col-sm-6 col-lg-3">
              <!-- Box minimal-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-map-marker"></div>
                <h6>Address</h6>
                <div class="box-simple-text"><a href="{{ route('frontend.index') }}">TravelWorld Ltd<br> Dhaka,Bangladesh</a></div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-phone"></div>
                <h6>phones</h6>
                <div class="box-simple-text">
                  <ul class="list-comma list-0">
                    <li><a href="tel:#">+8801777777777</a></li>
                    <li><a href="tel:#">+8801777777777</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-email-open"></div>
                <h6>e-mail</h6>
                <div class="box-simple-text">
                  <ul class="list-comma list-0">
                    <li><a href="mailto:#">mail@travelworld.org</a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-calendar-clock"></div>
                <h6>opening hours</h6>
                <div class="box-simple-text">
                  <ul class="list-0">
                    <li>Mon–Fri: 9:00 am–6:00 pm</li>
                    <li>Sat–Sun: 11:00 am–4:00 pm</li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact us-->
      <section class="section section-wrap bg-gray-lighter novi-background bg-cover">
        <div class="section-wrap-inner">
          <div class="container container-bigger">
            <div class="row row-fix row-50">
              <div class="col-lg-8 col-xl-7">
                <div class="section-wrap-content section-lg">
                  <h3>Contact us</h3>
                  <hr class="divider divider-left divider-secondary">
                  <p class="big">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
                  <!-- RD Mailform-->
                  <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-fix row-20">
                      <div class="col-md-8">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-name">Name</label>
                          <input class="form-input" id="form-1-name" type="text" name="name"/>
                        </div>
                      </div>
                      
                      <div class="col-md-8">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-email">E-mail</label>
                          <input class="form-input" id="form-1-email" type="email" name="email"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-phone">Phone</label>
                          <input class="form-input" id="form-1-phone" type="text" name="phone"/>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-message">Message</label>
                          <textarea class="form-input" id="form-1-message" name="message"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12 offset-custom-1">
                        <div class="form-button">
                          <button class="button button-secondary button-nina" type="submit">send message</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="section-wrap-aside  ">
            <div class="google-map-container google-map-with-icon rd-google-map__model d-flex justify-content-center align-items-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7300.876781726429!2d90.41230416095885!3d23.803005198491032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1694750905982!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
            
          </div>
        </div>
    </section>


@endsection