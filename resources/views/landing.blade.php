@php
$data = DB::table('homepages')->first();
@endphp

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title>FastuK</title>
    <meta name="description"
        content="Express same day delivery across the UK, We Are Same Day, our deliveries are guaranteed and safe. Tracked Throughout" />
    <link rel='stylesheet' href='{{asset("assets_front/new/css/contact7.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("assets_front/new/css/cookie.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("assets_front/new/css/gdpr.css")}}' type='text/css' media='all' />
    <link rel="stylesheet" href='{{asset("assets_front/new/css/style.css")}}' type='text/css' media='all' />
    <link rel="canonical" href="https://fastukcouriers.co.uk/quote" />

    <link rel='stylesheet' href='{{asset("assets_front/new/css/main.css")}}' type='text/css' media='all' />
    <script type='text/javascript' src='{{asset("assets_front/new//js//jquery.js")}}' id='jquery-core-js'>
    </script>
    <script type='text/javascript' src='{{asset("assets_front/new//js/jquery_migrate.js")}}' id='jquery-migrate-js'>
    </script>
    <script type='text/javascript' id='cookie-law-info-js-extra'>

    </script>
    <script type='text/javascript' src='{{asset("assets_front/new//js/cookie.js")}}'></script>

    <link rel="icon" href='{{ asset("assets_front/new/images/favicon.png") }}' sizes="192x192" />

    <style type="text/css" id="wp-custom-css">
    .custom-overlay-text {
        background-color: rgba(255, 255, 255, .9);
    }
    </style>
    <link rel="stylesheet" href="{{asset('assets_front/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet"
        href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets_front/indexstyle.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places">
    </script>
</head>

