@php
    $data = DB::table('homepages')->first();
@endphp
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title>Blogs</title>
    <meta name="description" content="Blogs" />
    <!-- <link rel='stylesheet' id='wp-block-library-css'  href='https://wearesameday.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3' type='text/css' media='all' /> -->
    <link rel='stylesheet' href='{{ asset("assets_front/new/css/contact7.css") }}' type='text/css' media='all' />
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

        * {
        box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
        font-family: Arial;
        padding: 20px;
        background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
        float: left;
        width: 75%;
        }

        /* Right column */
        .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
        }

    </style>

    <link rel="stylesheet" href="{{ asset('assets_front/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets_front/indexstyle.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}


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
        style="background:url({{ asset('homepage') }}/{{ $data->section1Image }});position:relative; height:580px !important;">

        <div
            class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2 m-button-section">
            <a href="{{ url('login') }}" class="m-button-banner">Customer Login</a>
            <a href="{{ url('quote') }}" class="m-button-banner">Get A Quote</a>
        </div>


    </section>

    <div class="header">
    <b><h2 id="blogs-heading">Blog Detail</h2></b>
      </div>

      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <b><h2>{{$blog->title}}</h2></b>
            <h5>{{ $blog->created_at->format('F d, Y') }}</h5>
            <img class="fakeimg" style="height:200px;" src="{{asset('featureimages')}}/{{$blog->featureimage}}" alt="">
            <p>{{$blog->content}}</p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>Posted By</h2>
            <img class="fakeimg" style="height:100px;" src="{{asset('userimages')}}/{{$blog->userimage}}" alt="">
            <br>
            <p style="align-items : center;">{{$blog->username}}</p>
          </div>
          @php
              $posts = DB::table('blogs')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
          @endphp
          <div class="card">
            <h3>Popular Post</h3><br>
            @foreach ($posts as $post)
            <img class="fakeimg" src="{{asset('featureimages')}}/{{$post->featureimage}}" alt="">
            @endforeach

          </div>
        </div>
      </div>


    <section class="w-full custom-form-container">
        <div class="container mx-auto px-6 lg:flex">
            <div class="lg:w-7/12">
                <div role="form" class="wpcf7" id="wpcf7-f98-o1" lang="en-US" dir="ltr">
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
                        <h2 class="text-3xl sm:text-4xl font-black">Send us a message</h2>

                        <form action="{{ url('/send-message') }}" method="POST">
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
                                <button type="submit" class="wpcf7-form-control has-spinner send-submit">Send
                                    Message</button>
                        </form>
                        </p>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <div class="lg:w-5/12 lg:pl-20 px-3 mt-12 lg:mt-0">
                <h3 class="text-2xl font-bold">FAST UK COURIERS LIMITED</h3>
                <h6 class="text-base mt-6">
                    <p>
                        12 ROSHVEN ROAD<br>
                        BIRMINGHAM<br>
                        B12 8DB
                    </p>
                </h6>
                <h6 class="text-lg font-bold mt-3" style="display: flex; align-items:center;gap:5px;"><span
                        class="font-bold text-black"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px"
                            height="30px" fill-rule="nonzero">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.33333,5.33333)">
                                    <path
                                        d="M13,42h22c3.866,0 7,-3.134 7,-7v-22c0,-3.866 -3.134,-7 -7,-7h-22c-3.866,0 -7,3.134 -7,7v22c0,3.866 3.134,7 7,7z"
                                        fill="#aa1818"></path>
                                    <path
                                        d="M35.45,31.041l-4.612,-3.051c-0.563,-0.341 -1.267,-0.347 -1.836,-0.017c0,0 0,0 -1.978,1.153c-0.265,0.154 -0.52,0.183 -0.726,0.145c-0.262,-0.048 -0.442,-0.191 -0.454,-0.201c-1.087,-0.797 -2.357,-1.852 -3.711,-3.205c-1.353,-1.353 -2.408,-2.623 -3.205,-3.711c-0.009,-0.013 -0.153,-0.193 -0.201,-0.454c-0.037,-0.206 -0.009,-0.46 0.145,-0.726c1.153,-1.978 1.153,-1.978 1.153,-1.978c0.331,-0.569 0.324,-1.274 -0.017,-1.836l-3.051,-4.612c-0.378,-0.571 -1.151,-0.722 -1.714,-0.332c0,0 -1.445,0.989 -1.922,1.325c-0.764,0.538 -1.01,1.356 -1.011,2.496c-0.002,1.604 1.38,6.629 7.201,12.45v0v0v0v0c5.822,5.822 10.846,7.203 12.45,7.201c1.14,-0.001 1.958,-0.248 2.496,-1.011c0.336,-0.477 1.325,-1.922 1.325,-1.922c0.39,-0.563 0.24,-1.336 -0.332,-1.714z"
                                        fill="#ffffff"></path>
                                </g>
                            </g>
                        </svg></span> <a class="contact-number" href="tel:03333444189">03333 444 189</a></h6>
                <h6 class="text-lg font-bold mt-3" style="display: flex; align-items:center;gap:5px;"><span
                        class="font-bold text-black"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px"
                            height="30px" fill-rule="nonzero">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.33333,5.33333)">
                                    <path
                                        d="M13,42h22c3.866,0 7,-3.134 7,-7v-22c0,-3.866 -3.134,-7 -7,-7h-22c-3.866,0 -7,3.134 -7,7v22c0,3.866 3.134,7 7,7z"
                                        fill="#aa1818"></path>
                                    <path
                                        d="M35.45,31.041l-4.612,-3.051c-0.563,-0.341 -1.267,-0.347 -1.836,-0.017c0,0 0,0 -1.978,1.153c-0.265,0.154 -0.52,0.183 -0.726,0.145c-0.262,-0.048 -0.442,-0.191 -0.454,-0.201c-1.087,-0.797 -2.357,-1.852 -3.711,-3.205c-1.353,-1.353 -2.408,-2.623 -3.205,-3.711c-0.009,-0.013 -0.153,-0.193 -0.201,-0.454c-0.037,-0.206 -0.009,-0.46 0.145,-0.726c1.153,-1.978 1.153,-1.978 1.153,-1.978c0.331,-0.569 0.324,-1.274 -0.017,-1.836l-3.051,-4.612c-0.378,-0.571 -1.151,-0.722 -1.714,-0.332c0,0 -1.445,0.989 -1.922,1.325c-0.764,0.538 -1.01,1.356 -1.011,2.496c-0.002,1.604 1.38,6.629 7.201,12.45v0v0v0v0c5.822,5.822 10.846,7.203 12.45,7.201c1.14,-0.001 1.958,-0.248 2.496,-1.011c0.336,-0.477 1.325,-1.922 1.325,-1.922c0.39,-0.563 0.24,-1.336 -0.332,-1.714z"
                                        fill="#ffffff"></path>
                                </g>
                            </g>
                        </svg></span> <a class="contact-number" href="tel:07491276262">07491276262</a></h6>
                <h6 class="text-lg font-bold mt-3" style="display: flex; align-items:center;gap:5px;"><span
                        class="font-bold text-black"><img style="height;30px; width:30px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACQUlEQVR4nO2YsWsUQRTGJxhEBEWyZL73rnALGw3YaKGVlVVSpbSzMVimE/IXBNOllICokOy+iBdsrMTCNLExhSg2FhYWgYAiiIh6Mpe9dW9z687eznqnzAevuNudfd/vzczbuVPKy8vLy8vrf1JENCvMC+MYEdFsKcBDolCAt0LUGbN4tzE9fWag6QdTUyezn9e1hhDtjoHpThK7xlOh5+4UES1nb2iH4SkBtsfA/M6jVivIeouBWzHzjTxAJyZa7Sg10fv+MfNxAZ6M0PzTrSA40fNjvAnR7e415oVDAN0A7j9TajK9NjNzVIjiv20+Jtq6G4bHUh9KHRHgTnpPIYDN4KbNA/dKi/gngNLpa7byq1bL2ALALKcXgzZQgwDL1o3ECuCgIq/Wg6DVB0F0U4h+OKz6T2FePNTKgZeF42wBil4isdbXhOibA4DvAlyv/DKtCGCq9EG0Pp9NJMCcAF+GrjzwVZjn+8wznxXgfen4qgDJntiPtL6cTRgRXRGij0MAfI60vtpXEOaLAuxZjR8KoCBxxHzBOnFSiE3g0oBCfLJ+Rg2AWlPvbClyDYCizSfMp0s2n7tmwPUBKrU/5+2YHQCk5rReGvACamfWfNt8l6v8Up2cTgESkyvZI0BvNvLn+O6RBFipnY9dAxzEWvYQlpe5Zu5xkoubATAz8dy01bz5pMe7+4HETQH8BnktwKaJGHjj/PncNEDTwR6A/AyIX0KJ/CamEXehDaJzo/7jViqG8ZwCeHl5eXl5qX9UvwB+94MRDaVfggAAAABJRU5ErkJggg=="></span>
                    <a class="contact-email" href="mailto:sales@fastukcouriers.co.uk">sales@fastukcouriers.co.uk</h6>
                <h6 class="text-lg font-bold mt-3" style="display: flex; align-items:center;gap:5px;"><span
                        class="font-bold text-black"><img style="height;30px; width:30px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACQUlEQVR4nO2YsWsUQRTGJxhEBEWyZL73rnALGw3YaKGVlVVSpbSzMVimE/IXBNOllICokOy+iBdsrMTCNLExhSg2FhYWgYAiiIh6Mpe9dW9z687eznqnzAevuNudfd/vzczbuVPKy8vLy8vrf1JENCvMC+MYEdFsKcBDolCAt0LUGbN4tzE9fWag6QdTUyezn9e1hhDtjoHpThK7xlOh5+4UES1nb2iH4SkBtsfA/M6jVivIeouBWzHzjTxAJyZa7Sg10fv+MfNxAZ6M0PzTrSA40fNjvAnR7e415oVDAN0A7j9TajK9NjNzVIjiv20+Jtq6G4bHUh9KHRHgTnpPIYDN4KbNA/dKi/gngNLpa7byq1bL2ALALKcXgzZQgwDL1o3ECuCgIq/Wg6DVB0F0U4h+OKz6T2FePNTKgZeF42wBil4isdbXhOibA4DvAlyv/DKtCGCq9EG0Pp9NJMCcAF+GrjzwVZjn+8wznxXgfen4qgDJntiPtL6cTRgRXRGij0MAfI60vtpXEOaLAuxZjR8KoCBxxHzBOnFSiE3g0oBCfLJ+Rg2AWlPvbClyDYCizSfMp0s2n7tmwPUBKrU/5+2YHQCk5rReGvACamfWfNt8l6v8Up2cTgESkyvZI0BvNvLn+O6RBFipnY9dAxzEWvYQlpe5Zu5xkoubATAz8dy01bz5pMe7+4HETQH8BnktwKaJGHjj/PncNEDTwR6A/AyIX0KJ/CamEXehDaJzo/7jViqG8ZwCeHl5eXl5qX9UvwB+94MRDaVfggAAAABJRU5ErkJggg=="></span>
                    <a class="contact-email" href="mailto:Info@fastukcouriers.co.uk">Info@fastukcouriers.co.uk</h6>

            </div>
        </div>
    </section>
</body>

</html>
