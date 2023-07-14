<?php

// print_r($_REQUEST);
// die;

$action=$_REQUEST['action'];

if(!empty($action)){
    require_once './partials/user.php';
    $obj= new User();
}
// adding user action
if($action=='addUser' && !empty($_POST)){
    $paName = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $photo = $_POST['photo'];

    $playerId = (!empty($_POST['userId']))? $_POST['userId']: "";
    
}

?>