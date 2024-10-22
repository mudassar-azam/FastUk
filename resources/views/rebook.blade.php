<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <title>FastuK</title>
    <meta name="description"
        content="Express same day delivery across the UK, We Are Same Day, our deliveries are guaranteed and safe. Tracked Throughout" />
    <!-- <link rel='stylesheet' id='wp-block-library-css'  href='https://wearesameday.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='{{ asset('public/assets_front/new/css/contact7.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('public/assets_front/new/css/cookie.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('public/assets_front/new/css/gdpr.css') }}' type='text/css' media='all' />
    <link rel="stylesheet" href='{{ asset('public/assets_front/new/css/style.css') }}' type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='select2-css'  href='https://wearesameday.com/wp-content/themes/jyst-theme/select2/select2.min.css?ver=1.0' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='{{ asset('public/assets_front/new/css/main.css') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('public/assets_front/new//js//jquery.js') }}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('public/assets_front/new//js/jquery_migrate.js') }}' id='jquery-migrate-js'>
    </script>
    <script type='text/javascript' id='cookie-law-info-js-extra'></script>
    <script type='text/javascript' src='{{ asset('public/assets_front/new//js/cookie.js') }}'></script>
    <link rel="icon" href='{{ asset('public/assets_front/new/images/favicon.png') }}' sizes="192x192" />
    <style type="text/css" id="wp-custom-css">
        .custom-overlay-text {
            background-color: rgba(255, 255, 255, .9);
        }
    </style>
    <link rel="stylesheet" href="{{ asset('public/assets_front/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets_front/indexstyle.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{--            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places">
    </script>
</head>

<body class="home page-template page-template-home page-template-home-php page page-id-43 wp-custom-logo">
    @include('include.models')
    <section class="mt-5 lg:mt-0 px-6 sm:px-9 mx-auto hidden md:flex items-center justify-center lg:justify-between"
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
                    <span class="ml-5 header-buttons">
                        <span class="animation-button"><a href="{{ url('quote') }}">Get A Quote</a></span>
                        <a href="{{ url('quote') }}">Get A Quote</a>
                    </span>
                @endif
            </div>
        </div>
    </section>
    <!-- Mobile Header -->
    <section class="flex md:hidden justify-between p-6 items-center">
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
        style="background:url({{ asset('public/banner1.png') }}); ">
        <div
            class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2">
            <div class="form-card-cargo card px-4 pt-4 pb-4 mt-3 mb-3">
                <!-- <p>Just follstep</p> -->
                <form method="POST" action="{{ route('rebook.bookings') }}" id="msform" name="msform">
                    <input type="hidden" id="paytype" name="paytype" value="guest">
                    <!-- progressbar -->
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="personal"><strong>Select Vehicle</strong></li>
                        <li id="payment"><strong>Enter Payment Details</strong></li>
                        <li id="confirm" onclick="getformvalues()"><strong>Confirmation</strong></li>
                    </ul>
                    <fieldset>
                        <div class="form-card steps-2">
                            <div class="row info-details">
                                <div class="col-7">
                                    <h2 class="fs-title">Select Vehicle:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div>
                            <div class="row box_data">
                                @php
                                    use Illuminate\Support\Facades\DB;
                                    $vehicle = DB::table('tj_vehicule')
                                        ->where('statut', '=', 'yes')
                                        ->get();
                                @endphp
                                @foreach ($vehicle as $vehicles)
                                    <div class="col-3 chosevehicle">
                                        <label for="{{ $vehicles->id }}" style="cursor:pointer;text-align:center;">
                                            @php
                                                $imv = \DB::table('tj_type_vehicule_rental')
                                                    ->where('id', $vehicles->id_type_vehicule)
                                                    ->first();
                                                $miles = $imv->miles;
                                                $limit_prix = $imv->prix;
                                            @endphp
                                            <img src="{{ asset('public/admin/assets/images/type_vehicle_rental/') }}/{{ $imv->image }}"
                                                style="width:170px;">
                                            <label class="container-form-radio">
                                                <input class="select_van" data-price="{{ $vehicles->price }}"
                                                    type='radio' name='chosevehicle' id="{{ $vehicles->id }}" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <br>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Carry Weight</span>
                                                <span
                                                    style="color:#aa1818;font-weight:bold;">{{ $vehicles->wieght }}</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Vehicle</span>
                                                <span
                                                    style="color:#aa1818;font-weight:bold;">{{ $vehicles->brand }}</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Distance</span>
                                                <span style="color:#aa1818;font-weight:bold;"><span
                                                        class="distance_place">{{$rebookings->distance}}</span>miles</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Est Price</span>
                                                <span style="color:#aa1818;font-weight:bold;">&#163; <span
                                                        class="est_cost" data-price="{{ $vehicles->price }}"
                                                        data-miles="{{ $miles }}"
                                                        data-limprice="{{ $limit_prix }}">calcul..</span></span>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                                <input type="hidden" value="{{$rebookings->distance}}" id="distance" name="distance">
                                <input type="hidden" value="0" id="final_price" name="price">
                            </div>
                        </div>
                        <input type="button" name="next" class="next2 action-button" value="Next" /> <input
                            type="button" name="previous" class="previous action-button-previous"
                            value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card steps-4">
                            <div class="row info-details">
                                <div class="col-7">
                                    <h2 class="fs-title">Pay and Confrim Book:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <div class="payment-button">
                                <button class="stripe-payment" id="myBtn"
                                    @if (Auth::user()) style="display:block;"  @else style="display:none;" @endif>Credit
                                    & Debit</button>
                                <button class="stripe-paypal" id="myBtn1"
                                    @if (Auth::user()) style="display:block;"  @else style="display:none;" @endif>Paypal</button>
                                <button class="stripe-payment" type="button" id="myBtnw"
                                    @if (Auth::user()) style="display:block;"  @else style="display:none;" @endif>Wallet</button>
                            </div>
                            <div class="row payment-button">
                                <button class="stripe-payment" id="myBtn2"
                                    data-check="{{ Session::get('guest_track_id') }}"
                                    @if (Auth::user()) style="display:none;" @else style="display:block;" @endif>Guest</button>
                                <button class="stripe-paypal" id="myBtn3"
                                    @if (Auth::user()) style="display:none;" @else style="display:block;" @endif>Login</button>
                                <input type="hidden" id="data-check" value="{{ Session::get('guest_track_id') }}">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous"
                            value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- ====================== Intro Services ====================== -->
    <section class="container mx-auto sm:flex justify-center custom-intro-services">
        <div class="lg:flex items-center custom-single-intro-service text-center lg:text-left">
            <img class="mx-auto" src="https://wearesameday.com/wp-content/uploads/2020/12/Icon-1.svg" />
            <div class="">
                <h2 class="text-base font-bold">Guaranteed</h2>
                <h6 class="text-base">Same Day Delivery</h6>
            </div>
        </div>
        <div class="lg:flex items-center custom-single-intro-service text-center lg:text-left">
            <img class="mx-auto" src="https://wearesameday.com/wp-content/uploads/2020/12/Icon-3.svg" />
            <div class="">
                <h2 class="text-base font-bold">Guaranteed</h2>
                <h6 class="text-base">60 Minutes Pickup</h6>
            </div>
        </div>
        <div class="lg:flex items-center custom-single-intro-service text-center lg:text-left">
            <img class="mx-auto" src="https://wearesameday.com/wp-content/uploads/2020/12/Icon-2.svg" />
            <div class="">
                <h2 class="text-base font-bold">NationalWide</h2>
                <h6 class="text-base">Coverage</h6>
            </div>
        </div>
        <div class="lg:flex items-center custom-single-intro-service text-center lg:text-left">
            <img class="mx-auto" src="{{ asset('public/icon-user.png') }}" />
            <div class="">
                <h2 class="text-base font-bold">24/7</h2>
                <h6 class="text-base">Customer Service</h6>
            </div>
        </div>
    </section>
    {{--            <!-- =============================== LEFT IMAGE - RIGHT TEXT =============================== --> --}}
    {{--            <section class="lg:flex relative custom-left-image-right-text px-6 lg:px-0 mt-16"> --}}
    {{--                <div class="hidden lg:block lg:w-6/12 bg-cover bg-center custom-image-content" style="background-image: url(https://wearesameday.com/wp-content/uploads/2021/03/delivery-van-tall.jpg);"> --}}
    {{--                </div> --}}
    {{--                <div class="lg:hidden lg:w-6/12 bg-cover bg-center custom-image-content" style="background-image: url(https://wearesameday.com/wp-content/uploads/2021/03/delivery-van-sm.jpg);"> --}}
    {{--                </div> --}}
    {{--                <div class="lg:py-60 lg:pl-40 custom-text-content mt-6 sm:mt-10 lg:mt-0"> --}}
    {{--                    <h2 class="text-3xl sm:text-4xl font-black"></h2> --}}
    {{--                    <h6 class="text-base mt-8"><h2><img loading="lazy" class="alignnone size-medium wp-image-82" src="https://wearesameday.com/wp-content/uploads/2020/12/logo-1.svg" alt="We Are Same Day Logo" width="300" height="300" srcset="https://wearesameday.com/wp-content/uploads//2020/12/logo-1.svg 150w, https://wearesameday.com/wp-content/uploads//2020/12/logo-1.svg 300w, https://wearesameday.com/wp-content/uploads//2020/12/logo-1.svg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></h2> --}}
    {{--                    <p>&nbsp;</p> --}}
    {{--                    <p>Here at We Are Sameday we have always advocated the development of technology to improve our service and increase effective communication with our clients. With so many customers placing their trust in us, we need feel it’s our duty to keep you fully informed of the progress of your goods. We also use the ground breaking &#8216;Smart Logistics Manager Technology&#8217;.</p> --}}
    {{--                    </h6> --}}
    {{--                    <a href="#" class="custom-left-button mt-6 inline-block" >Get A Quote Online Now</a> --}}
    {{--                    <a href="https://smartlm.co.uk/" target="_blank"><img src="https://wearesameday.com/wp-content/uploads/2020/12/smart_logistics_manager-1.svg" class="mt-8 md:mt-16 lg:mt-32" alt=""/></a> --}}
    {{--                </div> --}}
    {{--                <img class="hidden lg:block custom-centered-absolute" src="https://wearesameday.com/wp-content/uploads/2020/12/iphone11.png" alt=""/> --}}
    {{--            </section> --}}
    <!-- ===================== MAIN SERVICES ===================== -->
    <section class="services px-6 mt-8 pt-8 sm:pt-12 lg:pt-24 pb-12">
        <div class="custom-services-container text-center">
            <h2 class="text-3xl sm:text-4xl font-black text-white">Fastuk Deliverey Services</h2>
            <h6 class="mt-6 text-white md:px-36">
                <p class="text-white">
                    Our service is fast, flexible and reliable. We use the solutions that best suit the job at hand,
                    ensuring that even the most urgent delivery arrives on time.
                </p>
            </h6>
            <div class="boxes flex flex-wrap mt-8">
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg width="115" height="120" viewBox="0 0 115 120" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M28.2454 107.04H35.9879C38.5919 109.381 42.5375 109.381 45.1417 107.04H52.8937C55.2224 111.147 60.0286 113.169 64.5941 111.963C69.1598 110.761 72.3397 106.632 72.3397 101.908C72.3397 97.1872 69.1598 93.0579 64.5941 91.8526C60.0284 90.6471 55.2224 92.669 52.8937 96.7759H45.148C42.5472 94.4377 38.5984 94.4377 35.9975 96.7759H28.2455C25.9136 92.669 21.1105 90.6471 16.5451 91.8526C11.9796 93.0582 8.79944 97.1872 8.79944 101.908C8.79944 106.632 11.9793 110.761 16.5451 111.963C21.1108 113.169 25.9135 111.147 28.2455 107.04H28.2454ZM61.9236 94.7127C64.8219 94.7127 67.4323 96.456 68.5397 99.1328C69.6471 101.806 69.0364 104.888 66.9861 106.935C64.939 108.983 61.8604 109.596 59.1835 108.486C56.5099 107.378 54.7634 104.768 54.7634 101.873C54.7697 97.9178 57.9717 94.7158 61.9236 94.7127ZM51.7103 103.8H47.1826C47.5433 102.566 47.5433 101.253 47.1826 100.016H51.7008C51.4604 101.266 51.4604 102.55 51.7008 103.8H51.7103ZM40.5728 98.2187C42.0473 98.2187 43.3762 99.1078 43.9393 100.468C44.5057 101.832 44.1925 103.398 43.1515 104.442C42.1073 105.483 40.5411 105.797 39.1775 105.23C37.8169 104.667 36.9279 103.338 36.9279 101.864C36.931 99.8544 38.5605 98.225 40.5729 98.2186L40.5728 98.2187ZM33.9536 99.9779H33.9567C33.596 101.212 33.596 102.525 33.9567 103.759H29.4258C29.6694 102.509 29.6694 101.228 29.4258 99.9779H33.9536ZM12.0836 101.873H12.0867C12.0867 98.9749 13.8301 96.3645 16.5069 95.2571C19.1806 94.1496 22.2624 94.7603 24.3095 96.8107C26.3566 98.8578 26.9705 101.936 25.8599 104.613C24.7525 107.287 22.1422 109.033 19.247 109.033C17.3422 109.04 15.5134 108.287 14.1624 106.945C12.8145 105.6 12.0551 103.775 12.0519 101.873H12.0836Z"
                            fill="white" />
                        <path
                            d="M78.8453 72.21C78.8453 67.7708 75.2731 64.1575 70.834 64.11L57.874 63.9645C55.966 63.9423 54.1657 63.0785 52.9507 61.6072C49.6632 57.6047 46.9959 54.3172 45.2557 52.1375C43.1547 49.4955 39.9875 47.923 36.6114 47.8533L19.5131 47.48C14.9379 47.3819 10.518 49.1317 7.24888 52.3337C3.98037 55.5325 2.13892 59.9148 2.13892 64.4901V83.1201C2.14208 84.6579 2.75591 86.1291 3.84753 87.2113C4.93601 88.2934 6.41045 88.9009 7.945 88.8977H10.0269C10.4573 88.8977 10.8686 88.7269 11.1724 88.4231C11.4761 88.1194 11.647 87.7049 11.647 87.2777C11.647 82.424 15.5831 78.4876 20.4371 78.4876C25.2908 78.4876 29.224 82.4237 29.224 87.2777C29.224 87.7048 29.3948 88.1194 29.6986 88.4231C30.0023 88.7269 30.4168 88.8977 30.844 88.8977H50.1576C50.5848 88.8977 50.9993 88.7269 51.3031 88.4231C51.6068 88.1194 51.7777 87.7049 51.7777 87.2777C51.7777 82.424 55.7106 78.4876 60.5646 78.4876C65.4182 78.4876 69.3547 82.4237 69.3547 87.2777C69.3547 87.7048 69.5255 88.1194 69.8293 88.4231C70.133 88.7269 70.5444 88.8977 70.9747 88.8977H73.0566C76.2492 88.8914 78.8342 86.3064 78.8374 83.1138L78.8453 72.21ZM75.6053 83.1134C75.6053 83.7874 75.3364 84.4329 74.8618 84.9107C74.384 85.3884 73.7354 85.6574 73.0614 85.6574H72.495C72.0141 81.7308 69.6379 78.2947 66.1384 76.4598C62.6358 74.6215 58.4592 74.6215 54.9564 76.4598C51.4569 78.295 49.0807 81.7312 48.5997 85.6574H32.3997C32.0358 82.7528 30.6152 80.0855 28.4067 78.1649C26.2013 76.2443 23.3631 75.2065 20.4364 75.2476C17.516 75.2128 14.6841 76.2538 12.4851 78.1744C10.2829 80.095 8.86541 82.7591 8.50471 85.6574H7.93835C6.53348 85.6574 5.39446 84.5184 5.39446 83.1135V64.4835C5.39446 60.7847 6.8847 57.241 9.52676 54.6525C12.1687 52.0643 15.741 50.6468 19.4395 50.7196L36.5378 51.0929C38.9489 51.1436 41.2111 52.2668 42.7109 54.1557C44.4702 56.3674 47.1406 59.6644 50.4471 63.6732C52.2664 65.8818 54.9685 67.179 57.832 67.2106L70.792 67.3562V67.3594C73.4562 67.3878 75.5982 69.5552 75.5951 72.2194L75.6053 83.1134Z"
                            fill="white" />
                        <path
                            d="M108.888 2.85443C104.433 3.11494 96.4101 3.87866 92.7456 6.07846C88.0364 8.9084 83.3919 14.2186 79.6424 19.3156L72.1657 20.293C70.7229 20.4823 69.4671 21.4286 68.8882 22.7645L67.1359 26.8102C66.9979 27.1308 67.0135 27.4959 67.1782 27.8032C67.343 28.1105 67.6413 28.3242 67.9843 28.3866L73.0809 29.2861C72.7023 29.9273 72.3795 30.4862 72.1257 30.9337C71.4443 32.1338 71.6514 33.6523 72.6289 34.6298L72.9139 34.9148L71.7048 36.1238C70.4869 37.3418 70.4869 39.3234 71.7048 40.5413L74.4613 43.2978C75.0514 43.8879 75.8351 44.2129 76.67 44.2129C77.505 44.2129 78.2887 43.8879 78.8788 43.2978L80.0856 42.091L80.3706 42.376C80.9539 42.9593 81.7288 43.28 82.5504 43.28C83.0803 43.28 83.6036 43.1419 84.0667 42.8792C84.5142 42.6254 85.0731 42.3025 85.7143 41.924L86.6139 47.0206C86.674 47.3635 86.89 47.6618 87.1972 47.8266C87.3664 47.9179 87.5512 47.9624 87.736 47.9624C87.8897 47.9624 88.0433 47.9313 88.1902 47.8689L92.2359 46.1166C93.5719 45.5377 94.5182 44.2819 94.7074 42.8391L95.6848 35.3624C100.784 31.6129 106.094 26.968 108.922 22.2593C111.124 18.5943 111.888 10.572 112.146 6.11688C112.195 5.25965 111.899 4.44472 111.311 3.82131C110.69 3.15778 109.808 2.80153 108.889 2.85499L108.888 2.85443ZM69.8008 26.3937L70.9809 23.6729C71.2414 23.0695 71.8091 22.642 72.4615 22.5574L77.8342 21.856C76.4938 23.7931 75.316 25.6256 74.3452 27.1998L69.8008 26.3937ZM77.2644 41.6834C76.946 42.0018 76.3893 42.0018 76.0709 41.6834L73.3144 38.9269C72.9849 38.5974 72.9849 38.063 73.3144 37.7335L74.5235 36.5267L78.4712 40.4744L77.2644 41.6834ZM92.4452 42.5384C92.3606 43.1908 91.9331 43.7585 91.3297 44.0191L88.6088 45.1992L87.805 40.6569C89.377 39.6862 91.2095 38.5061 93.1488 37.1679L92.4452 42.5384ZM106.967 21.0807C101.746 29.7687 87.2576 38.4435 82.9404 40.8951C82.6332 41.0688 82.2324 41.0109 81.983 40.7615L80.892 39.6727C80.892 39.6727 80.892 39.6705 80.8897 39.6705L75.3278 34.1085C75.3278 34.1085 75.3256 34.1085 75.3256 34.1063L74.2367 33.0175C73.9829 32.7636 73.9273 32.3695 74.1031 32.06C76.5546 27.7427 85.2273 13.2546 93.9175 8.0334C97.2863 6.01166 105.602 5.33034 109.072 5.12993C109.294 5.12993 109.501 5.21899 109.655 5.38153C109.808 5.54408 109.884 5.7556 109.871 5.98049C109.67 9.39827 108.989 17.7145 106.967 21.0809L106.967 21.0807Z"
                            fill="white" />
                        <path
                            d="M97.5615 11.5493C95.9873 11.5493 94.5089 12.1616 93.3978 13.2749C91.1023 15.5704 91.1023 19.3066 93.3978 21.602C94.5089 22.7131 95.9896 23.3276 97.5615 23.3276C99.1334 23.3276 100.614 22.7153 101.725 21.602C104.021 19.3064 104.021 15.5703 101.725 13.2749C100.614 12.1616 99.1357 11.5493 97.5615 11.5493ZM100.115 19.9904C99.4341 20.6718 98.5278 21.0481 97.5637 21.0481C96.5996 21.0481 95.6934 20.674 95.0121 19.9904C93.6048 18.5832 93.6048 16.2943 95.0121 14.8872C95.6934 14.2059 96.5996 13.8295 97.5637 13.8295C98.5278 13.8295 99.434 14.2036 100.115 14.8872C101.523 16.2944 101.523 18.5833 100.115 19.9904Z"
                            fill="white" />
                        <path
                            d="M67.5698 41.1266C65.8865 41.1266 64.3012 41.7834 63.1122 42.9724C60.8656 45.2168 60.8344 51.7384 60.8523 53.0232C60.8612 53.6422 61.3599 54.1409 61.9789 54.1499H62.137C64.4326 54.1499 69.9899 53.9295 72.0294 51.89C73.2205 50.6988 73.8752 49.1156 73.8752 47.4324C73.8752 45.7491 73.2184 44.1638 72.0294 42.9748C70.8359 41.7836 69.2528 41.1268 67.5696 41.1268L67.5698 41.1266ZM70.4153 50.2779C69.4334 51.2599 66.1381 51.7608 63.1433 51.8543C63.2279 49.1134 63.7155 45.5934 64.7219 44.5845C65.4833 43.8231 66.492 43.4067 67.5674 43.4067C68.6428 43.4067 69.6537 43.8253 70.413 44.5845C71.1744 45.346 71.5908 46.3547 71.5908 47.4301C71.5953 48.5077 71.1767 49.5164 70.4152 50.2779L70.4153 50.2779Z"
                            fill="white" />
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Emergency Courier Service</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Emergency Courier Service</h2>
                        <h6 class="text-base mt-2 custom-text">From lost keys to forgotten parcels, Fast Uk Couriers’
                            emergency couriers are here to help you. Our drivers are ready to collect your package and
                            can guarantee a 60 minute pick-up and same day</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M95.312 65.625H94.0308L96.8511 48.695C96.9254 48.2419 96.8004 47.7809 96.5035 47.4294C96.2066 47.0739 95.773 46.8747 95.3121 46.8747H91.1168L93.6129 41.2575L90.7574 39.988L87.6988 46.8747H77.9254L74.8668 39.9919L72.0113 41.2614L74.5074 46.8747H70.3121C69.8512 46.8747 69.4176 47.0778 69.1207 47.4294C68.8238 47.781 68.6988 48.2419 68.773 48.695L71.5933 65.625H68.7495V60.9375C68.7495 60.0742 68.0503 59.375 67.187 59.375H64.062V45.313C64.062 41.4341 61.2104 38.231 57.4995 37.6255C59.6089 35.6333 60.937 32.813 60.937 29.688C60.937 23.6568 56.0308 18.75 49.999 18.75C43.9672 18.75 39.061 23.6562 39.061 29.688C39.061 32.813 40.3891 35.6333 42.4985 37.6255C38.7876 38.231 35.936 41.4341 35.936 45.313V53.1255H26.561C25.6977 53.1255 24.9985 53.8247 24.9985 54.688V59.3755H18.7485V48.4375H29.6865C30.5498 48.4375 31.249 47.7383 31.249 46.875V28.125C31.249 27.2617 30.5498 26.5625 29.6865 26.5625H4.68652C3.82324 26.5625 3.12402 27.2617 3.12402 28.125V46.875C3.12402 47.7383 3.82324 48.4375 4.68652 48.4375H15.6245V59.3755H4.68652C3.82324 59.3755 3.12402 60.0747 3.12402 60.938V89.063C3.12402 89.9263 3.82324 90.6255 4.68652 90.6255H6.24902V95.313C6.24902 96.1763 6.94824 96.8755 7.81152 96.8755H92.1865C93.0498 96.8755 93.749 96.1763 93.749 95.313V90.6255H95.3115C96.1748 90.6255 96.874 89.9263 96.874 89.063V67.188C96.874 66.3247 96.1748 65.6255 95.3115 65.6255L95.312 65.625ZM6.25004 29.687H28.125V45.312H6.25004V29.687ZM72.156 49.999H75.8943L78.2615 55.3193L81.117 54.0498L79.3123 49.999H86.3084L84.5076 54.0537L87.3631 55.3232L89.7303 49.999H93.4686L90.8631 65.624H74.7611L72.156 49.999ZM42.187 29.687C42.187 25.3784 45.6909 21.8745 49.9995 21.8745C54.3081 21.8745 57.812 25.3784 57.812 29.687C57.812 33.9956 54.3081 37.4995 49.9995 37.4995C45.6909 37.4995 42.187 33.9956 42.187 29.687ZM28.125 56.249H37.5C38.3633 56.249 39.0625 55.5498 39.0625 54.6865V45.3115C39.0625 42.7256 41.1641 40.624 43.75 40.624H56.25C58.8359 40.624 60.9375 42.7256 60.9375 45.3115V59.3735H57.8125V46.8735C57.8125 46.0102 57.1133 45.311 56.25 45.311C55.3868 45.311 54.6875 46.0102 54.6875 46.8735V59.3735H45.3125V46.8735C45.3125 46.0102 44.6133 45.311 43.75 45.311C42.8868 45.311 42.1875 46.0102 42.1875 46.8735V59.3735H28.1255L28.125 56.249ZM90.625 93.749H9.37504V90.624H90.625V93.749ZM93.75 87.499H6.25004V62.499H65.625V67.1865C65.625 68.0498 66.3243 68.749 67.1875 68.749H93.7495L93.75 87.499Z"
                            fill="white" />
                        <path d="M9.375 32.812H17.1875V35.937H9.375V32.812Z" fill="white" />
                        <path d="M21.875 32.812H25V35.937H21.875V32.812Z" fill="white" />
                        <path d="M9.375 39.062H17.1875V42.187H9.375V39.062Z" fill="white" />
                        <path d="M21.875 39.062H25V42.187H21.875V39.062Z" fill="white" />
                        <path
                            d="M95.312 3.125H70.312C69.4487 3.125 68.7495 3.82422 68.7495 4.6875V29.6875C68.7495 30.5508 69.4487 31.25 70.312 31.25H95.312C96.1753 31.25 96.8745 30.5508 96.8745 29.6875V4.6875C96.8745 3.82422 96.1753 3.125 95.312 3.125ZM93.7495 28.125H71.8745V6.25H93.7495V28.125Z"
                            fill="white" />
                        <path d="M75 9.375H90.625V12.5H75V9.375Z" fill="white" />
                        <path d="M75 15.625H90.625V18.75H75V15.625Z" fill="white" />
                        <path d="M75 21.875H90.625V25H75V21.875Z" fill="white" />
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Event & Exhibition Couriers</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Event & Exhibition Couriers
                        </h2>
                        <h6 class="text-base mt-2 custom-text"> Are you heading to an event or exhibition and need
                            something delivering? Look no further than Fast Uk Couriers who are your trusted and
                            experienced event couriers We understand business
                            .</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <path
                            d="M49.926 75.848V76.0472L49.9456 76.0668C49.9338 75.9965 49.926 75.9262 49.926 75.848V75.848Z"
                            fill="white"></path>
                        <path
                            d="M49.9451 76.066L49.9255 76.0465V75.8473C49.9255 75.9254 49.9334 75.9957 49.9451 76.066V76.066Z"
                            fill="white"></path>
                        <path
                            d="M19.4492 67.441C16.4023 67.441 13.9219 64.9605 13.9219 61.9137C13.9219 58.8668 16.4024 56.3864 19.4492 56.3864C22.496 56.3864 24.9765 58.8669 24.9765 61.9137C24.9765 64.9645 22.496 67.441 19.4492 67.441ZM19.4492 58.9566C17.8164 58.9566 16.4883 60.2847 16.4883 61.9175C16.4883 63.5503 17.8164 64.8784 19.4492 64.8784C21.082 64.8784 22.4101 63.5503 22.4101 61.9175C22.4101 60.2847 21.082 58.9566 19.4492 58.9566V58.9566Z"
                            fill="white"></path>
                        <path
                            d="M35.9802 33.2269C35.6403 33.2269 35.3122 33.0902 35.0739 32.8519L31.7927 29.5707C31.2927 29.0707 31.2927 28.2582 31.7927 27.7543C32.2927 27.2543 33.1091 27.2543 33.6091 27.7543L35.9841 30.1293L41.6403 24.4731C42.1403 23.9731 42.9567 23.9731 43.4567 24.4731C43.9567 24.9731 43.9567 25.7856 43.4567 26.2895L36.8942 32.852C36.6481 33.0903 36.32 33.227 35.9802 33.227L35.9802 33.2269Z"
                            fill="white"></path>
                        <path
                            d="M70.473 29.945H50.688C49.9771 29.945 49.4028 29.3708 49.4028 28.6598C49.4028 27.9489 49.9771 27.3746 50.688 27.3746H70.473C71.184 27.3746 71.7582 27.9489 71.7582 28.6598C71.7582 29.3669 71.184 29.945 70.473 29.945Z"
                            fill="white"></path>
                        <path
                            d="M93.7151 53.805H82.6251V41.301L84.3399 40.6721C84.3985 40.6604 84.4493 40.633 84.5079 40.6135L90.9767 38.258C91.297 38.1447 91.5626 37.9064 91.7032 37.5978C91.8439 37.2892 91.8634 36.9377 91.7501 36.6174L88.5782 27.9143C88.336 27.2463 87.5977 26.9065 86.9337 27.1447L82.6251 28.7111V12.3401C82.6251 11.6253 82.047 11.0549 81.3399 11.0549H21.8279C21.1209 11.0549 20.5427 11.6252 20.5427 12.3401V48.7621H6.28471C5.56987 48.7621 4.99951 49.3403 4.99951 50.0473V87.6603C4.99951 88.3752 5.56982 88.9455 6.28471 88.9455H51.2107C51.2381 88.9455 51.2693 88.9455 51.2927 88.9377C51.3201 88.9455 51.3513 88.9455 51.3748 88.9455H93.7148C94.4218 88.9455 95 88.3752 95 87.6603V55.0903C95 54.3794 94.4219 53.8051 93.7148 53.8051L93.7151 53.805ZM83.6371 56.3753L76.9418 63.0706H65.0318L71.7271 56.3753H83.6371ZM46.4731 44.6023L57.4421 40.6101L66.0163 44.614L55.0513 48.5984L46.4731 44.6023ZM49.3169 48.7625H40.0591L39.4693 47.1531L43.0591 45.8445H43.0669L49.3169 48.7625ZM52.4927 53.8055V52.2664L55.3482 51.2273C55.4068 51.2078 55.4654 51.1882 55.5201 51.1687L69.7231 45.989C69.7817 45.9773 69.8403 45.9578 69.8911 45.9304L80.0511 42.2351V53.8091L52.4927 53.8055ZM52.7896 56.3758L52.4927 56.6727V56.3758H52.7896ZM69.4346 43.3678L60.8526 39.3678L72.0476 35.2936L80.6374 39.2936L69.4346 43.3678ZM52.4936 60.3018L56.4233 56.3721H68.0953L61.4 63.0674H52.4977L52.4936 60.3018ZM86.6066 30.0008L88.8918 36.2899L84.0441 38.0555L75.4699 34.0555L86.6066 30.0008ZM23.1146 13.6258H80.0556V29.6488L71.5829 32.7386L57.1419 37.9886C57.0911 38.0003 57.0325 38.0198 56.9739 38.0472L42.7629 43.223C42.7043 43.2425 42.6418 43.2621 42.5832 43.2855L39.591 44.3753L43.4504 40.512C43.9582 40.012 43.9582 39.1956 43.4504 38.6956C42.9504 38.1956 42.1418 38.1956 41.6418 38.6956L35.9856 44.3518L33.6106 41.9768C33.1106 41.4768 32.2942 41.4768 31.7942 41.9768C31.2942 42.4846 31.2942 43.2932 31.7942 43.7932L35.0754 47.0784C35.3254 47.3284 35.6535 47.4495 35.9856 47.4495C36.2551 47.4495 36.5325 47.3635 36.7551 47.1917L37.3254 48.7581L23.1144 48.762L23.1146 13.6258ZM7.56758 51.3288H49.9266V72.4148L39.2466 61.7388C38.7466 61.2388 37.9302 61.2388 37.4302 61.7388L22.6412 76.5238L17.7935 71.6761C17.5552 71.4378 17.2271 71.305 16.8872 71.305C16.5474 71.305 16.2193 71.4417 15.9771 71.6761L7.56687 80.0863L7.56758 51.3288ZM49.9266 76.0478V86.3758H7.56758V83.7196L16.8879 74.3993L21.7356 79.2509C22.216 79.7314 23.0715 79.7314 23.552 79.2509L38.333 64.4619L49.927 76.0479V75.8487C49.927 75.9268 49.9348 75.9971 49.9465 76.0674L49.9266 76.0478ZM52.493 77.1337H66.071V86.3759H52.493V77.1337ZM92.434 86.3759H68.637V77.1337H92.434V86.3759ZM92.434 74.5669H52.493V65.6372H92.431L92.434 74.5669ZM92.434 63.0709H80.571L87.2702 56.3756H92.4304L92.434 63.0709Z"
                            fill="white"></path>
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Passport Couriers</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Passport Couriers</h2>
                        <h6 class="text-base mt-2 custom-text">Are you looking for a passport courier that can save
                            your trip and get your passport to you in quick time? Fast Uk Couriers are just what you are
                            looking for! Many of us have done it,</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path
                                d="M4.21094 -0.000119543C1.89767 -0.000119543 -0.0078125 1.90536 -0.0078125 4.21863C-0.0078125 6.5319 1.89767 8.43738 4.21094 8.43738C4.26367 8.43738 4.31289 8.43386 4.36211 8.42683C4.41133 8.43386 4.46055 8.43738 4.50977 8.43738H11.2668H11.2808H21.1106C21.9017 8.43738 22.5169 9.0491 22.5169 9.84363C22.5169 10.6382 21.9017 11.2499 21.1106 11.2499H20.9981H12.7012C12.5571 11.2464 12.4165 11.2639 12.2829 11.3061H12.2758C9.06959 11.5663 6.40127 13.8514 5.7719 16.8854H1.41248V16.8819C0.635527 16.8819 0.0062293 17.5112 0.0062293 18.2881V88.6006C0.0062293 88.9733 0.153883 89.3319 0.417556 89.5956C0.684748 89.8593 1.04334 90.0069 1.41602 90.0069L11.6679 89.9718C11.8402 89.9753 12.0124 89.9436 12.1742 89.8839C12.3289 89.9436 12.4941 89.9718 12.6628 89.9718L88.6003 89.9999C89.3738 89.9999 90.0066 89.3706 90.0066 88.5936V35.1489C90.0066 34.6427 89.7359 34.1751 89.2964 33.922C88.857 33.6724 88.3156 33.6759 87.8797 33.936L71.0227 43.9278V35.1493C71.0227 34.6431 70.752 34.1755 70.3125 33.9223C69.8731 33.6727 69.3317 33.6763 68.8957 33.9364L52.0387 43.9282V35.1497C52.0387 34.77 51.884 34.4044 51.6098 34.1407C51.3356 33.877 50.9665 33.7329 50.5868 33.7434V33.7505C50.3512 33.754 50.1157 33.8173 49.9118 33.9368L33.0548 43.9385L33.0478 35.1565C33.0478 34.6537 32.7771 34.1862 32.3376 33.9365C31.8982 33.6869 31.3603 33.6904 30.9278 33.9471L22.5079 38.9358V18.2916C22.5079 17.5146 21.8751 16.8853 21.1016 16.8853H14.3271C14.9212 15.2506 16.5278 14.0623 18.4966 14.0623H20.9997H21.0665H21.1122C23.4254 14.0623 25.3309 12.1568 25.3309 9.84355C25.3309 7.69201 23.6751 5.90956 21.5832 5.66701C21.4602 5.63889 21.3371 5.62131 21.2106 5.62482H11.3664H11.282H11.2679H9.85116C9.05663 5.62482 8.44491 5.0131 8.44491 4.21857C8.44491 3.42404 9.05663 2.81232 9.85116 2.81232C10.2273 2.81935 10.5894 2.6717 10.8566 2.40803C11.1238 2.14435 11.275 1.78225 11.275 1.40606C11.275 1.02986 11.1238 0.667777 10.8566 0.404086C10.5895 0.140395 10.2273 -0.00724124 9.85116 -0.000212243C7.53789 -0.000212243 5.63241 1.90527 5.63241 4.21854C5.63241 4.71424 5.73436 5.18181 5.89608 5.62479H4.51089C4.46168 5.62127 4.41597 5.62127 4.36675 5.62479H4.3562C4.3105 5.62127 4.26128 5.62127 4.21206 5.62479C3.42104 5.62479 2.80581 5.01307 2.80581 4.21854C2.80581 3.42401 3.42104 2.81229 4.21206 2.81229C4.59174 2.81932 4.95386 2.67166 5.22105 2.40799C5.48824 2.14432 5.63941 1.78221 5.63941 1.40602C5.63941 1.02983 5.48823 0.667741 5.22105 0.40405C4.95387 0.140359 4.59175 -0.00727724 4.21206 -0.000248243L4.21094 -0.000119543ZM12.7257 14.0732C12.0894 14.8958 11.6148 15.8415 11.3968 16.8857H8.70032C9.2804 15.2931 10.8238 14.1294 12.7257 14.0732ZM2.81855 19.6982H19.6935V40.6052L11.9416 45.1966C11.5162 45.4497 11.256 45.9103 11.256 46.406V87.1589L2.81853 87.1941L2.81855 19.6982ZM49.2243 37.6172V46.4062C49.2243 46.9089 49.4951 47.3765 49.9345 47.6262C50.3704 47.8758 50.9083 47.8723 51.3443 47.6156L68.2085 37.6238V46.4058C68.2085 46.9086 68.4792 47.3761 68.9186 47.6258C69.3546 47.8754 69.8924 47.8719 70.3284 47.6152L87.1926 37.6234V87.1936L14.0676 87.1585V47.2066L30.2325 37.6234L30.2395 46.4054C30.2395 46.9117 30.5102 47.3792 30.9497 47.6289C31.3891 47.8785 31.9305 47.8714 32.3629 47.6148L49.2243 37.6172ZM21.0993 53.4374C20.3224 53.4374 19.6931 54.0667 19.6931 54.8436V63.2811C19.6931 64.0581 20.3224 64.6874 21.0993 64.6874H29.5368C30.3103 64.6874 30.9431 64.0581 30.9431 63.2811V54.8436C30.9431 54.0667 30.3103 53.4374 29.5368 53.4374H21.0993ZM37.9743 53.4374C37.1974 53.4374 36.5681 54.0667 36.5681 54.8436V63.2811C36.5681 64.0581 37.1974 64.6874 37.9743 64.6874H46.4118C47.1853 64.6874 47.8181 64.0581 47.8181 63.2811V54.8436C47.8181 54.0667 47.1853 53.4374 46.4118 53.4374H37.9743ZM54.8493 53.4374C54.0724 53.4374 53.4431 54.0667 53.4431 54.8436V63.2811C53.4431 64.0581 54.0724 64.6874 54.8493 64.6874H63.2868C64.0603 64.6874 64.6931 64.0581 64.6931 63.2811V54.8436C64.6931 54.0667 64.0603 53.4374 63.2868 53.4374H54.8493ZM71.7243 53.4374C70.9474 53.4374 70.3181 54.0667 70.3181 54.8436V63.2811C70.3181 64.0581 70.9474 64.6874 71.7243 64.6874H80.1618C80.9353 64.6874 81.5681 64.0581 81.5681 63.2811V54.8436C81.5681 54.0667 80.9353 53.4374 80.1618 53.4374H71.7243ZM22.5051 56.2499H28.1301V61.8749H22.5051V56.2499ZM39.3801 56.2499H45.0051V61.8749H39.3801V56.2499ZM56.2551 56.2499H61.8801V61.8749H56.2551V56.2499ZM73.1301 56.2499H78.7551V61.8749H73.1301V56.2499ZM21.0993 70.3124C20.3224 70.3124 19.6931 70.9417 19.6931 71.7186V80.1561C19.6931 80.9331 20.3224 81.5624 21.0993 81.5624H29.5368C30.3103 81.5624 30.9431 80.9331 30.9431 80.1561V71.7186C30.9431 70.9417 30.3103 70.3124 29.5368 70.3124H21.0993ZM37.9743 70.3124C37.1974 70.3124 36.5681 70.9417 36.5681 71.7186V80.1561C36.5681 80.9331 37.1974 81.5624 37.9743 81.5624H46.4118C47.1853 81.5624 47.8181 80.9331 47.8181 80.1561V71.7186C47.8181 70.9417 47.1853 70.3124 46.4118 70.3124H37.9743ZM54.8493 70.3124C54.0724 70.3124 53.4431 70.9417 53.4431 71.7186V80.1561C53.4431 80.9331 54.0724 81.5624 54.8493 81.5624H63.2868C64.0603 81.5624 64.6931 80.9331 64.6931 80.1561V71.7186C64.6931 70.9417 64.0603 70.3124 63.2868 70.3124H54.8493ZM71.7243 70.3124C70.9474 70.3124 70.3181 70.9417 70.3181 71.7186V80.1561C70.3181 80.9331 70.9474 81.5624 71.7243 81.5624H80.1618C80.9353 81.5624 81.5681 80.9331 81.5681 80.1561V71.7186C81.5681 70.9417 80.9353 70.3124 80.1618 70.3124H71.7243ZM22.5051 73.1249H28.1301V78.7499H22.5051V73.1249ZM39.3801 73.1249H45.0051V78.7499H39.3801V73.1249ZM56.2551 73.1249H61.8801V78.7499H56.2551V73.1249ZM73.1301 73.1249H78.7551V78.7499H73.1301V73.1249Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="90" height="90" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Fragile Items Courier</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Fragile Items Courier</h2>
                        <h6 class="text-base mt-2 custom-text">Fast Uk Couriers are a leading company who specialise in
                            fragile courier services. If you need a fragile items courier who can transport your goods
                            quickly without the risk of damaging the items</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M80.6238 18.7487H71.2512V13.1237C71.2512 12.628 71.0508 12.1499 70.6992 11.7983C70.3477 11.4467 69.8731 11.2498 69.3738 11.2498H58.1238C57.0902 11.2498 56.25 12.0901 56.25 13.1236V18.7486H33.75V13.1236C33.75 12.6279 33.5531 12.1498 33.2016 11.7982C32.85 11.4466 32.3719 11.2498 31.8761 11.2498H20.6261C19.5891 11.2498 18.7488 12.09 18.7488 13.1236V18.7486H9.37622C6.26843 18.7486 3.75122 21.2693 3.75122 24.3736V73.1248C3.75122 76.2325 6.26843 78.7498 9.37622 78.7498H80.6238C83.7316 78.7498 86.2488 76.2325 86.2488 73.1248V24.3736C86.2488 21.2693 83.7316 18.7486 80.6238 18.7486L80.6238 18.7487ZM60.0012 15.001H67.5V26.251H60.0012V15.001ZM22.5 15.001H29.9988V26.251H22.5V15.001ZM82.5012 73.1248C82.5012 73.6205 82.3008 74.0986 81.9492 74.4502C81.5977 74.8018 81.1231 74.9987 80.6238 74.9987H9.3762C8.33913 74.9987 7.49889 74.162 7.49889 73.1249V24.3737C7.49889 23.3401 8.33912 22.4999 9.3762 22.4999H18.7524V28.1249H18.7489C18.7489 28.6206 18.9493 29.0987 19.3008 29.4503C19.6524 29.8019 20.127 29.9988 20.6263 29.9988H31.8763C32.372 29.9988 32.8501 29.8019 33.2017 29.4503C33.5533 29.0987 33.7501 28.6206 33.7501 28.1249V22.4999H56.2501V28.1249C56.2501 28.6206 56.447 29.0987 56.7986 29.4503C57.1501 29.8019 57.6283 29.9988 58.124 29.9988H69.374C69.8732 29.9988 70.3478 29.8019 70.6994 29.4503C71.051 29.0988 71.2514 28.6206 71.2514 28.1249V22.4999H80.6276H80.6241C81.1233 22.4999 81.5979 22.6968 81.9495 23.0483C82.3011 23.3999 82.5015 23.878 82.5015 24.3738L82.5012 73.1248Z"
                            fill="white" />
                        <path
                            d="M33.4863 52.7623C34.8539 51.1029 35.6098 49.0252 35.6238 46.8736C35.6238 41.6986 31.4261 37.501 26.2512 37.501C21.0727 37.501 16.875 41.6987 16.875 46.8736C16.8926 49.0251 17.6449 51.1029 19.0125 52.7623C16.6395 53.4724 15.0118 55.6486 15.0012 58.1236V65.6259C15.0012 66.1216 15.1981 66.5997 15.5497 66.9513C15.9012 67.303 16.3794 67.4998 16.8751 67.4998H35.6239C36.1231 67.4998 36.5977 67.3029 36.9493 66.9513C37.3009 66.5998 37.5013 66.1216 37.5013 65.6259V58.1236C37.4872 55.6486 35.8595 53.4724 33.4865 52.7623H33.4863ZM26.2511 41.2486C28.5257 41.2486 30.5754 42.6196 31.4472 44.722C32.3191 46.8243 31.8374 49.2431 30.2272 50.8533C28.6171 52.46 26.1983 52.9416 24.096 52.0732C21.9937 51.2014 20.626 49.1482 20.626 46.8737C20.626 43.7694 23.1433 41.2487 26.251 41.2487L26.2511 41.2486ZM33.7499 63.7486H18.7487V58.1236C18.7487 57.09 19.589 56.2498 20.626 56.2498H31.876C32.3717 56.2498 32.8498 56.4467 33.2015 56.7982C33.5531 57.1498 33.7499 57.6279 33.7499 58.1236L33.7499 63.7486Z"
                            fill="white" />
                        <path
                            d="M73.125 50.625H46.8738C45.8402 50.625 45 51.4652 45 52.4988C45 53.5359 45.8402 54.3761 46.8738 54.3761H73.125C74.1621 54.3761 74.9988 53.5359 74.9988 52.4988C74.9988 51.4652 74.1621 50.625 73.125 50.625Z"
                            fill="white" />
                        <path
                            d="M73.125 41.2488H46.8738C45.8402 41.2488 45 42.089 45 43.1261C45 44.1596 45.8402 44.9999 46.8738 44.9999H73.125C74.1621 44.9999 74.9988 44.1597 74.9988 43.1261C74.9988 42.089 74.1621 41.2488 73.125 41.2488Z"
                            fill="white" />
                        <path
                            d="M73.125 60.001H46.8738C45.8402 60.001 45 60.8377 45 61.8748C45 62.9119 45.8402 63.7486 46.8738 63.7486H73.125C74.1621 63.7486 74.9988 62.9119 74.9988 61.8748C74.9988 60.8377 74.1621 60.001 73.125 60.001Z"
                            fill="white" />
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Public sector</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Public sector</h2>
                        <h6 class="text-base mt-2 custom-text">Whether it is an urgent passport delivery or crucial
                            visa pick up, we will ensure that it gets from A to B on time.</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M46.8 9.04601V5.40029H55.8V1.80029H34.2V5.40029H43.2V9.04601C21.8007 9.96707 4.56659 27.2008 3.64589 48.6001H1.80017V61.2001H20.855L26.255 66.6001H46.8002C48.7865 66.6001 50.4002 68.2138 50.4002 70.2001C50.4002 72.1864 48.7865 73.8001 46.8002 73.8001H27.0002V77.4001H49.0466L79.049 61.5169C79.4392 61.3095 79.8822 61.2005 80.3217 61.2005H81.8721C83.3768 61.2005 84.6002 62.424 84.6002 63.9251C84.6002 64.92 84.0588 65.8341 83.1904 66.3121L49.9363 84.6001H13.3459L4.34591 75.6001H1.80062V79.2001H2.85533L11.8553 88.2001H50.8649L84.9245 69.4657C86.946 68.3548 88.2011 66.2313 88.2011 63.9252C88.2011 62.9443 87.9585 62.0302 87.5577 61.2006L88.2011 61.1971V48.5971H86.3553C85.4343 27.2014 68.2005 9.96728 46.8012 9.04658L46.8 9.04601ZM45 12.6003C65.2356 12.6003 81.7596 28.596 82.7082 48.6003H7.29089C8.24012 28.596 24.7635 12.6003 44.9991 12.6003H45ZM53.9472 70.7349C53.9578 70.5521 54 70.3833 54 70.2005C54 66.2313 50.7692 63.0005 46.8 63.0005H27.7452L25.9452 61.2005H71.9541L53.9472 70.7349ZM80.3217 57.6003H5.40035V52.2003H84.6003V57.6003H80.3217Z"
                            fill="white" />
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Hospitality</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Hospitality</h2>
                        <h6 class="text-base mt-2 custom-text">With a range of vehicles available, including
                            refrigerated vans and lorries we keep food and drink fresh.</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <path
                            d="M37.5 56.25H43.75V62.5C43.75 63.3633 44.4492 64.0625 45.3125 64.0625H54.6875C55.5508 64.0625 56.25 63.3633 56.25 62.5V56.25H62.5C63.3633 56.25 64.0625 55.5508 64.0625 54.6875V45.3125C64.0625 44.4492 63.3633 43.75 62.5 43.75H56.25V37.5C56.25 36.6367 55.5508 35.9375 54.6875 35.9375H45.3125C44.4492 35.9375 43.75 36.6367 43.75 37.5V43.75H37.5C36.6367 43.75 35.9375 44.4492 35.9375 45.3125V54.6875C35.9375 55.5508 36.6367 56.25 37.5 56.25ZM39.0625 46.875H45.3125C46.1758 46.875 46.875 46.1758 46.875 45.3125V39.0625H53.125V45.3125C53.125 46.1758 53.8242 46.875 54.6875 46.875H60.9375V53.125H54.6875C53.8242 53.125 53.125 53.8242 53.125 54.6875V60.9375H46.875V54.6875C46.875 53.8242 46.1758 53.125 45.3125 53.125H39.0625V46.875Z"
                            fill="white"></path>
                        <path
                            d="M96.156 49.105C85.64 34.011 68.383 25 50 25C31.617 25 14.359 34.0117 3.84399 49.105C3.46899 49.6441 3.46899 50.355 3.84399 50.8941C14.36 65.9881 31.617 74.9991 50 74.9991C68.383 74.9991 85.641 65.9874 96.156 50.8941C96.531 50.355 96.531 49.6441 96.156 49.105ZM71.875 49.9995C71.875 62.0615 62.0625 71.8745 50 71.8745C37.9375 71.8745 28.125 62.062 28.125 49.9995C28.125 37.937 37.9375 28.1245 50 28.1245C62.0625 28.1245 71.875 37.937 71.875 49.9995V49.9995ZM7.04299 49.9995C13.8946 40.5854 23.566 33.7925 34.453 30.4565C28.703 35.0385 24.9999 42.0895 24.9999 49.9995C24.9999 57.9095 28.703 64.9605 34.453 69.5425C23.566 66.2066 13.894 59.4135 7.04299 49.9995V49.9995ZM65.547 69.5425C71.297 64.9605 75.0001 57.9095 75.0001 49.9995C75.0001 42.0895 71.297 35.0385 65.547 30.4565C76.434 33.7924 86.106 40.5855 92.957 49.9995C86.1054 59.4136 76.434 66.2065 65.547 69.5425Z"
                            fill="white"></path>
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Medical, Optical, Pharmaceutical</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Medical, Optical,
                            Pharmaceutical</h2>
                        <h6 class="text-base mt-2 custom-text">We know how important time sensitive samples, specimens
                            and documents. And we focus on delivering the best care to patients.</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <path
                            d="M46.875 29.3831L43.9609 34.4339V34.43C43.6797 34.9144 43.6797 35.512 43.9609 35.9925L47.0859 41.4066C47.3633 41.891 47.8789 42.1879 48.4375 42.1879H50V46.8754C50 47.2894 50.1641 47.6879 50.4571 47.9809C50.75 48.2739 51.1485 48.4379 51.5626 48.4379C52.8282 48.4379 53.9649 49.1996 54.4493 50.3676C54.9336 51.5356 54.6641 52.8793 53.7735 53.7738C52.879 54.6644 51.5352 54.934 50.3673 54.4496C49.1993 53.9652 48.4376 52.8285 48.4376 51.5629H45.3126C45.3165 53.5824 46.297 55.4731 47.9454 56.641L44.4298 62.5004H34.3748V65.6254H35.9373C37.6639 65.6254 39.0623 67.0238 39.0623 68.7504C39.0623 70.477 37.6639 71.8754 35.9373 71.8754H34.3748V75.0004H68.7498V71.8754H67.1873C65.4607 71.8754 64.0623 70.477 64.0623 68.7504C64.0623 67.0238 65.4607 65.6254 67.1873 65.6254H68.7498V62.5004H58.6948L55.1792 56.641C57.1636 55.2348 58.148 52.809 57.7065 50.4183C57.2651 48.0277 55.476 46.1136 53.1245 45.5121V42.1879H54.687C55.2456 42.1879 55.7612 41.891 56.0386 41.4066L59.1636 35.9925C59.4448 35.5121 59.4448 34.9144 59.1636 34.43L56.2495 29.3831V21.8753H67.1875C67.6015 21.8753 68 21.7113 68.293 21.4183C68.586 21.1253 68.75 20.7269 68.75 20.3128V14.0628C68.75 13.6487 68.586 13.2503 68.293 12.9573C68 12.6643 67.6016 12.5003 67.1875 12.5003H34.8475L21.1795 3.38696C20.656 3.0354 19.9686 3.0354 19.4451 3.38696L5.77709 12.5003H4.68729C4.27323 12.5003 3.87479 12.6643 3.58179 12.9573C3.28879 13.2503 3.12476 13.6487 3.12476 14.0628V20.3128C3.12476 20.7268 3.28882 21.1253 3.58179 21.4183C3.87476 21.7113 4.2732 21.8753 4.68729 21.8753H6.24979V95.3133C6.24979 95.7274 6.41385 96.1258 6.70682 96.4188C6.99979 96.7118 7.39823 96.8758 7.81232 96.8758H18.7503C19.1644 96.8758 19.5628 96.7118 19.8558 96.4188C20.1488 96.1258 20.3128 95.7274 20.3128 95.3133V21.8753H46.8748L46.875 29.3831ZM61.809 65.6251C60.6488 67.547 60.6488 69.9532 61.809 71.8751H41.317C42.4772 69.9532 42.4772 67.547 41.317 65.6251H61.809ZM48.075 62.5001L50.9227 57.7462C51.1376 57.7814 51.3485 57.8009 51.5634 57.8126C51.7782 57.8009 51.9891 57.7814 52.204 57.7462L55.0556 62.5001H48.075ZM53.7898 39.0621H49.3445L47.1218 35.2105L49.3445 31.3589H53.7898L56.0125 35.2105L53.7898 39.0621ZM50.0007 28.2381V21.8748H53.1257V28.2381H50.0007ZM20.3127 6.56612L29.215 12.4997H11.41L20.3127 6.56612ZM17.1877 93.7501H9.37524V88.086L17.1877 79.1563V93.7501ZM9.37524 83.3441V69.0241L16.5354 75.1608L9.37524 83.3441ZM17.1877 71.6061L10.215 65.6256L17.1877 59.649V71.6061ZM9.37524 62.2311V50.2741L16.3479 56.2507L9.37524 62.2311ZM17.1877 52.8561L10.215 46.8756L17.1877 40.899V52.8561ZM9.37524 43.4811V31.5241L16.3479 37.5007L9.37524 43.4811ZM17.1877 34.1061L9.37524 27.4108V21.8756H17.1877V34.1061ZM18.7502 18.7511H6.25024V15.6261H65.6252V18.7511H18.7502Z"
                            fill="white"></path>
                        <path
                            d="M62.5 87.5H64.0625C65.7891 87.5 67.1875 88.8984 67.1875 90.625C67.1875 92.3516 65.7891 93.75 64.0625 93.75H62.5V96.875H96.875V93.75H95.3125C93.5859 93.75 92.1875 92.3516 92.1875 90.625C92.1875 88.8984 93.5859 87.5 95.3125 87.5H96.875V84.375H62.5V87.5ZM69.4414 87.5H89.9334C88.7732 89.4219 88.7732 91.8281 89.9334 93.75H69.4414C70.6016 91.8281 70.6016 89.4219 69.4414 87.5Z"
                            fill="white"></path>
                        <path
                            d="M25 82.812H26.5625C28.2891 82.812 29.6875 84.2104 29.6875 85.937C29.6875 87.6636 28.2891 89.062 26.5625 89.062H25V92.187H59.375V89.062C57.6484 89.062 56.25 87.6636 56.25 85.937C56.25 84.2104 57.6484 82.812 59.375 82.812V79.687H25V82.812ZM31.9414 82.812H53.9964C52.8362 84.7339 52.8362 87.1401 53.9964 89.062H31.9414C33.1016 87.1401 33.1016 84.7339 31.9414 82.812Z"
                            fill="white"></path>
                        <path d="M90.625 3.125H93.75V6.25H90.625V3.125Z" fill="white"></path>
                        <path d="M90.625 9.375H93.75V12.5H90.625V9.375Z" fill="white"></path>
                        <path d="M93.75 6.25H96.875V9.375H93.75V6.25Z" fill="white"></path>
                        <path d="M87.5 6.25H90.625V9.375H87.5V6.25Z" fill="white"></path>
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Construction & Metal Fabrication Courier
                    </h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Construction & Metal
                            Fabrication Courier</h2>
                        <h6 class="text-base mt-2 custom-text">We know it is crucial for materials to arrive at the
                            right place at the right time.</h6>
                    </div>
                </div>
                <div class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <path
                            d="M55.1989 20.6021C54.0973 18.7037 52.1989 17.6021 49.9997 17.6021C47.8005 17.6021 45.8981 18.7037 44.8005 20.6021L14.6985 73.5001C13.5969 75.3985 13.5969 77.6017 14.6985 79.5001C15.8001 81.3985 17.6985 82.5001 19.8977 82.5001H80.0967C82.2959 82.5001 84.1983 81.3985 85.2959 79.5001C86.3975 77.6017 86.3975 75.3985 85.2959 73.5001L55.1989 20.6021ZM81.8009 77.5001C81.6017 77.8008 81.1017 78.5001 80.1017 78.5001H19.8987C18.8987 78.5001 18.2971 77.8008 18.1995 77.5001C18.0003 77.1993 17.6995 76.3985 18.1995 75.5001L48.3015 22.6021C48.8015 21.7036 49.6999 21.6021 50.0007 21.6021C50.3015 21.6021 51.1999 21.7036 51.6999 22.6021L81.8019 75.5001C82.3996 76.3985 82.0011 77.1993 81.8019 77.5001H81.8009Z"
                            fill="white"></path>
                        <path
                            d="M50.3979 40.8979C49.2963 40.8979 48.3979 41.7964 48.3979 42.8979V56.8979C48.3979 57.9995 49.2964 58.8979 50.3979 58.8979C51.4995 58.8979 52.3979 57.9995 52.3979 56.8979V42.8979C52.3979 41.8002 51.4995 40.8979 50.3979 40.8979Z"
                            fill="white"></path>
                        <path
                            d="M50.3979 62.8979C49.2963 62.8979 48.3979 63.7964 48.3979 64.898V67.898C48.3979 68.9996 49.2964 69.898 50.3979 69.898C51.4995 69.898 52.3979 68.9995 52.3979 67.898V64.898C52.3979 63.8003 51.4995 62.8979 50.3979 62.8979V62.8979Z"
                            fill="white"></path>
                    </svg>
                    <h2 class="text-lg mt-4 font-black text-white uppercase">Critical</h2>
                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">Critical</h2>
                        <h6 class="text-base mt-2 custom-text">Whether you are looking to send sensitive or
                            confidential documents, data or hardware, our service is tailored to meet your needs. From
                            our fully security checked team, to a fully audit trial & real-time tracking.</h6>
                    </div>
                </div>
            </div>
            <a href="#" class="custom-services-button mt-6 inline-block">Get A Quote Online Now</a>
        </div>
    </section>
    <!-- ============== BANNER ============== -->
    <section class="w-full bg-cover sm:py-32 md:py-40 lg:py-56"
        style="background-image: url(https://wearesameday.com/wp-content/uploads/2020/12/Rectangle-42-min.png);">
        <div class="custom-banner-content bg-blue-dark py-10 md:py-20 text-center">
            <h2 class="text-3xl sm:text-4xl font-black text-white px-5 lg:px-20">Secure, Safe & Reliable Warehouse And
                Storage</h2>
            <h6 class="text-base md:text-xl mt-6 text-white px-5 lg:px-32">
                <p>
                    Not only do we offer services to deliver your goods throughout the UK &amp; Europe, we can also
                    store items in our large secure warehouse for them items that may need to be delivered at a later
                    date.
                </p>
            </h6>
        </div>
    </section>
    <!-- ============================== LEFT TEXT - RIGHT IMAGE =============================== -->
    <section class="w-full mx-auto lg:flex justify-end">
        <div class="custom-left-textual-content lg:pt-48 lg:px-20 relative">
            <h2 class="text-3xl sm:text-4xl font-black">We Deliver On Time, Every Time</h2>
            <h6 class="text-base mt-8">
                <p>
                    When time is at a premium, our same day service always delivers. Our digitalised tracking systems,
                    dependable logistics network and insistence on providing a quality, bespoke service means we will
                    never let you down. Our experienced control team use the most cutting edge technology to manage your
                    deliveries, ensuring we track your order from dispatch to delivery.
                </p>
                <p>
                    Service is paramount at We Are Same Day and you can be sure to place your trust in us. Get in touch
                    so we can discuss your requirements and ensure your same day delivery needs run effectively and
                    efficiently.
                </p>
            </h6>
            <a href="" class="custom-left-button mt-6 inline-block">Get A Quote Online Now</a>
            <h6 class="text-sm font-bold mt-8 lg:mt-16 custom-testiomanial-small-title">Trusted By Our Clients:</h6>
            <div class="flex custom-testimonial-logos bg-white py-6 px-10 shadow-2xl">
                <img class="h-12 w-auto  mx-auto"
                    src="https://wearesameday.com/wp-content/uploads/2021/03/newsprinters-1.png" />
                <img class="h-12 w-auto  mx-auto"
                    src="https://wearesameday.com/wp-content/uploads/2021/03/matthewclark-1.png" />
                <img class="h-12 w-auto  mx-auto"
                    src="https://wearesameday.com/wp-content/uploads/2021/03/alliance-1.png" />
                <img class="h-12 w-auto  mx-auto"
                    src="https://wearesameday.com/wp-content/uploads/2021/03/greatbar-1.png" />
            </div>
        </div>
        <div class="hidden lg:block lg:w-6/12 bg-cover custom-image-content"
            style="background-image: url(https://wearesameday.com/wp-content/uploads/2020/12/Rectangle-37-min.png);">
        </div>
        <div class="lg:hidden lg:w-6/12 bg-cover custom-image-content custom-image-content-mobile"
            style="background-image: url(https://wearesameday.com/wp-content/uploads/2021/01/mobile-image.jpg); height: 300px;">
        </div>
    </section>
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
    <script type='text/javascript' src='{{ asset('public/assets_front/new/js/contact7.js') }}'></script>
    <script type='text/javascript' src='{{ asset('public/assets_front/new/js/select2.js') }}'></script>
    <script type='text/javascript' src='{{ asset('public/assets_front/new/js/main.js') }}'></script>
    <section class="dark-box">
        <div class="container pt-6 md:pt-0 mx-auto md:flex justify-between items-center">
            <div class="md:w-1/2 text-base text-light text-white text-center md:text-left">Copyright © 2022 Fastuk. All
                rights reserved. | <a href="https://wearesameday.com/privacy-policy/">Privacy Policy</a> | <a
                    href="https://wearesameday.com/cookie-policy/">Cookie Policy</a> </div>
            <div class="md:w-1/2 mt-2 md:mt-0 flex items-center justify-center md:justify-end">
                <h6 class="text-light text-white mr-5">Powered by</h6>
                <a href="https://canvasolutions.co.uk/" class="text-white">FAST UK COURIERS LIMITED</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>
    @if (session('success'))
        <div style="position: fixed; top: 10px; left: 10px; background-color: #28a745; color: #ffffff; padding: 10px;">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
@if (session('credit-limit'))
    <script>
        swal("Credit Limit Exceeded Please Add Balance To Wallet..!", "", "error");
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

    $(document).ready(function() {
    // Assuming you have the {{$rebookings->distance}} value available as a JavaScript variable
    var distance = parseFloat({{$rebookings->distance}});

    var current_fs, next_fs, previous_fs; // fieldsets
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
        var current_date = new Date().toLocaleDateString();
        var current_date_year = new Date().getFullYear();
        var pick_date = new Date(b_date).toLocaleDateString();
        var pick_date_year = new Date(b_date).getFullYear();
        var timezone = moment.tz.guess();
        let thiss = $(this);
        if (from == '' || to == '' || b_date == '' || p_time == '') {
            swal("Booking Information Missing..!", "", "error");
            exit();
        }
        $.ajax({
            type: "POST",
            url: '{{ route('check.datetime') }}',
            data: {
                "_token": "{{ csrf_token() }}",
                b_date: b_date,
                p_time: p_time,
                timezone: timezone
            },
            cache: false,
            success: function(response) {
                if (response == 'date_out') {
                    swal("Past Date Not Allowed..!", "", "error");
                } else if (response == 'time_out') {
                    swal("Past Time Not Allowed..!", "", "error");
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
                            if (dist != '') {
                                distance = parseFloat(dist);
                                var from = $('#locationTextField').val();
                                var to = $('#locationTextField2').val();
                                $('#distance').val(distance);
                                $('.est_cost').each(function() {
                                    let limprice = parseFloat($(this).data('limprice'));
                                    let miles = parseFloat($(this).data('miles'));
                                    let each_cost = $(this).data('price');
                                    let cost = parseFloat(each_cost);
                                    let normal_price = 0;
                                    if (miles > 0 && limprice > 0 && distance >= miles) {
                                        let normal_distance = distance - miles;
                                        if (normal_distance > 0) {
                                            normal_price = cost * normal_distance;
                                        }
                                        let limit_price = limprice;
                                        let total = parseFloat(limit_price + normal_price).toFixed(2);
                                        $(this).html(total);
                                    } else {
                                        let total = parseFloat(distance * cost).toFixed(2);
                                        $(this).html(total);
                                    }
                                });
                                $('.distance_place').html(distance);
                            } else {
                                exit();
                            }
                        }
                    });
                    current_fs = $(thiss).parent();
                    next_fs = $(thiss).parent().next();
                    // Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    // Show the next fieldset
                    next_fs.show();
                    // Hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // For making fieldset appear animation
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
            }
        });
    });

    $(".next2").click(function(event) {
        var numberOfChecked = $('input:radio:checked').length;
        if (numberOfChecked < 1) {
            swal("Please Choose Vehicle", "", "error");
        } else {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            // Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            // Show the next fieldset
            next_fs.show();
            // Hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // For making fieldset appear animation
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

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    }
});

// Assuming you have the {{$rebookings->distance}} value available as a JavaScript variable
var distance = parseFloat({{$rebookings->distance}});

// Update the estimated price for each vehicle
$('.est_cost').each(function() {
    var estCostSpan = $(this); // Cache the current est_cost span element
    let limprice = parseFloat(estCostSpan.data('limprice'));
    let miles = parseFloat(estCostSpan.data('miles'));
    let each_cost = parseFloat(estCostSpan.data('price'));
    let normal_price = 0;

    if (miles > 0 && limprice > 0 && distance >= miles) {
        let normal_distance = distance - miles;
        if (normal_distance > 0) {
            normal_price = each_cost * normal_distance;
        }
        let limit_price = limprice;
        let total = parseFloat(limit_price + normal_price).toFixed(2);
        estCostSpan.text(total); // Update the content of the span element
    } else {
        let total = parseFloat(distance * each_cost).toFixed(2);
        estCostSpan.text(total); // Update the content of the span element
    }
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
            guestModal.style.display = "none";
            document.getElementById("myBtn2").style.display = "none";
            document.getElementById("myBtn3").style.display = "none";
            btn.style.display = "block";
            btn1.style.display = "block";
            $('#payment-form').attr('action', '{{ url('guest/rebook') }}');
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
        let track_id = document.forms[form]["track_id"].value;
        let phone = document.forms[form]["guestpnumber"].value;
        let address = document.forms[form]["guestaddress"].value;
        var guestModal = document.getElementById("guestModal");
        // console.log(name,fname,phone,address);
        if (name == '' || fname == '' || phone == '' || address == '' || track_id == '') {
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
                address: address,
                track_id: track_id
            },
            cache: false,
            success: function(data) {
                if (data.status == 'done') {
                    guestModal.style.display = "none";
                    swal("Guest created!", "please copy Track ID in safe place -> " + data.track_id,
                        "success");
                } else if (data.status == 'already_id') {
                    swal("Please Choose Unique Guest Secret!", "", "error");
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
    $("#myBtnw").click(function(e) {
        e.preventDefault();
        $('#paytype').val('wallet');
        $('#msform').submit();
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
                                // $('#msform').submit();
                                document.getElementById("myBtn2").style.display =
                                "none";
                                document.getElementById("myBtn3").style.display =
                                "none";
                                $("#guestModal").hide();
                                btn.style.display = "block";
                                btn1.style.display = "block";
                                $('#payment-form').attr('action',
                                    '{{ url('guest/booking') }}');
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
