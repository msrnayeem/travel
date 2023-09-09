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
                <div class="box-simple-text"><a href="#">2130 Fulton Street, Chicago, IL <br> 94117-1080 USA</a></div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Box simple-->
              <article class="box-simple">
                <div class="box-simple-icon novi-icon mdi mdi-phone"></div>
                <h6>phones</h6>
                <div class="box-simple-text">
                  <ul class="list-comma list-0">
                    <li><a href="tel:#">1-800-6543-765</a></li>
                    <li><a href="tel:#">1-800-3434-876</a></li>
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
                    <li><a href="mailto:#">mail@demolink.org</a></li>
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
                      <div class="col-md-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label-outside" for="form-1-name">Name</label>
                          <input class="form-input" id="form-1-name" type="text" name="name"/>
                        </div>
                      </div>
                      
                      <div class="col-md-12">
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
            
          </div>
        </div>
    </section>


@endsection