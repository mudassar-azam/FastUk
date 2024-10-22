 @extends("include/main")

 @section('content')


 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4JJ9MS" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->




 <div class="mainWrap">


     <!-- The stripeModal -->
     <div id="myModal" class="modal">

         <!-- Modal content -->
         <div class="modal-content">
             <span class="close" onclick="hidestripe()">&times;</span>

             @include('partials.stripe')
         </div>


     </div>
     <!-- The paypalmodel -->
     <div id="paypalModal" class="modal">

         <!-- Modal content -->
         <div class="modal-content">
             <span class="close" onclick="hidepaypal()">&times;</span>

             <div id="paypal-button-container"></div>

             <!-- Include the PayPal JavaScript SDK -->
             <script
                 src="https://www.paypal.com/sdk/js?client-id=ATEjuGPpNNvNBomkRFmZSm2a2iYPPBTD95lBBC2SZCMfKBzi3YiEJN3XyncBboC--_KPgeJCxdmR1UlS&currency=USD">
             </script>

             <script>
             // Render the PayPal button into #paypal-button-container
             paypal.Buttons({

                 // Set up the transaction
                 createOrder: function(data, actions) {
                     return actions.order.create({
                         purchase_units: [{
                             amount: {
                                 value: '88.44'
                             }
                         }]
                     });
                 },

                 // Finalize the transaction
                 onApprove: function(data, actions) {
                     return actions.order.capture().then(function(details) {
                         // Show a success message to the buyer
                         alert('Transaction completed by ' + details.payer.name.given_name + '!');
                     });
                 }


             }).render('#paypal-button-container');
             </script>
         </div>


     </div>


     <div id="loginmodel" class="modal">
         <div class="modal-content">
             <span class="close3">&times;</span>
             <h3>User Login</h3>
             <!-- Modal content -->
             <form method="POST" action="{{ route('login') }}">
                 @csrf

                 <div class="row">

                     <div class="col-md-12">
                         <label for="email">{{ __('E-Mail Address') }}</label>

                         <input id="email" type="email" class="form-control " name="email" required autocomplete="email"
                             autofocus>

                     </div>




                     <div class="col-md-12">
                         <label for="password">{{ __('Password') }}</label>

                         <input id="password" type="password" class="form-control " name="password" required
                             autocomplete="current-password">


                     </div>
                 </div>

                 <div>
                     <div>
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                 {{ old('remember') ? 'checked' : '' }}>

                             <label class="form-check-label" for="remember">
                                 {{ __('Remember Me') }}
                             </label>
                         </div>
                     </div>
                 </div>


                 <strong> <span class="loginerror text-danger"></span></strong>

                 <div>
                     <div>
                         <button type="submit" class="btn btn-primary" onclick="login(event)">
                             {{ __('Login') }}
                         </button>

                         @if (Route::has('password.request'))
                         <a class="btn btn-link" href="{{ route('password.request') }}">
                             {{ __('Forgot Your Password?') }}
                         </a>
                         @endif
                     </div>
                 </div>
             </form>




         </div>
     </div>
     <div id="guestModal" class="modal">

         <!-- Modal content -->
         <form method="post" action="javascript:void(0);" name="formguest">
             <div class="modal-content">
                 <span class="close2">&times;</span>
                 <h3><a class="text-light btn already-guest" href="javascript:void(0);">Already Guest</a> / <a
                         class="text-light btn create-guest" href="javascript:void(0);">Create Guest</a></h3>
                 <div class="row" id="enter_guest" style="display:none;">
                     <div class="col-md-12">
                         <lable>Name</lable>
                         <input type="text" class="form-control" name="guestname" />
                     </div>
                     <div class="col-md-12">
                         <lable>Father Name</lable>
                         <input type="text" class="form-control" name="guestfname" />
                     </div>
                     <div class="col-md-12">
                         <lable>Phone#</lable>
                         <input type="number" class="form-control" name="guestpnumber" />
                     </div>
                     <div class="col-md-12">
                         <lable>Address(your permanent living address)</lable>
                         <input type="text" class="form-control" name="guestaddress" />
                     </div>

                 </div>
                 <div class="row" id="confirm_guest">
                     <div class="col-md-12">
                         <lable>Enter Your Track Id</lable>
                         <div class="row">
                             <div class="col-md-8">
                                 <input type="text" class="form-control" name="trackid" />
                             </div>
                             <div class="col-md-3">
                                 <button class="checkguest" type="button"
                                     style="background-color:#28a745">confirm</button>
                             </div>
                         </div>
                     </div>

                 </div>
                 <br>
                 <button class="btn-success" id="guestform" onclick="guestcreate()"
                     style="display:none;">Create</button>

             </div>
         </form>


     </div>
     <?php
    if ((Session::has('success-message'))){



       echo '<script>
    swal("Congratulates!","Payment Done!","success");
</script>';


  }
    ?>
     <header class="top-head text-white d-xl-block d-lg-block d-md-none d-sm-none d-none"
         style="background-color:#3e4095;">
         <div class="container-fluid">
             <div class="container">
                 <div class="row py-4 align-items-center">
                     <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 text-xl-left text-lg-left text-md-left text-sm-left text-center m-xl-0 m-lg-0 m-md-0 m-sm-0 m-0"
                         style="word-spacing:10px;">
                         <a href="tel:03333444189" class="text-white" style="text-decoration:none;"><i
                                 class="fas fa-phone" style="transform:rotate(89deg);"></i> <span class="r-phone"
                                 style="font-size:16px;">03333444189</span></a>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-xl-left text-lg-left text-md-left text-sm-left text-center m-xl-0 m-lg-0 m-md-0 m-sm-0 mt-4"
                         style="word-spacing:7px;">
                         <a href="mailto:info@fastukcouriers.co.uk" class="text-white" style="text-decoration:none;"><i
                                 class="fas fa-envelope"></i> <span class="r-mail"
                                 style="font-size:16px;">info@fastukcouriers.co.uk</span></a>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 text-xl-left text-lg-left text-md-left text-sm-left text-center m-xl-0 m-lg-0 mt-md-4 mt-sm-4 mt-4"
                         style="word-spacing:5px;">
                         <a href="mailto:info@fastukcouriers.co.uk" class="text-white" style="text-decoration:none;"><i
                                 class="far fa-clock"></i> <span class="r-time" style="font-size:16px;">MON - SUN:
                                 9:00AM-6:00PM</span></a>
                     </div>
                     <div
                         class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12 text-xl-left text-lg-left text-md-left text-sm-left text-center m-xl-0 m-lg-0 mt-md-4 mt-sm-4 mt-4">
                         <button class="btn btn-outline-danger text-white">Quick quotes</button>
                     </div>
                     <div
                         class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12 text-xl-left text-lg-left text-md-left text-sm-left text-center m-xl-0 m-lg-0 mt-md-4 mt-sm-4 mt-4">
                         <button class="btn btn-outline-danger text-white">Sign In/ Sign Up</button>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <header style="background-color:#ab1818;position:sticky;top:0;z-index:99999;">
         <div class="container-fluid">
             <div class="container">
                 <!-- desktop -->
                 <div class="row d-xl-flex d-lg-flex d-md-none d-sm-none d-none align-items-center py-2">
                     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"> <a href="{{url('/')}}"><img
                                 src="{{asset('public/images/flogo.png')}}" alt="company-logo" class="img-fluid"></a>
                     </div>
                     <div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
                         <ul class="nav navbar nav-expand-lg nav-expand-md">
                             <li class="nav-items active"><a href="{{url('/')}}" class="nav-link text-white">Home</a>
                             </li>
                             <li class="nav-items position-relative dropdown">
                                 <a href="{{url('/service')}}" class="nav-link text-white"
                                     style="word-spacing:3px;">Service <i class="fas fa-angle-down"></i></a>

                                 <div class="dropdown-content">
                                     <ul class="nav navbar flex-column justify-content-start align-items-start">
                                         <li class="nav-items"><a href="{{url('/service/transit-insurance')}}"
                                                 class="nav-link text-white text-left">transit-insurance</a></li>
                                         <li class="nav-items"><a href="{{url('/service/storage')}}"
                                                 class="nav-link text-white text-left">storage</a></li>
                                         <li class="nav-items"><a href="{{url('/service/vehicle-driver-hire')}}"
                                                 class="nav-link text-white text-left">vehicle-driver-hire</a></li>
                                         <li class="nav-items"><a href="{{url('/service/overnight-service')}}"
                                                 class="nav-link text-white text-left">overnight-service</a></li>
                                         <li class="nav-items"><a href="{{url('/service/european-courier')}}"
                                                 class="nav-link text-white text-left">european-courier</a></li>
                                         <li class="nav-items"><a href="{{url('/service/international-courier')}}"
                                                 class="nav-link text-white text-left">international-courier</a></li>
                                         <li class="nav-items"><a href="{{url('/service/fors-accredited')}}"
                                                 class="nav-link text-white text-left">fors-accredited</a></li>
                                         <li class="nav-items"><a href="{{url('/service/freight')}}"
                                                 class="nav-link text-white text-left">freight</a></li>
                                         <li class="nav-items"><a
                                                 href="{{url('/service/economy-same-day-delivery-service')}}"
                                                 class="nav-link text-white text-left">Economy Same Day Delivery
                                                 Service</a></li>
                                         <li class="nav-items"><a
                                                 href="{{url('/service/urgent-same-day-courier-service')}}"
                                                 class="nav-link text-white text-left">Urgent Same Day Courier
                                                 Service</a></li>
                                     </ul>
                                 </div>

                             </li>
                             <li class="nav-items position-relative dropdown">
                                 <a href="{{url('/industries')}}" class="nav-link text-white"
                                     style="word-spacing:3px;">Industries <i class="fas fa-angle-down"></i></a>

                                 <div class="dropdown-content">
                                     <ul class="nav navbar flex-column justify-content-start align-items-start">
                                         <li class="nav-items"><a
                                                 href="{{url('/industries/technology-courier-services')}}"
                                                 class="nav-link text-white text-left">TECHNOLOGY COURIER SERVICES</a>
                                         </li>
                                         <li class="nav-items"><a
                                                 href="{{url('/industries/sample-and-prototype-services')}}"
                                                 class="nav-link text-white text-left">SAMPLE AND PROTOTYPE SERVICES</a>
                                         </li>
                                         <li class="nav-items"><a href="{{url('/industries/retail-courier-services')}}"
                                                 class="nav-link text-white text-left">RETAIL COURIER SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/public-sector-services')}}"
                                                 class="nav-link text-white text-left">PUBLIC SECTOR SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/print-industry')}}"
                                                 class="nav-link text-white text-left">Print Industry</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/medical')}}"
                                                 class="nav-link text-white text-left">MEDICAL</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/media-courier-services')}}"
                                                 class="nav-link text-white text-left">MEDIA COURIER SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/exhibition-service')}}"
                                                 class="nav-link text-white text-left">Exhibition Services</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/construction')}}"
                                                 class="nav-link text-white text-left">CONSTRUCTION</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/financial')}}"
                                                 class="nav-link text-white text-left">FINANCIAL</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/aviation-logistics')}}"
                                                 class="nav-link text-white text-left">AVIATION LOGISTICS</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/automotive')}}"
                                                 class="nav-link text-white text-left">AUTOMOTIVE</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/industries')}}"
                                                 class="nav-link text-white text-left">Industries</a></li>
                                     </ul>
                                 </div>
                             </li>
                             <li class="nav-items"><a href="{{url('/tracking')}}"
                                     class="nav-link text-white">Tracking</a></li>
                             <li class="nav-items"><a href="{{url('/about-us')}}" class="nav-link text-white">About
                                     Us</a></li>
                             <li class="nav-items"><a href="{{url('/our-fleet')}}" class="nav-link text-white">Our
                                     fleet</a></li>
                             <li class="nav-items"><a href="{{url('/contact-us')}}" class="nav-link text-white">Contact
                                     Us</a></li>
                             <li class="nav-items" style="word-spacing:5px;"><a href="#" class="nav-link text-white"><i
                                         class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i
                                         class="fab fa-instagram"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <!-- mobile navbar -->
                 <div class="row  d-xl-none d-lg-none d-md-flex d-sm-flex d-flex py-2 align-items-center py-2">
                     <div class="col-6">
                         <a href="{{url('/')}}"><img src="{{asset('public/images/flogo.png')}}" alt="company-logo"
                                 class="img-fluid" style="width:90px;height:auto;"></a>
                     </div>
                     <div class="col-6 text-end">
                         <!-- Collapse button -->
                         <button class="navbar-toggler first-button" type="button" id="navButton">
                             <div class="animated-icon1"><span></span><span></span><span></span></div>
                         </button>
                     </div>
                     <div id="navDropdown" style="display:none;">
                         <ul class="nav navbar flex-column">
                             <li class="nav-items"><a href="tel:03333444189" class="text-white nav-link"
                                     style="text-decoration:none;"><i class="fas fa-phone"
                                         style="transform:rotate(89deg);"></i> <span class="r-phone"
                                         style="font-size:16px;">03333444189</span></a> </li>
                             <li class="nav-items"> <a href="mailto:info@fastukcouriers.co.uk"
                                     class="text-white nav-link" style="text-decoration:none;"><i
                                         class="fas fa-envelope"></i> <span class="r-mail"
                                         style="font-size:16px;">info@fastukcouriers.co.uk</span></a></li>
                         </ul>
                         <ul class="nav navbar flex-column">
                             <li class="nav-items active"><a href="{{url('/')}}" class="nav-link text-white">Home</a>
                             </li>
                             <li class="nav-items position-relative dropdown">
                                 <a href="{{url('/service')}}" class="nav-link text-white"
                                     style="word-spacing:6px;">Service <i class="fas fa-angle-down"></i></a>
                                 <div class="dropdown-content">
                                     <ul class="nav navbar flex-column justify-content-start align-items-start">
                                         <li class="nav-items"><a href="{{url('/service/transit-insurance')}}"
                                                 class="nav-link text-white text-left">transit-insurance</a></li>
                                         <li class="nav-items"><a href="{{url('/service/storage')}}"
                                                 class="nav-link text-white text-left">storage</a></li>
                                         <li class="nav-items"><a href="{{url('/service/vehicle-driver-hire')}}"
                                                 class="nav-link text-white text-left">vehicle-driver-hire</a></li>
                                         <li class="nav-items"><a href="{{url('/service/overnight-service')}}"
                                                 class="nav-link text-white text-left">overnight-service</a></li>
                                         <li class="nav-items"><a href="{{url('/service/european-courier')}}"
                                                 class="nav-link text-white text-left">european-courier</a></li>
                                         <li class="nav-items"><a href="{{url('/service/international-courier')}}"
                                                 class="nav-link text-white text-left">international-courier</a></li>
                                         <li class="nav-items"><a href="{{url('/service/fors-accredited')}}"
                                                 class="nav-link text-white text-left">fors-accredited</a></li>
                                         <li class="nav-items"><a href="{{url('/service/freight')}}"
                                                 class="nav-link text-white text-left">freight</a></li>
                                         <li class="nav-items"><a
                                                 href="{{url('/service/economy-same-day-delivery-service')}}"
                                                 class="nav-link text-white text-left">Economy Same Day Delivery
                                                 Service</a></li>
                                         <li class="nav-items"><a
                                                 href="{{url('/service/urgent-same-day-courier-service')}}"
                                                 class="nav-link text-white text-left">Urgent Same Day Courier
                                                 Service</a></li>
                                     </ul>
                                 </div>
                             </li>
                             <li class="nav-items position-relative dropdown">
                                 <a href="{{url('/industries')}}" class="nav-link text-white"
                                     style="word-spacing:7px;">Industries <i class="fas fa-angle-down"></i></a>
                                 <div class="dropdown-content">
                                     <ul class="nav navbar flex-column justify-content-start align-items-start">
                                         <li class="nav-items"><a
                                                 href="{{url('/industries/technology-courier-services')}}"
                                                 class="nav-link text-white text-left">TECHNOLOGY COURIER SERVICES</a>
                                         </li>
                                         <li class="nav-items"><a
                                                 href="{{url('/industries/sample-and-prototype-services')}}"
                                                 class="nav-link text-white text-left">SAMPLE AND PROTOTYPE SERVICES</a>
                                         </li>
                                         <li class="nav-items"><a href="{{url('/industries/retail-courier-services')}}"
                                                 class="nav-link text-white text-left">RETAIL COURIER SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/public-sector-services')}}"
                                                 class="nav-link text-white text-left">PUBLIC SECTOR SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/print-industry')}}"
                                                 class="nav-link text-white text-left">Print Industry</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/medical')}}"
                                                 class="nav-link text-white text-left">MEDICAL</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/media-courier-services')}}"
                                                 class="nav-link text-white text-left">MEDIA COURIER SERVICES</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/exhibition-service')}}"
                                                 class="nav-link text-white text-left">Exhibition Services</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/construction')}}"
                                                 class="nav-link text-white text-left">CONSTRUCTION</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/financial')}}"
                                                 class="nav-link text-white text-left">FINANCIAL</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/aviation-logistics')}}"
                                                 class="nav-link text-white text-left">AVIATION LOGISTICS</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/automotive')}}"
                                                 class="nav-link text-white text-left">AUTOMOTIVE</a></li>
                                         <li class="nav-items"><a href="{{url('/industries/industries')}}"
                                                 class="nav-link text-white text-left">Industries</a></li>
                                     </ul>
                                 </div>
                             </li>
                             <li class="nav-items"><a href="{{url('/tracking')}}"
                                     class="nav-link text-white">Tracking</a></li>
                             <li class="nav-items"><a href="{{url('/about-us')}}" class="nav-link text-white">About
                                     Us</a></li>
                             <li class="nav-items"><a href="{{url('/our-fleet')}}" class="nav-link text-white">Our
                                     fleet</a></li>
                             <li class="nav-items"><a href="{{url('/contact-us')}}" class="nav-link text-white">Contact
                                     Us</a></li>
                             <li class="nav-items" style="word-spacing:5px;"><a href="#" class="nav-link text-white"><i
                                         class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i
                                         class="fab fa-instagram"></i></a></li>
                         </ul>
                         <div class="container-fluid">
                             <div class="container">
                                 <div class="row justify-content-center align-items-center">
                                     <div class="col-6 text-end">
                                         <button class="btn btn-outline-danger text-white">Quick quotes</button>
                                     </div>
                                     <div class="col-6">
                                         <button class="btn btn-outline-danger text-white">Sign In/ Sign Up</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </header>




 </div>

 <br>
 <br>

 <div class="container-fluid"
     style="
