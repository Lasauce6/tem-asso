<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href={{ asset('asset/css/vendor.css') }}>
    <link rel="stylesheet" href={{ asset('asset/css/styles.css') }}>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('favicon-32x32.png') }}>
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('favicon-16x16.png') }}>
    <link rel="manifest" href={{ asset('site.manifest') }}>
    <link rel="shortcut icon" href={{ asset('favicon.ico') }}>
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content={{ asset('browserconfig.xml') }}>
    <meta name="theme-color" content="#ffffff">

</head>

<body id="top">
<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- page wrap -->
<div id="page" class="s-pagewrap">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>

<!-- Java Script
================================================== -->
<script src={{ asset('asset/js/plugins.js') }}></script>
<script src={{ asset('asset/js/main.js') }}></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5KZPFBFY5P"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-5KZPFBFY5P');
</script>
@yield('scripts')
</body>
