<head>
    <meta charset="utf-8">
    <title>@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    <meta name="author" content="NIRVA Technoplast Private Limited">
    <meta name="description" content="@yield('seo_description', 'Precision plastic engineering and manufacturing of medical-grade nebulizer masks, respiratory-care products and custom plastic components. Adult & pediatric nebulizer masks, high-volume production and OEM / private-label supply.')">
    <meta name="keywords" content="@yield('seo_keywords', 'precision injection moulding, nebulizer masks, medical-grade manufacturing, OEM, private label, respiratory care, plastic engineering, NIRVA Technoplast')">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('constants.brand_name') }} {{ config('constants.brand_sub') }}">
    <meta property="og:title" content="@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')">
    <meta property="og:description" content="@yield('seo_description', 'Precision plastic engineering and manufacturing of medical-grade nebulizer masks, respiratory-care products and custom plastic components.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('front/img/carousel-1.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')">
    <meta name="twitter:description" content="@yield('seo_description', 'Precision plastic engineering and manufacturing of medical-grade nebulizer masks, respiratory-care products and custom plastic components.')">
    <meta name="twitter:image" content="{{ asset('front/img/carousel-1.jpg') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "NIRVA Technoplast Private Limited",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/favicon/favicon-96x96.png') }}",
        "description": "Precision plastic engineering and manufacturing solutions for healthcare and industry, including medical-grade nebulizer masks and OEM / private-label supply.",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "{{ config('constants.phone') }}",
            "contactType": "sales",
            "email": "{{ config('constants.email') }}",
            "areaServed": "IN"
        },
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "61, Shreeji Industrial Park-3, Navagam, Kamrej",
            "addressLocality": "Surat",
            "postalCode": "394180",
            "addressRegion": "Gujarat",
            "addressCountry": "IN"
        }
    }
    </script>
    @stack('schema')
</head>
