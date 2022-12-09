<?php
session_start();
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$name = $_GET['name'];
$dob = $_GET['dob'];
$sdt = $_GET['sdt'];
$mail = $_GET['mail'];
$id = $_GET['id'];
$add = $_GET['address'];
//$q1 = "INSERT INTO userr (userName, userAddress, userPhone, userMail,userDoB) VALUES ('$name','$add','$sdt','$mail','$dob')";
$q1 = "UPDATE userr set userName= '$name', userAddress = '$add', userMail='$mail',userDoB = '$dob' where id = $id";
if(mysqli_query($conn,$q1)){
    header('location: admin.php');
}else{
    $err = "Đăng ký tài khoản thất bại";
    include('editUser.php');
}
?>