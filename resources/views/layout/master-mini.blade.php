<!DOCTYPE html>

<html>
<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <!--<link rel="shortcut icon" href="{{ asset('public//favicon.ico') }}">-->
    <link rel="icon" href='{{ asset("assets_front/new/images/favicon.png") }}' sizes="192x192"/>
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css')}}" media="all">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" media="all">

    <link rel="stylesheet" href="{{asset('assets_front/indexstyle.css')}}">
    <link rel='stylesheet' href='{{asset("assets_front/new/css/main.css")}}' type='text/css' media='all'/>
    <link rel="canonical" href="https://fastukcouriers.co.uk/register">
    <link rel="stylesheet" href="{{ asset('css/customcss/custom.css') }}">

    <!-- end plugin css -->

    <!-- plugin css -->
    @stack('plugin-styles')
    <!-- end plugin css -->

    <!-- common css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" media="all">

    <!-- end common css -->

    @stack('style')
</head>
<body data-base-url="{{url('/')}}">
<section class="lg:mt-0 px-6 sm:px-9 mx-auto hidden md:flex items-center justify-center lg:justify-between"
         style="background-color:white;">
    <!-- Logo -->
    <div class="flex justify-center items-center">
        <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img
                src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="Logo"
                style="width:135px;height:auto; padding: 10px 0;"/></a>
    </div>

    <!-- Contact Info and Menu -->
    <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
        <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
            <a rel="" class="main-site-logo" href="mailto:sales@fastukcouriers.co.uk"
               style="text-decoration:none; color: #aa1818 !important; font-weight: 900; font-size: large;">sales@fastukcouriers.co.uk</a>
        </div>

        <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
            <span style="color:#aa1818 !important;font-weight: 900; font-size: large;">Call: </span>
            <a rel="" href="tel:03333 444 189" style="color:#aa1818 !important;font-weight: 900; font-size: large;">03333
                444 189</a>
            @if(Auth::user())
                <span class="ml-5 header-buttons"><a href="{{url('home')}}" style="text-decoration:none;color:white;">Dashboard</a></span>
            @else
                {{--                            <span class="ml-5 header-buttons">--}}
                {{--                                <span class="animation-button"><a href="{{url('login')}}" class="text-white text-decoration-none" style="text-decoration:none;color:white;">Customer Login</a></span>--}}
                {{--                                <a href="{{url('login')}}" style="color:#AA1818;">Customer Login</a>--}}
                {{--                            </span>--}}
                <span class="ml-5 header-buttons">
                                <span class="animation-button"><a href="{{url('/')}}"
                                                                  style="color:white;text-decoration:none;">Get A Quote</a></span>
                                <a href="{{url('/')}}" style="color:#AA1818;">Get A Quote</a>
                            </span>
            @endif
        </div>
    </div>
</section>


<!-- Mobile Header -->
<section class="flex md:hidden justify-between p-6 items-center">
    <!-- Logo -->
    <div class="flex justify-center">
        <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="244" height="48"
                                                                                 src="{{url('images/fast_uk_couriers.png')}}"
                                                                                 class="custom-logo"
                                                                                 alt="We Are Same Day Logo"/></a>
    </div>

    <div class="flex">
        <a rel="" class="ml-4 mr-2" href="mailto:info@fastukcouriers.co.uk">
            <img src="https://wearesameday.com/wp-content/themes/jyst-theme/media/envelope.svg"/>
        </a>

        <a rel="" href="tel:03333444189">
            <img src="https://wearesameday.com/wp-content/themes/jyst-theme/media/call.svg"/>
        </a>
    </div>
</section>
<div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        @yield('content')
    </div>
</div>

<!-- base js -->
<script src="{{asset('js/app.js')}}"></script>
<!-- end base js -->

<!-- plugin js -->
@stack('plugin-scripts')
<!-- end plugin js -->

@stack('custom-scripts')
</body>
@yield('customJs')
</html>
