<?php

// print_r($_REQUEST);
// die;

$action=$_REQUEST['action'];

if(!empty($action)){
    require_once './partials/user.php';
    $obj= new User();
}

?>