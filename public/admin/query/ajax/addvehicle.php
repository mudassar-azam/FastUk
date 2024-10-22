<?php
session_start();
include('../connexion.php');

if(isset($_POST['submit'])){

    $type_vehicule=$_POST['type_vehicule'];
    $nmbr_plate=$_POST['nmbr_plate'];
    $weight=$_POST['weight'];
    $model=$_POST['model'];
    $brand=$_POST['brand'];
    $color=$_POST['color'];
    $status=$_POST['status'];
    $height=$_POST['height'];
    $width=$_POST['width'];
    $price='7';
    $date=date("Y-m-d h:i:s");

    $run=mysqli_query($con,"INSERT into tj_vehicule SET
        brand='".$brand."',model='".$model."',color='".$color."',numberplate='".$nmbr_plate."',wieght='".$weight."',
        height='".$height."',width='".$width."',statut='".$status."',price='".$price."',creer='".$date."',modifier='".$date."',id_type_vehicule='".$type_vehicule."'
");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}

if(isset($_POST['update'])){


    $type_vehicule=$_POST['type_vehicule_md'];
    $id=$_POST['id_vehicule_md'];
    $nmbr_plate=$_POST['nmbr_plate_md'];
    $weight=$_POST['weight_md'];
    $model=$_POST['model_md'];
    $brand=$_POST['brand_md'];
    $color=$_POST['color_md'];
    $status=$_POST['status_md'];
    $height=$_POST['height_md'];
    $width=$_POST['width_md'];
    $date=date("Y-m-d h:i:s");
    $price=$_POST['price'];
    $run=mysqli_query($con,"UPDATE tj_vehicule SET
        brand='".$brand."',model='".$model."',color='".$color."',numberplate='".$nmbr_plate."',wieght='".$weight."',
        height='".$height."',width='".$width."',price='".$price."',statut='".$status."',modifier='".$date."',id_type_vehicule='".$type_vehicule."'
        where id='".$id."'");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}


?>
