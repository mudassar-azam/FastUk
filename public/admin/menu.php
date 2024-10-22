
<?php
    // include("query/fonction.php");
    if(!isset($_SESSION['user_info']) && count($_SESSION['user_info']) == 0)
        header('Location: login.php');
?>
<!-- User profile -->
<div class="user-profile">
    <!-- User profile image -->
    <div class="profile-img">
        <img src="assets/images/users/flag.png" alt="user" />
        <!-- this is blinking heartbit-->
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
    </div>
    <?php
        $tab_user_info[] = array();
        $tab_user_info = $_SESSION['user_info'];
    ?>
    <!-- User profile text-->
    <div class="profile-text">
        <h5><?php echo $tab_user_info['nom_prenom']; ?></h5>
        <a href="query/action.php?logout=yes" class="" data-toggle="tooltip" title="Log out"><i class="mdi mdi-power"></i></a>
        <div class="dropdown-menu animated flipInY">
            <!-- text-->
            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
            <!-- text-->
            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> Password</a>
            <div class="dropdown-divider"></div>
            <!-- text-->
            <a href="query/action.php?logout=yes" class="dropdown-item"><i class="fa fa-power-off"></i> Log out</a>
            <!-- text-->
        </div>
    </div>
</div>
<!-- End User profile text-->
<!-- Sidebar navigation-->
<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="nav-devider"></li>
        <li class="nav-small-cap">MONITORING THE MOBILE</li>
        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                <i class="mdi mdi-home"></i>
                <span class="hide-menu">Home</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="index.php">Dashboard</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                <i class="mdi mdi-account-multiple"></i>
                <span class="hide-menu">Users/Guests</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="list-user.php">Users</a></li>
                <li><a href="guest.php">Guests</a></li>
<!--                <li><a href="conducteur.php">Driver</a></li>-->

            </ul>
        </li>

        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">All Bookings</span></a>
            <ul aria-expanded="false" class="collapse">

                <li ><a href="user-bookings.php">User Bookings</a></li>
                <li ><a href="guest-bookings.php">Guest Bookings</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings-box"></i><span class="hide-menu">Vehicles</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="type-vehicule-rental.php">Vehicle type</a></li>
                <li><a href="allvehicles.php">Vehicles</a></li>
<!--                <li><a href="categorie-user.php">Category of user</a></li>-->
                <!-- <li><a href="type-taxi.php">Taxi Type</a></li> -->
            </ul>
        </li>
<!--        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-pen"></i><span class="hide-menu">Taxi booking</span></a>-->
<!--            <ul aria-expanded="false" class="collapse">-->
<!--                 <li><a href="affectation.php">Affectation</a></li>-->
<!--                <li><a href="requete.php">All</a></li>-->
<!--                <li><a href="requete-new.php">New</a></li>-->
<!--                <li><a href="requete-confirmed.php">Confirmed</a></li>-->
<!--                <li><a href="requete-onride.php">On Ride</a></li>-->
<!--                <li><a href="requete-completed.php">Completed</a></li>-->
<!--                <li><a href="requete-canceled.php">Canceled & Reject</a></li>-->
<!--            </ul>-->
<!--        </li>-->

<!--        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-pen"></i><span class="hide-menu">Vehicle rental</span></a>-->
<!--            <ul aria-expanded="false" class="collapse">-->
<!--                <li><a href="type-vehicule-rental.php">Vehicle type</a></li>-->
<!--                <li><a href="vehicule.php">Vehicle</a></li>-->
<!--                <li><a href="location-vehicule.php">Vehicle rent</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">-->
<!--                <i class="mdi mdi-settings"></i>-->
<!--                <span class="hide-menu">Administrative tools</span>-->
<!--            </a>-->
<!--            <ul aria-expanded="false" class="collapse">-->
<!--                <li><a href="country.php">Country</a></li>-->
<!--                <li><a href="currency.php">Currency</a></li>-->
<!--                <li><a href="commision.php">Commission</a></li>-->
<!--                <li><a href="payment-method.php">Payment method</a></li>-->
<!--                <li><a href="settings.php">Settings</a></li>-->
<!--            </ul>-->
<!--        </li>-->
        <!-- <li class="nav-small-cap">SUIVI DU MOBILE</li> -->
    </ul>
</nav>
<!-- End Sidebar navigation -->
