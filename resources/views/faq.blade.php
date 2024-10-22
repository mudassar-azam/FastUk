@php
    $data = DB::table('homepages')->first();
    $onlyservices = DB::table('services')->get();
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
     <style>
        @import url("https://fonts.googleapis.com/css?family=Hind:300,400&display=swap");

        .faq-container {
            margin: 0 auto;
            padding: 4rem;
            width: 60rem;
            text-align: center;
        }

        @media only screen and (max-width: 786px) {
            .faq-container {
                width: 100%;
                padding: 1rem;
            }

        }

        .faq-container>h2 {
            font-size: xx-large;
            font-weight: 800;
        }

        .accordion .accordion-item {
            border-bottom: 1px solid #e5e5e5;
        }

        .accordion .accordion-item button[aria-expanded=true] {
            border-bottom: 1px solid #AA1818;
        }

        .accordion button {
            position: relative;
            display: block;
            text-align: left;
            width: 100%;
            padding: 1em 0;
            color: #000000;
            font-size: 1.15rem;
            font-weight: 400;
            border: none;
            background: none;
            outline: none;
        }

        .accordion button:hover,
        .accordion button:focus {
            cursor: pointer;
            color: #AA1818;
        }

        .accordion button:hover::after,
        .accordion button:focus::after {
            cursor: pointer;
            color: #AA1818;
            border: 1px solid #AA1818;
        }

        .accordion button .accordion-title {
            padding: 1em 1.5em 1em 0;
        }

        .accordion button .icon {
            display: inline-block;
            position: absolute;
            top: 18px;
            right: 0;
            width: 22px;
            height: 22px;
            border: 1px solid;
            border-radius: 22px;
        }

        .accordion button .icon::before {
            display: block;
            position: absolute;
            content: "";
            top: 9px;
            left: 5px;
            width: 10px;
            height: 2px;
            background: currentColor;
        }

        .accordion button .icon::after {
            display: block;
            position: absolute;
            content: "";
            top: 5px;
            left: 9px;
            width: 2px;
            height: 10px;
            background: currentColor;
        }

        .accordion button[aria-expanded=true] {
            color: #AA1818;
        }

        .accordion button[aria-expanded=true] .icon::after {
            width: 0;
        }

        .accordion button[aria-expanded=true]+.accordion-content {
            opacity: 1;
            max-height: 9em;
            transition: all 200ms linear;
            will-change: opacity, max-height;
        }

        .accordion .accordion-content {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 200ms linear, max-height 200ms linear;
            will-change: opacity, max-height;
        }

        .accordion .accordion-content p {
            font-size: 1rem;
            font-weight: 300;
            margin: 2em 0;
        }

        .jumbotron {
            background-color: #AA1818;
            position: relative;
        }

        .jumbotron img {
            width: 100%;
            height: 70vh;
            object-fit: cover;

        }

        .jumbotron h1 {
            position: absolute;
            color: #ffffff;
            font-size: 10rem;
            font-weight: 700;
            top: 5%;
            left: 5%;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }
    </style>
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">FAQ</h1>
        <img src="{{asset('public/homepage\faq.jpg')}}" alt="FAQ Banner Image" />
    </div>


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

    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion">
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What is a
                        'Dedicated' delivery?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>This means the vehicle and driver is fully dedicated to your consignment only, no co-loading with
                        anything or anyone else’s load. The consignment will be collected and delivered direct (ASAP) to
                        the delivery destination.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Do you do
                        overnights, next day or 2-3 day delivery service?</span><span class="icon"
                        aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>No, ours is a dedicated transport service only so we don’t do any groupage type service such as
                        overnights, next day or 2-3 days delivery. We can however collect on a specified day and time
                        and then deliver following day if required as a dedicated consignment.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Do you have
                        insurance and what is your insurance cover?</span><span class="icon"
                        aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Yes, all consignments are covered by our goods in transit insurance cover. The cover value goes
                        up to £30k. Should you require higher coverage, we can also manage this on an ad hoc basis with
                        our insurance supplier.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Do you deliver to
                        Europe and do you handle customs?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Yes we can provide dedicated or express delivery service to, from and within Europe. We can also
                        handle all your customs clearance requirements.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Do you do pallet
                        delivery?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>We don’t provide a pallet network type service (groupage) however we can collect and deliver any
                        number of pallets using dedicated vehicles.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do I start
                        booking jobs?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Please set up an account with us by clicking here and we will do the rest or send us a quote
                        request below.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Where can I find
                        your terms and conditions?</span><span class="icon" aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>Our full terms and conditions of carriage can be found here.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>

    <section class="wrap-banner">
 <div>
  <h2>Request an online Quote </h2>
  </div>
  <a href="{{ url('/quote') }}" class="mt-6 inline-block bg-gray-100 text-black font-semibold text-lg py-2 px-4 hover:bg-red-700 hover:text-gray-100">Get A Quote Now</a>

</section>

    <br/>
    <style>
            .wrap-banner{
                display:flex;
                justify-content:space-between;
                align-items:center;
                height:75vh;
                background:url(https://images.pexels.com/photos/66997/pexels-photo-66997.jpeg?cs=srgb&dl=nature-sky-sunset-the-mountains-66997.jpg&fm=jpg);
                background-size:cover;
                background-position:center;
                padding: 0 40px 0 20px;
            }
            .wrap-banner h2{
                font-size:3.1rem;
                font-weight:700;
            }
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



    <!-- ahmar work start -->


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
                <img src="{{ asset('public/footer-left2.avif') }}"
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
                rights reserved. | <a href="/terms-conditions">Terms & Conditions</a> | <a
                    href="/cookie-policy">Cookie Policy</a> </div>
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
