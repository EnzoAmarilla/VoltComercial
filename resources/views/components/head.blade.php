<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @yield('meta_description')

    <meta name="keywords" content="">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
    <!-- CSS -->
    <link href="{{ asset('/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/sal/sal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" />
    <!-- Fonts/Icons -->
    <link href="{{ asset('/plugins/font-awesome/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/plugins/themify/themify-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    {{-- Our style.css --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
</head>
