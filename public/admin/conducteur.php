
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
                <h3 class="text-themecolor">Driver</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">User APP</li>
                    <li class="breadcrumb-item active">Driver</li>
                </ol>
            </div>
            <div>
                 <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
                            <h4 class="card-title">List of drivers</h4>
<!--                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>-->
                            <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#add-conducteur"><i class="fa fa-plus m-r-10"></i>Add</button>
                            <div id="add-conducteur" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-gris">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add a driver</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form class="form-horizontal " action="query/action.php" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Last name</label>
                                                                <input type="text" class="form-control " placeholder="" name="nom_conducteur" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">First name</label>
                                                                <input type="text" class="form-control " placeholder="" name="prenom_conducteur" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">National card number</label>
                                                                <input type="text" class="form-control " placeholder="" name="cnib_conducteur" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Phone</label>
                                                                <input type="text" class="form-control " placeholder="" name="login_conducteur" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Password</label>
                                                                <input type="password" class="form-control " placeholder="" name="mdp_conducteur" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Status</label>
                                                                <select class="form-control " id="exampleFormControlSelect1" name="statut_conducteur" required>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Désolé, selectionnez le type de devis
                                                                </div>
                                                            </div>
                                                        </div>
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
                            <div id="conducteur-mod" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-gris">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Edit a driver</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <form class="form-horizontal " action="query/action.php" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <input type="hidden" name="id_conducteur_mod" id="id_conducteur_mod" value="<?php echo $id_user; ?>">
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Last name</label>
                                                                <input type="text" class="form-control " placeholder="" name="nom_conducteur_mod" id="nom_conducteur_mod" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">First name</label>
                                                                <input type="text" class="form-control " placeholder="" name="prenom_conducteur_mod" id="prenom_conducteur_mod" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">National card number</label>
                                                                <input type="text" class="form-control " placeholder="" name="cnib_conducteur_mod" id="cnib_conducteur_mod" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Phone</label>
                                                                <input type="text" class="form-control " placeholder="" name="login_conducteur_mod" id="login_conducteur_mod" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Mot de passe</label>
                                                                <input type="password" class="form-control " placeholder="" name="mdp_conducteur_mod" id="mdp_conducteur_mod" required>
                                                                <div class="invalid-feedback">
                                                                    Désolé, entrez l'intitulé de la catégorie de devis
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-b-0">
                                                            <div class="form-group mb-3">
                                                                <label class="mr-sm-2" for="designation">Status</label>
                                                                <select class="form-control " id="statut_conducteur_mod" name="statut_conducteur_mod" required>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Désolé, selectionnez le type de devis
                                                                </div>
                                                            </div>
                                                        </div>
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
                                $tab_conducteur[] = array();
                                $tab_conducteur = getConducteur();
                                ?>
                                <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>

                                        <th width="5%">N°</th>
                                        <th width="10%">Actions</th>
                                        <th width="10%">Photo</th>
                                        <th width="20%">Last name</th>
                                        <th width="20%">First name</th>
                                        <th width="10%">Phone</th>
                                        <th width="10%">National card number</th>
                                        <th width="5%">Status</th>
                                        <th width="5%">Created</th>
                                        <th width="5%">Modify</th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for($i=0; $i<count($tab_conducteur); $i++){
                                        echo'
                                                        <tr>
                                                            <td>'.($i+1).'</td>
                                                               <td>  <input type="hidden" value="'.$tab_conducteur[$i]['id'].'" name="" id="id_conducteur_'.$i.'">
                                    <button type="button" onclick="modConducteur(id_conducteur_'.$i.'.value);" class="btn btn-warning btn-sm" data-original-title="Modify" data-toggle="modal" data-target="#conducteur-mod"><i class="fa fa-pencil"></i></button>
                                    <a href="query/action.php?id_conducteur='.$tab_conducteur[$i]['id'].'" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>
                                    <a href="query/action.php?id_conducteur_desactiver='.$tab_conducteur[$i]['id'].'" class="btn btn-inverse btn-sm" data-toggle="tooltip" data-original-title="Deactivate"> <i class="fa fa-close"></i> </a>
                                  </td>
                                                            <td>
                                                                <div class="user-profile" style="width:100%;">
                                                                    <div class="profile-img" style="width:100%;">';
                                        if($tab_conducteur[$i]['photo_path'] == ""){
                                            echo '<img src="assets/images/users/flag.png" alt="" width="100%" style="width:70px;height:70px;">';
                                        }else{
                                            echo '<img src="assets/images/users/flag.png" alt="" width="100%" style="width:70px;height:70px;">';
                                        }

                                        echo '</div>
                                                                </div>

                                                            </td>
                                                            <td>'.$tab_conducteur[$i]['nom'].'</td>
                                                            <td>'.$tab_conducteur[$i]['prenom'].'</td>
                                                            <td>'.$tab_conducteur[$i]['phone'].'</td>
                                                            <td>'.$tab_conducteur[$i]['cnib'].'</td>
                                                            <td><span class="'; if($tab_conducteur[$i]['statut'] == "yes"){echo "badge badge-success";}else{echo "badge badge-danger";} echo '">'.$tab_conducteur[$i]['statut'].'</span></td>
                                                            <td>'.$tab_conducteur[$i]['creer'].'</td>
                                                            <td>'.$tab_conducteur[$i]['modifier'].'</td>
                                                            <td>
                                                                <a href="query/action.php?id_conducteur_activer='.$tab_conducteur[$i]['id'].'" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-check"></i> </a>
                                                                <a href="conducteur-detail.php?id_conducteur='.$tab_conducteur[$i]['id'].'" class="btn btn-inverse btn-sm" data-toggle="tooltip" data-original-title="View détails"> <i class="fa fa-ellipsis-h"></i> </a>
                                                            </td>

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
    function modConducteur(id_conducteur){
        $.ajax({
            url: "query/ajax/getConducteurById.php",
            type: "POST",
            data: {"id_conducteur":id_conducteur},
            success: function (data) {
                $("#id_conducteur_mod").empty();
                $("#nom_conducteur_mod").empty();
                $("#prenom_conducteur_mod").empty();
                $("#cnib_conducteur_mod").empty();
                $("#login_conducteur_mod").empty();

                var data_parse = JSON.parse(data);

                $("#id_conducteur_mod").val(data_parse[0].id);
                $("#nom_conducteur_mod").val(data_parse[0].nom);
                $("#prenom_conducteur_mod").val(data_parse[0].prenom);
                $("#cnib_conducteur_mod").val(data_parse[0].cnib);
                $("#login_conducteur_mod").val(data_parse[0].phone);
                $("#statut_conducteur_mod").val(data_parse[0].statut).change();
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
