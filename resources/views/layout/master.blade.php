<!DOCTYPE html>
<html>

<head>
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="icon" href='{{ asset("assets_front/new/images/favicon.png") }}' sizes="192x192" />

    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css')}}"
        media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}"
        media="all">

    <!-- Include the PayPal JavaScript SDK -->


    <!-- end plugin css -->

    @yield('plugin-styles')

    <!-- common css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" media="all">


    <!-- end common css -->
    <style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
    }

    /* The Close Button */
    .close,
    .close2,
    .close3 {
        color: #aaaaaa;
        /*float: right !important;*/
        font-size: 28px;
        font-weight: bold;
        padding-left: 478px;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .close2:hover,
    .close2:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .close3:hover,
    .close3:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
    @stack('style')
</head>

<body data-base-url="{{url('/')}}" class="yebody">

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="hidestripe()">&times;</span>
            {{--<p>Some text in the Modal..</p>--}}
            @include('partials.stripe_dashboard')
        </div>


    </div>
    <!-- The Modal -->
    <div id="paypalModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="hidepaypal()">&times;</span>
            <input class="form-control" type="number" id="paypalprice" placeholder="Enter Price">
            <br>
            <div id="paypal-button-container"></div>

            <!-- Include the PayPal JavaScript SDK -->
            <script
                src="https://www.paypal.com/sdk/js?client-id=Ac3nwm3D3Ip-MXe9xqZzzCDA3w8S8QS9gnT61y3P3O9odhW0KF_3arIz8lOA1H9XN9W4F10s8nSi3O1l&currency=USD">
            </script>


        </div>


    </div>
    <div class="container-scroller" id="app">
        @include('layout.header')
        <div class="container-fluid page-body-wrapper">
            @include('layout.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('layout.footer')
            </div>
        </div>
    </div>

    <!-- base js -->
    <script src="{{url('js/app.js')}}"></script>
    <script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{url('assets/js/off-canvas.js')}}"></script>
    <script src="{{url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('assets/js/misc.js')}}"></script>
    <script src="{{url('assets/js/settings.js')}}"></script>
    <script src="{{url('assets/js/todolist.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
    <!-- end common js -->

    <script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: $('#paypalprice').val()
                    }
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {

                // Show a success message to the buyer

                $.ajax({
                    type: "POST",
                    url: '{{url("user/update-balance")}}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "balance": $('#paypalprice').val()
                    },
                    cache: false,
                    success: function(response) {
                        swal("Congratulates!", "Balance Added", "success");
                        window.location.reload();

                    }
                });


            });
        }


    }).render('#paypal-button-container');
    </script>
    <script>
    var modal = document.getElementById("myModal");
    var paypal = document.getElementById("paypalModal");
    $('.addbalnce').click(function() {
        const el = document.createElement('div');
        el.innerHTML = '<button type="button" class="btn btn-primary btn-fw"  onclick="openmethod(1)" >' +
            'Paypal' + '</button>' +
            '<button type="button" class="btn btn-success btn-fw"  onclick="openmethod(2)"   >' + 'Stripe' +
            '</button>';

        swal({
            title: "Choose Method",
            content: el,
            buttons: false,
        });
    });


    function openmethod(e) {

        if (e == 1) {

            paypal.style.display = "block";

        } else {

            modal.style.display = "block";

        }
        $('.swal-overlay').removeClass("swal-overlay--show-modal");


    }

    function hidestripe() {
        modal.style.display = "none";
    }

    function hidepaypal() {
        paypal.style.display = "none";
    }
    </script>
    @stack('custom-scripts')


    <script>
    $(document).ready(function() {


        // Listen for changes to the radio fields
        document.querySelectorAll('input[name=payment-option]').forEach(function(el) {
            el.addEventListener('change', function(event) {

                // If PayPal is selected, show the PayPal button
                if (event.target.value === 'paypal') {
                    document.querySelector('#card-button-container').style.display = 'none';
                    document.querySelector('#paypal-button-container').style.display =
                        'inline-block';
                }

                // If Card is selected, show the standard continue button
                if (event.target.value === 'card') {
                    document.querySelector('#card-button-container').style.display =
                        'inline-block';
                    document.querySelector('#paypal-button-container').style.display = 'none';
                }
            });
        });

        // Hide Non-PayPal button by default
        document.querySelector('#card-button-container').style.display = 'none';

        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            style: {
                layout: 'horizontal'
            }
        }).render('#paypal-button-container');
    });
    </script>


</body>

</html>
<?php
if ((Session::has('success-message'))){



    echo '<script>
    swal("Congratulates!","Balance Added","success");
</script>';


}
?>