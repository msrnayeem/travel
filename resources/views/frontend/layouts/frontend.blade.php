<!DOCTYPE html>
<html class="wide wow-animation" lang="en">


@include('frontend.components.head')
@stack('styles')

<body>
    <div>
        @include('frontend.components.preloader')

        @include('frontend.components.header')

        @yield('content')


        @include('frontend.components.footer')


        @include('frontend.components.js')
        @stack('scripts')
    </div>
</body>

</html>