<body class="home page-template page-template-home page-template-home-php page page-id-43 wp-custom-logo">

    @include('include.models')
    <section class="mt-5 lg:mt-0 px-6 sm:px-9 mx-auto hidden md:flex items-center justify-center lg:justify-between"
        style="background-color:transparent;">
        <!-- Logo -->
        <div class="flex justify-center items-center">
            <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img
                    src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="Logo"
                    style="width:135px;height:auto; padding: 10px 0;" /></a>
        </div>

        <!-- Contact Info and Menu -->
        <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
            <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <a rel="" class="main-site-logo" style="color: #aa1818 !important; font-weight: 900; font-size: large;"
                    href="mailto:sales@fastukcouriers.co.uk">sales@fastukcouriers.co.uk</a>
            </div>

            <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                <span style="color:#aa1818 !important;font-weight: 900; font-size: large;">Call: </span>
                <a rel="" href="tel:03333444189"
                    style="color:#aa1818 !important;font-weight: 900; font-size: large;">03333
                    444 189</a>
                @if(Auth::user())
                <span class="ml-5 header-buttons"><a href="{{url('home')}}">Dashboard</a></span>
                @else
                <span class="ml-5 header-buttons">
                    <span class="animation-button"><a href="{{url('login')}}">Customer Login</a></span>
                    <a href="{{url('login')}}">Customer Login</a>
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

    <section class="w-full py-10 sm:py-32 md:py-40 custom-bg-cover"
        style="background:url({{asset('fast_couriers_uk_banner.jpg')}}); padding: 5rem 5rem !important;">
        <div
            class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2">
            <div class="form-card-cargo card px-4 pt-4 pb-4 mt-3 mb-3">
                <!-- <p>Just foll step</p> -->
                <form method="POST" action="{{ route('book.bookings') }}" id="msform" name="msform">
                    <input type="hidden" id="paytype" name="paytype" value="guest">
                    <!-- progressbar -->
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Trip Details</strong></li>
                        <li id="personal"><strong>Select Vehicle</strong></li>
                        <li id="payment"><strong>Enter Payment Details</strong></li>
                        <li id="confirm" onclick="getformvalues()"><strong>Confirmation</strong></li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card step-one">
                            <div class="row info-details">
                                <div class="col-7">
                                    <h2 class="fs-title">Address Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1-4</h2>
                                </div>
                            </div>
                            <hr />
                            <br>
                            <!--input row -->
                            <div class="input-row">
                                <label class="fieldlabels">Collection Stop: *
                                    <input type="text" id="locationTextField" name='from'
                                        placeholder="Collection Stop" />
                                </label>
                                <label class="fieldlabels">Delivery Stop: *
                                    <input type="text" id="locationTextField2" name='to' placeholder="Delivery Stop" />
                                </label>
                                <label class="fieldlabels">Date: *
                                    <input type="date" name="b_date" id="b_date" placeholder="choose date" />
                                </label>

                                <label class="fieldlabels">Select Pickup Time Option: *
                                    <br>
                                    <select name="pickup_time_type" id="pickup_time_type">
                                        <option selected disabled>select option</option>
                                        <option value="at">At</option>
                                        <option value="between">Between</option>
                                        <option value="after">After</option>
                                        <option value="asap">Asap</option>
                                    </select>
                                </label>



                                <div class="fieldlabels pickup-fields">
                                    <label id="pickupAtLabel" style="display:none;">Pickup At: *
                                        <input type="time" name="p_time_at" STYLE="height: 3.6em; border-radius: 7px;"
                                            id="p_time_at" placeholder="choose time" />
                                    </label>

                                    <label id="pickupAfterLabel" style="display:none;">Pickup After: *
                                        <input type="time" name="p_time_after"
                                            STYLE="height: 3.6em; border-radius: 7px;" id="p_time_after"
                                            placeholder="choose time" />
                                    </label>

                                    <div style="display: flex;">
                                        <label id="pickupFromLabel" style="display:none;">Pickup From: *
                                            <input type="time" name="p_time_from"
                                                STYLE="height: 3.6em; border-radius: 7px;" id="p_time_from"
                                                placeholder="choose time" />
                                        </label>

                                        <label id="pickupToLabel" style="display:none;">Pickup To: *
                                            <input type="time" name="p_time_to"
                                                STYLE="height: 3.6em; border-radius: 7px;" id="p_time_to"
                                                placeholder="choose time" />
                                        </label>
                                    </div>
                                </div>
                                <style>
                                .input-row {
                                    display: flex;
                                    flex-wrap: nowrap;
                                }

                                .fieldlabels {
                                    flex: 1 1 30%;
                                    margin-bottom: 1em;
                                    box-sizing: border-box;
                                }

                                .fieldlabels>label {
                                    display: flex;
                                    align-items: center;
                                }

                                .fieldlabels select {
                                    margin-left: 0.5em;
                                    border: 1px solid #ccc;
                                    border-radius: 6px;
                                    height: 4.5em;
                                    width: 100%;
                                }

                                .pickup-fields {
                                    display: none;
                                    =flex-direction: column;
                                    width: 100%;
                                }

                                .fieldlabels input[type="time"] {
                                    margin-left: 0.5em;
                                    border: 1px solid #ccc;
                                    border-radius: 6px;
                                    height: 2.5em;
                                }

                                .pickup-fields.active {
                                    display: flex;
                                }
                                </style>
                                <script>
                                const pickupTimeType = document.getElementById('pickup_time_type');
                                const pickupFields = document.querySelector('.pickup-fields');

                                pickupTimeType.addEventListener('change', function() {
                                    if (this.value !== "select option") {
                                        pickupFields.classList.add('active');
                                    } else {
                                        pickupFields.classList.remove('active');
                                    }
                                });
                                </script>



                                <script>
                                document.getElementById('pickup_time_type').addEventListener('change', function() {
                                    var pickupAtLabel = document.getElementById('pickupAtLabel');
                                    var pickupAfterLabel = document.getElementById('pickupAfterLabel');
                                    var pickupFromLabel = document.getElementById('pickupFromLabel');
                                    var pickupToLabel = document.getElementById('pickupToLabel');

                                    pickupAtLabel.style.display = 'none';
                                    pickupAfterLabel.style.display = 'none';
                                    pickupFromLabel.style.display = 'none';
                                    pickupToLabel.style.display = 'none';

                                    if (this.value === 'at') {
                                        pickupAtLabel.style.display = 'block';
                                    } else if (this.value === 'after') {
                                        pickupAfterLabel.style.display = 'block';
                                    } else if (this.value === 'between') {
                                        pickupFromLabel.style.display = 'block';
                                        pickupToLabel.style.display = 'block';
                                    }
                                });
                                </script>
                            </div>

                            <div class="input-row" style="margin-top: none;">
                                <label class="fieldlabels">Package Type: *
                                    <br><select name="package_type" id="package_type"
                                        style="width: 95%;border: 1px solid #ccc;color: black;border-radius: 6px;height: 60%;">
                                        <option selected disabled>select package type</option>
                                        <option value="bags">Bags</option>
                                        <option value="packages">Packages</option>
                                        <option value="palletsEuro">Euro Pallet</option>
                                        <option value="palletsUk">select package type</option>
                                    </select>
                                </label>

                                <label class="fieldlabels">Quantity: *
                                    <input type="number" id="quantity" name='quantity' placeholder="Quantity" />
                                </label>

                                <label class="fieldlabels">Weight: *
                                    <input type="number" name="weight" id="weight" placeholder="Weight" />
                                </label>

                                <label class="fieldlabels">Unit: *
                                    <br><select name="unit" id="unit" class="unit-dropdown"
                                        style="width: 95%;border: 1px solid #ccc;color: black;border-radius: 6px;height: 60%;">
                                        <option selected disabled>select unit</option>
                                        <option value="kg">Kg</option>
                                        <option value="gram">Gram</option>
                                        <option value="ton">Ton</option>
                                        <option value="pound">Pound</option>
                                    </select>
                                </label>
                            </div>

                            <div class="input-row" style="margin-top: none;">
                                <label class="fieldlabels">Length: *
                                    <input type="number" name="length" id="length" placeholder="Length">
                                </label>

                                <label class="fieldlabels">Width: *
                                    <input type="number" name="width" id="width" placeholder="Width">
                                </label>

                                <label class="fieldlabels">Height: *
                                    <input type="number" name="height" id="height" placeholder="Height" />
                                </label>

                                <label class="fieldlabels">Size Unit: *
                                    <br><select name="size_unit" id="size_unit"
                                        style="width: 95%;border: 1px solid #ccc;color: black;border-radius: 6px;height: 60%;">
                                        <option selected disabled>select unit</option>
                                        <option value="Cm">Cm</option>
                                        <option value="M">M</option>
                                        <option value="Inch">Inch</option>
                                        <option value="Foot">Foot</option>
                                    </select>
                                </label>
                            </div>

                            <div class="row box_data">

                                <h2 class="fs-title">Get Information</h2>

                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                                    <h3>Collection Address</h3>
                                    <div class="d-lg-flex d-xl-flex d-block">
                                        <input type="text" name="company_name1" id="comName1"
                                            placeholder="Contact Name: *" class="w-100" style="width: 49%;">
                                        <input type="number" name="contact_tele1" id="ph1" placeholder="Contact Telephone"
                                            class="w-100" style="width: 49%;">
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                                    <h3>Delivery Address</h3>
                                    <div class="d-lg-flex d-xl-flex d-block">
                                        <input type="text" name="company_name2" id="comName2"
                                            placeholder="Contact Name: *" class="w-100" style="width: 49%;">
                                        <input type="number" name="contact_tele2" id="ph2" placeholder="Contact Telephone"
                                            class="w-100" style="width: 49%;">  
                                        <input type="text" name="ref_no" id="ref_no" class="w-100" value="{{$ref_no}}" style="width: 98%;color:black;" readonly>
                                    </div>

                                </div>


                            </div>

                            <label for="fieldlabels"> Additional Notes:
                                <textarea style="width: 99% !important;" name="additional_notes" id="additional_notes"
                                    rows="5"></textarea>
                            </label>
                            <div style="display: flex; gap: 1em; align-items: center; justify-content: right;">
                                <div>
                                        <div style="text-align:center; margin-top:2em;">
                                            <button class="add-address-btn" id="addCollectionButton"> + Add Additional Address</button>
                                            <p class="button-description">Click to add a new address entry</p>
                                        </div>

                                        <style>
                                            .add-address-btn {
                                                background: linear-gradient(45deg, #AA1818, #0D3685);
                                                color: #fff;
                                                padding: 15px 30px;
                                                border: none;
                                                border-radius: 8px;
                                                font-size: 1.1em;
                                                font-weight: bold;
                                                cursor: pointer;
                                                transition: all 0.3s ease;
                                                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                                            }

                                            .add-address-btn:hover {
                                                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
                                                transform: translateY(-3px);
                                            }

                                            .button-description {
                                                font-size: 0.9em;
                                                color: #555;
                                                margin-top: 0.5em;
                                            }
                                        </style>

                                </div>
                            </div>
                            <div class="additional-collection-fields-container"></div>
                        </div>


                        <input class="next action-button" type="button" id="firstnext" name="next" value="Next" />


                    </fieldset>
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
                                $vehicle=DB::table('tj_vehicule')->where('statut','=','yes')->get();

                                @endphp
                                @foreach ($vehicle as $vehicles)
                                    <div class="col-3 chosevehicle" data-vehicle-weight="{{$vehicles->wieght}}">
                                        <label for="{{$vehicles->id}}" style="cursor:pointer;text-align:center;">
                                            @php

                                            $imv =
                                            \DB::table('tj_type_vehicule_rental')->where('id',$vehicles->id_type_vehicule)->first();
                                            $miles = $imv->miles;
                                            $limit_prix = $imv->prix;
                                            @endphp
                                            <img src="{{asset('admin/assets/images/type_vehicle_rental/')}}/{{$imv->image}}"
                                                style="width:170px;">

                                            <label class="container-form-radio">
                                                <input class="select_van" data-price="{{$vehicles->price}}" type='radio'
                                                    name='chosevehicle' id="{{$vehicles->id}}" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <br>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Carry Weight</span>
                                                <span style="color:#aa1818;font-weight:bold;">{{$vehicles->wieght}}</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Vehicle</span>
                                                <span style="color:#aa1818;font-weight:bold;">{{$vehicles->brand}}</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Distance</span>
                                                <span style="color:#aa1818;font-weight:bold;"><span
                                                        class="distance_place">calcul..</span>miles</span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Extra Point (25£ per point) :</span>
                                                <span style="color:#aa1818;font-weight:bold;"><span
                                                        class="extra_points"></span></span>
                                            </div>
                                            <div
                                                style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:5px 10px">
                                                <span>Est Price (incl EPs & vat 20%)</span>
                                                <span style="color:#aa1818;font-weight:bold;">&#163; <span class="est_cost"
                                                        data-finaltotal="0" data-price="{{$vehicles->price}}"
                                                        data-miles="{{$miles}}"
                                                        data-limprice="{{$limit_prix}}">calcul..</span></span>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach

                                <input type="hidden" value="" id="distance" name="distance">
                                <input type="hidden" value="0" id="final_price" name="final_price">
                            </div>
                        </div>
                        <input type="button" name="next" class="next2 action-button" value="Next" /> <input
                            type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card steps-3">
                            <div class="row info-details">
                                <div class="col-7">
                                    <h2 class="fs-title">Summary</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div>
                            <div class="row box_data" style="justify-content: center;align-items: center;flex-direction: row-reverse;">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data" style="width: 30%;padding: 1em; border: 1px solid gray; border-radius: 10px;border-left:none;border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                    <div class="d-lg-flex d-xl-flex d-block">
                                        <label><b>Collection Point</b></label>
                                        <p class="from"></p>
                                        <label><b>Total Distance</b></label>
                                        <p class="distance"></p>
                                        <label><b>Delivery Date</b></label>
                                        <p class="b_date"></p>
                                        <label><b>Pick Up Time Type</b></label>
                                        <p class="pickup_time_type"></p>
                                        <label><b>Total Price</b></label>
                                        <p class="ffinal"></p>
                                        <label><b>Collection Address Details</b></label>
                                        <p class="company_name1"></p>
                                        <p class="ph1"></p>
                                        <label><b>Size Unit</b></label>
                                        <p class="size_unit"></p>
                                        <label><b>Length</b></label>
                                        <p class="length"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data" style="width: 30%;padding: 1em; border: 1px solid gray; border-radius: 10px;border-right:none;border-top-right-radius: 0;border-bottom-right-radius: 0;">
                                    <div class="d-lg-flex d-xl-flex d-block">
                                        <label><b>Delivery Point</b></label>
                                        <p class="to"></p>
                                        <label><b>Package Type</b></label>
                                        <p class="package_type"></p>
                                        <label><b>Quantity</b></label>
                                        <p class="quantity"></p>
                                        <label><b>Weight</b></label>
                                        <p class="weight"></p>
                                        <label><b>Unit</b></label>
                                        <p class="unit"></p>
                                        <label><b>Delivery Address Details</b></label>
                                        <p class="company_name2"></p>
                                        <p class="ph2"></p>
                                        <label><b>Dimensions</b></label>
                                        <label><b>Height</b></label>
                                        <p class="height"></p>
                                        <label><b>Width</b></label>
                                        <p class="width"></p>
                                    </div>
                                </div>
                            </div>

                            <div id="summaryContainer" style="display: flex;align-items: center;justify-content: center;flex-wrap: wrap;gap: 1em;padding: 1em;">

                            </div>

                        </div>
                        <input type="button" name="next" class="next3 action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                            </div>
                            <br><br>
                            <div class="payment-button">
                                <button class="stripe-payment" id="myBtn" @if(Auth::user()) style="display:block;" @else
                                    style="display:none;" @endif>Credit & Debit
                                </button>
                                <button class="stripe-paypal" id="myBtn1" @if(Auth::user()) style="display:block;" @else
                                    style="display:none;" @endif>Paypal
                                </button>
                                <button class="stripe-payment" type="button" id="myBtnw" @if(Auth::user())
                                    style="display:block;" @else style="display:none;" @endif>Wallet
                                </button>
                                <button style="background-color: #0d3685; color: white; {{ auth()->check() ? 'display: block;' : 'display: none;' }}" 
                                        type="button" id="pay-with-stripe">
                                    Pay with Stripe
                                </button>

                            </div>

                            <div class="row payment-button">
                                <button class="stripe-payment" id="myBtn2"
                                    data-check="{{ Session::get('guest_track_id')}}" @if(Auth::user())
                                    style="display:none;" @else style="display:block;" @endif>Guest
                                </button>
                                <button class="stripe-paypal" id="myBtn3" @if(Auth::user()) style="display:none;" @else
                                    style="display:block;" @endif>Login
                                </button>
                                <input type="hidden" id="data-check" value="{{ Session::get('guest_track_id')}}">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
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
                <h2 class="text-base font-bold">Package Handling</h2>
                <h6 class="text-base">With Care</h6>
            </div>
        </div>
        <div class="lg:flex items-center custom-single-intro-service text-center lg:text-left">
            <img class="mx-auto" src="{{asset('icon-user.png')}}" />
            <div class="">
                <h2 class="text-base font-bold">24/7</h2>
                <h6 class="text-base">Customer Service</h6>
            </div>
        </div>
    </section>
    <!-- ===================== MAIN SERVICES ===================== -->
    <section class="services px-6 mt-8 pt-8 sm:pt-12 lg:pt-24 pb-12">
        <div class="custom-services-container text-center">
            <h2 class="text-3xl sm:text-4xl font-black text-white">{{$data->servicesHeadTitle}}</h2>
            <h6 class="mt-6 text-white md:px-36">
                <p class="text-white">
                    {{$data->servicesHeadDesription}}
                </p>
            </h6>

            <div class="boxes flex flex-wrap mt-8">
                @php
                $onlyservices = DB::table('services')->get();
                @endphp
                @foreach ($onlyservices as $service)
                <a href="javascript:void(0)"
                    class="box-item relative flex justify-center flex-col px-10 py-6 cursor-pointer">
                    <img style="height: 90px;width: 90px;margin: 0 auto;"
                        src="{{asset('serviceImages')}}/{{$service->serviceImage}}" alt="">
                    <h2 class="text-lg mt-4 font-black text-white uppercase">{{$service->serviceTitle}}</h2>

                    <div
                        class="custom-box-verlay bg-white absolute min-h-full top-0 left-0 w-full flex justify-center flex-col p-6">
                        <h2 class="text-lg font-black uppercase" style="color:#aa1818;">{{$service->serviceTitle}}</h2>
                        <h6 class="text-base mt-2 custom-text">
                            {{ Illuminate\Support\Str::words($service->serviceDescription, 20, '...') }}</h6>
                    </div>
                </a>
                @endforeach

            </div>

            <a href="{{ url('/') }}" class="custom-services-button mt-6 inline-block">Get A Quote Online Now</a>
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
                    Not only do we offer services to deliver your goods throughout the Birmingham, UK. We can also store
                    items in our large secure warehouse for them items that may need to be delivered at a later date.
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
                    never
                    let you down. Our experienced control team use the most cutting edge technology to manage your
                    deliveries, ensuring we track your order from dispatch to delivery.
                </p>
                <p>
                    Service is paramount at We Are Same Day and you can be sure to place your trust in us. Get in touch
                    so
                    we can discuss your requirements and ensure your same day delivery needs run effectively and
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
    <br />
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
    <br />
    <!-- ahmar work start -->
    <section class="w-full custom-form-container mt-72 lg:mt-0"
        style="padding:0 0!important;background-color:#ffffff!important;">
        <div class="container lg:flex" style="flex-direction: row-reverse;">
            <div class="lg:w-7/12 p-16 pb-0">
                <div role="form" class="wpcf7" id="wpcf7-f98-o1" lang="en-US" dir="ltr"
                    style="position: relative;transform: translate(0, -50%);top: 50%;">
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
                        <form action="{{ url('/send-message') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="sm:flex justify-between mb-4">
                                <label class="flex-1 sm:mx-2 input-container">
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="name" value="" size="40" required
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Name" />
                                    </span>
                                </label>
                                <br />
                                <label class="flex-1 sm:mx-2 input-container">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="email" value="" size="40" required
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email" />
                                    </span>
                                </label>
                                <br />
                                <label class="flex-1 sm:mx-2 input-container">
                                    <span class="wpcf7-form-control-wrap phone">
                                        <input type="number" name="phone" value="" required
                                            class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number"
                                            aria-invalid="false" placeholder="Phone number" />
                                    </span>
                                </label>
                            </div>
                            <p>
                                <label class="sm:mx-2 input-container">
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea" required aria-invalid="false"
                                            placeholder="How can we help?"></textarea>
                                    </span>
                                </label>
                                <br />
                                <span class="wpcf7-form-control-wrap acceptance-510">
                                    <span class="wpcf7-form-control wpcf7-acceptance">
                                        <span class="wpcf7-list-item">
                                            <label>
                                                <input type="checkbox" name="acceptance" value="1" required
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
                                <button type="submit" class="wpcf7-form-control has-spinner send-submit">Send Message
                                </button>
                        </form>
                        </p>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <div class="lg:w-5/12">
                <img src="{{ asset('footer-left2.avif') }}" style="height: 85vh;width: 100%;object-fit: cover;" />
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
    <div id="cookie-law-info-again" data-nosnippet="true" style="display:none;">
        <span id="cookie_hdr_showagain">Manage consent</span>
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
                                            through
                                            the website. Out of these, the cookies that are categorized as necessary are
                                            stored on your browser as they are essential for the working of basic
                                            functionalities of the website. We also use third-party cookies that help us
                                            analyze and understand how you use this website. These cookies will be
                                            stored in
                                            your browser only with your consent. You also have the option to opt-out of
                                            these cookies. But opting out of some of these cookies may affect your
                                            browsing
                                            experience.
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
                                            Necessary
                                        </a>
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
                                                features
                                                of the website, anonymously.
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
                                                                cookielawinfo-checbox-analytics
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie
                                                                Consent plugin. The cookie is used to store the user
                                                                consent for
                                                                the cookies in the category "Analytics".
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checbox-functional
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by GDPR
                                                                cookie
                                                                consent to record the user consent for the cookies in
                                                                the
                                                                category "Functional".
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checbox-others</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie
                                                                Consent plugin. The cookie is used to store the user
                                                                consent for
                                                                the cookies in the category "Other.
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-necessary
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie
                                                                Consent plugin. The cookies is used to store the user
                                                                consent
                                                                for the cookies in the category "Necessary".
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-performance
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie
                                                                Consent plugin. The cookie is used to store the user
                                                                consent for
                                                                the cookies in the category "Performance".
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">viewed_cookie_policy</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by the
                                                                GDPR
                                                                Cookie Consent plugin and is used to store whether or
                                                                not user
                                                                has consented to the use of cookies. It does not store
                                                                any
                                                                personal data.
                                                            </td>
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
                                            Functional
                                        </a>
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
                                                the
                                                content of the website on social media platforms, collect feedbacks, and
                                                other third-party features.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="performance" data-toggle="cli-toggle-tab">
                                            Performance
                                        </a>
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
                                                performance
                                                indexes of the website which helps in delivering a better user
                                                experience
                                                for the visitors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="analytics" data-toggle="cli-toggle-tab">
                                            Analytics
                                        </a>
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
                                            Advertisement
                                        </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-advertisement"
                                                class="cli-user-preference-checkbox" data-id="checkbox-advertisement" />
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
                                            others
                                        </a>
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
                                                not
                                                been classified into a category as yet.
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
                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept"
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


    <script type='text/javascript' src='{{asset("assets_front/new/js/contact7.js")}}'></script>
    <script type='text/javascript' src='{{asset("assets_front/new/js/select2.js")}}'></script>
    <script type='text/javascript' src='{{asset("assets_front/new/js/main.js")}}'></script>

    <section class="dark-box">
        <div class="container pt-6 md:pt-0 mx-auto md:flex justify-between items-center">
            <div class="md:w-1/2 text-base text-light text-white text-center md:text-left">Copyright © 2022 Fastuk. All
                rights reserved. | <a href="/terms-conditions">Terms & Conditions</a> | <a href="/cookie-policy">Cookie
                    Policy</a></div>
            <div class="md:w-1/2 mt-2 md:mt-0 flex items-center justify-center md:justify-end">
                <h6 class="text-light text-white mr-5">Powered by</h6>
                <a href="https://canvasolutions.co.uk/" class="text-white">FAST UK COURIERS LIMITED</a>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>
    @if(session('success'))
    <div style="position: fixed; top: 10px; left: 10px; background-color: #28a745; color: #ffffff; padding: 10px;">
        {{ session('success') }}
    </div>
    @endif
    <style>
        #stripeModal {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
    <div id="stripeModal" style="display: none;">
        <div class="modal-content">
            <h2>Enter Payment Details</h2>
            <form id="payment-form-stipe">
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
                <input type="hidden" id="data-check-stripe" value="{{ Session::get('guest_track_id')}}">
                <button type="submit">Submit Payment</button>
            </form>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function() {
            const stripe = Stripe("{{ config('services.stripe.key') }}");
            const elements = stripe.elements();
            const card = elements.create('card');
            card.mount('#card-element');

            $('#pay-with-stripe').click(function() {
                $('#stripeModal').show(); 
            });

            $('#payment-form-stipe').submit(function(e) {
                e.preventDefault(); 

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        $('#card-errors').text(result.error.message); 
                    } else {
                        var s_final = $('#final_price').val();
                        $.ajax({
                            url: '{{ route("process.payment") }}',
                            method: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            data: {
                                stripeToken: result.token.id,
                                s_final: s_final
                            },
                            success: function(response) {
                                if (response.success) {
                                    alert(response.success); 
                                    if (response.redirect_url) {
                                        window.location.href = response.redirect_url;
                                    } else {
                                        $('#stripeModal').hide(); 
                                        window.location.reload(); 
                                    }
                                } else {
                                    alert(response.error); 
                                }
                            },
                            error: function(xhr, status, error) {
                                alert("An error occurred: " + error);
                                $('#stripeModal').hide(); 
                            }
                        });
                    }
                });
            });
        });
    </script>

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
    var price = $(this).closest('.chosevehicle').find('.est_cost').attr('data-finaltotal');
    $('#final_price').val(price);
});


