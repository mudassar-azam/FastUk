<?php

//        $vehicle=mysqli_query($con,"SELECT * from tj_vehicule where statut='yes'");
use Illuminate\Support\Facades\DB;

$vehicle=DB::table('tj_vehicule')->where('statut','=','yes')->get();

?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from free-now.com/uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 06:37:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 
	This website is powered by TYPO3 - inspiring people to share!
	TYPO3 is a free open source Content Management Framework initially created by Kasper Skaarhoj and licensed under GNU/GPL.
	TYPO3 is copyright 1998-2021 of Kasper Skaarhoj. Extensions are copyright of their respective owners.
	Information and contribution at https://typo3.org/
-->

<base >


<meta name="generator" content="TYPO3 CMS" />
<meta name="description" content="Welcome to London’s one-stop answer to ride-hailing. Faster, safer and better than ever. Order and pay easily all through the app. Available in 100+ cities across Europe. Download the FREE NOW app for iOS or Android" />
<meta property="og:title" content="My Taxi Free - Europe's Best Taxi Service" />
<meta property="og:description" content="Welcome to FREE NOW the one-stop answer to ride-hailing. Faster, safer and better than ever. Order and pay easily all through the app. Available in 100+ cities across Europe. Download the FREE NOW app for iOS or Android." />
<meta name="twitter:title" content="FREE NOW - Europe's best mobility app" />
<meta name="twitter:description" content="Welcome to FREE NOW the one-stop answer to ride-hailing. Faster, safer and better than ever. Order and pay easily all through the app. Available in 100+ cities across Europe. Download the FREE NOW app for iOS or Android." />
<meta name="twitter:card" content="summary_large_image" />


<link rel="stylesheet" type="text/css" href="assets/typo3temp/assets/compressed/merged-357024e1933b5e1ea2e8490e36312a32-abd8f1f9e1c6b5a6803cbbd89d3ee1c3b9b5.css?1610525358" media="all">



<script src="assets/typo3temp/assets/compressed/merged-fce0dc4fdf8ceec8a4a2e40b70abbbd9-233793e39cef241fe81f945c62d0326cabeb.js?1604414364" type="text/javascript"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="-ThOIokypFuYpsYPBfInw60A6pAykmEPfiiJC_Ozlz4" />

    <link rel="apple-touch-icon" sizes="180x180" href="assets/typo3conf/ext/siteway/Resources/Public/Icons/Favicon/apple-touch-icon5e1f.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/typo3conf/ext/siteway/Resources/Public/Icons/Favicon/favicon-32x325e1f.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/typo3conf/ext/siteway/Resources/Public/Icons/Favicon/favicon-16x165e1f.png?v=2">
    <link rel="manifest" href="https://free-now.com/typo3conf/ext/siteway/Resources/Public/Icons/Favicon/site.webmanifes?v=2t">
    <link rel="mask-icon" href="https://free-now.com/typo3conf/ext/siteway/Resources/Public/Icons/Favicon/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#001E3E">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P4JJ9MS');</script>
	<!-- End Google Tag Manager -->

	<!--[if IE 9]>
	<script src="/typo3conf/ext/siteway/Resources/Public/Javascript/ie9placeholder.js"></script>
	<![endif]-->

	<noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript><title>My Taxi Free - Europe's Best Taxi Service</title><meta name="keywords" content="mytaxi United Kingdom
mytaxi London
taxi London
cab London
taxi app"><meta name="description" content="Welcome to London’s one-stop answer to ride-hailing. Faster, safer and better than ever. Order and pay easily all through the app. Available in 100+ cities across Europe. Download the FREE NOW app for iOS or Android">

	<!--<meta name="smartbanner:title" content="FREE NOW">-->
	<!--<meta name="smartbanner:author" content="Book your ride now">-->
	<!--<meta name="smartbanner:price-suffix-apple" content=" Download on the App Store">-->
	<!--<meta name="smartbanner:price-suffix-google" content=" Get it on Google Play">-->
	<!--<meta name="smartbanner:icon-apple" content="https://free-now.com/fileadmin/PAS_appicon_230x230.png">-->
	<!--<meta name="smartbanner:icon-google" content="https://free-now.com/fileadmin/PAS_appicon_230x230.png">-->
	<!--<meta name="smartbanner:button" content="Install">-->
	<!--<meta name="smartbanner:button-url-apple" content="https://mytaxi.onelink.me/HySP/bfe4e796">-->
	<!--<meta name="smartbanner:button-url-google" content="https://mytaxi.onelink.me/HySP/bfe4e796">-->
	<!--<meta name="smartbanner:enabled-platforms" content="android,ios">-->
	<!--<meta name="smartbanner:close-label" content="Close">-->
	<!--<meta name="smartbanner:disable-positioning" content="true">-->

