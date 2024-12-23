
<!-- Nom &amp; Prénom: WOUMTANA P. Youssouf
            Téléphone: +226 63 86 22 46 / 73 35 41 41
                Email: issoufwoumtana@gmail.com -->
<?php
include("query/fonction.php");
include("dico.php");
$tab_infos_user[] = array();
$id_user = "";
if(!isset($_SESSION['user_info']) && count($_SESSION['user_info']) == 0)
    header('Location: login.php');
else{
    $tab_infos_user = $_SESSION['user_info'];
    $id_user = $tab_infos_user['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <?php include('header.php') ?>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <?php include("menu.php"); ?>
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Request</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">Taxi booking</li>
                    <li class="breadcrumb-item active">Request</li>
                </ol>
            </div>
            <div>
                <!-- <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of User Bookings</h4>
                            <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                            <div class="table-responsive m-t-10">
                                <?php
                                $tab_requete[] = array();
                                //                                $tab_requete = getRequete();
                                $tab_requete = getUserBooking();

                                $tab_currency[] = array();
                                $tab_currency = getEnabledCurrency();
                                ?>
                                <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>

                                        <th>Action</th>
                                        <th>status</th>

                                        <th>Booker Name</th>
                                        <th>Vehicle Number Plate</th>
                                        <th>Departure Name</th>
                                        <th>Destination Name</th>
                                        <th>Booking Date</th>
                                        <th>Picking time</th>
                                        <th>collection name</th>
                                        <th>collection phone</th>
                                        <th>collection address</th>
                                        <th>collection city</th>
                                        <th>Delivery name</th>
                                        <th>Delivery phone</th>
                                        <th>Delivery address</th>
                                        <th>Delivery city</th>
                                        <th>Estimate Price</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($tab_requete as $tab_requetes) {

                                        echo'
                                                      <tr>


                                                                <td>
                                                             <input type="hidden" value="'.$tab_requetes['booking_id'].'" name="" id="">
                                                                <a href="query/action.php?id_affectation='.$tab_requetes['booking_id'].'" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>
                                         <select  class="ub_ch_sts"  data-usrid="'.$tab_requetes['booking_id'].'" ><option readonly disabled selected>Change Status</option><option value="complete">Complete</option><option value="pending">Pending</option><option value="progress">In Progress</option><option value="cancel">Cancel</option></select>

</td>
                                                            <td>'.$tab_requetes['status'].'</td>
                                                            <td>'.$tab_requetes['user_name'].'</td>
                                                            <td>'.$tab_requetes['driver_name'].'</td>
                                                            <td>'.$tab_requetes['from_address'].'</td>
                                                            <td>'.$tab_requetes['to_address'].'</td>


                                                            <td>'.$tab_requetes['booking_date'].'</td>
                                                            <td>'.$tab_requetes['pick_time'].'</td>
                                                            <td>'.$tab_requetes['coll_name'].'</td>
                                                            <td>'.$tab_requetes['coll_phone'].'</td>
                                                            <td>'.$tab_requetes['coll_address'].'</td>
                                                            <td>'.$tab_requetes['coll_city'].'</td>
                                                            <td>'.$tab_requetes['deli_name'].'</td>
                                                            <td>'.$tab_requetes['deli_phone'].'</td>
                                                            <td>'.$tab_requetes['deli_address'].'</td>
                                                            <td>'.$tab_requetes['deli_city'].'</td>
                                                            <td>$'.$tab_requetes['price'].'</td>
                                                        </tr>
                                                    ';

                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> <?php include("footer.php"); ?> </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- This is data table -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>

    $('.ub_ch_sts').on('change', function(){    // 2nd (A)
        var val=$(this).val();
        var id=$(this).data('usrid');
        // alert(id);
        window.location.href="query/ajax/action.php?ub_ch_sts=ub&st="+val+"&id="+id;

    });


    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example24').DataTable();
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script>
    function modAnnee(id_annee){
        $.ajax({
            url: "query/ajax/getAnneeById.php",
            type: "POST",
            data: {"id_annee":id_annee},
            success: function (data) {
                $("#id_annee_mod").empty();
                $("#libelle_annee_mod").empty();

                var data_parse = JSON.parse(data);

                $("#id_annee_mod").val(data_parse[0].id);
                $("#libelle_annee_mod").val(data_parse[0].libelle);
            }
        });
    }
</script>


<!--Custom JavaScript -->
<!-- <script src="js/custom.min.js"></script> -->
<script src="assets/plugins/toast-master/js/jquery.toast.js"></script>
<script src="js/toastr.js"></script>
<!-- Custom Theme JavaScript -->

<?php if(isset($_SESSION['status']) &&  $_SESSION['status'] == 1){ ?>
    <script>
        showSuccess();
    </script>
<?php }else if(isset($_SESSION['status']) &&  $_SESSION['status'] == 2){ ?>
    <script>
        showFailed();
    </script>
<?php }else if(isset($_SESSION['status']) &&  $_SESSION['status'] == 3){ ?>
    <script>
        showWarningIncorrect();
    </script>
<?php } unset($_SESSION['status']); ?>
</body>

</html>
