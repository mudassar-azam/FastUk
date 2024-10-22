
			<div class='col-md-12'>
				<script src='https://js.stripe.com/v2/' type='text/javascript'></script>
				<form accept-charset="UTF-8" action="{{url('user/update-balance')}}" class="require-validation"
					data-cc-on-file="false"
					data-stripe-publishable-key="pk_test_51IMTL2E3aOKhVh4WtazJpG1Baaq1jpcdSzyelzI7HcV6gD3IljV42ABRhFDqXl6Y1D7u0aJjMuCsIlwW7bfjxG8E0068HLn8Gh"
					id="payment-form" method="post">
					@csrf
                    <input type="hidden" name="submit_type" value="stript">
					<div class='form-row'>
						<div class='col-md-12 form-group required'>
							<label class='control-label'>Amount</label>
                            <input class='form-control' name="balance" type='number' placeholder="Enter Price">
						</div>
					</div>
                    <div class='form-row'>
						<div class='col-md-12 form-group required'>
							<label class='control-label'>Name on Card</label> <input
								class='form-control' size='4' type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 form-group card required'>
							<label class='control-label'>Card Number</label> <input
								autocomplete='off' class='form-control card-number' size='20'
								type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-4 form-group cvc required'>
							<label class='control-label'>CVC</label> <input
								autocomplete='off' class='form-control card-cvc'
								placeholder='ex. 311' size='4' type='text'>
						</div>
						<div class='col-md-4 form-group expiration required'>
							<label class='control-label'>Expiration</label> <input
								class='form-control card-expiry-month' placeholder='MM' size='2'
								type='text'>
						</div>
						<div class='col-md-4 form-group expiration required'>
							<label class='control-label'> </label> <input
								class='form-control card-expiry-year' placeholder='YYYY'
								size='4' type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12'>
							<div class='form-control total btn btn-info'>
								Total: <span class='amount'>$300</span>
							</div>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 form-group'>
							<button class='form-control btn btn-primary submit-button'
								type='submit' style="margin-top: 10px;">Pay »</button>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 error form-group hide'>
							<div class='alert-danger alert'></div>
						</div>
					</div>
				</form>
				@if ((Session::has('success-message')))

				{{--<div class="alert alert-success col-md-12">{{--}}
					{{--Session::get('success-message') }}</div>--}}
					{{----}}
				<!-- The Modal -->

				@endif
				@if ((Session::has('fail-message')))
				<div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
				@endif
			</div>
			<div class='col-md-4'></div>
            <script src="assets_front/jquery-3.5.1.min.js" ></script>
	<script>
		$(function() {
			  $('form.require-validation').bind('submit', function(e) {
			    var $form         = $(e.target).closest('form'),
			        inputSelector = ['input[type=email]', 'input[type=password]',
			                         'input[type=text]', 'input[type=file]',
			                         'textarea'].join(', '),
			        $inputs       = $form.find('.required').find(inputSelector),
			        $errorMessage = $form.find('div.error'),
			        valid         = true;

			    $errorMessage.addClass('hide');
			    $('.has-error').removeClass('has-error');
			    $inputs.each(function(i, el) {
			      var $input = $(el);
			      if ($input.val() === '') {
			        $input.parent().addClass('has-error');
			        $errorMessage.removeClass('hide');
			        e.preventDefault(); // cancel on first error
			      }
			    });
			  });
			});

			$(function() {
			  var $form = $("#payment-form");

			  $form.on('submit', function(e) {
			    if (!$form.data('cc-on-file')) {
			      e.preventDefault();
			      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
			      Stripe.createToken({
			        number: $('.card-number').val(),
			        cvc: $('.card-cvc').val(),
			        exp_month: $('.card-expiry-month').val(),
			        exp_year: $('.card-expiry-year').val()
			      }, stripeResponseHandler);
			    }
			  });

			  function stripeResponseHandler(status, response) {
			    if (response.error) {
			      $('.error')
			        .removeClass('hide')
			        .find('.alert')
			        .text(response.error.message);
			    } else {
			      // token contains id, last4, and card type
			      var token = response['id'];
			      // insert the token into the form so it gets submitted to the server
			      $form.find('input[type=text]').empty();
			      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			      $form.get(0).submit();
			    }
			  }
			})
		</script>

