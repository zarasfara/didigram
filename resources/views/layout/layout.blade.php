<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com">

    <title>DigiGram - @yield('title')</title>

    <meta name="name" content="@yield('ceo_name')">
    <script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('components.header')

@yield('content')

@include('components.footer')


<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

<script src="{{asset('/js/google-maps.js')}}"></script>

<script src="{{asset('/js/theme.js')}}"></script>


</body>
</html>
