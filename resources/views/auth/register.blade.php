@extends('layout.master-mini')
@section('content')
    <div class="content-wrapper d-flex align-items-start justify-content-center auth theme-one"
        style="background-image: url({{ asset('fast_couriers_uk_banner.jpg') }}); background-size :contain;background-repeat:no-repeat;"
        id="content_wrapper">
        <div class="row w-100">
            <div class="col-lg-10 mx-auto">
                <div style="display: flex; justify-content: center;gap: 1em;">
                    <button id="bussiness-switch" class="button-changer"style="font-size: 1em;"> BUSSINESS </button>
                    <button id="user-switch" class="button-changer"style="font-size: 1em;"> USER</button>
                    <span class="slider round"></span>
                </div>


                <div class="auto-form-wrapper">
                    {{-- Register account start here --}}
                    <div id="register_account">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="d-flex flex-column align-items-center justify-content-start">
                                <h1 class="display-2 text-center">Register User Account</h1>
                                <div class="mx-2 mt-5 row w-100 justify-content-center">
                                    <!-- User Name -->
                                    <div class="form-group col-lg-6">
                                        <label for="name">{{ __('User Name') }}</label>
                                        <div class="input-group">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group col-lg-6">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <div class="input-group">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="form-group col-lg-6">
                                        <label for="phone">{{ __('Phone') }}</label>
                                        <div class="input-group">
                                            <input id="phone" type="number"
                                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                value="{{ old('phone') }}" required autocomplete="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group col-lg-6">
                                        <label for="password">{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group col-lg-6">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <div class="input-group">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-check-circle-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">

                                    </div>

                                    <!-- Hidden Field for User Type -->
                                    <input type="hidden" name="user_type" value="normal">

                                    <!-- Submit Button -->
                                    <div class="form-group col-lg-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-block"
                                            style="background:#AA1818; font-size:1.3em  ">
                                            Register
                                        </button>
                                    </div>

                                    <!-- Login Link -->
                                    <div class="text-block text-center my-3">
                                        <span class="text-small font-weight-semibold">Already have an account?</span>
                                        <a href="{{ url('/login') }}" class="text-black text-small">Login</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    {{-- Register account end here --}}
                    {{-- Trading account here --}}
                    <div id="trading_account">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <h1 class="display-2">Register Trader Account</h1>
                            <div class="mx-2 mt-5 row">
                                {{-- Compane Name Start --}}
                                <div class="form-group col-lg-6">
                                    <label for="company_name">Company Name</label>
                                    <div class="input-group">
                                        <input id="company_name" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            name="company_name" value="{{ old('company_name') }}" required
                                            autocomplete="company_name">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Company Name End --}}
                                {{-- Contect Name --}}
                                <div class="form-group col-lg-6">
                                    <label for="name">{{ __('Contact Name') }}</label>
                                    <div class="input-group">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- end contect Name --}}
                                {{-- Trading Adress Start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="company_address">Trading Address</label>
                                    <div class="input-group">
                                        <input id="company_address" type="text"
                                            class="form-control @error('company_address') is-invalid @enderror"
                                            name="company_address" value="{{ old('company_address') }}" required
                                            autocomplete="company_address">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('company_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Trading Adress end here --}}
                                {{-- Email Start Here --}}
                                <div class="form-group col-lg-6">
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Email End Here --}}
                                {{-- Phone Start Here --}}
                                <div class="form-group col-lg-6">
                                    <label for="phone">Phone</label>
                                    <div class="input-group">
                                        <input id="phone" type="number"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Phone End Here --}}
                                {{-- Invoice Adress Start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="address">Invoice Address</label>
                                    <div class="input-group">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Invoice adress end  --}}
                                {{-- Account Email Start Here --}}
                                <div class="form-group col-lg-6">
                                    <label for="email">Accounts Email</label>
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('account_email') is-invalid @enderror"
                                            name="account_email" required autocomplete="email">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('account_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Account Emial End Here --}}
                                {{-- Account Phone Start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="phone">Accounts Phone</label>
                                    <div class="input-group">
                                        <input id="phone" type="number"
                                            class="form-control @error('account_phone') is-invalid @enderror"
                                            name="account_phone" value="{{ old('account_phone') }}" required
                                            autocomplete="phone">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('account_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Account Phone End Here --}}
                                {{-- Company Phone Start Here --}}
                                <div class="form-group col-lg-6">
                                    <label for="phone">Company Number</label>
                                    <div class="input-group">
                                        <input id="phone" type="number"
                                            class="form-control @error('company_number') is-invalid @enderror"
                                            name="company_number" value="{{ old('company_number') }}" required
                                            autocomplete="phone">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('company_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Company Phone End Here --}}
                                {{-- Vat Number Start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="phone">VAT Number</label>
                                    <div class="input-group">
                                        <input id="phone" type="number"
                                            class="form-control @error('company_vet') is-invalid @enderror"
                                            name="company_vet" value="{{ old('company_vet') }}" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('company_vet')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Vat Number End Here --}}
                                {{-- Password And Conform Password Start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Password And confirm Password End Here --}}
                                {{-- Name And Position start here --}}
                                <div class="form-group col-lg-6">
                                    <label for="name_position">Name and Position</label>
                                    <div class="input-group">
                                        <input id="name_position" type="text"
                                            class="form-control @error('name_position') is-invalid @enderror"
                                            name="name_position" value="{{ old('name_position') }}" required
                                            autocomplete="name_position">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                        @error('name_position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Name And Position end here --}}
                                <div class="col-lg-12">
                                    <p class="mb-0">
                                        <strong>Terms of Payment (30 Days Net):</strong>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea name="payment_terms" rows="2" class="alert alert-danger" size="40"
                                                style="height: initial;width: 100%;" aria-invalid="false"
                                                placeholder="If your payment terms are different then please state accordingly." required></textarea>
                                        </span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="wpcf7-form-control-wrap acceptance-510">
                                            <span class="wpcf7-form-control wpcf7-acceptance">
                                                <strong>
                                                    Date:
                                                </strong>
                                                <div class="wpcf7-list-item">
                                                    <input type="date" name="date" class="border rounded p-2"
                                                        aria-invalid="false" placeholder="Enter date" id="date" />
                                                </div>

                                            </span>
                                        </span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="wpcf7-form-control-wrap acceptance-510">
                                            <span class="wpcf7-form-control wpcf7-acceptance">
                                                <strong>
                                                    Please confirm and submit: (required)
                                                </strong>
                                                <div class="wpcf7-list-item">
                                                    <label>
                                                        <input type="checkbox" name="acceptance" value="1"
                                                            aria-invalid="false"
                                                            style="margin-left: -15px; margin-right: 5px;" required />
                                                        <span class="wpcf7-list-item-label">
                                                            I agree to set up an account with Same Day Courier.
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="wpcf7-list-item">
                                                    <label>
                                                        <input type="checkbox" name="acceptance" value="1"
                                                            aria-invalid="false"
                                                            style="margin-left: -15px; margin-right: 5px;" required />
                                                        <span class="wpcf7-list-item-label">
                                                            I have read and agree to your terms and conditions of carriage.
                                                        </span>
                                                    </label>
                                                </div>
                                            </span>
                                        </span>
                                    </p>
                                    <input type="hidden" name="user_type" value="trader">
                                    <p>
                                        <button type="submit"
                                            class="mb-5 wpcf7-form-control has-spinner send-submit">Register
                                            Trader</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- Trading account end here --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
<script>
    let register_account = document.getElementById('register_account'),
        trading_account = document.getElementById('trading_account'),
        bussinessSwitch = document.getElementById('bussiness-switch'),
        userSwitch = document.getElementById('user-switch');

    trading_account.style.display = 'none';

    bussinessSwitch.style.marginBottom = '10px';
    bussinessSwitch.style.backgroundColor = 'rgb(255, 255, 255)';
    userSwitch.style.marginBottom = '10px';
    userSwitch.style.backgroundColor = 'rgb(255, 255, 255)';

    bussinessSwitch.addEventListener("click", myFunction);

    function myFunction() {
        trading_account.style.display = 'block';
        register_account.style.display = 'none';
        setActive(bussinessSwitch);
        updateSwitchColors();
    }

    userSwitch.addEventListener("click", myuserFunction);

    function myuserFunction() {
        trading_account.style.display = 'none';
        register_account.style.display = 'block';
        setActive(userSwitch);
        updateSwitchColors();
    }

    function setActive(activeSwitch) {
        resetSwitchStyles([userSwitch, bussinessSwitch], activeSwitch);
        activeSwitch.style.border = '1px solid rgb(170, 24, 24)';
        activeSwitch.style.color = 'white';
        activeSwitch.removeEventListener('mouseleave', handleMouseLeave);
    }

    function resetSwitchStyles(switches, activeSwitch) {
        switches.forEach(function(switchElement) {
            if (switchElement !== activeSwitch) {
                switchElement.style.border = '1px solid rgb(170, 24, 24)';
                switchElement.style.backgroundColor = 'rgb(255, 255, 255)';
                switchElement.style.color = 'rgb(170, 24, 24)';
                switchElement.style.borderRadius = '5px';
                switchElement.style.marginBottom = '10px';
                switchElement.addEventListener('mouseleave', handleMouseLeave);
            }
        });
    }

    function handleMouseLeave(event) {
        event.target.style.border = '1px solid rgb(170, 24, 24)';
        event.target.style.backgroundColor = 'rgb(255, 255, 255)';
        event.target.style.color = 'rgb(170, 24, 24)';
    }

    function updateSwitchColors() {
        if (trading_account.style.display === 'block') {
            bussinessSwitch.style.backgroundColor = 'rgb(170, 24, 24)';
            userSwitch.style.backgroundColor = 'rgb(255, 255, 255)';
        } else if (register_account.style.display === 'block') {
            userSwitch.style.backgroundColor = 'rgb(170, 24, 24)';
            bussinessSwitch.style.backgroundColor = 'rgb(255, 255, 255)';
        }
    }

    bussinessSwitch.style.padding = '1em 2em';
    userSwitch.style.padding = '1em 2em';

    bussinessSwitch.style.transition = '0.2s ease';
    userSwitch.style.transition = '0.2s ease';

    bussinessSwitch.style.borderRadius = '5px';
    userSwitch.style.borderRadius = '5px';

    function addHoverEffect(element) {
        element.addEventListener('mouseenter', function() {
            element.style.border = '1px solid rgb(170, 24, 24)';
            element.style.backgroundColor = 'rgb(170, 24, 24)';
            element.style.color = 'white';
            element.style.letterSpacing = '1px';
        });

        element.addEventListener('mouseleave', function() {
            if (element.style.backgroundColor !== 'rgb(170, 24, 24)') {
                element.style.border = 'none';
                element.style.backgroundColor = 'rgb(255, 255, 255)';
                element.style.color = 'black';
                element.style.letterSpacing = '0px';
            }
        });
    }

    addHoverEffect(bussinessSwitch);
    addHoverEffect(userSwitch);

</script>

    <script>
        let register_account = document.getElementById('register_account'),

            trading_account = document.getElementById('trading_account'),

            register = document.getElementById('register'),

            trad_h2 = document.getElementById('trad_h2'),

            reg_h2 = document.getElementById('reg_h2'),

            trading = document.getElementById('trading');

        trading_account.style.display = 'none';

        reg_h2.classList.add('l_active');



        register.addEventListener('click', function(event) {



            event.preventDefault();

            register_account.style.diplay = 'block';

            trading_account.style.display = 'none';

            register_account.removeAttribute("style");

            reg_h2.classList.add('l_active');

            trad_h2.classList.remove('l_active');



        })

        trading.addEventListener('click', function(event) {



            event.preventDefault();



            trading_account.style.diplay = 'block';

            register_account.style.display = 'none';

            trading_account.removeAttribute("style");

            reg_h2.classList.remove('l_active')

            trad_h2.classList.add('l_active')



        })
    </script>
    <script>
        $(function() {

            var dtToday = new Date();



            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)

                month = '0' + month.toString();

            if (day < 10)

                day = '0' + day.toString();



            var maxDate = year + '-' + month + '-' + day;



            // or instead:

            // var maxDate = dtToday.toISOString().substr(0, 10);





            $('#date').attr('min', maxDate);

        });
    </script>
    
@endsection
