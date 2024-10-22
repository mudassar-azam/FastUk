<!--<nav class="navbar navbar-default" style="background-color: #ffed59 !important;">-->
<!--	<div class="container-fluid">-->
		 <!--Brand and toggle get grouped for better mobile display -->
<!--		<div class="navbar-header">-->
<!--			<button type="button" class="navbar-toggle collapsed"-->
<!--				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"-->
<!--				aria-expanded="false">-->
<!--				<span class="sr-only">Toggle navigation</span> <span-->
<!--					class="icon-bar"></span> <span class="icon-bar"></span> <span-->
<!--					class="icon-bar"></span>-->
<!--			</button>-->
<!--			<a class="navbar-brand" href="{{url('/')}}">Cargo Booking</a>-->
<!--		</div>-->

		 <!--Collect the nav links, forms, and other content for toggling -->
<!--		<div class="collapse navbar-collapse"-->
<!--			id="bs-example-navbar-collapse-1">-->
<!--			<ul class="nav navbar-nav navbar-right">-->
<!--				{{--<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}-->
<!--						{{--Shopping Cart</a></li>--}}-->
<!--				@if(Auth::user())-->
<!--				<li class="dropdown"><a href="#" class="dropdown-toggle"-->
<!--					data-toggle="dropdown" role="button" aria-haspopup="true"-->
<!--					aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>-->
<!--						User Account <span class="caret"></span></a>-->
<!--					<ul class="dropdown-menu">-->
<!--						<li><a href="#">Dashboard</a></li>-->
<!--						<li role="separator" class="divider"></li>-->
<!--						<li><a href="{{ route('logout') }}" onclick="event.preventDefault();-->
<!--                                                     document.getElementById('logout-form').submit();">Logout</a></li>-->
<!--					</ul></li>-->
<!--				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
<!--					@csrf-->
<!--				</form>-->
<!--					@else-->
<!--					@if (Route::has('register'))-->
<!--					<li><a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('Register') }}</a></li>-->
<!--						@endif-->
<!--					@endif-->
<!--			</ul>-->
<!--		</div>-->
		 <!--/.navbar-collapse -->
<!--	</div>-->
	 <!--/.container-fluid -->
<!--</nav>-->
            <section class="lg:mt-0 px-6 sm:px-9 mx-auto md:flex items-center justify-center lg:justify-between" style="background-color:#aa1818;">
                 <!--Logo -->
                <div class="flex justify-center items-center">
                    <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="Logo"  style="width:150px;height:auto;" /></a>
                </div>

                 <!--Contact Info and Menu -->
                <div class="mt-3 lg:mt-0 md:flex justify-center text-center">
                    <div class="px-6 py-1 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                        <a rel="" class="main-site-logo" href="mailto:info@fastukcouriers.co.uk" style="text-decoration:none;">info@fastukcouriers.co.uk</a>
                    </div>

                    <div class="py-1 px-6 lg:border-r lg:border-solid lg:border-r-1 lg:border-gray-300">
                        <span style="color:white;">Call: </span>
                        <a rel=""href="tel:03333444188" style="color:white;text-decoration:none;">03333 444 188</a>
                        @if(Auth::user())
                            <span class="ml-5 header-buttons"><a href="{{url('home')}}" style="text-decoration:none;color:white;">Dashboard</a></span>
                        @else
                            <span class="ml-5 header-buttons">
                                <span class="animation-button"><a href="{{url('login')}}" class="text-white text-decoration-none" style="text-decoration:none;color:white;">Customer Login</a></span>
                                <a href="{{url('login')}}" style="color:#AA1818!important;">Customer Login</a>
                            </span>
                            <span class="ml-5 header-buttons">
                                <span class="animation-button"><a href="{{url('quote')}}" >Get A Quote</a></span>
                                <a href="{{url('quote')}}" >Get A Quote</a>
                            </span>
                        @endif
                    </div>
                </div>
            </section>


             <!--Mobile Header -->
            <section class="flex md:hidden justify-between p-6 items-center">
                 <!--Logo -->
                <div class="flex justify-center">
                    <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="244" height="48" src="{{url('images/fast_uk_couriers.png')}}" class="custom-logo" alt="We Are Same Day Logo" /></a>
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
