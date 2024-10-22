
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
                <h3 class="text-themecolor">Vehicle</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    <li class="breadcrumb-item active">Vehicles</li>
                </ol>
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
                            <h4 class="card-title">List of vehicles</h4>
                            <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#add-vehicule"><i class="fa fa-plus m-r-10"></i>Add</button>
                            <div id="add-vehicule" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-gris">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add a vehicle</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form class="form-horizontal " action="query/ajax/addvehicle.php" method="post" enctype="multipart/form-data" id="vehicleadd" autocomplete="off">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <?php
                                                                $tab_vehicule[] = array();
                                                                $tab_vehicule = getTypeVehiculeRental();
                                                                ?>
                                                                <label class="mr-sm-2" for="designation">Type of vehicle</label>
                                                                <select class="form-control " id="type_vehicule" name="type_vehicule" required>
                                                                    <?php
                                                                    for($i=0; $i<count($tab_vehicule); $i++){
                                                                        echo '<option value="'.$tab_vehicule[$i]['id'].'"'; if($tab_vehicule[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_vehicule[$i]['libelle'].'</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Number Plate</label>-->
                                                                <input type="hidden" class="form-control " placeholder="" value="nill" name="nmbr_plate" id="nmbr_plate" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Carry Weight</label>
                                                                <input type="text" class="form-control " placeholder="" name="weight" id="weight" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Width</label>-->
                                                                <input type="hidden" class="form-control " value="nill" placeholder="" name="width" id="width" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Height</label>-->
                                                                <input type="hidden" class="form-control" value="nill" placeholder="" name="height" id="height" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Model</label>-->
                                                                <input type="hidden" class="form-control " placeholder="" value="nill" name="model" id="model" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Vehicle Size</label>
                                                                <input type="text" class="form-control " placeholder="" name="brand" id="brand" required>
                                                                <span class="invalid-feedback">

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Color</label>
                                                                <input type="text" class="form-control " placeholder="" name="color" id="color" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Status</label>
                                                                <select class="form-control " id="status" name="status" required>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Image</label>
                                                                <input type="file" class="form-control " placeholder="" name="image_vehicule_rental" id="image_vehicule_rental" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" class="btn btn-secondary"/ >
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div id="vehicule-mod" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-gris">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Modify a vehicle</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form class="form-horizontal " action="query/ajax/addvehicle.php" method="post" enctype="multipart/form-data" id="vehicaledit" autocomplete="off">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <?php
                                                                $tab_vehicule[] = array();
                                                                $tab_vehicule = getTypeVehiculeRental();
                                                                ?>
                                                                <label class="mr-sm-2" for="designation">Type of vehicle</label>
                                                                <select class="form-control " id="type_vehicule_md" name="type_vehicule_md" required>
                                                                    <?php
                                                                    for($i=0; $i<count($tab_vehicule); $i++){
                                                                        echo '<option value="'.$tab_vehicule[$i]['id'].'"'; if($tab_vehicule[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_vehicule[$i]['libelle'].'</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id_vehicule_md" id="id_vehicule_md" />
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Number Plate</label>-->
                                                                <input type="hidden" class="form-control " placeholder="" value="nill" name="nmbr_plate_md" id="nmbr_plate_md" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Carry Weight</label>
                                                                <input type="text" class="form-control " placeholder="" name="weight_md" id="weight_md" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Width</label>-->
                                                                <input type="hidden" class="form-control " value="nill" placeholder="" name="width_md" id="width_md" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Height</label>-->
                                                                <input type="hidden" class="form-control" value="nill" placeholder="" name="height_md" id="height_md" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <!--<div class="col-md-6 m-b-0">-->
                                                        <!--    <div class="form-group mb-3">-->
                                                        <!--        <label class="mr-sm-2" for="designation">Model</label>-->
                                                                <input type="hidden" value="nill" class="form-control " placeholder="" name="model_md" id="model_md" >
                                                        <!--        <div class="invalid-feedback">-->

                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Vehicle Size</label>
                                                                <input type="text" class="form-control " placeholder="" name="brand_md" id="brand_md" required>
                                                                <span class="invalid-feedback">

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Color</label>
                                                                <input type="text" class="form-control " placeholder="" name="color_md" id="color_md" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="price">Price</label>
                                                                <input type="text" class="form-control " placeholder="Price" name="price" id="price" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Status</label>
                                                                <select class="form-control " id="status_md" name="status_md" required>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Image</label>
                                                                <input type="file" class="form-control " placeholder="" name="image_vehicule_rental" id="image_vehicule_rental" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update" class="btn btn-secondary"/ >
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="table-responsive m-t-10">
                                <?php
                                $tab_vehicule[] = array();
                                $tab_vehicule = get_All_Vehicle();
                                ?>
                                <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Actions</th>
                                        <th>Status</th>
                                        <th>Price(per mile)</th>
                                        <!--<th>Number Plate</th>-->
                                        <th>Carry Weight</th>
                                        <!--<th>Model</th>-->
                                        <th>Vehicle Size</th>
                                        <th>Color</th>
<!--                                        <th>Type of vehicle</th>-->
                                        <th>Created</th>
                                        <th>Modified</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for($i=0; $i<count($tab_vehicule); $i++){
                                        echo'
                                                        <tr>
                                                            <td>'.($i+1).'</td>
                                                            <td>
                                                                <input type="hidden" value="'.$tab_vehicule[$i]['id'].'" name="" id="id_vehicule_'.$i.'">
                                                                <button type="button" onclick="modVehicule(id_vehicule_'.$i.'.value);" class="btn btn-warning btn-sm" data-original-title="Modify" data-toggle="modal" data-target="#vehicule-mod"><i class="fa fa-pencil"></i></button>
                                                                <a href="query/action.php?id_vehicule_active='.$tab_vehicule[$i]['id'].'" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-check"></i> </a>
                                                                <a href="query/action.php?id_vehicule_deact='.$tab_vehicule[$i]['id'].'" class="btn btn-inverse btn-sm" data-toggle="tooltip" data-original-title="Deactivate"> <i class="fa fa-close"></i> </a>
                                                                <a href="query/action.php?id_vehicule_delete='.$tab_vehicule[$i]['id'].'" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>
                                                            </td>

                                                            <td><span class="'; if($tab_vehicule[$i]['statut'] == "yes"){echo "badge badge-success";}else{echo "badge badge-danger";} echo '">'.$tab_vehicule[$i]['statut'].'</span></td>


                                                           <td>'.$tab_vehicule[$i]['price'].'</td>
                                                   
                                                           <td>'.$tab_vehicule[$i]['wieght'].'</td>
                                                    
                                                           <td>'.$tab_vehicule[$i]['brand'].'</td>
                                                           <td>'.$tab_vehicule[$i]['color'].'</td>


                                                            <td>'.$tab_vehicule[$i]['creer'].'</td>
                                                            <td>'.$tab_vehicule[$i]['modifier'].'</td>

                                                        </tr>
                                                    ';
                                    }
                                    ?>
                                          <!--<td>'.$tab_vehicule[$i]['numberplate'].'</td>-->
                                    <!-- <a href="query/action.php?id_vehicule_rental='.$tab_vehicule[$i]['id'].'" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash"></i> </a> -->
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
            <!-- .right-sidebar -->

            <!-- ============================================================== -->
            <!-- End Right sidebar -->
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


<script>
    // JavaScript Validation For Registration Page
    $('document').ready(function()
    {


        $("#vehicleadd").validate
        ({
            rules:
                {


                    brand:
                        {
                            required: true,

                        },
                    color:
                        {
                            required: true,

                        },

                    model:
                        {
                            required: true,

                        },
                    status:
                        {
                            required: true,

                        },


                },
            messages:
                {

                    brand:
                        {
                            required: "Please Enter",

                        },
                    s_cnic:
                        {
                            required: "Please Enter",

                        },

                    brand:
                        {
                            required: "Please Enter Phone No",
                            // validphoneno: "Phone No only integers",
                        },
                    s_address:
                        {
                            required: "Please Enter Address",

                        },

                },
            errorPlacement : function(error, element)
            {
                $(element).closest('.col-md-6').find('.invalid-feedback').html(error.html());
            },
            highlight : function(element)
            {


                $(element).closest('.col-md-6').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function(element, errorClass, validClass)
            {
                $(element).closest('.col-md-6').removeClass('has-error').addClass('has-success');
                $(element).closest('.col-md-6').find('.invalid-feedback').html('');
            },
            submitHandler: function(form)
            {
                form.submit();

            }
        });
    })
</script>









<!-- This is data table -->
<script src="js/jquery.validate.min.js"></script>
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



    function modVehicule(id_vehicule){
        $.ajax({
            url: "query/ajax/getVehiculeById.php",
            type: "POST",
            data: {"id_vehicule":id_vehicule},
            success: function (data) {
                $("#id_vehicule_md").empty();
                $("#nmbr_plate_md").empty();
                $("#weight_md").empty();
                $("#model_md").empty();
                $("#brand_md").empty();

                var data_parse = JSON.parse(data);

                $("#id_vehicule_md").val(data_parse[0].id);
                $("#nmbr_plate_md").val(data_parse[0].numberplate);
                $("#weight_md").val(data_parse[0].wieght).change();
                $("#model_md").val(data_parse[0].model);
                $("#brand_md").val(data_parse[0].brand);
                $("#color_md").val(data_parse[0].color);
                $("#height_md").val(data_parse[0].height);
                $("#price").val(data_parse[0].price);
                $("#width_md").val(data_parse[0].width);
                $("#type_vehicule_md").val(data_parse[0].id_type_vehicule).val();
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
