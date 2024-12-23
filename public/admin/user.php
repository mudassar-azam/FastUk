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
                    <h3 class="text-themecolor">User</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Administration tools</li>
                        <li class="breadcrumb-item active">User</li>
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
                                <h4 class="card-title">Users list</h4>
                                <!-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#add-user"><i class="fa fa-plus m-r-10"></i>Add</button>
                                <div id="add-user" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content bg-gris">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Add a user</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form class="form-horizontal " action="query/action.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">ID</label>
                                                                    <?php $tab_user_last[] = array();
                                                                    $tab_user_last = getLastUser();
                                                                    if(count($tab_user_last) == 0){
                                                                        echo '<input type="text" class="form-control" placeholder="" value="1" readOnly name="id_user" required> ';
                                                                    }else{
                                                                        echo '<input type="text" class="form-control" placeholder="" value="'.($tab_user_last[0]['id']+1).'" readOnly name="id_user" required>';
                                                                    } ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <?php
                                                                        $tab_categorie_user[] = array();
                                                                        $tab_categorie_user = getCategorieUser();
                                                                    ?>
                                                                    <label class="mr-sm-2" for="designation">User category</label>
                                                                    <select class="form-control " id="exampleFormControlSelect1" name="categorie_user" required>
                                                                        <?php
                                                                            for($i=0; $i<count($tab_categorie_user); $i++){
                                                                                echo '<option value="'.$tab_categorie_user[$i]['id'].'"'; if($tab_categorie_user[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_categorie_user[$i]['libelle'].'</option>';
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
                                                                    <label class="mr-sm-2" for="designation">Last and first name</label>
                                                                    <input type="text" class="form-control " placeholder="" name="nom_prenom" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Phone</label>
                                                                    <input type="text" class="form-control " placeholder="" name="telephone" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Email</label>
                                                                    <input type="email" class="form-control " placeholder="" name="email" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">¨Password</label>
                                                                    <input type="password" class="form-control " placeholder="" name="mdp" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Confirm password</label>
                                                                    <input type="password" class="form-control " placeholder="" name="mdp_conf" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Status</label>
                                                                    <select class="form-control " id="exampleFormControlSelect1" name="statut" required>
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
                                <div id="user-mod" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content bg-gris">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Edit a user</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form class="form-horizontal " action="query/action.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <input type="hidden" name="id_user_mod" id="id_user_mod" value="<?php echo $id_user; ?>">
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <?php
                                                                        $tab_categorie_user[] = array();
                                                                        $tab_categorie_user = getCategorieUser();
                                                                    ?>
                                                                    <label class="mr-sm-2" for="designation">User category</label>
                                                                    <select class="form-control " id="categorie_user_mod" name="categorie_user_mod" required>
                                                                        <?php
                                                                            for($i=0; $i<count($tab_categorie_user); $i++){
                                                                                echo '<option value="'.$tab_categorie_user[$i]['id'].'"'; if($tab_categorie_user[$i]['id'] != "Administrateur"){echo "selected";} echo '>'.$tab_categorie_user[$i]['libelle'].'</option>';
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
                                                                    <label class="mr-sm-2" for="designation">Last and first name</label>
                                                                    <input type="text" class="form-control " placeholder="" name="nom_prenom_mod" id="nom_prenom_mod" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Phone</label>
                                                                    <input type="text" class="form-control " placeholder="" name="telephone_mod" id="telephone_mod" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Email</label>
                                                                    <input type="email" class="form-control " placeholder="" name="email_mod" id="email_mod" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Mot de passe</label>
                                                                    <input type="password" class="form-control " placeholder="" name="mdp_mod" id="mdp_mod" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Confirmer mot de passe</label>
                                                                    <input type="password" class="form-control " placeholder="" name="mdp_conf_mod" id="mdp_conf_mod" required>
                                                                    <div class="invalid-feedback">
                                                                        Désolé, entrez l'intitulé de la catégorie de devis
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <div class="col-md-6 m-b-0">
                                                                <div class="form-group mb-3">
                                                                    <label class="mr-sm-2" for="designation">Status</label>
                                                                    <select class="form-control " id="statut_mod" name="statut_mod" required>
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
                                        $tab_user[] = array();
                                        $tab_user = getUser();
                                    ?>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Category</th>
                                                <th>Last and first name</th>
                                                <th>Phone</th>
                                                <th>Login</th>
                                                <!-- <th>Mot de passe</th> -->
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Modified</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                for($i=0; $i<count($tab_user); $i++){
                                                    echo'
                                                        <tr>
                                                            <td>'.($i+1).'</td>
                                                            <td>'.$tab_user[$i]['libCatUser'].'</td>
                                                            <td>'.$tab_user[$i]['nom_prenom'].'</td>
                                                            <td>'.$tab_user[$i]['telephone'].'</td>
                                                            <td>'.$tab_user[$i]['email'].'</td>
                                                            <td><span class="'; if($tab_user[$i]['statut'] == "yes"){echo "badge badge-success";}else{echo "badge badge-danger";} echo '">'.$tab_user[$i]['statut'].'</span></td>
                                                            <td>'.$tab_user[$i]['creer'].'</td>
                                                            <td>'.$tab_user[$i]['modifier'].'</td>
                                                            <td>
                                                                <input type="hidden" value="'.$tab_user[$i]['id'].'" name="" id="id_user_'.$i.'">
                                                                <button type="button" onclick="modUser(id_user_'.$i.'.value);" class="btn btn-warning btn-sm" data-original-title="Modified" data-toggle="modal" data-target="#user-mod"><i class="fa fa-pencil"></i></button>
                                                                <a href="query/action.php?id_user='.$tab_user[$i]['id'].'" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash"></i> </a>
                                                                <a href="query/action.php?id_user_activer='.$tab_user[$i]['id'].'" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-check"></i> </a>
                                                                <a href="query/action.php?id_user_desactiver='.$tab_user[$i]['id'].'" class="btn btn-inverse btn-sm" data-toggle="tooltip" data-original-title="Deactivate"> <i class="fa fa-close"></i> </a>
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
    $('#example23').DataTable();
    </script>

    <script>
        function modUser(id_user){
            $.ajax({
                url: "query/ajax/getUserById.php",
                type: "POST",
                data: {"id_user":id_user},
                success: function (data) {
                    $("#id_user_mod").empty();
                    $("#nom_prenom_mod").empty();
                    $("#telephone_mod").empty();
                    $("#email_mod").empty();

                    var data_parse = JSON.parse(data);

                    $("#id_user_mod").val(data_parse[0].id);
                    $("#nom_prenom_mod").val(data_parse[0].nom_prenom);
                    $("#telephone_mod").val(data_parse[0].telephone);
                    $("#email_mod").val(data_parse[0].email);
                    $("#statut_mod").val(data_parse[0].statut).change();
                    $("#categorie_user_mod").val(data_parse[0].id_categorie_user).change();
                }
            });
        }
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


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
