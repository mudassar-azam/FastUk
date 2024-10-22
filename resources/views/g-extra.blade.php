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
    <link rel='stylesheet' href='{{asset("public/assets_front/new/css/contact7.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("public/assets_front/new/css/cookie.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("public/assets_front/new/css/gdpr.css")}}' type='text/css' media='all' />
    <link rel="stylesheet" href='{{asset("public/assets_front/new/css/style.css")}}' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel='stylesheet' id='select2-css'  href='https://wearesameday.com/wp-content/themes/jyst-theme/select2/select2.min.css?ver=1.0' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='{{asset("public/assets_front/new/css/main.css")}}' type='text/css' media='all' />
    <script type='text/javascript' src='{{asset("public/assets_front/new//js//jquery.js")}}' id='jquery-core-js'>
    </script>
    <script type='text/javascript' src='{{asset("public/assets_front/new//js/jquery_migrate.js")}}'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' id='cookie-law-info-js-extra'>

    </script>
    <script type='text/javascript' src='{{asset("public/assets_front/new//js/cookie.js")}}'></script>

    <link rel="icon" href='{{asset("public/assets_front/new/assets/images/cropped-WASD-1-32x32.png")}}' sizes="32x32" />
    <link rel="icon" href='{{asset("public/assets_front/new/images/cropped-WASD-1-192x192.png")}}' sizes="192x192" />
    <link rel="apple-touch-icon" href='{{asset("public/assets_front/new/images/cropped-WASD-1-180x180.png")}}' />
    <meta name="msapplication-TileImage"
        content='{{asset("public/assets_front/new/images/cropped-WASD-1-270x270.png")}}' />
    <style type="text/css" id="wp-custom-css">
    .custom-overlay-text {
        background-color: rgba(255, 255, 255, .9);
    }
    </style>
    <link rel="stylesheet" href="{{asset('public/assets_front/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets_front/indexstyle.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{--            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">--}}

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places">
    </script>
</head>

<body class="home page-template page-template-home page-template-home-php page page-id-43 wp-custom-logo">





    <section class="lg:mt-0 px-6 sm:px-9 mx-auto hidden md:flex items-center justify-center lg:justify-between"
        style="background-color:#aa1818;">
        <!-- Logo -->
        <div class="flex justify-center items-center">
            <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img
                    src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="Logo"
                    style="width:150px;height:auto;" /></a>
        </div>

        <!-- Contact Info and Menu -->
        <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
            <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <a rel="" class="main-site-logo" href="mailto:info@fastukcouriers.co.uk">info@fastukcouriers.co.uk</a>
            </div>

            <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <span style="color:white;">Call: </span>
                <a rel="" href="tel:03333444189" style="color:white;">03333444189</a>
                @if(Auth::user())
                <span class="ml-5 header-buttons"><a href="{{url('home')}}">Dashboard</a></span>
                @else
                <span class="ml-5 header-buttons">
                    <span class="animation-button"><a href="{{url('login')}}">Login</a></span>
                    <a href="{{url('login')}}">Login</a>
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
                    src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="We Are Same Day Logo" /></a>
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
    <br>
    <br>


    <section class="content gradient">
        <h2>Your Bookings</h2>
        <p>Name:Farhan</p>
        <p>Your Track ID: <strong>{{{Session::get('guest_track_id')}}}</strong></p>
        <p><a href="{{url('/destroyguest')}}">Guest Logout</a></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Address Type</th>
                    <th>Collection Point</th>
                    <th>Delivery Point</th>
                    <th>Package Type</th>
                    <th>Quantity</th>
                    <th>Weight</th>
                    <th>Unit</th>
                    <th>Length</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Size Unit</th>
                    <th>Company Name</th>
                    <th>Contact Name</th>
                    <th>Contact Number</th>
                    <th>Postal Code</th>

                </tr>
            </thead>
            <tbody>

                @foreach($booking as $bookings)
                <tr class="success">
                    <td>{{$bookings->address_type}}</td>
                    <td>{{$bookings->collection_point ?? '-'}}</td>
                    <td>{{$bookings->delivery_point ?? '-'}}</td>
                    <td>{{$bookings->package_type}}</td>
                    <td>{{$bookings->quantity}}</td>
                    <td>{{$bookings->weight}}</td>
                    <td>{{$bookings->unit}}</td>
                    <td>{{$bookings->length}}</td>
                    <td>{{$bookings->width}}</td>
                    <td>{{$bookings->height}}</td>
                    <td>{{$bookings->size_unit}}</td>
                    <td>{{$bookings->company_name}}</td>
                    <td>{{$bookings->contact_name}}</td>
                    <td>{{$bookings->contact_tele}}</td>
                    <td>{{$bookings->postal_code}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </section>


    <section class="dark-box">
        <div class="container pt-6 md:pt-0 mx-auto md:flex justify-between items-center">
            <div class="md:w-1/2 text-base text-light text-white text-center md:text-left">Copyright © 2022 Fastuk. All
                rights reserved. | <a href="https://wearesameday.com/privacy-policy/">Privacy Policy</a> | <a
                    href="https://wearesameday.com/cookie-policy/">Cookie Policy</a> </div>
            <div class="md:w-1/2 mt-2 md:mt-0 flex items-center justify-center md:justify-end">
                <h6 class="text-base text-light text-white mr-5">Powered by</h6>
                Canva Solutions
            </div>
        </div>
    </section>

</body>

</html>