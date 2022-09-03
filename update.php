<?php
require "lib.php";
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
//img
$img=$_FILES['img'];
echo "<pre>";
print_r($img);
if($img['name']!=""){
    $tmp=$_FILES['img']['tmp_name'];
$imgName=$username;
$imgtype=$_FILES['img']['type'];
$nameArr=explode("/",$imgtype);
$ext=$nameArr[1];
$imgLastName=$imgName.".".$ext;
move_uploaded_file($tmp,"design/img/".$imgLastName );
$done=updateData($username,$email,$password,$id,$imgLastName);
}else {
    $done=updateData($username,$email,$password,$id);
}
if($done==1){
    header("LOCATION:index.php");
}




}else{
    $userid=$_GET['id'];
$resultData=getDataByID($userid);
}


// print_r($resultData);
require "design/update.php";
