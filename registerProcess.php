<?php
session_start();
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$name = $_GET['name'];
$dob = $_GET['dob'];
$sdt = $_GET['sdt'];
$mail = $_GET['mail'];
$usn = $_GET['usn'];
$pass = $_GET['pss'];
$add = $_GET['address'];
$q1 = "INSERT INTO userr (userName, userAddress, userPhone, userMail,userDoB) VALUES ('$name','$add','$sdt','$mail','$dob')";
if(mysqli_query($conn,$q1)){
    $q3 = "SELECT id from userr where userName = '$name'";
    $r = mysqli_fetch_array(mysqli_query($conn,$q3));
    $total = $r[0];
    $q2 = "INSERT INTO account (username,passwordd, userID,role) VALUES ('$usn','$pass','$total',1)";
    if(mysqli_query($conn,$q2)){
        $messs = "Đăng ký tài khoản thành công";
        include('register.php');
    }else{
        $err = "Đăng ký tài khoản thất bại";
        include('register.php');
    }
}else{
    $err = "Đăng ký tài khoản thất bại";
    include('register.php');
}
?>