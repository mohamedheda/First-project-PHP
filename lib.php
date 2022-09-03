<?php
function register ($user,$pass,$email,$img){
        $con=mysqli_connect("localhost","mohamed","123","user");
        $query=mysqli_query($con,"INSERT INTO `user`(`name`, `email`, `password`,`img`) VALUES('$user','$email','$pass','$img')");
        $done=mysqli_affected_rows($con);
        if($done==true) return 1; else return 0;
}
function login($email,$pass){
    $con=mysqli_connect("localhost","mohamed","123","user");
        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'");
        $res=mysqli_fetch_assoc($query);
        return $res;
}
function getData(){
        $con=mysqli_connect("localhost","mohamed","123","user");
        $query=mysqli_query($con,"SELECT `id`,`name`,`email`,`img` FROM `user`");
        while($result=mysqli_fetch_assoc($query)){
                $data[]=$result;
        }
        return $data;
}

function userRole(){
        return $_SESSION['user']['user_role'];
}
function deleteUser ($id){
        $con=mysqli_connect("localhost","mohamed","123","user");
        $query=mysqli_query($con,"DELETE FROM `user` where `id`=$id");
        $done=mysqli_affected_rows($con);
        if($done==true) return 1; else return 0;
}

function getDataByID($id){
        $con=mysqli_connect("localhost","mohamed","123","user");
        $query=mysqli_query($con,"SELECT `id`,`name`,`email`,`img` FROM `user` WHERE `id`=$id");
        $data=mysqli_fetch_assoc($query);
        return $data;
}
function updateData($username,$email,$password,$id,$img=""){
        $con=mysqli_connect("localhost","mohamed","123","user");
        $sql="UPDATE `user` SET `name`='$username'";
        if(isset($email)){
                $sql.=",`email`='$email'";
        }
         if(isset($password)){
                $sql.=",`password`='$password'";
        }
         if($img!=""){
                $sql.=",`img`='$img'";
        }
        $sql.=" WHERE `id`='$id'";
        $query=mysqli_query($con,$sql);


        
        if(mysqli_affected_rows($con)){
                return 1;
        }
        else return 0;
}