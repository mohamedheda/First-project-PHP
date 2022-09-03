<?php
session_start();
include 'lib.php';
if(empty($_SESSION['user'])){
    header("LOCATION:login.php");
}
$userid=$_SESSION['user']['id'];
if($userid==$_GET['id']){
    echo "invalid permission";
}else {
    $delete=deleteUser($_GET['id']);
    if($delete==1){
        header("LOCATION:index.php");
    }
}