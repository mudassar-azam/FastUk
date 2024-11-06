<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description"
        content="Express same day delivery across the UK, We Are Same Day, our deliveries are guaranteed and safe. Tracked Throughout">

    <title>FastuK</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets_front/new/css/contact7.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets_front/new/css/cookie.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets_front/new/css/gdpr.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets_front/new/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets_front/new/css/main.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets_front/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets_front/indexstyle.css') }}">
    <link rel="canonical" href="https://fastukcouriers.co.uk/quote">

    <link rel="icon" href="{{ asset('assets_front/new/images/favicon.png') }}" sizes="192x192">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets_front/new/js/jquery.js') }}" id="jquery-core-js"></script>
    <script src="{{ asset('assets_front/new/js/jquery_migrate.js') }}" id="jquery-migrate-js"></script>
    <script src="{{ asset('assets_front/new/js/cookie.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places">
    </script>

    <style>
    / Custom Styles / .custom-overlay-text {
        background-color: rgba(255, 255, 255, .9);
    }

    / General Reset / * {
        margin: 0;
        padding: 0px;
        box-sizing: border-box;
        ;

    }

    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    header {
        background-color: #aa1818;
        padding: 15px 0;
        color: white;
        text-align: center;
    }

    header img {
        max-width: 100%;
        height: auto;
    }

    #bookingTable_length,
    #bookingTable_filter {
        display: none !important;
    }

    section {
        padding: 24px 0;
        margin-bottom: 3em;
    }

    h2 {
        text-align: start;
        color: #aa1818;
        font-size: 28px;
        margin-bottom: 10px;
    }

    p {
        text-align: end;
        margin-bottom: 41px;
        font-size: 24px;
        margin-top: -4em;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
        font-size: 16px;
    }

    #bookingTable_wrapper {
        overflow: auto !important;
    }

    table th,
    table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #aa1818;
        color: white;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #bookingTable_info {
        display: none;
    }

    #bookingTable_paginate {
        display: none;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
    }

    footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
    }

    footer a:hover {
        text-decoration: underline;
    }

    #shadow-host-companion {
        padding: 0;
    }
    </style>
</head>