function getformvalues() {

    var form = 'msform';
    let from = document.forms[form]["from"].value;
    let to = document.forms[form]["to"].value;
    let b_date = document.forms[form]["b_date"].value;
    let p_time_at = document.forms[form]["p_time_at"].value;
    let pickup_time_type = document.forms[form]["pickup_time_type"].value;
    let p_time_after = document.forms[form]["p_time_after"].value;
    let p_time_from = document.forms[form]["p_time_from"].value;
    let p_time_to = document.forms[form]["p_time_to"].value;
    let package_type = document.forms[form]["package_type"].value;
    let quantity = document.forms[form]["quantity"].value;
    let weight = document.forms[form]["weight"].value;
    let unit = document.forms[form]["unit"].value;
    let length = document.forms[form]["length"].value;
    let width = document.forms[form]["width"].value;
    let height = document.forms[form]["height"].value;
    let size_unit = document.forms[form]["size_unit"].value;
    var vehicle = $('input:radio:checked').attr('id');
    var company_name1 = $('#comName1').val();
    var company_name2 = $('#comName2').val();
    var ph1 = $('#ph1').val();
    var ph2 = $('#ph2').val();
    var distance = $('#distance').val();
    var ffinal = $('#final_price').val();
    var ref_no = $('#ref_no').val();


    $.ajax({
        type: "POST",
        url: '{{route("create.session")}}',
        data: {
            "_token": "{{ csrf_token() }}",
            distance: distance,
            from: from,
            to: to,
            b_date: b_date,
            p_time_at: p_time_at,
            pickup_time_type: pickup_time_type,
            p_time_after: p_time_after,
            p_time_from: p_time_from,
            p_time_to: p_time_to,
            package_type: package_type,
            quantity: quantity,
            weight: weight,
            unit: unit,
            vehicle: vehicle,
            company_name1: company_name1,
            ph1: ph1,
            company_name2: company_name2,
            ph2: ph2,
            ffinal: ffinal,
            length: length,
            width: width,
            height: height,
            size_unit: size_unit,
            ref_no:ref_no
        },
        success: function(response) {
            if (response.session) {
                // Collection Point
                $('.from').text(response.session.from);
                // Total Distance
                $('.distance').text(response.session.distance);
                // Delivery Date
                $('.b_date').text(response.session.b_date);
                // Pick Up Time Type
                $('.pickup_time_type').text(response.session.pickup_time_type);
                // Total Price
                $('.ffinal').text(response.session.ffinal);
                // Collection Address Details
                $('.company_name1').text(response.session.company_name1);
                $('.ph1').text(response.session.ph1);

                // Delivery Point
                $('.to').text(response.session.to);
                // Package Type
                $('.package_type').text(response.session.package_type);
                // Quantity
                $('.quantity').text(response.session.quantity);
                // Weight
                $('.weight').text(response.session.weight);
                // Unit
                $('.unit').text(response.session.unit);
                // Delivery Address Details
                $('.company_name2').text(response.session.company_name2);
                $('.ph2').text(response.session.ph2);

                // Dimensions
                $('.height').text(response.session.height);
                $('.width').text(response.session.width);
                $('.length').text(response.session.length);
                $('.size_unit').text(response.session.size_unit);
            }


        },
        error: function(error) {
            console.log('Error:', error);
        }
    });

    return true;


}

