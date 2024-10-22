<!-- Include the PayPal JavaScript SDK -->

<!-- <script
    src="https://www.paypal.com/sdk/js?client-id=Ac3nwm3D3Ip-MXe9xqZzzCDA3w8S8QS9gnT61y3P3O9odhW0KF_3arIz8lOA1H9XN9W4F10s8nSi3O1l&currency=GBP">
</script> -->

<script
    src="https://www.paypal.com/sdk/js?client-id=AdHt0iL8sxaRNr4xYY8tmTovRwEXmugqMWIk2C4I7E_dP-ALCn6nRQ4kgeQD6RWuQdBBmp10VCcIkR2c&components=buttons">
</script>



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
    <div class="modal-content">

        <span class="close" onclick="hidepaypal()">&times;</span>
        <div id="paypal-button-container"></div>
        <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                let finalPrice = parseFloat($('#final_price').val()).toFixed(2);

                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: finalPrice
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    $('#paytype').val("paypal");
                    $('#msform').submit();
                });
            }
        }).render('#paypal-button-container');
        </script>

    </div>
</div>
<div id="loginmodel" class="modal">

    <div class="modal-content">

        <span class="close3">&times;</span>

        <h2>User Login</h2>

        <!-- Modal content -->

        <form method="POST" action="{{ route('login') }}">

            @csrf



            <div class="row" id="userLogin_form">



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



            <div class="userLogin_button">

                <div>

                    <button type="submit" onclick="login(event)">

                        {{ __('Login') }}

                    </button>



                    @if (Route::has('password.request'))

                    <a class="btn btn-link userLogin_forget" href="{{ route('password.request') }}">

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

    <form method="post" action="javascript:void(0);" name="formguest" >

        <div class="modal-content"style="border-radius: 1em;">

            <span class="close2">&times;</span>

            <div class="row" id="enter_guest" style="display:none;" class="guest-form">



                <div class="col-md-12">

                    <label>Name</label>

                    <input type="text" class="form-control" name="guestname" required/>

                </div>

                <div class="col-md-12">

                    <label>Father Name</label>

                    <input type="text" class="form-control" name="guestfname" />

                </div>

                <div class="col-md-12">

                    <label>Email</label>

                    <input type="text" class="form-control" name="guestemail" />

                </div>

                <div class="col-md-12">

                    <label>Choose Guest Secret Track ID</label>

                    <input type="text" class="form-control" name="track_id" required/>

                </div>

                <div class="col-md-12">

                    <label>Phone#</label>

                    <input type="number" class="form-control" name="guestpnumber" />

                </div>

                <div class="col-md-12">

                    <label>Address(your permanent living address)</label>

                    <input type="text" class="form-control" name="guestaddress" />

                </div>

            </div>

            <div class="row" id="confirm_guest" class="guest-form">

                <div class="col-md-12">

                    <label>Your Track Id</label>

                    <div class="row">

                        <div class="col-md-8">

                            <input type="text" class="form-control" name="trackid" readonly/>

                        </div>

                        <div class="col-md-3" style="margin: auto;">

                            <button class="checkguest" id="checkguest" type="button"style="border-radius: 0.5em;">confirm</button>

                        </div>

                    </div>

                </div>

            </div>

            <br>

            <button class="checkguest" id="guestform"  onclick="guestcreate()" style="display:none;" >Create</button>

        </div>

    </form>


</div>





<?php

if ((Session::has('success-message'))){







    echo '<script>

    swal("Congratulates!","Stripe Payment Done!","success");

</script>';





}

?>