<?php
include 'lib.php';
session_start();
if(!empty($_SESSION['user'])){
        header("LOCATION:index.php");
}
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    //img
    $img=$_FILES['img'];
    $tmp=$_FILES['img']['tmp_name'];
    $type=$_FILES['img']['type'];
    $arr=explode('/',$type);
    $ext=$arr[1];
    $img_ext=$username.".".$ext;
    // echo $ext;
    // echo $type;
    move_uploaded_file($tmp,"design/img/".$img_ext);

    $re=register($username,$password,$email,$img_ext);
    if($re==1){
        echo "user added succesfully";
    }else {
        echo "user not added ";
    }
}


include 'design/register.html';