function validateFieldset(fieldset) {
    let isValid = true;
    let requiredFields = fieldset.querySelectorAll('[required]');

    requiredFields.forEach(field => {
        if (field.value === '') {
            isValid = false;
            field.style.borderColor = 'red';
        } else {
            field.style.borderColor = '';
        }
    });

    return isValid;
}

function addRequiredAttributes(fieldsetCount) {
    const newFieldset = document.querySelector(`#addressType_${fieldsetCount}`).closest('.additional-fields-set');
    let requiredInputs = newFieldset.querySelectorAll('input, select');

    requiredInputs.forEach(input => {
        if (!input.hasAttribute('required')) {
            input.setAttribute('required', true);
        }
    });
}

function collectDynamicFieldsetData() {
    const fieldsets = document.querySelectorAll('.additional-fields-set');
    const summaryContainer = document.querySelector('#summaryContainer');
    const dynamicData = [];
    summaryContainer.innerHTML = '';

    fieldsets.forEach((fieldset, index) => {
        const data = {};
        
        data['address_type'] = fieldset.querySelector(`select[name="address_type_${index + 1}"]`).value;
        data['package_type'] = fieldset.querySelector(`select[name="package_type_${index + 1}"]`).value;
        data['quantity'] = fieldset.querySelector(`input[name="quantity_${index + 1}"]`).value;
        data['weight'] = fieldset.querySelector(`input[name="weight_${index + 1}"]`).value;
        data['linked_to'] = fieldset.querySelector(`input[name="linked_to_${index + 1}"]`).value;
        data['auto_generated_id'] = fieldset.querySelector(`input[name="auto_generated_id_${index + 1}"]`).value;
        data['unit'] = fieldset.querySelector(`select[name="unit_${index + 1}"]`).value;
        data['length'] = fieldset.querySelector(`input[name="length_${index + 1}"]`).value;
        data['width'] = fieldset.querySelector(`input[name="width_${index + 1}"]`).value;
        data['height'] = fieldset.querySelector(`input[name="height_${index + 1}"]`).value;
        data['size_unit'] = fieldset.querySelector(`select[name="size_unit_${index + 1}"]`).value;
        data['collection_point'] = fieldset.querySelector(`input[name="from_${index + 1}"]`)?.value || '';
        data['delivery_point'] = fieldset.querySelector(`input[name="to_${index + 1}"]`)?.value || '';
        data['additional_notes'] = fieldset.querySelector(`textarea[name="additional_notes_${index + 1}"]`).value;
        data['company_name'] = fieldset.querySelector(`input[name="company_name1_${index + 1}"]`).value;
        data['contact_tele'] = fieldset.querySelector(`input[name="contact_tele1_${index + 1}"]`).value;

        dynamicData.push(data);

        const summaryDiv = document.createElement('div');
        summaryDiv.className = 'summary-fieldset';
        summaryDiv.innerHTML = `
            <div style="display:flex;align-items:center;justify-content:center">
                <span style="font-weight:bold;font-size:20px">Addition Address # ${index + 1}</span>
            </div>
            <div style="display:flex;align-items:center;justify-content:center">
                <span style="font-weight:bold;font-size:20px">Reference Id # ${data['auto_generated_id']}</span>
            </div>
            <div style="display:flex;align-items:center;justify-content:center">
                <span style="font-weight:bold;font-size:20px">Linked To : ${data['linked_to']}</span>
            </div>
            <p><strong>Address Type:</strong> ${data['address_type']}</p>
            <p><strong>Package Type:</strong> ${data['package_type']}</p>
            <p><strong>Quantity:</strong> ${data['quantity']}</p>
            <p><strong>Weight:</strong> ${data['weight']} ${data['unit']}</p>
            <p><strong>Dimensions:</strong> ${data['length']} x ${data['width']} x ${data['height']} ${data['size_unit']}</p>
            <p><strong>Company Name:</strong> ${data['company_name']}</p>
            <p><strong>Contact Telephone:</strong> ${data['contact_tele']}</p>
            <p><strong>Additional Notes:</strong> ${data['additional_notes']}</p>
        `;

        if (data['collection_point']) {
            summaryDiv.innerHTML += `<p><strong>Collection Point:</strong> ${data['collection_point']}</p>`;
        }

        if (data['delivery_point']) {
            summaryDiv.innerHTML += `<p><strong>Delivery Point:</strong> ${data['delivery_point']}</p>`;
        }

        summaryDiv.innerHTML += `<hr>`;
        summaryDiv.style.cssText = 'padding: 1em; border: 1px solid gray; border-radius: 10px;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);';

        summaryContainer.appendChild(summaryDiv);
    });

    return dynamicData;
}


