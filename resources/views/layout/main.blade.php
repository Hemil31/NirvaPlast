<!DOCTYPE html>
<html lang="en">

<!--  head Done ---->
@include('layout.head')

<body>
    <!-- Spinner Start -->
    @include('layout.spinner')
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('layout.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('layout.brand-start')
    <!-- Navbar End -->

    <!-- Navbar Start -->
    @include('layout.navbar')
    <!-- Navbar End -->

    @if (!request()->routeIs('home-page'))
        <!-- Page Header Start -->
        @include('layout.breadcrumb')
        <!-- Page Header End -->
    @endif

    @yield('content')
    

    <!-- Footer Start -->
    @include('layout.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    @include('layout.backtotop')
    <!-- back to top Done -->

    <!-- JavaScript Libraries -->
    @include('layout.js')
    <!-- Js Done -->

    @stack('scripts')
</body>

</html>
