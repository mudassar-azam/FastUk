@php
    $data = DB::table('homepages')->first();
@endphp
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <title>{{$data->SEOTitle}}</title>
    <meta name="description"
        content="{{$data->metaDescription}}" />
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

    <section class="w-full py-10 sm:py-32 md:py-40 custom-bg-cover"
        style="background:url({{ asset('public/homepage') }}/{{$data->section1Image}});position:relative; height:580px !important;">

        <div
            class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 text-xl-left text-lg-left text-md-left text-sm-center text-center p-0 mt-3 mb-2 m-button-section">
            <a href="{{ url('login') }}" class="m-button-banner">Customer Login</a>
            <a href="{{ url('quote') }}" class="m-button-banner">Get A Quote</a>
        </div>


    </section>



    <!-- ahmar work -->
    <section class="w-full custom-form-container mt-72 lg:mt-0" style="padding: 0!important; background-color: #ffffff!important;">
        <div class="container lg:flex" style="flex-direction: row-reverse;">
            <div class="lg:w-5/12 p-10 pb-0">
                <div role="form" class="wpcf7" id="wpcf7-f98-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <!--<form action="/#wpcf7-f98-o1" method="post" class="wpcf7-form init" novalidate="novalidate"
                        data-status="init">-->
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
                        <h2 class="text-3xl sm:text-4xl font-white p-6" style="background:#AA1818;color:white;">Send us a message</h2>
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
                                <label class="flex-1 sm:mx-2 input-container">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email" />
                                    </span>
                                </label>
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
                            </p>
                            <p>
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
                            </p>
                            <p>
                                <button type="submit" class="wpcf7-form-control has-spinner send-submit">Send Message</button>
                            </p>
                        </form>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                    <!--</form>-->
                </div>
            </div>
            <div class="lg:w-7/12 px-10 py-10">
                <div>
                    <h3 class="font-bold" style="text-transform: uppercase;"><strong>We’ll have probably delivered your parcel by the time you’ve read these.</strong></h3>
                      <h3 class="font-bold">Legal:</h3>
                            <p>All business undertaken is subject to our Conditions of Trading (see below) which, among other things set out our liabilities and our credit terms.</p>
                            <p>Under these conditions our liability for &nbsp;damage is limited to £10.00 per kg up to 1,000 kg per consignment and is excluded in certain circumstances. Different limits of liability may apply for journeys which take place outside the British Isles.</p>
                            <p>We are not responsible for loss of profit, for loss of a particular opportunity, market or customer or for any other indirect or consequential damage or loss.</p>
                            <p>For account customers payment of our charges for carriage is due no later than 30 days after the date of invoice.</p>
                            <p>WE UNDERSTAND AND WILL EXERCISE OUR STATUTORY RIGHT TO INTEREST AND COMPENSATION FOR DEBT RECOVERY COSTS UNDER THE&nbsp;LATE PAYMENT LEGISLATION IF WE ARE NOT PAID ACCORDING TO OUR CREDIT TERMS.</p>
                            <h3 class="font-bold"><strong>CONDITIONS OF TRADING&nbsp;</strong></h3>
                            <ol class="ml-4 list-decimal">
                                <li>“The Carrier” means Fast UK Couriers Ltd.<br> 2. “Goods” means any documents or items of any tangible property, including containers and packaging, consigned by the Customer from one address to another.<br> 3. “Customer” means any individual, firm, body corporate, unincorporated association, or any other body who consigns Goods as aforesaid and includes the Customer’s servants or agents.<br> 4. “Territorial Limits” means anywhere including the sea crossings between England, Wales, Scotland, Northern Ireland, the Channel Islands, the Isle of Man and Eire.</li>
                                <li>All and any business undertaken, including any advice, or information given, or service provided by the Carrier, whether gratuitously or not, is transacted subject to these Conditions. The Customer’s terms and conditions of trading shall only be effective to the extent to which they are not inconsistent with these Conditions. Any Customer who objects to these Conditions must, prior to giving instructions, inform the Carrier of the objections in writing and any such objection shall take effect only upon it being accepted in writing by a Director or General Manager of the Carrier.</li>
                                <li>Employees, agents and officers of the Carrier have no authority to make oral or written representations, warranties or promises about the Carrier’s business or services which are inconsistent with these Conditions and the Customer waives all rights which may otherwise arise in relying upon the same. Only a General Manager or Director of the Carrier has authority to vary these Conditions and then only to the extent that the variation is expressed in writing to be a variation hereof.</li>
                                <li>In matters of conflict between these Conditions and any promotional brochures or other material of the Carrier, these Conditions shall prevail.</li>
                                <li>The Carrier is not a common carrier; it may decline to provide services for such Customers and/or in relation to such Goods as the Carrier in its absolute discretion shall determine.</li>
                                <li>The Carrier may subcontract all or any part of its business and every reference to the Carrier in these Conditions shall include every employee, agent or subcontractor of the Carrier.</li>
                                <li>The Customer warrants that it is either the owner or the authorised agent of the owner of the Goods and that it is authorised to accept and is accepting these Conditions not only for itself but also as agent for and on behalf of all other persons who are or may thereafter become interested in the Goods.</li>
                                <li>The Customer promises that the consignment will be sufficiently securely and properly packed and labelled, will be fit and safe to be carried or stored, and will comply with all statutory or other regulations for carriage by road, air, rail or sea, and for mechanical handling and sorting as may be in force or use from time to time.</li>
                                <li>The Customer warrants that the Goods do not comprise or include weapons, ammunition, controlled drugs (within the meaning of the Misuse of Drugs Act 1971 or any Statutory amendment of or substitute for that Act), industrial chemicals, unlawful, noxious, dangerous, hazardous, inflammable or explosive items of any kind, or any items which may not otherwise be collected, carried, stored or otherwise possessed, delivered, imported or exported into or from any country, region or place without declaration, licence or other permission from any statutory or regulatory body. The Customer shall be liable for all loss or damage whatsoever and howsoever caused by, to or in any connection with Goods described by this clause and, without prejudice to the Carrier making claims on any basis for damages, the Customer will indemnify and hold harmless the Carrier against all fines, penalties, actions, claims, damages, losses, costs and expenses, whatsoever and howsoever arising in any jurisdiction in connection therewith. Without prejudice to any of the Carrier’s other rights contained in these Conditions, Goods aforesaid may be destroyed, abandoned, released, surrendered or otherwise dealt with at the sole discretion of the Carrier, or by any other person in whose custody they may be at the relevant time, without liability on the part of the Carrier to the Customer.<br> 13. Subject to express written instructions given by the Customer, the Carrier reserves to itself absolute discretion as to the means, route and procedure to be followed in the handling, storage and transportation of Goods. Further, if, in the opinion of the Carrier, it is at any stage necessary or desirable in the Customer’s interests to depart from those instructions, the Carrier shall be at liberty to do so.</li>
                                <li>All invitations and quotations by the Carrier for the use of its services are given on the basis of prompt instructions given by the Customer, and shall only remain open for instruction by the Customer for a period of seven days, unless withdrawn, revoked or varied by the Carrier prior to instructions. The instructions of the Customer shall constitute an offer by the Customer to the Carrier to enter into contractual relations with it and such instructions, once accepted by the Carrier, shall give rise to a binding contract between the parties governed by these Conditions and the Customer will pay the charges of the Carrier for the business required, whether or not the Customer thereafter wishes to withdraw, revoke or vary those instructions, or otherwise makes it impossible for the Carrier to perform its obligations thereunder unless, in any case, the Carrier otherwise agrees in writing.</li>
                                <li>(i) Invoices shall be paid within 30 days of the invoice date. Where payment is not received by that date, interest and other charges will become due as allowed by The Late Payment of Commercial Debts (Interest) Act 1998 or any statutory amendment of or substitute for that Act.<br> (ii) Any failure or delay in exercising our rights shall not be deemed to be a waiver of those rights nor create a presumption that those rights shall not be exercised in the future within the time limits set by law.</li>
                                <li>Except under special arrangements previously agreed in writing, the Carrier will not accept or deal with bullion, cash, precious stones, jewellery, valuables, glass products or other fragile items, antiques, pictures (excluding commercial artwork), livestock or plants. The Customer undertakes not to deliver any such items to the Carrier, or cause the Carrier to handle or deal with any such items otherwise than after making special arrangements aforesaid. Save only to the extent so agreed, the Carrier shall be under no liability whatsoever for, or in connection with, the Goods, or any loss or damage thereto, however arising. Notwithstanding any special agreement aforesaid, the Customer will ensure that such Goods may be lawfully collected, carried, stored, delivered, exported and imported into and from any country, region or place, without hindrance or undue delay, and will indemnify and hold harmless the Carrier from all fines, penalties, actions, claims, damages, losses, costs and expenses, whatsoever and howsoever arising in any jurisdiction that it may suffer or incur in consequence of any breach of any law or regulation permitted or procured by the Customer through the acts or omissions of the Carrier in performing services in relation to the Goods.</li>
                                <li>The Customer shall be responsible for arranging for the Goods to be carefully checked immediately upon receipt by the consignee or other recipient of the Goods.</li>
                                <li>Any query regarding the performance of the obligations of the Carrier in relation to these Conditions, including, without limitation, as regards price, invoice payment, loss, non-delivery in whole or part, damage or mis-delivery of, to or from Goods (howsoever caused) shall be made in writing and notified to the Carrier within 7 days of the date upon which the Customer became or should have become aware of the event or occurrence alleged to give rise to such query and shall be supported where appropriate with a quantified claim made in writing to the Carrier within 28 days of the date aforesaid and any rights of the Customer arising in relation to any query not made, notified and where appropriate quantified as aforesaid shall be deemed to be waived and absolutely barred, except where the Customer can show that it was impossible for it to comply within the time limits aforesaid and that it has made the query as soon as it was reasonably possible for it to do so.</li>
                                <li>The Carrier shall not be liable for any delayed or non-performance or any loss or damage where liability would otherwise arise caused by:<br> (i) any act of God including adverse weather conditions, fuel shortages and power failures;<br> (ii) any war, invasion, act of foreign enemy, hostilities (whether war is declared or not), civil war, rebellion, insurrection, or military usurpation of governmental power, confiscation, requisition, destruction of, or damage to property;<br> (iii) any riots, civil commotion, strikes, lockouts, general or partial stoppage or restraint of labour from whatever causes;<br> (iv) any seizure under legal process;<br> (v) any act or omission of the Customer or those for whom he contracts or of the servants or agents of either;<br> (vi) any inherent liability to wastage in bulk or weight, latent defect or inherent vice or natural deterioration of the Goods;<br> (vii) the inadequate or improper packing of the whole or part of the Goods, unless it is previously agreed between the Customer and the Carrier that the Carrier shall undertake such packing;<br> (viii) the insufficient or incorrect labelling or addressing of the Goods, unless it is previously arranged between the Customer and the Carrier that the Carrier shall undertake such labelling;<br> (ix) the addressee of the Goods not accepting delivery within 28 days of service on the Customer of the Carrier’s notice of non-delivery;<br> (x) any marine risks;<br> (xi) the acts or omissions of any independent contractor in any manner whatsoever where caused by any breach by the Customer of these Conditions and where so caused the relief of the Carrier from liability aforesaid shall be without prejudice to any claims the Carrier may have against the Customer therefore.</li>
                                <li>The Carrier may effect physical delivery of the Goods at the address shown thereon by presenting the same to any person as may appear to the Carrier to be authorised or competent to accept them on behalf of the addressee, or the Carrier may leave the Goods at any place at the address aforesaid as may appear to it to be intended or suitable for this purpose and delivery in accordance with the foregoing shall in favour of the Carrier as against the Customer constitute sufficient performance of the Carrier’s delivery obligation hereunder unless otherwise specifically instructed in writing by the Customer.</li>
                                <li>The Carrier may (but shall not be obliged to) require acknowledgement of delivery of Goods to be given at point of delivery and any such receipt, if given by a person appearing to the Carrier to be authorised or competent in that regard, shall in favour of the Carrier against the Customer and the Addressee constitute good receipt and shall be conclusive evidence of the fact of proper delivery of the Goods pursuant to these Conditions.</li>
                                <li>The Carrier may retain the Goods in circumstances where it seems to it to be inappropriate or impossible to effect delivery of the Goods to the addressee or to obtain acknowledgement of delivery satisfactory to it, and to endeavour on some other occasion or occasions, as soon as it is practicable thereafter, to deliver the Goods and/or issue to the Customer notice of their non-delivery and (without prejudice to the Carrier’s right to claim payment of charges from time to time payable by the Customer were the delivery to have been achieved) the Customer undertakes to reimburse the Carrier all expenses reasonably incurred by it and to pay the Carrier its standard additional charges from time to time payable by its Customers generally in any circumstances aforesaid.</li>
                                <li>Where the Carrier is unable to deliver Goods and the Goods are not claimed by the Customer within 28 days of notice of such non-delivery served on the Customer, the Carrier may destroy or sell the undelivered Goods as if the Carrier as against the Customer and the purchaser were the absolute owner and to pass unencumbered title to the purchaser.</li>
                                <li>The Carrier shall have a general lien on any consignment of Goods for its charges for the carriage or storage of those or any other Goods supplied by the Customer and for any other monies due from the Customer to the Carrier and in default of payment of any monies due to the Carrier from the Customer on any account whatsoever the Carrier may without notice to the Customer appropriate any Goods aforesaid and sell them as if the Carrier as against the Customer and the purchaser were the absolute owner and to pass unencumbered title to the purchaser provided that the Carrier will apply the proceeds of sale towards monies due from the Customer to it after appropriating to itself any reasonable expense of sale.</li>
                                <li>If the Customer (otherwise than through the Carrier) employs or engages the services directly or indirectly of any employee or independent contractor to the Carrier whose services at any time during 12 months before then shall have previously been supplied by the Carrier to the Customer, the Carrier shall be entitled to charge a fee to the Customer for the introduction of such employee or independent contractor equivalent to 15% together with Value Added Tax thereon of the final annual salary or earnings of such employee or independent contractor derived from the Carrier calculated by reference to the amount earned during the last month of employment or service and the Customer will pay the same on demand.</li>
                                <li>(i) Instructions given to the Carrier by telephone otherwise than as to the identity of Customer, the identity of Goods, the address for collection, the address for delivery and the class of service requested shall give rise to no obligation or duty of care upon the Carrier, whether or not those additional telephone instructions are in whole or part performed or observed by the Carrier;<br> (ii) Subject as aforesaid the Carrier shall only be liable for any non-compliance or mis-compliance with instructions given to it if it is proved that the same was caused by the negligence or default of the Carrier;<br> (iii) In providing suggestions or opinions or advice as to means of transportation, services available, physical or legal circumstances of carriage, or other guidance howsoever described at any time to assist the Customer, to formulate instructions or otherwise, the Carrier shall be deemed to so provide for information purposes only and without giving any representation, warranty or promise and without having any duty of care to the Customer in respect thereof.</li>
                                <li>The Carrier will use and apply all reasonable efforts and endeavours to effect delivery of Goods within a stipulated period of time as described in its marketing literature in force from time to time where, in its opinion, it is able to do so, but, in expressing any such opinion, the Carrier undertakes no duty of care towards the Customer.</li>
                                <li>The Carrier may offer the Customer various guaranteed services set out in the rate schedule published by the Carrier and revised from time to time. In the event of the Carrier failing to meet the level of service selected by the Customer, credit will be allowed for the difference between the quoted charge for the guaranteed service and the quoted charge for the actual service provided. Any credit due to the Customer will be given in the form of a credit note and be applied to the Customer’s account.</li>
                                <li>The Carrier shall in no circumstances whatsoever have any other or greater liability to the Customer whether in contract negligence or otherwise and the Customer’s remedy shall be confined to that specified in Clause 28 for failure to provide the level of service selected by the Customer.</li>
                                <li>The Carrier shall have no liability in any circumstances for any lawful or unlawful detention of Goods or for any consequential loss, damage or deterioration arising there from, except where (a) the Customer shall have specified to the Carrier the nature of the Goods and purpose of their transit and the Carrier through its General Manager shall have agreed in writing with the Customer a time schedule and specification in respect of the transit of said Goods and (b) it shall be proved that such detention, delay, loss, damage or deterioration was due to the negligence of the Carrier.</li>
                                <li>It shall be the responsibility of the Customer to satisfy itself that any load it wishes to have carried by the Carrier shall be suitable for conveyance in the vehicle or machine ordered by the Customer and provided by the Carrier. And if the Customer accepts the vehicle or machine offered by the Carrier for the carriage of such load, the Carrier shall have no liability whatsoever for any loss or damage to such load arising from the unsuitability of such vehicle or machine.</li>
                                <li>The Carrier shall only be responsible for any loss or damage to Goods or any non-delivery if it is proved that the loss, damage, non-delivery or mis-delivery occurred whilst the Goods were in the custody of the Carrier or under its control and that such loss, damage, non-delivery or mis-delivery was due to the negligence of the Carrier.</li>
                                <li>The Carrier shall not under any circumstances by liable to the Customer for indirect or consequential damage or loss of profit, or for loss of a particular opportunity or market or goodwill suffered or incurred by the Customer, whether resulting from breach of contract or the negligence of the Carrier or otherwise.</li>
                                <li>Where notwithstanding these Conditions the Carrier is found to have liability to the Customer, the Carrier shall not be liable for any claims, costs, damages, losses and expenses by whomsoever made or incurred in excess of the limitations of liability stated within these Conditions, whether or not resulting from the negligence of the Carrier.</li>
                                <li>This condition shall be applied only to deliveries carried out within the Territorial Limits.<br> (a) Subject to the conditions set out above the liability of the Carrier in respect of any one consignment of Goods shall be limited to the lower of:<br> (i) an amount calculated (by reference to the gross weight of the Goods and packaging as specified on the consignment note and if no weight is specified the actual gross weight of the Goods and packaging) at a rate of £15 per kilo up to a maximum of 1000 kilos per consignment subject to a minimum of £10 or:<br> (ii) the cost value of the Goods to the Customer; or<br> (iii) in the case of damaged Goods the cost of repair of such Goods.<br> (b) In the event that part only of a consignment of Goods is lost, damaged or mis-delivered, the liability of the Carrier shall be limited to the lower of:<br> (i) that amount which bears the same proportion to the amount calculated in accordance with sub-clause 36(a) above as the actual value of the lost, damaged or mis-delivered part of the Goods bears to the actual value of the whole of the Goods; or<br> (ii) the cost of repair of any damaged part.</li>
                                <li>This condition shall be applied only to international deliveries:<br> (a) Where the Convention on the Contract for the International Carriage of Goods by Road (“CMR”) applies to the delivery of any Goods:<br> (i) if anything contained in these Conditions conflicts with any provisions of the CMR, the provisions of the CMR will take precedence; and<br> (ii) the Carrier’s liability for loss of or damage to or late delivery of the Goods will be governed by and limited in accordance with the CMR.<br> (b) Where the Warsaw Convention of 1929 (“1929 Convention”) or the Warsaw Convention as amended at the Hague 1955 (“1955 Convention”) applies to the delivery of the Goods:<br> (i) if anything contained in these Conditions conflicts with any provision of the 1929 Convention or the 1955 Convention (as appropriate), the provisions of the appropriate Convention will take precedence; and<br> (ii) the Carrier’s liability for loss of or damage to the Goods or late delivery of the Goods will be governed by and limited in accordance with the 1929 Convention or the 1955 Convention (as appropriate).<br> (c) If the Goods are being exported the Customer must supply correct and complete documentation required for customs clearance at the commencement of transit.<br> (d) The Customer will indemnify and keep indemnified the Carrier against any costs, expenses, liabilities, injuries, losses, damages, claims, demands, proceedings or legal costs and judgments which we suffer as a result of:<br> (i) the Customer failing to provide the Carrier with the documentation specified in condition 36(c);<br> (ii) any claims made by HM Customs and Excise in respect of dutiable goods consigned in bond; and<br> (iii) any claim made by HM Customs and Excise under Section 30(10) of the Value Added Tax Act 1994.</li>
                                <li>The Customer acknowledges and agrees that provisions in these Conditions excluding or restricting liability of the Carrier or allowing the Carrier to perform obligations differently or not at all are reasonable having regard to, among other things, the existence of other suppliers of similar services available to it before entering contractual relations with the Carrier.</li>
                                <li>All agreements between the Carrier and the Customer shall be governed and construed in accordance with English Law and the parties hereby submit to the exclusive jurisdiction of the English courts.</li>
                            </ol>
                        </div>
            </div>
        </div>
    </section>

    <!-- Add your other HTML elements and scripts here -->

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
    <!-- <div id="cookie-law-info-again" data-nosnippet="true">
        <span id="cookie_hdr_showagain">Manage consent</span>
    </div> -->
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
                <a href="https://canvasolutions.co.uk/" class="text-white">FAST UK COURIERS LIMITED</a>
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