background-image:url('banner1.png');
 background-repeat:no-repeat; background-size:cover;margin-top:-49px;background-attachment:fixed;background-position:center;">
     <div class="row">
         <div
             class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2">
             <div class="card px-4 pt-4 pb-4 mt-3 mb-3"
                 style="background-color:rgb(0 0 0 / 45%); transform: scale(0.8);">
                 <h2 id="heading"></h2>

                 <!-- <p>Just follstep</p> -->
                 <form method="POST" action="{{ route('book.bookings') }}" id="msform" name="msform">
                     <!-- progressbar -->
                     @csrf
                     <ul id="progressbar">
                         <li class="active" id="account"><strong>Trip Details</strong></li>
                         <li id="personal"><strong>Select Vehicle</strong></li>
                         <li id="payment"><strong>Enter Payment Details</strong></li>
                         <li id="confirm" onclick="getformvalues()"><strong>Confirmation</strong></li>
                     </ul>

                     <div class="progress">
                         <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                             aria-valuemin="0" aria-valuemax="100"></div>
                     </div>

                     <br>

                     <!-- fieldsets -->
                     <fieldset>
                         <div class="form-card">

                             <div class="row">
                                 <div class="col-7">
                                     <h2 class="fs-title">Address Information:</h2>
                                 </div>
                                 <div class="col-5">
                                     <h2 class="steps">Step 1-4</h2>
                                 </div>
                             </div>
                             <!--input row -->
                             <div class="input-row">
                                 <label class="fieldlabels">Pickup Point
                                     <input type="text" id="locationTextField" name='from' placeholder="From Address" />
                                 </label>
                                 <label class="fieldlabels">Dropup Point
                                     <input type="text" id="locationTextField2" name='to' placeholder="To Address" />
                                 </label>
                                 <label class="fieldlabels">Date: *
                                     <input type="date" name="b_date" placeholder="choose date" />
                                 </label>
                                 <label class="fieldlabels">Pickup Time: *
                                     <input type="time" name="p_time" placeholder="choose time" />
                                 </label>
                             </div>

                         </div>


                         <input class="next action-button" type="button" id="firstnext" name="next" value="Next" />


                     </fieldset>
                     <fieldset>
                         <div class="form-card">
                             <div class="row">
                                 <div class="col-7">
                                     <h2 class="fs-title">Select Vehicle:</h2>
                                 </div>
                                 <div class="col-5">
                                     <h2 class="steps">Step 2 - 4</h2>
                                 </div>
                             </div>

                             <div class="row">
                                 @php
                                 use Illuminate\Support\Facades\DB;
                                 $vehicle=DB::table('tj_vehicule')->where('statut','=','yes')->get();

                                 @endphp
                                 @foreach ($vehicle as $vehicles)

                                 @php




                                 @endphp


                                 <div class="col-3 chosevehicle"
                                     style="text-align:center;border:1px solid #f7b614; background:white;cursor:pointer;">
                                     <label for="{{$vehicles->id}}" style="cursor:pointer;text-align:center;">
                                         <img src="van.jpg" style="width:170px;">
                                         <input class='radio_check' type='radio' name='chosevehicle'
                                             id="{{$vehicles->id}}" />
                                         <br>
                                         <span>
                                             <center><strong>Carry Weight:{{$vehicles->wieght}}</strong></center>
                                         </span>
                                         <span>
                                             <center><strong>Size:{{$vehicles->brand}}</strong></center>
                                         </span>
                                         <span>
                                             <center><strong>Color:{{$vehicles->color}}</strong></center>
                                         </span>
                                         <span>
                                             <center><strong>Distance:</strong><span
                                                     class="distance_place">calcul..</span>miles</center>
                                         </span>


                                         <span>
                                             <center><strong>Estimate Price:</strong>$<span class="est_cost"
                                                     data-price='7'>calcul..</span></center>
                                         </span>
                                     </label>
                                 </div>

                                 @endforeach
                                 <input type="hidden" value="" id="distance" name="distance">




                             </div>





                         </div>
                         <input type="button" name="next" class="next2 action-button" value="Next" /> <input
                             type="button" name="previous" class="previous action-button-previous" value="Previous" />
                     </fieldset>
                     <fieldset>
                         <div class="form-card">
                             <div class="row">
                                 <div class="col-7">
                                     <h2 class="fs-title"></h2>
                                 </div>
                                 <div class="col-5">
                                     <h2 class="steps">Step 3 - 4</h2>
                                 </div>
                             </div>

                             <div class="row">

                                 <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                     <h3>Collection Address</h3>
                                     <div class="d-lg-flex d-xl-flex d-block">
                                         <input type="text" name="contact_name1" id="name1" placeholder="Contact Name"
                                             class="w-100">
                                         <input type="text" name="contact_tele1" id="ph1"
                                             placeholder="Contact Telephone" class="w-100">
                                     </div>
                                     <div class="d-block">
                                         <input type="text" name="address1" id="address1" placeholder="Address line 2"
                                             class="w-100">
                                     </div>
                                     <div class="d-block">
                                         <input type="text" name="city1" id="city1" placeholder="City" class="w-100">
                                     </div>

                                 </div>
                                 <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                     <h3>Delivery Address</h3>
                                     <div class="d-lg-flex d-xl-flex d-block">
                                         <input type="text" name="contact_name2" id="name2" placeholder="Contact Name"
                                             class="w-100">
                                         <input type="text" name="contact_tele2" id="ph2"
                                             placeholder="Contact Telephone" class="w-100">
                                     </div>
                                     <div class="d-block">
                                         <input type="text" name="aaddress2" id="aaddress2" placeholder="Address line 2"
                                             class="w-100">
                                     </div>
                                     <div class="d-block">
                                         <input type="text" name="city2" id="city2" placeholder="City" class="w-100">
                                     </div>

                                 </div>


                             </div>





                         </div>
                         <input type="button" name="next" class="next3 action-button" value="Next" />
                         <input type="button" name="previous" class="previous action-button-previous"
                             value="Previous" />
                     </fieldset>
                     <fieldset>
                         <div class="form-card">
                             <div class="row">
                                 <div class="col-7">
                                     <h2 class="fs-title">Pay and Confrim Book:</h2>
                                 </div>
                                 <div class="col-5">
                                     <h2 class="steps">Step 4 - 4</h2>
                                 </div>
                             </div> <br><br>
                             <button class="btn-success" id="myBtn" @if(Auth::user()) style="display:block;" @else
                                 style="display:none;" @endif>Stripe</button>
                             <button class="btn-primary" id="myBtn1" @if(Auth::user()) style="display:block;" @else
                                 style="display:none;" @endif>Paypal</button>
                             <div class="row">
                                 {{--                                @if(!Auth::user())--}}
                                 <button class="btn-warning" id="myBtn2"
                                     data-check="{{ Session::get('guest_track_id')}}" @if(Auth::user())
                                     style="display:none;" @else style="display:block;" @endif>Continue as
                                     Guest</button>


                                 <button class="btn-success" id="myBtn3" @if(Auth::user()) style="display:none;" @else
                                     style="display:block;" @endif>Login</button>
                                 {{--                                @endif--}}

                                 <input type="hidden" id="data-check" value="{{ Session::get('guest_track_id')}}">
                             </div>
                         </div>
                         <input type="button" name="previous" class="previous action-button-previous"
                             value="Previous" />
                     </fieldset>
                 </form>
             </div>
         </div>
     </div>
 </div>


 <section class="content gradient">

     <div id="c1326"
         class="frame frame-type-text frame-default frame-layout-100 frame-space-before-extra-small frame-space-after-extra-small">
         <div class="inner">
             <h2>Courier Services</h2>
             <p>We are able to provide whatever courier services are required for the transportation and relocation of
                 all sorts of consignments from a small heart valve for an operation to wing components for a 737 jet
                 aircraft. Below are some of the services we offer, however if what you need is not obviously available
                 please phone us on 0333-34441-89 as we are able to adapt to whatever requirements you may have.&nbsp;
             </p>
             <h4>&nbsp;</h4>
             <p class="text-center">&nbsp;</p>
         </div>
     </div>



     <div id="c51395"
         class="frame frame-type-text frame-default frame-layout-100 frame-space-before-small frame-space-after-small">
         <div class="inner">
             <h2>Covid-19 Safety&nbsp;</h2>
             <p>If you need to move around we’re here for all your essential travel needs. Below you will find some of
                 the measures in place to help ensure your trip&nbsp;is as safe as possible.</p>
         </div>
     </div>



     <div id="c51396"
         class="frame frame-type-siteway_grid3cols frame-default frame-layout-100 frame-space-before-extra-small frame-space-after-medium">
         <div class="inner">
             <div class="flex__container align__top three__columns">
                 <div class="column first">
                     <div id="c51399" class="frame frame-type-siteway_icontextsmall frame-default frame-layout-100">
                         <div class="inner">
                             <div class="icon__text dot0 iconabove__0" data-aos="fade-up">
                                 <div class="icon">
                                     <div class="iconWrapper"><img
                                             src="assets_front/fileadmin/_processed_/8/4/csm_Face_covering_4440babb6d.png"
                                             width="200" height="200" alt="" /></div>
                                 </div>
                                 <div class="text">
                                     <h3>Face Coverings</h3>
                                     <p>All drivers are legally required to wear face coverings and are advised to keep
                                         the windows open during your journey. Passengers are obliged to wear a face
                                         covering during the trip as well</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="column">
                     <div id="c51400" class="frame frame-type-siteway_icontextsmall frame-default frame-layout-100">
                         <div class="inner">
                             <div class="icon__text dot0 iconabove__0" data-aos="fade-up">
                                 <div class="icon">
                                     <div class="iconWrapper"><img
                                             src="assets_front/fileadmin/_processed_/d/b/csm_Clean_sanitisation_fd93fe2cd3.png"
                                             width="200" height="200" alt="" /></div>
                                 </div>
                                 <div class="text">
                                     <h3>Cleaning &amp; Sanitisation</h3>
                                     <p>MY TAXI FREE drivers are regularly reminded to wipe down contact points between
                                         each passenger using alcohol-based solutions</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="column last">
                     <div id="c51401" class="frame frame-type-siteway_icontextsmall frame-default frame-layout-100">
                         <div class="inner">
                             <div class="icon__text dot0 iconabove__0" data-aos="fade-up">
                                 <div class="icon">
                                     <div class="iconWrapper"><img
                                             src="assets_front/fileadmin/_processed_/8/0/csm_Partition_screens_a12de0e580.png"
                                             width="200" height="200" alt="" /></div>
                                 </div>
                                 <div class="text">
                                     <h3>Partition screens</h3>
                                     <p>Every black cab and electric black cab has factory-installed partitions
                                         naturally leading to social distancing between driver and passenger to keep you
                                         and your driver distanced and safe</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <div id="c55378"
         class="frame frame-type-siteway_flexibletextimage frame-default frame-layout-100 frame-space-before-extra-small frame-space-after-medium">
         <div class="inner">
             <div class="flexible__textimage imageLeft border__0" data-aos="zoom-in">
                 <div class="image" style="background-image: url({{asset('public/assets_front/images/1.jpg')}});"></div>
                 <div class="text">
                     <h3 class="text-center">
                         <strong style="">Emergency Courier Service</strong>
                     </h3>
                     <h3 class="text-center">&nbsp;</h3>
                     <p class="text-center">
                         From lost keys to forgotten parcels, Fast Uk Couriers’ emergency couriers are here to help you.
                         Our drivers are ready to collect your package and can guarantee a 60 minute pick-up and same
                         day
                     </p>
                     <h3 class="text-center">&nbsp;</h3>
                 </div>
             </div>
         </div>
     </div>



     <div id="c39698"
         class="frame frame-type-siteway_flexibletextimage frame-default frame-layout-100 frame-space-before-small frame-space-after-medium">
         <div class="inner">
             <div class="flexible__textimage imageRight border__0" data-aos="zoom-in">
                 <div class="text">
                     <h3 class="text-center">&nbsp;</h3>
                     <h3 class="text-center">Event & Exhibition Couriers</h3>
                     <p class="text-center">&nbsp;Are you heading to an event or exhibition and need something
                         delivering? Look no further than Fast Uk Couriers who are your trusted and experienced event
                         couriers We understand business</p>
                     <p class="text-center">&nbsp;</p>
                     <p class="text-center">
                         <a href="passenger/index.html" target="_blank" class="btn">Learn more</a>
                     </p>
                 </div>
                 <div class="image" style="background-image: url(assets_front/images/4.jpg);"></div>
             </div>
         </div>
     </div>



     <div id="c8670"
         class="frame frame-type-siteway_flexibletextimage frame-default frame-layout-100 frame-space-before-small frame-space-after-medium">
         <div class="inner">
             <div class="flexible__textimage imageLeft border__0" data-aos="zoom-in">
                 <div class="image" style="background-image: url(assets_front/images/2.jpg);"></div>
                 <div class="text">
                     <h3 class="text-center">&nbsp;</h3>
                     <h3 class="text-center">Passport Couriers</h3>
                     <p class="text-center">Are you looking for a passport courier that can save your trip and get your
                         passport to you in quick time? Fast Uk Couriers are just what you are looking for! Many of us
                         have done it, </p>
                     <p class="text-center">&nbsp;</p>
                     <p class="text-center">
                         <a href="business/index.html" class="btn">Learn more</a>
                     </p>
                 </div>
             </div>
         </div>
     </div>



     <div id="c9048"
         class="frame frame-type-siteway_flexibletextimage frame-default frame-layout-100 frame-space-before-small frame-space-after-medium">
         <div class="inner">
             <div class="flexible__textimage imageRight border__0" data-aos="zoom-in">
                 <div class="text">
                     <h2 class="text-center">&nbsp;</h2>
                     <h3 class="text-center">Same Day Letter Delivery</h3>
                     <p class="text-center">Are you looking for a same day letter courier who will deliver those
                         important documents? Trust Fast Uk Couriers to do this for you. Some deliveries are too
                         important to leave to chance. Our</p>
                     <p class="text-center">&nbsp;</p>
                     <p class="text-center">
                         <a href="driver/index.html" target="_blank" class="btn">Learn more</a>
                     </p>
                 </div>
                 <div class="image" style="background-image: url(assets_front/images/5.jpg);"></div>
             </div>
         </div>
     </div>



     <div id="c1324"
         class="frame frame-type-siteway_flexibletextimage frame-default frame-layout-100 frame-space-before-small frame-space-after-large">
         <div class="inner">
             <div class="flexible__textimage imageLeft border__0" data-aos="zoom-in">
                 <div class="image" style="background-image: url(assets_front/images/3.jpg);"></div>
                 <div class="text">
                     <h3 class="text-center">&nbsp;</h3>
                     <h3 class="text-center">Fragile Items Courier</h3>
                     <p class="text-center">Fast Uk Couriers are a leading company who specialise in fragile courier
                         services. If you need a fragile items courier who can transport your goods quickly without the
                         risk of damaging the items,</p>
                     <p class="text-center">&nbsp;</p>
                     <p class="text-center">
                         <a href="career/jobs/index.html" target="_blank" class="btn">Learn more</a>
                     </p>
                 </div>
             </div>
         </div>
     </div>


 </section>

 <div class="position-fixed rounded rounded-circle bg-primary d-flex justify-content-center align-items-center"
     style="bottom:35px;right:35px;width:80px;height:80px;padding:10px;cursor:pointer;" id="sms">
     <div class="text-white">
         <i class="fas fa-comment-dots" style="font-size:40px;" id="smsIcon"></i>
         <i class="fas fa-times" style="font-size:40px;display:none;" id="close"></i>
     </div>
 </div>
 <div class="position-fixed bg-primary m-0 p-0 shadow-lg"
     style="border-radius:20px;bottom: 112px;right: 108px;padding:10px;cursor:pointer;width:300px;height:auto;z-index:9999;overflow:hidden;display:none"
     id="smsBox">
     <h5 class="p-3 text-white"><i class="fas fa-comment-alt"></i> Questions?</h5>
     <form action="" method="post" autocomplete="off" class="bg-white m-1 p-2" form="form1">
         <fieldset>
             <legend style="font-size:12px;">Leave a message</legend>
             <div class="form-group">
                 <input type="text" name="name" placeholder="Name" class=" p-2" required>
             </div>
             <div class="form-group">
                 <input type="text" name="email" placeholder="E-mail" class=" p-2" required>
             </div>
             <div class="form-group">
                 <textarea class="p-2" rows="" cols="20"
                     placeholder="Please leave a sms here and We'll get back to you as soon as possible"
                     style="resize:none;overflow:hidden;" name="sms"></textarea>
             </div>
         </fieldset>
     </form>
     <button id="form1" class="d-block w-100 text-center text-white">Send</button>
 </div>

 @endsection

 @section('js')
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
        url: '{{route("create.session")}}',
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
                url: '{{route("get.distance")}}',
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

                        let distance = parseFloat(dist);

                        $('.est_cost').each(function() {

                            let each_cost = $(this).data('price');
                            let cost = parseFloat(each_cost);
                            let total = distance * cost;
                            $(this).html(round(total, 2));
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

        if (numberOfChecked < 1 || name1 == '' || ph1 == '' || address1 == '' || city1 == '' || name2 ==
            '' || ph2 == '' || aaddress2 == '' || city2 == '') {
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

        {
            {
                --$.ajax({
                        --
                    }
                } {
                    {
                        --type: "get", --
                    }
                } {
                    {
                        --url: '{{route("book.byguest")}}', --
                    }
                } {
                    {
                        --data: {
                            --
                        }
                    } {
                        {
                            --"_token": "{{ csrf_token() }}"
                        }, --
                    }
                } {
                    {
                        --cache: false, --
                    }
                } {
                    {
                        --success: function(data) {
                            --
                        }
                    }

                    {
                        {
                            --swal("Successfully Login!", "", "success");
                            --
                        }
                    }


                    {
                        {
                            --
                        }, --
                    }
                } {
                    {
                        --error: function(data) {
                            --
                        }
                    }

                    {
                        {
                            --
                        }--
                    }
                } {
                    {
                        --
                    });
                --
            }
        }

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
        url: '{{route("create.guest")}}',
        data: {
            "_token": "{{ csrf_token() }}",
            name: name,
            fname: fname,
            phone: phone,
            address: address
        },
        cache: false,
        success: function(data) {

            if (data.status == 'done') {
                guestModal.style.display = "none";
                swal("Guest created!", "please copy Track ID in safe place -> " + data.track_id, "success");
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
$(".checkguest").click(function() {
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
                            $('#msform').submit();
                            // swal("Redirecting..!","","success");
                            {
                                {
                                    --window.location.href =
                                        "{{url('/guest-home-page')}}";
                                    --
                                }
                            }
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
 @endsection