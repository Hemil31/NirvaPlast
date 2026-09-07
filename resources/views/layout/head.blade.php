<head>
    <meta charset="utf-8">
    <title>@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    <meta name="author" content="NIRVA Technoplast Private Limited">
    <meta name="description" content="@yield('seo_description', 'NIRVA Technoplast - precision injection moulding and plastic engineering for every industry. Precision moulding, mould development, CNC machining, custom plastic components, high-volume production and OEM / private-label supply.')">
    <meta name="keywords" content="@yield('seo_keywords', 'precision injection moulding, plastic engineering, custom plastic components, mould development, CNC machining, high-volume injection moulding, OEM manufacturing, private label manufacturing, contract manufacturing, plastic component manufacturer, NIRVA Technoplast')">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.nirvatechnoplast.in{{ request()->path() === '/' ? '' : '/' . request()->path() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('constants.brand_name') }} {{ config('constants.brand_sub') }}">
    <meta property="og:title" content="@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')">
    <meta property="og:description" content="@yield('seo_description', 'Precision injection moulding and plastic engineering - precision moulding, mould development, CNC machining and custom plastic components.')">
    <meta property="og:url" content="https://www.nirvatechnoplast.in{{ request()->path() === '/' ? '' : '/' . request()->path() }}">
    <meta property="og:image" content="{{ asset('front/img/carousel-1.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('seo_title', config('constants.company_name') . ' | Precision Plastic Engineering Solutions')">
    <meta name="twitter:description" content="@yield('seo_description', 'Precision injection moulding and plastic engineering - precision moulding, mould development, CNC machining and custom plastic components.')">
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
        "description": "NIRVA Technoplast - precision injection moulding and plastic engineering for every industry. Precision moulding, mould development, CNC machining, custom plastic components, high-volume production and OEM / private-label supply.",
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

    <!-- LocalBusiness Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "NIRVA Technoplast Private Limited",
        "url": "https://www.nirvatechnoplast.in",
        "logo": "{{ asset('images/favicon/favicon-96x96.png') }}",
        "description": "Precision injection moulding for medical-grade nebulizer masks, custom plastic components & OEM private-label supply.",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "61, Shreeji Industrial Park-3, Navagam, Kamrej",
            "addressLocality": "Surat",
            "postalCode": "394180",
            "addressRegion": "Gujarat",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "{{ config('constants.phone') }}",
            "contactType": "sales",
            "email": "{{ config('constants.email') }}"
        },
        "sameAs": [
            "{{ config('constants.social_links.facebook') }}",
            "{{ config('constants.social_links.youtube') }}",
            "{{ config('constants.social_links.instagram') }}",
            "{{ config('constants.social_links.twitter') }}",
            "{{ config('constants.social_links.linkedin') }}"
        ]
    }
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>
