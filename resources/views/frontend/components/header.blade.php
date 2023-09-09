<header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-corporate">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
          <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
            <div class="rd-navbar-top-panel-inner">
              <ul class="list-inline">
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                  <ul class="list-comma">
                    <li><a href="tel:#">+8801777777777</a></li>
                    <li><a href="tel:#">1-800-6780-345</a></li>
                  </ul>
                </li>
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">Dhaka, Bangladesh</a></li>
                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">mail@umrah.org</a></li>
              </ul>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
              </ul>
            </div>
            <div class="rd-navbar-top-panel-inner"><a class="button button-sm button-secondary button-nina" href="" target="_blank">Book now</a></div>
          </div>
          <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('frontend.index') }}"><img class="logo-default" src="{{ asset('images/logo/header_logo.png') }}"/></a></div>
            </div>
            <div class="rd-navbar-aside-center">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="{{ request()->routeIs('frontend.index') ? 'active' : '' }}">
                    <a href="{{ route('frontend.index') }}">Home</a>
                  </li>
                  <li class="">
                    <a href="">Umrah</a>
                  </li>
                  <li class="{{ request()->routeIs('hajjz.index') ? 'active' : '' }}">
                    <a href="{{ route('hajjz.index') }}">Hajj</a>
                  </li>
                  <li class="{{ request()->routeIs('tours.index') ? 'active' : '' }}">
                    <a href="{{ route('tours.index') }}">Tour</a>
                  </li>
                  <li class="{{ request()->routeIs('frontend.about') ? 'active' : '' }}">
                    <a href="{{ route('frontend.about') }}">About Us</a>
                  </li>
                  <li class="{{ request()->routeIs('frontend.contact') ? 'active' : '' }}">
                    <a href="{{ route('frontend.contact') }}">Contacts</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina" href="#">Book now</a></div>
          </div>
        </nav>
      </div>
</header>