
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
                        <li class="breadcrumb-item">Coordination</li>
                        <li class="breadcrumb-item active">Vehicle</li>
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
                                            <form class="form-horizontal " action="query/action.php" method="post" enctype="multipart/form-data">
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
                                                                    <select class="form-control " id="exampleFormControlSelect1" name="type_vehicule_rental" required>
                                                                        <?php
                                                                            for($i=0; $i<count($tab_vehicule); $i++){
                                                                                echo '<option value="'.$tab_vehicule[$i]['id'].'"'; if($tab_vehicule[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_vehicule[$i]['libelle'].'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, selectionnez le type de devis
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Rental price</label>
                                                                    <input type="number" class="form-control " placeholder="" name="prix_vehicule_rental" id="prix_vehicule_rental" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Number of places</label>
                                                                    <input type="number" class="form-control " placeholder="" name="nb_place_vehicule_rental" id="nb_place_vehicule_rental" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Status</label>
                                                                    <select class="form-control " id="exampleFormControlSelect1" name="statut_vehicule_rental" required>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, selectionnez le type de devis
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Number of vehicle</label>
                                                                    <input type="number" class="form-control " placeholder="" name="nombre_vehicule_rental" id="nombre_vehicule_rental" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
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
                                                    <button type="submit" class="btn btn-dark waves-effect">Save</button>
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
                                            <form class="form-horizontal " action="query/action.php" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <input type="hidden" name="id_vehicule_rental_mod" id="id_vehicule_rental_mod" value="<?php echo $id_user; ?>">
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <?php 
                                                                        $tab_vehicule[] = array();
                                                                        $tab_vehicule = getTypeVehiculeRental();
                                                                    ?>
                                                                    <label class="mr-sm-2" for="designation">Type of vehicle</label>
                                                                    <select class="form-control " id="type_vehicule_rental_mod" name="type_vehicule_rental_mod" required>
                                                                        <?php
                                                                            for($i=0; $i<count($tab_vehicule); $i++){
                                                                                echo '<option value="'.$tab_vehicule[$i]['id'].'"'; if($tab_vehicule[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_vehicule[$i]['libelle'].'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, selectionnez le type de devis
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Rental price</label>
                                                                    <input type="number" class="form-control " placeholder="" name="prix_vehicule_rental_mod" id="prix_vehicule_rental_mod" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Number of places</label>
                                                                    <input type="number" class="form-control " placeholder="" name="nb_place_vehicule_rental_mod" id="nb_place_vehicule_rental_mod" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Status</label>
                                                                    <select class="form-control " id="statut_vehicule_rental_mod" name="statut_vehicule_rental_mod" required>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, selectionnez le type de devis
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Number of vehicles</label>
                                                                    <input type="number" class="form-control " placeholder="" name="nombre_vehicule_rental_mod" id="nombre_vehicule_rental_mod" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Image</label>
                                                                    <input type="file" class="form-control " placeholder="" name="image_vehicule_rental_mod" id="image_vehicule_rental_mod" required> 
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-dark waves-effect">Save</button>
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
                                        $tab_vehicule = getVehiculeRental();
                                    ?>
                                    <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Image</th>
                                                <th>Type of vehicle</th>
                                                <th>Number of vehicle</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Modified</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for($i=0; $i<count($tab_vehicule); $i++){
                                                    echo'
                                                        <tr>
                                                            <td>'.($i+1).'</td>
                                                            <td><img src="assets/images/type_vehicle_rental/'.$tab_vehicule[$i]['image'].'"width="100%"/></td>
                                                            <td>'.$tab_vehicule[$i]['libTypeVehicule'].'</td>
                                                            <td>'.$tab_vehicule[$i]['nombre'].'</td>
                                                            <td><span class="'; if($tab_vehicule[$i]['statut'] == "yes"){echo "badge badge-success";}else{echo "badge badge-danger";} echo '">'.$tab_vehicule[$i]['statut'].'</span></td>
                                                            <td>'.$tab_vehicule[$i]['creer'].'</td>
                                                            <td>'.$tab_vehicule[$i]['modifier'].'</td>
                                                            <td>
                                                                <input type="hidden" value="'.$tab_vehicule[$i]['id'].'" name="" id="id_vehicule_'.$i.'">
                                                                <button type="button" onclick="modVehicule(id_vehicule_'.$i.'.value);" class="btn btn-warning btn-sm" data-original-title="Modify" data-toggle="modal" data-target="#vehicule-mod"><i class="fa fa-pencil"></i></button>
                                                                <a href="query/action.php?id_vehicule_rental_activer='.$tab_vehicule[$i]['id'].'" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-check"></i> </a>
                                                                <a href="query/action.php?id_vehicule_rental_desactiver='.$tab_vehicule[$i]['id'].'" class="btn btn-inverse btn-sm" data-toggle="tooltip" data-original-title="Deactivate"> <i class="fa fa-close"></i> </a>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
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
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                url: "query/ajax/getVehiculeRentalById.php",
                type: "POST",
                data: {"id_vehicule":id_vehicule},
                success: function (data) {
                    $("#id_vehicule_rental_mod").empty();
                    $("#prix_vehicule_rental_mod").empty();
                    $("#nb_place_vehicule_rental_mod").empty();
                    $("#nombre_vehicule_rental_mod").empty();

                    var data_parse = JSON.parse(data);

                    $("#id_vehicule_rental_mod").val(data_parse[0].id);
                    $("#statut_vehicule_rental_mod").val(data_parse[0].statut).change();
                    $("#prix_vehicule_rental_mod").val(data_parse[0].prix);
                    $("#nb_place_vehicule_rental_mod").val(data_parse[0].nb_place);
                    $("#nombre_vehicule_rental_mod").val(data_parse[0].nombre);
                    $("#type_vehicule_rental_mod").val(data_parse[0].id_type_vehicule_rental).change();
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
