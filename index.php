<?php
session_start();
include 'lib.php';
// include 'delete.php';
$data=getData();
$user_role=userRole();
require "design/index.php";
if(empty($_SESSION['user'])){
    header("LOCATION:login.php");
}