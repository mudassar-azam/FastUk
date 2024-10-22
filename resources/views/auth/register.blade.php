@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one"
   style="background-image: url({{ asset('public/fast_couriers_uk_banner.jpg') }}); background-size :contain;background-repeat:no-repeat;"
   id="content_wrapper" >
   <div class="row w-100">
      <div class="col-lg-10 mx-auto">
         <!--<div class="d-flex ">-->
         <!--   <button id="register" class="nav-link d_button mb-4 ml-2 ">-->
         <!--      <h2 id="reg_h2" class="toggle-btns">Register</h2>-->
         <!--   </button>-->
         <!--   <button id="trading" class="nav-link d_button mb-4 ml-2 ">-->
         <!--      <h2 id="trad_h2" class="toggle-btns">Trader</h2>-->
         <!--   </button>-->
         <!--</div>-->
         <label class="switch">
          Trander Account
          <input type="checkbox" id="toggle-switch">
          <span class="slider round"></span>
         </label>

         <div class="auto-form-wrapper">
            {{-- Register account start here --}}
            <div id="register_account">
               <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <h1 class="display-2">Register User Account</h1>
                  <div class="mx-2 mt-5 row">
                  <div class="form-group col-lg-6">
                     <label for="company_name">Company Name</label>
                     <div class="input-group">
                        <input id="company_name" type="text"
                           class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                           value="{{ old('company_name') }}" required autocomplete="company_name">
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
                  <div class="form-group col-lg-6">
                     <label for="company_address">Trading Address</label>
                     <div class="input-group">
                        <input id="company_address" type="text"
                           class="form-control @error('company_address') is-invalid @enderror" name="company_address"
                           value="{{ old('company_address') }}" required autocomplete="company_address">
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
                  <div class="form-group col-lg-6">
                     <label for="company_vet">VAT Number</label>
                     <div class="input-group">
                        <input id="company_vet" type="text"
                           class="form-control @error('company_vet') is-invalid @enderror" name="company_vet"
                           value="{{ old('company_vet') }}" required autocomplete="company_vet">
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
                     <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <div class="input-group">
                           <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="new-password">
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
                     <div class="form-group">
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
                  </div>
                  {{--          
                  <div class="form-group d-flex justify-content-center">
                     --}}
                     {{--            
                     <div class="form-check form-check-flat mt-0"> --}}
                        {{--              <label class="form-check-label"> --}}
                        {{--                <input type="checkbox" class="form-control"> I agree to the terms </label> --}}
                        {{--            
                     </div>
                     --}}
                     {{--          
                  </div>
                  --}}
                  <input type="hidden" name="user_type" value="normal">
                  <div class="form-group col-lg-12">
                     <button class="btn btn-primary submit-btn btn-block" style="background:#AA1818;">Register</button>
                  </div>
                  <div class="text-block text-center my-3">
                     <span class="text-small font-weight-semibold">Already have and account ?</span>
                     <a href="{{ url('/login') }}" class="text-black text-small">Login</a>
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
                              class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                              value="{{ old('company_name') }}" required autocomplete="company_name">
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
                              class="form-control @error('company_address') is-invalid @enderror" name="company_address"
                              value="{{ old('company_address') }}" required autocomplete="company_address">
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
                              class="form-control @error('account_email') is-invalid @enderror" name="account_email"
                              required autocomplete="email">
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
                              class="form-control @error('account_phone') is-invalid @enderror" name="account_phone"
                              value="{{ old('account_phone') }}" required autocomplete="phone">
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
                              class="form-control @error('company_number') is-invalid @enderror" name="company_number"
                              value="{{ old('company_number') }}" required autocomplete="phone">
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
                              class="form-control @error('company_vet') is-invalid @enderror" name="company_vet"
                              value="{{ old('company_vet') }}" required>
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
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="new-password">
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
                              class="form-control @error('name_position') is-invalid @enderror" name="name_position"
                              value="{{ old('name_position') }}" required autocomplete="name_position">
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
                             <textarea name="payment_terms" rows="2" class="alert alert-danger" size="40" style="height: initial;width: 100%;"
                                aria-invalid="false" placeholder="If your payment terms are different then please state accordingly." required></textarea>
                             </span>
                         </p>
                         <p class="mb-0">
                            <span class="wpcf7-form-control-wrap acceptance-510">
                                <span class="wpcf7-form-control wpcf7-acceptance">
                                 <strong>
                                    Date:
                                 </strong>
                                 <div class="wpcf7-list-item">
                                     <input type="date" name="date" class="border rounded p-2" aria-invalid="false" placeholder="Enter date" id="date"/>
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
                                    <label >
                                         <input type="checkbox" name="acceptance" value="1" aria-invalid="false" style="margin-left: -15px; margin-right: 5px;" required/>
                                         <span class="wpcf7-list-item-label">
                                            I agree to set up an account with Same Day Courier.
                                         </span>
                                    </label>
                                </div>
                                <div class="wpcf7-list-item">
                                    <label >
                                        <input type="checkbox" name="acceptance" value="1" aria-invalid="false" style="margin-left: -15px; margin-right: 5px;" required/>
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
                            <button type="submit" class="mb-5 wpcf7-form-control has-spinner send-submit">Register Trader</button>
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
    // Get the elements by their IDs
    let register_account = document.getElementById('register_account'),
        trading_account = document.getElementById('trading_account'),
        // reg_h2 = document.getElementById('reg_h2'),
        // trad_h2 = document.getElementById('trad_h2'),
        toggleSwitch = document.getElementById('toggle-switch');

    // Initial setup
    trading_account.style.display = 'none';
    // reg_h2.classList.add('l_active');

    // Add a class to the checkbox input
    toggleSwitch.classList.add('toggle-class');

    // Event listener for the toggle switch
    toggleSwitch.addEventListener('change', function() {
        if (toggleSwitch.checked) {
            trading_account.style.display = 'block';
            register_account.style.display = 'none';
            // reg_h2.classList.remove('l_active');
            // trad_h2.classList.add('l_active');
        } else {
            register_account.style.display = 'block';
            trading_account.style.display = 'none';
            // reg_h2.classList.add('l_active');
            // trad_h2.classList.remove('l_active');
        }
    });
</script>

{{--
<script>



    let register_account = document.getElementById('register_account'),

        trading_account = document.getElementById('trading_account'),

        register = document.getElementById('register'),

        trad_h2 = document.getElementById('trad_h2'),

        reg_h2 = document.getElementById('reg_h2'),

        trading = document.getElementById('trading');

        trading_account.style.display = 'none';

        reg_h2.classList.add('l_active');



  register.addEventListener('click' , function(event){



    event.preventDefault();

    register_account.style.diplay =  'block';

    trading_account.style.display = 'none';

    register_account.removeAttribute("style");

    reg_h2.classList.add('l_active');

    trad_h2.classList.remove('l_active');



})

trading.addEventListener('click' , function(event){



    event.preventDefault();



    trading_account.style.diplay =  'block';

    register_account.style.display = 'none';

    trading_account.removeAttribute("style");

     reg_h2.classList.remove('l_active')

    trad_h2.classList.add('l_active')



})

</script>
--}}
<script>

    $(function(){

    var dtToday = new Date();



    var month = dtToday.getMonth() + 1;

    var day = dtToday.getDate();

    var year = dtToday.getFullYear();

    if(month < 10)

        month = '0' + month.toString();

    if(day < 10)

        day = '0' + day.toString();



    var maxDate = year + '-' + month + '-' + day;



    // or instead:

    // var maxDate = dtToday.toISOString().substr(0, 10);





    $('#date').attr('min', maxDate);

});

</script>

@endsection



