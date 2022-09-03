<?php
include 'lib.php';
session_start();
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result=login($email,$password);
    if(!empty($result)){
        $_SESSION['user']=$result;
    }
    else {
        echo "problem in login";
    }
}
if(!empty($_SESSION['user'])){
    header ("LOCATION: register.php");
}
include 'design/login.html';
