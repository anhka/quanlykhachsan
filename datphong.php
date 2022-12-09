<?php
session_start();
if(isset($_SESSION['user'])){
    $type = $_GET['type'];
    $size = $_GET['size'];
    $userID = $_GET['user'];
    $loc = $_GET['loc'];
    $time = $_GET['time'];
    $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
    $q = "INSERT INTO orderr (userID,roomtype,roomSize,location,timee) VALUES ($userID,'$type','$size','$loc','$time')";
    if(mysqli_query($conn,$q)){
        $mess = "a";
        include('phong.php');
    }else{
        $err = 'i';
        include('phong.php');
    }
}else{
    $err = "Bạn cần đăng nhập trước";
    include('login.php');
}

?>