<?php
session_start();
include('../connexion.php');


if(isset($_POST['update_user'])){


    $id=$_POST['id_user_md'];
    $username_md=$_POST['username_md'];
    $phone_md=$_POST['phone_md'];
    $address_md=$_POST['address_md'];
    $balance_md=$_POST['balance_md'];
    $credit_limit=$_POST['credit_limit'];
    $status=$_POST['status_md'];
    $date=date("Y-m-d h:i:s");

    $run=mysqli_query($con,"UPDATE users SET
        name='".$username_md."',phone='".$phone_md."',address='".$address_md."',status='".$status."',credit_limit='".$credit_limit."',balance='".$balance_md."',updated_at='".$date."'
        where id='".$id."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}
if(isset($_GET['id_single_delete'])){

    $run=mysqli_query($con,"DELETE from users where id='".$_GET['id_single_delete']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(isset($_GET['id_guest_delete'])){

    $run=mysqli_query($con,"DELETE from guests where id='".$_GET['id_guest_delete']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(isset($_GET['gb_ch_sts']) && isset($_GET['st']) & $_GET['gb_ch_sts']=='gb'){

    $run=mysqli_query($con,"UPDATE guest_bookings SET status='".$_GET['st']."' where id='".$_GET['id']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(isset($_GET['id_single_gb_delete'])){

    $run=mysqli_query($con,"DELETE from guest_bookings where id='".$_GET['id_single_gb_delete']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(isset($_GET['ub_ch_sts']) && isset($_GET['st']) && $_GET['ub_ch_sts']=='ub'){

    $run=mysqli_query($con,"UPDATE user_bookings SET status='".$_GET['st']."' where id='".$_GET['id']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
if(isset($_GET['id_single_ub_delete'])){

    $run=mysqli_query($con,"DELETE from user_bookings where id='".$_GET['id_single_ub_delete']."' ");
    if ($run){
        $_SESSION['status']=1;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}


?>