function storeDynamicDataInSession() {
    const dynamicData = collectDynamicFieldsetData();

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    
    fetch('{{ route("storeSession") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ dynamicData: dynamicData })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Session data stored:', data);
    })
    .catch((error) => {
        console.error('Error storing session data:', error);
    });
}


$(document).ready(function() {

    var current_fs, next_fs, previous_fs;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    var animalType = document.getElementById("myBtn2").getAttribute("data-check");



    setProgressBar(current);


    $(".next").click(function() {
        let staticIsValid = true;
        let staticFields = document.querySelectorAll('.form-card input, .form-card select');

        staticFields.forEach(field => {
            if (field.offsetParent !== null) {
                if (field.value === '') {
                    staticIsValid = false;
                    field.style.borderColor = 'red';
                } else {
                    field.style.borderColor = '';
                }
            }
        });


        if (!staticIsValid) {
            swal("Booking Information Missing..!", "", "error");
            return;
        }

        let fieldsets = document.querySelectorAll('.additional-fields-set');
        let allFieldsetsValid = true;

        fieldsets.forEach(fieldset => {
            let fieldsetValid = validateFieldset(fieldset);
            if (!fieldsetValid) {
                allFieldsetsValid = false;
            }
        });

        if (!allFieldsetsValid) {
            swal("Booking Information Missing..!", "", "error");
            return;
        }


        var form = 'msform';
        let b_date = document.forms[form]["b_date"].value;

        $.ajax({
            type: "POST",
            url: '{{route("check.datetime")}}',
            data: {
                "_token": "{{ csrf_token() }}",
                b_date: b_date
            },
            cache: false,
            success: function(response) {
                if (response == 'date_out') {
                    swal("Past Date Not Allowed..!", "", "error");
                } else {
                    $('.distance_place').html('calc..');

                    const unitDropdowns = document.querySelectorAll('.unit-dropdown');
                    const weightFields = document.querySelectorAll('input[name^="weight"]');

                    let totalWeightInPounds = 0;

                    const conversionFactors = {
                        kg: 2.20462, 
                        gram: 0.00220462, 
                        ton: 2204.62,  
                        pound: 1
                    };


                    unitDropdowns.forEach((dropdown, index) => {
                        const weightField = weightFields[index];
                        const unit = dropdown.value;
                        const weightValue = parseFloat(weightField.value) || 0;

                        const weightInPounds = weightValue * (conversionFactors[unit] || 1);

                        totalWeightInPounds += weightInPounds;
                    });

                    document.querySelectorAll('.chosevehicle').forEach(vehicleDiv => {
                        const vehicleWeight = parseFloat(vehicleDiv.getAttribute('data-vehicle-weight')) || 0;
                        const radioButton = vehicleDiv.querySelector('.select_van');

                        if (vehicleWeight < totalWeightInPounds) {
                            radioButton.disabled = true;
                            radioButton.checked = false;
                        } else {
                            radioButton.disabled = false;
                        }
                    });



                    const staticFrom = document.querySelector('#locationTextField').value;
                    const staticTo = document.querySelector('#locationTextField2').value;

                    // Initialize arrays to hold dynamic collection and delivery points
                    let dynamicPoints = [];

                    // Loop through dynamically added fields to gather collection and delivery points
                    document.querySelectorAll('.additional-fields-set').forEach(function(
                        fieldset) {
                        const addressType = fieldset.querySelector(
                            'select[name^="address_type"]').value;
                        if (addressType === 'collection') {
                            const collectionPoint = fieldset.querySelector(
                                'input[name^="from"]').value;
                            dynamicPoints.push(collectionPoint);
                        } else if (addressType === 'delivery') {
                            const deliveryPoint = fieldset.querySelector(
                                'input[name^="to"]').value;
                            dynamicPoints.push(deliveryPoint);
                        }
                    });

                    // Prepare the complete address array
                    let allPoints = [staticFrom, ...dynamicPoints, staticTo];

                    $.ajax({
                        type: "POST",
                        url: '{{route("get.distance")}}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'points': allPoints,
                            submit: 'submit'
                        },
                        cache: false,
                        success: function(response) {
                            if (response.totalDistance !== undefined) {
                                storeDynamicDataInSession();
                                let distance = parseFloat(response
                                    .totalDistance);
                                let totalPoints = response.totalPoints;

                                var from = $('#locationTextField').val();
                                var to = $('#locationTextField2').val();

                                $('#distance').val(distance);
                                $('.est_cost').each(function() {
                                    let limprice = parseFloat($(this)
                                        .data('limprice'));
                                    let miles = parseFloat($(this).data(
                                        'miles'));
                                    let each_cost = $(this).data(
                                        'price');
                                    let cost = parseFloat(each_cost);
                                    let normal_price = 0;

                                    if (miles > 0 && limprice > 0 &&
                                        distance >= miles) {
                                        let normal_distance = distance -
                                            miles;
                                        if (normal_distance > 0) {
                                            normal_price = cost *
                                                normal_distance;
                                        }
                                        let limit_price = limprice;
                                        let total = parseFloat(
                                            limit_price +
                                            normal_price).toFixed(2);

                                        if (totalPoints > 2) {
                                            let extraPoints =
                                                totalPoints - 2;
                                            total = parseFloat(total) +
                                                (extraPoints * 25);
                                        }

                                        total = parseFloat(total) *
                                            1.20;
                                        $(this).html(total.toFixed(2));
                                        $(this).attr('data-finaltotal',
                                            total.toFixed(2));

                                    } else {
                                        let total = parseFloat(
                                                distance * cost)
                                            .toFixed(2);

                                        if (totalPoints > 2) {
                                            let extraPoints =
                                                totalPoints - 2;
                                            total = parseFloat(total) +
                                                (extraPoints * 25);
                                        }

                                        total = parseFloat(total) *
                                            1.20;
                                        $(this).html(total.toFixed(2));
                                        $(this).attr('data-finaltotal',
                                            total.toFixed(2));
                                    }
                                });

                                $('.distance_place').html(distance.toFixed(2));
                                if (totalPoints > 2) {
                                    totalPoints = totalPoints - 2;
                                    $('.extra_points').html(totalPoints);
                                } else {
                                    totalPoints = 0;
                                    $('.extra_points').html(totalPoints);
                                }

                                current_fs = $(".next").parent();
                                next_fs = $(".next").parent().next();

                                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                                next_fs.show();

                                current_fs.animate({
                                    opacity: 0
                                }, {
                                    step: function(now) {
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

                            } else {
                                exit();
                            }
                        }
                    });
                }
            }
        });

    });



    $(".next2").click(function(event) {

        var numberOfChecked = $('input:radio:checked').length;


        if (numberOfChecked < 1) {

            swal("Please Choose Vehicle", "", "error");
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


    $(".next3").click(function(event) {

        var numberOfChecked = $('input:radio:checked').length;
        var company_name1 = $('#comName1').val();
        var company_name2 = $('#comName2').val();
        var postal_code1 = $('#pc1').val();
        var postal_code2 = $('#pc2').val();
        if (numberOfChecked < 1 || company_name1 == '' || company_name2 == '' || postal_code1 == '' ||
            postal_code2 == '') {
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
        $(".progress-bar").css("width", percent + "%")
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


        guestModal.style.display = "block";
        document.getElementById("myBtn2").style.display = "none";
        document.getElementById("myBtn3").style.display = "none";
        btn.style.display = "block";
        btn1.style.display = "block";
        $('#payment-form').attr('action', '{{url("guest/booking")}}');

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
    var myBtnnew = document.getElementById("pay-with-stripe");

    var usrdashboard = document.getElementById("usrdashboard");
    var usrregister = document.getElementById("usrregister");

    $('.loginerror').html(
        '<img src="https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif" style="width:150px;height:150px;">'
    );

    $.ajax({
        type: "POST",
        url: '{{route("login")}}',
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
            myBtnnew.style.display = "block";
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
    if (name == '' || fname == '' || phone == '' || address == '' || track_id == '') {
        swal("Please Fill All Fields!", "", "error");
        return false;
    }
    $.ajax({
        type: "POST",
        url: '{{route("create.guest")}}',
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
                swal("Guest created!", "please copy Track ID in safe place -> " + data.track_id, "success");
            } else if (data.status == 'already_id') {
                swal("Please Choose Unique Guest Secret!", "", "error");
            } else {

                swal("Number already in use!", "", "error");
            }


        },
        error: function(data) {
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
        url: '{{route("login.guest")}}',
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
                    url: '{{route("home.guest")}}',
                    data: {
                        trackid: trackid
                    },
                    cache: false,
                    success: function(data) {

                        if (data.status == 0) {

                            swal("Error Occur!", "Something Went Wrong Please Retry",
                                "error");
                        } else if (data.status == 1) {
                            // $('#msform').submit();

                            document.getElementById("myBtn2").style.display = "none";
                            document.getElementById("myBtn3").style.display = "none";
                            $("#guestModal").hide();
                            btn.style.display = "block";
                            btn1.style.display = "block";
                            $('#payment-form').attr('action',
                                '{{url("guest/booking")}}');

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

<script>
    let fieldsetCount = 0;

    function addCollectionFieldset() {

        const container = document.querySelector('.additional-collection-fields-container');

        // Check if there is at least one fieldset
        if (fieldsetCount > 0) {
            const lastFieldset = container.lastElementChild.querySelector('.additional-fields-set');
            const addressTypeSelect = lastFieldset.querySelector('select[id^="addressType_"]');
            const selectedValue = addressTypeSelect.value;

            if (!selectedValue || selectedValue === "select address type") {
                alert("Please select address type for the address you just added.");
                return;
            }
        }

        fieldsetCount++;

        const randomId = Math.floor(Math.random() * 900000) + 100000;

        const wrapperDiv = document.createElement('div');
        wrapperDiv.classList.add('fieldset-wrapper');
        wrapperDiv.style.marginBottom = '20px';

        const newFieldset = document.createElement('fieldset');
        newFieldset.classList.add('additional-fields-set');
        newFieldset.innerHTML = `
            <div class="form-card step-one">
                <div style=" margin: 0 0 2em 0;font-size: 1.5rem;text-transform: uppercase;font-weight: bold; ">
                    <h2 id="addressHeading" style="color:#AA1818;">Additional Point # ${fieldsetCount}</h2>
                    <hr />
                </div>
                <div class="input-row">
                    <label class="fieldlabels">Address Type: *
                        <select id="addressType_${fieldsetCount}" name="address_type_${fieldsetCount}" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 4.5em;">
                            <option selected disabled>select address type</option>
                            <option value="collection">Collection Address</option>
                            <option value="delivery">Delivery Address</option>
                        </select>
                    </label>
                    <div id="dynamicAddressInput_${fieldsetCount}" style="width: 100%;">
                        <label class="fieldlabels">Collection Stop: *
                            <input type="text" id="collection_point_${fieldsetCount}" name="from_${fieldsetCount}" placeholder="Collection Stop" />
                        </label>
                    </div>
                    <label class="fieldlabels">Linked Reference Id: *
                        <input type="text" name="linked_to_${fieldsetCount}" placeholder="Link" />
                    </label>
                </div>
                <div class="input-row" style="margin-top: none;">
                    <label class="fieldlabels">Package Type: *
                        <br>
                        <select name="package_type_${fieldsetCount}" style="width: 95%;border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                            <option selected disabled>select package type</option>
                            <option value="bags">Bags</option>
                            <option value="packages">Packages</option>
                            <option value="palletsEuro">Euro Pallet</option>
                            <option value="palletsUk">Uk Standared Pallet</option>
                        </select>
                    </label>
                    <label class="fieldlabels">Quantity: *
                        <input type="number" name="quantity_${fieldsetCount}" placeholder="Quantity" />
                    </label>
                    <label class="fieldlabels">Weight: *
                        <input type="number" name="weight_${fieldsetCount}" placeholder="Weight" />
                    </label>
                    <label class="fieldlabels">Unit: *
                        <br>
                        <select name="unit_${fieldsetCount}" class="unit-dropdown" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                            <option selected disabled>select unit</option>
                            <option value="kg">Kg</option>
                            <option value="gram">Gram</option>
                            <option value="ton">Ton</option>
                            <option value="pound">Pound</option>
                        </select>
                    </label>
                </div>
                <div class="input-row" style="margin-top: none;">
                    <label class="fieldlabels">Length: *
                        <input type="number" name="length_${fieldsetCount}" placeholder="Length">
                    </label>
                    <label class="fieldlabels">Width: *
                        <input type="number" name="width_${fieldsetCount}" placeholder="Width">
                    </label>
                    <label class="fieldlabels">Height: *
                        <input type="number" name="height_${fieldsetCount}" placeholder="Height" />
                    </label>
                    <label class="fieldlabels">Size Unit: *
                        <br>
                        <select name="size_unit_${fieldsetCount}" style="width: 95%; border: 1px solid #ccc; color: black; border-radius: 6px; height: 60%;">
                            <option selected disabled>select unit</option>
                            <option value="Cm">Cm</option>
                            <option value="M">M</option>
                            <option value="Inch">Inch</option>
                            <option value="Foot">Foot</option>
                        </select>
                    </label>
                </div>
                <div class="row box_data">
                    <h2 class="fs-title">Get Information</h2>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 sub_box_data">
                        <h3>Address</h3>
                        <div class="d-lg-flex d-xl-flex d-block">
                        <input type="text" name="company_name1_${fieldsetCount}" placeholder="Contact Name: *" class="w-100" style="width: 49%;">
                        <input type="number" name="contact_tele1_${fieldsetCount}" placeholder="Contact Telephone" class="w-100" style="width: 49%;">
                        <input type="text" name="auto_generated_id_${fieldsetCount}" value="${randomId}" readonly class="w-100" style="width: 98%; margin-right: 2%; color: black;">
                        </div>
                    </div>
                </div>
                <label for="fieldlabels">Additional Notes:
                    <textarea style="width: 99% !important;" name="additional_notes_${fieldsetCount}" rows="5"></textarea>
                </label>
                <div style="display:flex;align-items:center;justify-content:center;">
                    <button style="width: 20%; margin-top: 10px;" type="button" class="removeFieldsetButton action-button">Remove Fieldset</button>
                </div>
            </div>
        `;

        wrapperDiv.appendChild(newFieldset);
        container.appendChild(wrapperDiv);

        const collectionInput = newFieldset.querySelector(`#collection_point_${fieldsetCount}`);
        const collectionAutocomplete = new google.maps.places.Autocomplete(collectionInput);

        const addressTypeSelect = newFieldset.querySelector(`#addressType_${fieldsetCount}`);
        const dynamicAddressInput = newFieldset.querySelector(`#dynamicAddressInput_${fieldsetCount}`);

        addressTypeSelect.addEventListener('change', function() {
            const selectedValue = this.value;
            dynamicAddressInput.innerHTML = '';

            if (selectedValue === 'collection') {
                dynamicAddressInput.innerHTML = `
                    <label class="fieldlabels">Collection Stop: *
                        <input type="text" id="collection_point_${fieldsetCount}" name="from_${fieldsetCount}" placeholder="Collection Stop" />
                    </label>
                `;
                const newCollectionInput = dynamicAddressInput.querySelector(`#collection_point_${fieldsetCount}`);
                const newCollectionAutocomplete = new google.maps.places.Autocomplete(newCollectionInput);
            } else if (selectedValue === 'delivery') {
                dynamicAddressInput.innerHTML = `
                    <label class="fieldlabels">Deliver Stop: *
                        <input type="text" id="delivery_point_${fieldsetCount}" name="to_${fieldsetCount}" placeholder="Delivery Stop" />
                    </label>
                `;
                const newDeliveryInput = dynamicAddressInput.querySelector(`#delivery_point_${fieldsetCount}`);
                const newDeliveryAutocomplete = new google.maps.places.Autocomplete(newDeliveryInput);
            }

            this.disabled = true;
        });

        // Remove fieldset
        const removeFieldsetButton = newFieldset.querySelector('.removeFieldsetButton');
        removeFieldsetButton.addEventListener('click', function() {
            wrapperDiv.remove();
            fieldsetCount--;
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const addFieldsetButton = document.querySelector('#addFieldsetButton');
        addFieldsetButton.addEventListener('click', addCollectionFieldset);
    });
</script>

<script>
document.getElementById('addCollectionButton').addEventListener('click', function() {
    addCollectionFieldset();
    addRequiredAttributes(fieldsetCount);
});

</script>
<script>
     document.getElementById('myBtn2').addEventListener('click', function () {
     const guestTrackId = this.getAttribute('data-check');
     var myBtnnew = document.getElementById("pay-with-stripe");
     // Create a FormData object to gather the form data
     const formData = new FormData(document.getElementById('msform'));
     formData.append('guest_track_id', guestTrackId);

     // Send AJAX POST request
     fetch("{{ route('book.guestBooking') }}", {
         method: 'POST',
         body: formData,
         headers: {
             'X-CSRF-TOKEN': '{{ csrf_token() }}'
         }
     })
     .then(response => {
         console.log('Response status:', response.status);
         myBtnnew.style.display = "block";
         return response.json(); 
     })
     .then(data => {
         console.log('Response data:', data);
         if (data.status === 'done') {
             // Show the generated track_id in the input fields
             document.querySelector('input[name="track_id"]').value = data.track_id; // Append track_id to the appropriate input field
             document.querySelector('input[name="trackid"]').value = data.track_id; // Also show in the trackid field
             myBtnnew.style.display = "block";
         } else if (data.status === 'already_id') {
             alert('Track ID already exists.');
         } else {
             alert('Booking failed: ' + data.message);
         }
     })
     .catch(error => {
         console.error('Error:', error);
         alert('An error occurred. Check the console for more details.');
     });
 });
</script>