<head>
    <meta charset="utf-8">
    <title>
        @yield('title', 'Home')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <style>
        /* Enhanced Mobile Responsive Styles */

        /* Standard mobile tablets (768px and below) */
        @media (max-width: 768px) {
            #logo-text {
                font-size: 28px !important;
            }

            #logo-text img {
                width: 40px !important;
                height: auto !important;
            }

            .navbar-brand {
                padding: 0.5rem 0 !important;
            }
        }

        /* Small mobile phones (480px and below) */
        @media (max-width: 480px) {
            #logo-text {
                font-size: 24px !important;
                flex-direction: row !important;
                align-items: center !important;
            }

            #logo-text img {
                width: 35px !important;
                height: auto !important;
                margin-right: 6px !important;
            }

            #logo-text span {
                line-height: 1.2 !important;
                display: inline-block !important;
            }

            .navbar {
                padding: 8px 15px !important;
            }

            .navbar-brand {
                padding: 0.25rem 0 !important;
            }
        }

        /* Ultra-small screens (409px and below) */
        @media (max-width: 409px) {
            #logo-text {
                font-size: 22px !important;
                white-space: nowrap !important;
            }

            #logo-text img {
                width: 30px !important;
                height: auto !important;
                margin-right: 4px !important;
            }

            /* Make text more compact */
            #logo-text span:first-of-type {
                margin-left: 4px !important;
            }

            .navbar {
                padding: 6px 10px !important;
            }

            .navbar-brand {
                padding: 0.125rem 0 !important;
                margin-right: 0.5rem !important;
            }

            /* Adjust toggler for small screens */
            .navbar-toggler {
                padding: 0.25rem 0.5rem !important;
                font-size: 1rem !important;
                border-width: 1px !important;
            }

            .navbar-toggler .fa-bars {
                font-size: 16px !important;
            }
        }

        /* Extra small screens (360px and below) */
        @media (max-width: 360px) {
            #logo-text {
                font-size: 20px !important;
            }

            #logo-text img {
                width: 28px !important;
                margin-right: 3px !important;
            }

            .navbar {
                padding: 5px 8px !important;
            }

            .navbar-brand {
                margin-right: 0.25rem !important;
            }
        }

        /* Tiny screens (320px and below) */
        @media (max-width: 320px) {
            #logo-text {
                font-size: 18px !important;
            }

            #logo-text img {
                width: 25px !important;
                margin-right: 2px !important;
            }

            #logo-text span:first-of-type {
                margin-left: 2px !important;
            }

            .navbar {
                padding: 4px 6px !important;
            }
        }

        /* Ensure proper display on all mobile devices */
        @media (max-width: 991.98px) {
            .navbar-brand h1 {
                margin-bottom: 0 !important;
                line-height: 1.1 !important;
            }

            .container-fluid.position-relative {
                padding: 0 !important;
            }
        }
    </style>
</head>
