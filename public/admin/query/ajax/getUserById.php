<?php
	include('../fonction.php');
    function getUserById1($id_user){
        $output[] = array();
        $output = getUserById($id_user);
        echo json_encode($output);
    }
    if(isset($_POST['id_user'])){
        getUserById1($_POST['id_user']);
    }
    function get_UserById1_md($id_user){
        $output[] = array();
        $output = get_UserById1($id_user);
        echo json_encode($output);
    }
    if(isset($_POST['id_user_md'])){
        get_UserById1_md($_POST['id_user_md']);
    }
?>