<body class="home page-template page-template-home page page-id-43 wp-custom-logo" style="padding-top: 0;">

    <!-- Header Section -->
    <section class="lg:mt-0 px-6 sm:px-9 mx-auto hidden md:flex items-center justify-center lg:justify-between"
        style="background-color:#aa1818;">
        <div class="flex justify-center items-center">
            <a href="/" class="custom-logo-link" rel="home"><img src="{{ url('images/fast_uk_couriers.png') }}"
                    class="custom-logo" alt="Logo" style="width:150px;height:auto;"></a>
        </div>
        <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
            <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-gray-300">
                <a href="mailto:info@fastukcouriers.co.uk">info@fastukcouriers.co.uk</a>
            </div>
            <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-gray-300">
                <span style="color:white;">Call: </span>
                <a href="tel:03333444189" style="color:white;">03333444189</a>
                @if (Auth::user())
                <span class="ml-5 header-buttons"><a href="{{ url('home') }}">Dashboard</a></span>
                @else
                <span class="ml-5 header-buttons"><a href="{{ route('destroy.guest') }}">Logout</a></span>
                @endif
            </div>
        </div>
    </section>

    <!-- Mobile Header Section -->
    <section class="flex md:hidden justify-between p-6 items-center">
        <div class="flex justify-center">
            <a href="/" class="custom-logo-link" rel="home"><img width="244" height="48"
                    src="{{ url('images/fast_uk_couriers.png') }}" class="custom-logo"
                    alt="We Are Same Day Logo"></a>
        </div>
        <div class="flex">
            <a href="mailto:info@fastukcouriers.co.uk" class="ml-4 mr-2"><img
                    src="https://wearesameday.com/wp-content/themes/jyst-theme/media/envelope.svg"></a>
            <a href="tel:03333444189"><img
                    src="https://wearesameday.com/wp-content/themes/jyst-theme/media/call.svg"></a>
        </div>
    </section>


    <section style="min-height: 60vh;max-width: 100vw;overflow-x: auto;" class="content gradient">
        <div class="container mx-auto px-4">
            <div class="table-header-id" style="display: flex;">
                <h2 style="flex: 1; font-weight: bold; font-size:32px;">Your Booking</h2>
                @foreach ($booking as $bookings)
                <h2 style="font-size:20px;">
                    <strong style="font-size:26px;">Track ID:</strong> {{ $bookings->guest_id ?? 'N/A' }}
                </h2>
                @endforeach
            </div>

            <div class="table-responsive">
                <table id="bookingTable" class="table table-striped table-bordered" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-wrap: nowrap;">Reference ID</th>
                            <th style="text-wrap: nowrap;">Departure Name</th>
                            <th style="text-wrap: nowrap;">Destination Name</th>
                            <th style="text-wrap: nowrap;">Driver Name</th>
                            <th style="text-wrap: nowrap;">Booking Date</th>
                            <th style="text-wrap: nowrap;">Picking time type</th>
                            <th style="text-wrap: nowrap;">Package Type</th>
                            <th style="text-wrap: nowrap;">Quantity</th>
                            <th style="text-wrap: nowrap;">Weight</th>
                            <th style="text-wrap: nowrap;">Unit</th>
                            <th style="text-wrap: nowrap;">collection name</th>
                            <th style="text-wrap: nowrap;">collection phone</th>
                            <th style="text-wrap: nowrap;">Delivery name</th>
                            <th style="text-wrap: nowrap;">Delivery phone</th>
                            <th style="text-wrap: nowrap;">Estimate Price</th>
                            <th style="text-wrap: nowrap;">status</th>
                            <th style="text-wrap: nowrap;">Extra Addresses</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($booking as $bookings)
                        <tr
                            class="{{ $bookings->status == 'success' ? 'table-success' : ($bookings->status == 'failed' ? 'table-danger' : '') }}">
                            <td>{{$bookings->ref_no}}</td>
                            <td>{{$bookings->from_address}}</td>
                            <td>{{$bookings->to_address}}</td>
                            <td>{{$bookings->vehicle_id}}</td>
                            <td>{{$bookings->booking_date}}</td>
                            <td>
                                @if($bookings->pickup_time_type == 'at')
                                {{ $bookings->pickup_time_type }} -
                                {{ \Carbon\Carbon::parse($bookings->pick_time_at)->format('h:i A') }}
                                @elseif($bookings->pickup_time_type == 'asap')
                                {{ $bookings->pickup_time_type }}
                                @elseif($bookings->pickup_time_type == 'after')
                                {{ $bookings->pickup_time_type }} -
                                {{ \Carbon\Carbon::parse($bookings->pick_time_after)->format('h:i A') }}
                                @elseif($bookings->pickup_time_type == 'between')
                                {{ $bookings->pickup_time_type }}-{{ \Carbon\Carbon::parse($bookings->pick_time_from)->format('h:i A') }}
                                <>{{ \Carbon\Carbon::parse($bookings->pick_time_to)->format('h:i A') }}
                                    @endif
                            </td>
                            <td>{{$bookings->package_type}}</td>
                            <td>{{$bookings->quantity}}</td>
                            <td>{{$bookings->weight}}</td>
                            <td>{{$bookings->unit}}</td>
                            <td>{{$bookings->coll_name}}</td>
                            <td>{{$bookings->coll_phone}}</td>
                            <td>{{$bookings->deli_name}}</td>
                            <td>{{$bookings->deli_phone}}</td>
                            <td>{{$bookings->price}}</td>
                            <td>{{$bookings->status}}</td>
                            @php
                            $booking = DB::table('guest_extra_addresses')
                            ->where('booking_id', $bookings->id)
                            ->orderBy('id', 'desc')
                            ->get();
                            @endphp
                            @if ($booking->isEmpty())
                            <td>
                                <a>-</a>
                            </td>
                            @else
                            <td>
                                <a href="{{ route('guest.extra' , $bookings->id) }}" class="btn btn-primary">View</a>
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>

        <section class="dark-box" style="width: 100%;margin-bottom: 0em;">
            <div class="container pt-6 md:pt-0 mx-auto md:flex justify-between items-center">
                <div class="md:w-1/2 text-base text-light text-white text-center md:text-left">Copyright © 2024 Fastuk.
                    All rights reserved. | <a href="https://wearesameday.com/privacy-policy/">Privacy Policy</a> | <a
                        href="https://wearesameday.com/cookie-policy/">Cookie Policy</a> </div>
                <div class="md:w-1/2 mt-2 md:mt-0 flex items-center justify-center md:justify-end">
                    <h6 class="text-base text-light text-white mr-5">Powered by</h6> Canva Solutions
                </div>
            </div>
        </section>
    </footer>

</body>

</html>