<link rel="alternate" hreflang="en-UK" href="https://free-now.com/"/>
<link rel="alternate" hreflang="de-DE" href="https://free-now.com/de/"/>
<link rel="alternate" hreflang="de-AT" href="https://free-now.com/at/"/>
<link rel="alternate" hreflang="en-IE" href="https://free-now.com/ie/"/>
<link rel="alternate" hreflang="en-GB" href="index.html"/>
<link rel="alternate" hreflang="es-ES" href="https://free-now.com/es/"/>
<link rel="alternate" hreflang="it-IT" href="https://free-now.com/it/"/>
<link rel="alternate" hreflang="pl-PL" href="https://free-now.com/pl/"/>
<link rel="alternate" hreflang="pt-PT" href="https://free-now.com/pt/"/>
<link rel="alternate" hreflang="se-SE" href="https://free-now.com/se/"/>
<link rel="alternate" hreflang="en-GB" href="https://free-now.com/de-en/"/>
<link rel="alternate" hreflang="ro" href="https://free-now.com/ro/"/>
<link rel="alternate" hreflang="ro-GB" href="https://free-now.com/ro-en/"/>
<link rel="alternate" hreflang="pl-GB" href="https://free-now.com/pl-en/"/>
<link rel="alternate" hreflang="fr-FR" href="https://free-now.com/fr/"/>
<link rel="alternate" hreflang="x-default" href="https://free-now.com/"/>

<link rel="canonical" href="index.html"/>

<link rel="stylesheet" href="assets/bootstrap.min.css" >


<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="assets/jquery-3.5.1.min.js" ></script>
<script src='assets/bootstrap.bundle.min.js'></script>

<style type="text/css">
	* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey;
}
h1,h2,h3{
    color:#f7b614;
}
.btn{
    background-color:#f7b614;
    color:black;
}
.btn:hover{
    background-color:black;
    color:white;
}
#heading {
    text-transform: uppercase;
    color:lightgreen;
    font-weight: normal;
    padding:20px 0;
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset {
    /*background: white;*/
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left;
}
.form-card::after{
    content:"";
    display:table;
    clear:both;
}
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform input,
#msform textarea {
    padding: 20px 15px 20px 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 25px;
    margin-top: 2px;
    display:inline-block;
    width:97%;
    box-sizing: border-box;
    font-family:calibri;
    color:#f7b614;
    background-color:black;
    font-size: 20px;
    letter-spacing: 1px;
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid lightgreen;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #f7b614;
    font-weight: bold;
    color: black;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color:black;
    color:lightgreen;
}

#msform .action-button-previous {
    width: 100px;
    background:black;
    font-weight: bold;
    color:lightgreen;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color:#f7b614;
    color:black;
}

.card {
    z-index: 0;
    border: none;
    position: relative;
}

.fs-title {
    font-size: 25px;
    color:lightgreen;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left;
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: grey;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color:lightgreen;
    text-align: left;
    float:left;
    width:25%;
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color:lightgreen;
}

#progressbar .active {
    color:#f7b614;
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f124"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f1b9"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background:black;
    border-radius: 50%;
    border:1px solid #f7b614;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background:lightgreen;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background:#f7b614;
    color:black;
}

.progress {
    height: 20px;
}

.progress-bar {
    background-color: #f7b614;
}

.fit-image {
    width: 100%;
    object-fit: cover
}
.headone{
    background-color:#f7b614;
}
.head .inner{
    border:none;
}
.head .inner nav{
    border:none;
}
.head .inner nav .nav{
    border:none;
}
.head .inner nav .nav > li.sub > a{
    border:none;
    color:white !important;
    background-color:transparent !important;
    transition-delay:0s;
    transition-duration:0.5s;
    transition-property:background-color,color;
}
.head .inner nav .nav > li.sub > a:hover{
    background-color:transparent !important;
    color:black !important;
}
.headone .inner nav .nav > li.sub > a{
    color:white !important;
}
.head .inner nav > ul.nav__right{
    border:none;
}
.head .inner nav > ul.nav__right > li{
    border:none;
}
.head .inner nav > ul.nav__right > li > a{
    color:white;
}
.head .inner nav > ul.nav__right > li > a:hover{
    color:#f7b614;
}
.headone .inner nav > ul.nav__right > li > a:hover{
    color:black;
}
.headone .inner nav > ul.nav__right > li > a{
    color:white;
}
.head .language__switch>a {
    color:white;
}
.head .language__switch>a:hover{
    color:dodgerblue;
}
.headone .language__switch>a{
    color:lightgreen;
}
.headone .language__switch>a:hover{
    color:white;
}
.pac-container {
    border:none;
    width:500px !important;
}

/* media query for form */
@media only screen and (max-width: 786px){
        
        #msform input,
        #msform textarea {
            width:100% !important;
            display:block !important;
        }
        .fieldlabels {
            width:100% !important;
            float:none !important;
        }
        .top-head{
            height:auto;
            border:1px solid red !important;
        }
        .top-head .r-phone,
        .top-head .r-mail,
        .top-head .r-time{
            font-size:10px !important;
        }
}
@media only screen and (min-width: 768px) and (max-width: 1024px){
    
        .top-head{
            height:auto;
            border:1px solid blue !important;
        }
        .top-head .r-phone,
        .top-head .r-mail,
        .top-head .r-time{
            font-size:10px !important;
        }
    
}
</style>


	




       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCB6iqlUAGnEFSmNmMl1OIZ2tKHIizBI&libraries=places"></script>
       

</head>