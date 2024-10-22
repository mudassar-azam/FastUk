@php
    $data = DB::table('homepages')->first();
@endphp
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title>{{$data->SEOTitle}}</title>
    <meta name="description" content="{{$data->metaDescription}}" />
    <!-- <link rel='stylesheet' id='wp-block-library-css'  href='https://wearesameday.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3' type='text/css' media='all' /> -->
    <link rel='stylesheet' href="{{ asset('assets_front/new/css/contact7.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets_front/new/css/cookie.css") }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset("assets_front/new/css/gdpr.css") }}' type='text/css' media='all' />
    <link rel="stylesheet" href='{{ asset("assets_front/new/css/style.css") }}' type='text/css' media='all' />

    <!-- <link rel='stylesheet' id='select2-css'  href='https://wearesameday.com/wp-content/themes/jyst-theme/select2/select2.min.css?ver=1.0' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='{{ asset("assets_front/new/css/main.css") }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset("assets_front/new//js//jquery.js") }}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset("assets_front/new//js/jquery_migrate.js") }}' id='jquery-migrate-js'>
    </script>
    <script type='text/javascript' id='cookie-law-info-js-extra'></script>
    <script type='text/javascript' src='{{ asset("assets_front/new//js/cookie.js") }}'></script>

    <link rel="icon" href='{{ asset("assets_front/new/images/favicon.png") }}' sizes="192x192" />

    <style type="text/css" id="wp-custom-css">
        .custom-overlay-text {
            background-color: rgba(255, 255, 255, .9);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets_front/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets_front/indexstyle.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{--            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places">
    </script>
</head>

<body class="home page-template page-template-home page-template-home-php page page-id-43 wp-custom-logo">



    @include('include.models')




    <section
        class="mt-5 lg:mt-0 px-6 sm:px-9 mx-auto large-hidden md:flex items-center justify-center lg:justify-between"
        style="background-color:#aa1818;">
        <!-- Logo -->
        <div class="flex justify-center items-center">
            <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img
                    src="{{ url('images/flogo.png') }}" class="custom-logo" alt="Logo"
                    style="width:150px;height:auto;" /></a>
        </div>

        <!-- Contact Info and Menu -->
        <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
            <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <a rel="" class="main-site-logo"
                    href="mailto:sales@fastukcouriers.co.uk">sales@fastukcouriers.co.uk</a>
            </div>

            <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <span style="color:white;">Call: </span>
                <a rel=""href="tel:03333444189" style="color:white;">03333 444 189</a>
                @if (Auth::user())
                    <span class="ml-5 header-buttons"><a href="{{ url('home') }}">Dashboard</a></span>
                @else
                    <span class="ml-5 header-buttons">
                        <span class="animation-button"><a href="{{ url('login') }}">Customer Login</a></span>
                        <a href="{{ url('login') }}">Customer Login</a>
                    </span>
                @endif
                <span class="ml-5 header-buttons">
                    <span class="animation-button"><a href="{{ url('quote') }}">Get A Quote</a></span>
                    <a href="{{ url('quote') }}">Get A Quote</a>
                </span>
            </div>
        </div>
    </section>
    <!-- Mobile Header -->
    <section class="m-header justify-between p-6 items-center">
        <!-- Logo -->
        <div class="flex justify-center">
            <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="244"
                    height="48" src="{{ url('images/flogo.png') }}" class="custom-logo"
                    alt="We Are Same Day Logo" /></a>
        </div>

        <div class="flex">
            <a rel="" class="ml-4 mr-2" href="mailto:info@fastukcouriers.co.uk">
                <img src="https://wearesameday.com/wp-content/themes/jyst-theme/media/envelope.svg" />
            </a>

            <a rel="" href="tel:03333444189">
                <img src="https://wearesameday.com/wp-content/themes/jyst-theme/media/call.svg" />
            </a>
        </div>
    </section>

    <section class="w-full py-10 sm:py-32 md:py-40 custom-bg-cover"
        style="background:url({{ asset('homepage') }}/{{$data->section1Image}});position:relative; height:580px !important;">

        <div
            class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2 m-button-section">
            <a href="{{ url('login') }}" class="m-button-banner">Customer Login</a>
            <a href="{{ url('quote') }}" class="m-button-banner">Get A Quote</a>
        </div>


    </section>
    <!-- ============================== MAIN TEXT =============================== -->
    <section style="padding: 50px 0;">
        <div style="width: 85%;margin:0 auto; text-align: center;">
            <p style="font-size: 3rem;font-weight: 600;">What We Do?</p>
            <p style="font-size:1.9rem;font-weight: 600;">Fully Dedicated Transport & Delivery Solutions For A Wide Range Of Industries.</p>
            <p>A fully dedicated transportation and delivery service provider operating all throughout the UK and Europe. Our aim is to provide simple, cost effective and reliable solutions to any type of logistical concern that you may come across in your business or industry. We operate with an extremely reliable transport network, with access to thousands of vehicles on a daily basis including anything from small vans through to lorries of all sizes and capacities as well as specialist vehicles such as HIAB, Cranes, Moffetts and Flatbeds.</p>
        </div>


    </section>

     <!-- ============================== LEFT TEXT - RIGHT IMAGE =============================== -->

     <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 mt-5">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap" style="flex-direction: row-reverse;">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="relative lg:max-w-md">
                        <img src="{{ asset('assets_front/images/aboutus/van.jpg') }}" alt="aboutimage"
                                class="relative z-10 object-cover w-full rounded h-96">
                        <div
                            class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-red-500 rounded shadow dark:border-red-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                            <p class="text-lg font-semibold md:w-72">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="absolute top-0 left-0 w-16 h-16 text-red-700 dark:text-gray-300 opacity-10"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                    </path>
                                </svg> Dedicated Transport Services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                    <div class="pl-4 mb-6 border-l-4 border-red-500 ">
                        <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Who we are?</span>
                        <h1 class="mt-2 text-2xl font-black text-black-700 md:text-5xl dark:text-gray-300">
                            A Fully Dedicated Transport Service Provider.
                        </h1>
                    </div>
                    <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                        What does this mean?
                        <br/>
                        We provide a fully dedicated vehicle and driver for your consignment only. After the collection, all consignments, no matter what type of service you choose, is collected and delivered direct to the respective consignee via the most efficient routes and without any unscheduled stops.
                        <br />
                        We are part of a huge transport network with access to thousands of vehicles on a daily basis including weekends. This allows us to collect goods as quickly as within an hour of booking confirmation (vans only) from anywhere in the country and deliver them at the fastest road transit times.
                        <br />
                        We are therefore perfectly suited to carry out any urgent and time sensitive consignments.
                    </p>
                    <a href="#"
                        class="px-4 py-2 text-gray-100 bg-red-500 rounded dark:bg-red-400 dark:hover:bg-red-500 hover:bg-red-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================== LEFT IMAGE - RIGHT TEXT =============================== -->

    <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="relative lg:max-w-md">
                        <img src="{{ asset('assets_front/images/aboutus/van2.jpg') }}" alt="aboutimage"
                                class="relative z-10 object-cover w-full rounded h-96">
                        <div
                            class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-red-500 rounded shadow dark:border-red-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                            <p class="text-lg font-semibold md:w-72">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="absolute top-0 left-0 w-16 h-16 text-red-700 dark:text-gray-300 opacity-10"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                    </path>
                                </svg> Your Transport Solution
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                    <div class="pl-4 mb-6 border-l-4 border-red-500 ">
                        <h1 class="mt-2 text-2xl font-black text-black-700 md:text-5xl dark:text-gray-300">
                            We Find Transport & Delivery Solutions For You.
                        </h1>
                    </div>
                    <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Whatever your transportation and delivery requirements are we aim to find the right solution for you using our vast network of vehicles, drivers and experienced transport team.
                        <br/>
                        Our aim is to make all your logistical needs simple by catering for and providing a wide range of services including, Same Day Delivery, Dedicated European Transport, Temperature Controlled Vehicles, AOG Situations, Hazardous Freight, FORS Transport as well as providing specialist vehicles such as Flatbeds, Hiabs and Moffetts.
                    </p>
                    <a href="#"
                        class="px-4 py-2 text-gray-100 bg-red-500 rounded dark:bg-red-400 dark:hover:bg-red-500 hover:bg-red-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

     <!-- ============================== LEFT TEXT - RIGHT IMAGE =============================== -->

     <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap" style="flex-direction: row-reverse;">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="relative lg:max-w-md">
                        <img src="{{ asset('assets_front/images/aboutus/van3.jpg') }}" alt="aboutimage"
                                class="relative z-10 object-cover w-full rounded h-96">
                        <div
                            class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-red-500 rounded shadow dark:border-red-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                            <p class="text-lg font-semibold md:w-72">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="absolute top-0 left-0 w-16 h-16 text-red-700 dark:text-gray-300 opacity-10"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                    </path>
                                </svg> Tailored Delivery Solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                    <div class="pl-4 mb-6 border-l-4 border-red-500 ">
                        <h1 class="mt-2 text-2xl font-black text-black-700 md:text-5xl dark:text-gray-300">
                            Delivery Solutions To Match Your Demands.
                        </h1>
                    </div>
                    <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                        We understand that running a business can be a fluid situation from hour-to-hour and day-to-day. Therefore, we have a wide range of delivery solutions to match your specific needs including Timed Deliveries, Multi Drops, Vehicle & Driver Day Hires and 2-Man Delivery Crew.
                        <br/>
                        No matter what your industry, our team of experts will be on hand to answer all your queries and advise the best possible solution for your consignment.
                    </p>
                    <a href="#"
                        class="px-4 py-2 text-gray-100 bg-red-500 rounded dark:bg-red-400 dark:hover:bg-red-500 hover:bg-red-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- ============================== LEFT TEXT - RIGHT IMAGE =============================== -->

    <section class="flex items-center bg-stone-100 xl:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="relative lg:max-w-md">
                        <img src="https://i.postimg.cc/rF0MKfBV/pexels-andrea-piacquadio-3760263.jpg" alt="aboutimage"
                            class="relative z-10 object-cover w-full rounded h-96">
                        <div
                            class="absolute bottom-0 right-0 z-10 p-8 bg-white border-4 border-red-500 rounded shadow dark:border-red-400 lg:-mb-8 lg:-mr-11 sm:p-8 dark:text-gray-300 dark:bg-gray-800 ">
                            <p class="text-lg font-semibold md:w-72">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="absolute top-0 left-0 w-16 h-16 text-red-700 dark:text-gray-300 opacity-10"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z">
                                    </path>
                                </svg> Successfully Providing business solutions from 25 years
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-6 mb-10 lg:w-1/2 lg:mb-0 ">
                    <div class="pl-4 mb-6 border-l-4 border-red-500 ">
                        <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Who we are?</span>
                        <h1 class="mt-2 text-3xl font-black text-gray-700 md:text-5xl dark:text-gray-300">
                            About Us
                        </h1>
                    </div>
                    <p class="mb-6 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Fast UK Courier is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you.
                        You can unsubscribe from these communications at any time. By clicking submit, you consent to allow Fast UK Courier to store and process the personal information submitted above to provide you the content requested.
                    </p>
                    <a href="#"
                        class="px-4 py-2 text-gray-100 bg-red-500 rounded dark:bg-red-400 dark:hover:bg-red-500 hover:bg-red-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== MAIN SERVICES ===================== -->
    <section class="services px-6 pt-8 pb-8 sm:pt-6 lg:pt-12 " style="background-color: transparent;">
        <div class="custom-services-container text-center" style="max-width: 1200px!important;">
            <h2 class="text-3xl sm:text-4xl font-bold">Reasons To Choose Fast UK Courier.</h2>
            <!-- <h6 class="mt-6 text-white md:px-36">
                <p class="text-white">
                    {{$data->servicesHeadDesription}}
                </p>
            </h6> -->

            <div class="boxes flex flex-wrap mt-8">
                <style>
                    .custom-services-container .boxes .box-item{
                        width: 24%!important;
                        justify-content: flex-start;
                    }
                    .custom-services-container .boxes .box-item img{
                        transform: scale(1.4);
                    }
                    .custom-services-container .boxes .box-item h6{
                        font-size: 0.8rem;
                    }
                    @media only screen and (max-width: 1000px){
                     .custom-services-container .boxes .box-item{
                        width: 33%!important;
                     }
                     .custom-services-container .boxes .box-item h2{
                        font-size: 0.8rem;
                    }
                    .custom-services-container .boxes .box-item h6{
                        font-size: 0.6rem;
                    }
                    }
                    @media only screen and (max-width: 600px){
                     .custom-services-container .boxes .box-item{
                        width: 49%!important;
                     }
                     .custom-services-container .boxes .box-item h2{
                        font-size: 0.6rem;
                    }
                    .custom-services-container .boxes .box-item h6{
                        font-size: 0.5rem;
                    }
                    }
                </style>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design2.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Fully Dedicated Service</h2>
                    <h6 class="mt-1" >Fully dedicated to your load only, which ensures they are delivered safely, securely & quickly.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design3.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Collect Within The Hour</h2>
                    <h6 class="mt-1" >We aim to have a vehicle at collection within an hour of booking confirmation.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design4.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Tracked Vehicles</h2>
                    <h6 class="mt-1" >Point to point tracking and proof of delivery via email on completion of all consignments.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design5.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Bespoke Service</h2>
                    <h6 class="mt-1" >Whatever and whenever your requirements are, we always aim to go the extra mile.</h6>
                </div>

                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design6.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Competitive Rates</h2>
                    <h6 class="mt-1" >Fully dedicated to your load only, which ensures they are delivered safely, securely & quickly.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design7.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Large Fleet</h2>
                    <h6 class="mt-1" >A huge and  reliable transport network which allows us access to thousands of vehicles on a daily basis.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design9.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">Nationwide Service</h2>
                    <h6 class="mt-1" >We can collect and deliver from anywhere in the UK and Europe.</h6>
                </div>
                <div  style="background: transparent!important;min-height: fit-content;" class="box-item relative flex justify-center flex-col px-6 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;" src="{{ asset('assets_front/images/aboutus/design8.png') }}"  alt="">
                    <h2 class="text-md mt-2 font-bold uppercase" style="color: #AA1818;">24/7 Service</h2>
                    <h6 class="mt-1" >We collect and deliver anytime during the day and through the night.</h6>
                </div>

            </div>

        </div>
    </section>
    <br/>
    <style>
            .line-divider {
                margin-top: 10px;
                font: 150% "Open Sans", Arial, sans-serif;
                color: #000;
                text-align: center;
                position: relative;
                /* margin-bottom: 60px; */
            }

            .line-divider:before {
                content: "";
                display: block;
                border-top: solid 2px #000;
                width: 100%;
                height: 2px;
                position: absolute;
                top: 17px;
                z-index: 1;
            }

            .line-divider .span-line-divider {
                background: #fff;
                padding: 0 20px;
                position: relative;
                text-transform: uppercase;
                z-index: 5;
            }
    </style>
    <h2 class="line-divider "><span class="span-line-divider ">Get in touch</span></h2>
    <br/>
    <!-- ahmar work -->
    <section class="w-full custom-form-container mt-72 lg:mt-0" style="padding:0 0!important;background-color:#ffffff!important;">
        <div class="container lg:flex" style="flex-direction: row-reverse;" >
            <div class="lg:w-7/12 p-16 pb-0" >
                <div role="form" class="wpcf7" id="wpcf7-f98-o1" lang="en-US" dir="ltr" style="position: relative;transform: translate(0, -50%);top: 50%;">
                    <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                    </div>
                    <!--<form action="/#wpcf7-f98-o1" method="post" class="wpcf7-form init" novalidate="novalidate"-->
                    <!--    data-status="init">-->
                    <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="98" />
                    <input type="hidden" name="_wpcf7_version" value="5.5.6" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f98-o1" />
                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                    <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                    </div>
                    <div class="custom-cf7-form">
                    <h2 class="text-3xl sm:text-4xl font-white">Send us a message</h2>
                    <form action="{{ url('/send-message') }}" method="POST" >
                        {{ csrf_field() }}
                        <div class="sm:flex justify-between mb-4">
                            <label class="flex-1 sm:mx-2 input-container">
                            <span class="wpcf7-form-control-wrap your-name">
                            <input type="text" name="name" value="" size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                aria-required="true" aria-invalid="false" placeholder="Name" />
                            </span>
                            </label>
                            <br />
                            <label class="flex-1 sm:mx-2 input-container">
                            <span class="wpcf7-form-control-wrap your-email">
                            <input type="email" name="email" value="" size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                aria-required="true" aria-invalid="false" placeholder="Email" />
                            </span>
                            </label>
                            <br />
                            <label class="flex-1 sm:mx-2 input-container">
                            <span class="wpcf7-form-control-wrap phone">
                            <input type="number" name="phone" value=""
                                class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                aria-invalid="false" placeholder="Phone number" />
                            </span>
                            </label>
                        </div>
                        <p>
                            <label class="sm:mx-2 input-container">
                            <span class="wpcf7-form-control-wrap your-message">
                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                aria-invalid="false" placeholder="How can we help?"></textarea>
                            </span>
                            </label>
                            <br />
                            <span class="wpcf7-form-control-wrap acceptance-510">
                            <span class="wpcf7-form-control wpcf7-acceptance">
                            <span class="wpcf7-list-item">
                            <label>
                            <input type="checkbox" name="acceptance" value="1"
                                aria-invalid="false" />
                            <span class="wpcf7-list-item-label">
                            By using this form you agree to the handling and storage of your
                            data by this website.
                            </span>
                            </label>
                            </span>
                            </span>
                            </span>
                            <br />
                            <button type="submit" class="wpcf7-form-control has-spinner send-submit">Send Message</button>
                    </form>
                    </p>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <div class="lg:w-5/12">
                <img src="{{ asset('footer-left2.avif') }}"
                    style="height: 85vh;width: 100%;object-fit: cover;"
                    />
            </div>
        </div>
    </section>
    <!-- ahmar work end -->
    @include('frontfooter')

    <!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true">
        <span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">
                    We use cookies on our website to give you the most relevant experience by remembering your
                    preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL the cookies.
                </div>
                <div class="cli-bar-btn_container">
                    <a role='button' class="cli_settings_button" style="margin:0px 10px 0px 5px">Cookie settings</a>
                    <a role='button' data-cli_action="accept" id="cookie_action_close_header"
                        class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button">ACCEPT</a>
                </div>
            </div>
        </span>
    </div>
    <!-- <div id="cookie-law-info-again" data-nosnippet="true">
        <span id="cookie_hdr_showagain">Manage consent</span>
    </div> -->
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
        aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">
                                            This website uses cookies to improve your experience while you navigate
                                            through the website. Out of these, the cookies that are categorized as
                                            necessary are stored on your browser as they are essential for the working
                                            of basic functionalities of the website. We also use third-party cookies
                                            that help us analyze and understand how you use this website. These cookies
                                            will be stored in your browser only with your consent. You also have the
                                            option to opt-out of these cookies. But opting out of some of these cookies
                                            may affect your browsing experience.
                                        </div>
                                    </div>
                                    <a class="cli-privacy-readmore" aria-label="Show more" role="button"
                                        data-readmore-text="Show more" data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary </a>
                                        <div class="wt-cli-necessary-checkbox">
                                            <input type="checkbox" class="cli-user-preference-checkbox"
                                                id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <div class="wt-cli-cookie-description">
                                                Necessary cookies are absolutely essential for the website to function
                                                properly. These cookies ensure basic functionalities and security
                                                features of the website, anonymously.
                                                <table class="cookielawinfo-row-cat-table cookielawinfo-winter">
                                                    <thead>
                                                        <tr>
                                                            <th class="cookielawinfo-column-1">Cookie</th>
                                                            <th class="cookielawinfo-column-3">Duration</th>
                                                            <th class="cookielawinfo-column-4">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checbox-analytics</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Analytics".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checbox-functional</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by
                                                                GDPR cookie consent to record the user consent for the
                                                                cookies in the category "Functional".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checbox-others</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category "Other.
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-necessary</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookies is used to store
                                                                the user consent for the cookies in the category
                                                                "Necessary".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-performance</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Performance".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">viewed_cookie_policy
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by the
                                                                GDPR Cookie Consent plugin and is used to store whether
                                                                or not user has consented to the use of cookies. It does
                                                                not store any personal data.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="functional" data-toggle="cli-toggle-tab">
                                            Functional </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-functional"
                                                class="cli-user-preference-checkbox" data-id="checkbox-functional" />
                                            <label for="wt-cli-checkbox-functional" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Functional</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="functional">
                                            <div class="wt-cli-cookie-description">
                                                Functional cookies help to perform certain functionalities like sharing
                                                the content of the website on social media platforms, collect feedbacks,
                                                and other third-party features.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="performance" data-toggle="cli-toggle-tab">
                                            Performance </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-performance"
                                                class="cli-user-preference-checkbox" data-id="checkbox-performance" />
                                            <label for="wt-cli-checkbox-performance" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Performance</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="performance">
                                            <div class="wt-cli-cookie-description">
                                                Performance cookies are used to understand and analyze the key
                                                performance indexes of the website which helps in delivering a better
                                                user experience for the visitors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="analytics" data-toggle="cli-toggle-tab">
                                            Analytics </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-analytics"
                                                class="cli-user-preference-checkbox" data-id="checkbox-analytics" />
                                            <label for="wt-cli-checkbox-analytics" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Analytics</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="analytics">
                                            <div class="wt-cli-cookie-description">
                                                Analytical cookies are used to understand how visitors interact with the
                                                website. These cookies help provide information on metrics the number of
                                                visitors, bounce rate, traffic source, etc.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="advertisement" data-toggle="cli-toggle-tab">
                                            Advertisement </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-advertisement"
                                                class="cli-user-preference-checkbox"
                                                data-id="checkbox-advertisement" />
                                            <label for="wt-cli-checkbox-advertisement" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Advertisement</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="advertisement">
                                            <div class="wt-cli-cookie-description">
                                                Advertisement cookies are used to provide visitors with relevant ads and
                                                marketing campaigns. These cookies track visitors across websites and
                                                collect information to provide customized ads.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="others" data-toggle="cli-toggle-tab">
                                            Others </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-others"
                                                class="cli-user-preference-checkbox" data-id="checkbox-others" />
                                            <label for="wt-cli-checkbox-others" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Others</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="others">
                                            <div class="wt-cli-cookie-description">
                                                Other uncategorized cookies are those that are being analyzed and have
                                                not been classified into a category as yet.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cli-modal-footer">
                    <div class="wt-cli-element cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0"
                                        data-cli-action="accept"
                                        class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                        &amp; ACCEPT</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>


    <script type='text/javascript' src='{{ asset("assets_front/new/js/contact7.js") }}'></script>
    <script type='text/javascript' src='{{ asset("assets_front/new/js/select2.js") }}'></script>
    <script type='text/javascript' src='{{ asset("assets_front/new/js/main.js") }}'></script>

    <section class="dark-box">
        <div class="container pt-6 md:pt-0 mx-auto md:flex justify-between items-center">
            <div class="md:w-1/2 text-base text-light text-white text-center md:text-left">Copyright © 2022 Fastuk. All
                rights reserved. | <a href="/terms-conditions">terms & conditions</a> | <a
                    href="https://wearesameday.com/cookie-policy/">Cookie Policy</a> </div>
            <div class="md:w-1/2 mt-2 md:mt-0 flex items-center justify-center md:justify-end">
                <h6 class="text-light text-white mr-5">Powered by</h6>
                <a href="https://canvasolutions.co.uk/" class="text-white">Canva Solutions</a>
            </div>
        </div>
    </section>

    {{--            <script type='text/javascript'> --}}
    {{--                window.__lo_site_id = 166349; --}}
    {{--                    (function() { --}}
    {{--                        var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true; --}}
    {{--                        wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js'; --}}
    {{--                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s); --}}
    {{--                    })(); --}}
    {{--            </script> --}}


      @if(session('success'))
    <div style="position: fixed; top: 10px; left: 10px; background-color: #28a745; color: #ffffff; padding: 10px;">
        {{ session('success') }}
    </div>
@endif

</body>

</html>




@if (session('guestbooked'))
    <script>
        alert('fsdf');
    </script>
@endif
<script>
    $("#navDropdown").hide();
    $("#close").hide();
    $("#smsBox").hide();
    $(document).ready(function() {
        $('.service').on('click', function() {
            $("#main-dropdown-one").slideToggle("fast");
            $("#main-dropdown-two").hide("fast");
        })
    });
    $(document).ready(function() {
        $('.industries').on('click', function() {
            $("#main-dropdown-two").slideToggle("fast");
            $("#main-dropdown-one").hide("fast");
        })
    });
    $(document).ready(function() {
        $('.first-button').on('click', function() {
            $('.animated-icon1').toggleClass('open');
        });
    });
    $(document).ready(function() {
        $("#navButton").on('click', function() {
            $("#navDropdown").slideToggle();
        });
    });
    $(document).ready(function() {
        $("#sms").on('click', function() {
            $("#smsBox").slideToggle("fast");
            $("#close").toggle("fast");
            $("#smsIcon").toggle("fast");
        });
    });
</script>
<script>
    $('.select_van').click(function() {


        $('#final_price').val($(this).data('price') * $('#distance').val());
        $('.final_price').val($(this).data('price') * $('#distance').val());

    });


    // window.onscroll = function() {scrollFunction()};
    // let ch = document.getElementById("navbar");

    // function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //         ch.classList.add("headone");
    //     } else {
    //         ch.classList.remove("headone");
    //     }
    // }

    function getformvalues() {


        var form = 'msform';
        let from = document.forms[form]["from"].value;
        let to = document.forms[form]["to"].value;
        let b_date = document.forms[form]["b_date"].value;
        let p_time = document.forms[form]["p_time"].value;
        var vehicle = $('input:radio:checked').attr('id');
        var name1 = $('#name1').val();
        var ph1 = $('#ph1').val();
        var address1 = $('#address1').val();
        var city1 = $('#city1').val();
        var name2 = $('#name2').val();
        var ph2 = $('#ph2').val();
        var aaddress2 = $('#aaddress2').val();
        var city2 = $('#city2').val();
        var distance = $('#distance').val();

        // let data = $('#msform').serialize();

        $.ajax({
            type: "POST",
            url: '{{ route('create.session') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                distance: distance,
                from: from,
                to: to,
                b_date: b_date,
                p_time: p_time,
                vehicle: vehicle,
                name1: name1,
                ph1: ph1,
                address1: address1,
                city1: city1,
                name2: name2,
                ph2: ph2,
                aaddress2: aaddress2,
                city2: city2
            },
            cache: false,
            success: function(response) {

            }
        });

        return true;



    }
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        var animalType = document.getElementById("myBtn2").getAttribute("data-check");


        setProgressBar(current);


        $(".next").click(function() {



            var from = $('#locationTextField').val();
            var to = $('#locationTextField2').val();
            var b_date = $('#b_date').val();
            var p_time = $('#p_time').val();

            if (from == '' || b_date == '') {

                swal("Booking Information Missing..!", "", "error");
                exit();

            } else {}

            if (to == '') {

                $('.est_cost').each(function() {


                    $(this).html('Min:$7');
                });
                $('.distance_place').html('No-');

            } else {
                $('.distance_place').html('calc..');

                $.ajax({
                    type: "POST",
                    url: '{{ route('get.distance') }}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        from: from,
                        to: to,
                        submit: 'submit'
                    },
                    cache: false,
                    success: function(dist) {
                        // alert(dist);
                        if (dist != '') {

                            let distance = parseInt(dist);

                            $('.est_cost').each(function() {

                                let each_cost = $(this).data('price');
                                let cost = parseInt(each_cost);
                                let total = distance * cost;
                                $(this).html(total);
                            });

                            $('.distance_place').html(distance);
                            document.getElementById('distance').value = distance;
                        } else {
                            exit();
                        }
                    }
                });
            }




            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });



        $(".next2").click(function(event) {

            var numberOfChecked = $('input:radio:checked').length;



            if (numberOfChecked < 1) {

                swal("Please Choose Vehicle", "", "error");
            } else {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);


            }

        });


        $(".next3").click(function(event) {

            var numberOfChecked = $('input:radio:checked').length;
            var name1 = $('#name1').val();
            var ph1 = $('#ph1').val();
            var address1 = $('#address1').val();
            var city1 = $('#city1').val();
            var name2 = $('#name2').val();
            var ph2 = $('#ph2').val();
            var aaddress2 = $('#aaddress2').val();
            var city2 = $('#city2').val();

            if (numberOfChecked < 1 || name1 == '' || ph1 == '' || address1 == '' || city1 == '' ||
                name2 == '' || ph2 == '' || aaddress2 == '' || city2 == '') {
                swal("Fill All Fields", "", "error");
            } else {

                getformvalues();



                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);


            }

        });











        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }




        $(".submit").click(function() {
            return false;
        })

    });

    function init() {
        var input = document.getElementById('locationTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        var input2 = document.getElementById('locationTextField2');
        var autocomplete = new google.maps.places.Autocomplete(input2);
    }

    google.maps.event.addDomListener(window, 'load', init);

    // Get the modal
    var modal = document.getElementById("myModal");

    var guestModal = document.getElementById("guestModal");

    var paypalModal = document.getElementById("paypalModal");


    // Get the button that opens the modal stripe payment
    var btn = document.getElementById("myBtn");

    // Get the button that opens the modal paypal
    var btn1 = document.getElementById("myBtn1");


    var btn2 = document.getElementById("myBtn2");


    // login model
    var loginmodel = document.getElementById("loginmodel");

    var btn3 = document.getElementById("myBtn3");


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close2")[0];
    var span3 = document.getElementsByClassName("close3")[0];

    var firstnext = document.getElementById("firstnext");
    // When the user clicks the button, open the modal
    btn.onclick = function(e) {
        e.preventDefault();
        modal.style.display = "block";
    }
    btn1.onclick = function(e) {
        e.preventDefault();
        paypalModal.style.display = "block";

    }
    btn2.onclick = function(e) {
        e.preventDefault();
        var animalType = $("#data-check").val();
        if (animalType != '') {


            $('#msform').submit();
            // firstnext.style.display = "block";
            // btn2.style.display = "none";
            // btn.style.display = "none";
            // btn1.style.display = "none";
            // btn3.style.display = "none";

            {{-- $.ajax({ --}}
            {{--    type: "get", --}}
            {{--    url:'{{route("book.byguest")}}', --}}
            {{--    data: { --}}
            {{--        "_token": "{{ csrf_token() }}"}, --}}
            {{--    cache: false, --}}
            {{--    success: function(data){ --}}

            {{--        swal("Successfully Login!","","success"); --}}


            {{--    }, --}}
            {{--    error: function (data) { --}}

            {{--    } --}}
            {{-- }); --}}

        } else {
            guestModal.style.display = "block";
        }
    }
    btn3.onclick = function(e) {
        e.preventDefault();
        loginmodel.style.display = "block";

    }

    // When the user clicks on <span> (x), close the modal
    function hidestripe() {

        modal.style.display = "none";
    }

    function hidepaypal() {

        paypalModal.style.display = "none";
    }
    span2.onclick = function(e) {
        e.preventDefault();
        guestModal.style.display = "none";
    }
    span3.onclick = function(e) {
        e.preventDefault();
        loginmodel.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            guestModal.style.display = "none";
        }
    }



    function login(e) {

        e.preventDefault();
        var txt = '';
        var email = $('#email').val();
        var password = $('#password').val();
        var remember = $('#remember').val();
        var loginmodel = document.getElementById("loginmodel");
        var btn3 = document.getElementById("myBtn3");
        var btn2 = document.getElementById("myBtn2");

        var usrdashboard = document.getElementById("usrdashboard");
        var usrregister = document.getElementById("usrregister");

        $('.loginerror').html(
            '<img src="https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif" style="width:150px;height:150px;">'
            );

        $.ajax({
            type: "POST",
            url: '{{ route('login') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                email: email,
                password: password,
                remember: remember
            },
            cache: false,
            success: function(data) {

                loginmodel.style.display = "none";
                btn2.style.display = "none";
                btn3.style.display = "none";
                btn.style.display = "block";
                btn1.style.display = "block";
                // firstnext.style.display = "block";
                usrdashboard.style.display = "block";
                usrregister.style.display = "none";

                swal("Successfully Login!", "", "success");


            },
            error: function(data) {

                $('.loginerror').html('Email or Password Not Match');

                console.log('b');

            }
        });
    }

    function guestcreate() {


        var form = 'formguest';
        let name = document.forms[form]["guestname"].value;
        let fname = document.forms[form]["guestfname"].value;
        let email = document.forms[form]["guestemail"].value;
        let phone = document.forms[form]["guestpnumber"].value;
        let address = document.forms[form]["guestaddress"].value;
        var guestModal = document.getElementById("guestModal");
        // console.log(name,fname,phone,address);
        if (name == '' || fname == '' || phone == '' || address == '') {
            swal("Please Fill All Fields!", "", "error");
            return false;
        }
        $.ajax({
            type: "POST",
            url: '{{ route('create.guest') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                email: email,
                name: name,
                fname: fname,
                phone: phone,
                address: address
            },
            cache: false,
            success: function(data) {

                if (data.status == 'done') {
                    guestModal.style.display = "none";
                    swal("Guest created!", "please copy Track ID in safe place -> " + data.track_id,
                        "success");
                } else {
                    swal("Number already in use!", "", "error");
                }



            },
            error: function(data) {

                // $('.loginerror').html('Email or Password Not Match');

                // console.log('b');
                swal("error !", "", "error");

            }
        });


    }

    $(".already-guest").click(function() {
        document.getElementById("enter_guest").style.display = "none";
        document.getElementById("confirm_guest").style.display = "block";
        document.getElementById("guestform").style.display = "none";
    });
    $(".create-guest").click(function() {
        document.getElementById("enter_guest").style.display = "block";
        document.getElementById("confirm_guest").style.display = "none";
        document.getElementById("guestform").style.display = "block";
    });
    $("#checkguest").click(function() {
        let form = 'formguest';
        let trackid = document.forms[form]["trackid"].value;
        // alert(trackid);

        $.ajax({
            type: "POST",
            url: '{{ route('login.guest') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                trackid: trackid
            },
            cache: false,
            success: function(data) {

                if (data.status == 0) {

                    swal("Wrong Track ID!", "please Enter Correct Track ID", "error");
                } else if (data.status == 1) {

                    $.ajax({
                        type: "GET",
                        url: '{{ route('home.guest') }}',
                        data: {
                            trackid: trackid
                        },
                        cache: false,
                        success: function(data) {

                            if (data.status == 0) {

                                swal("Error Occur!",
                                    "Something Went Wrong Please Retry", "error");
                            } else if (data.status == 1) {
                                $('#msform').submit();
                                // swal("Redirecting..!","","success");
                                {{-- window.location.href = "{{url('/guest-home-page')}}"; --}}
                            }

                        },

                    });
                }

            },
            error: function(data) {

                swal("error !", "", "error");

            }
        });

    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
