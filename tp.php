<?php
$id = $_GET["roomID"];
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$uid = $_GET['userID'];
$time = $_GET['time'];
$price = $_GET['price'];
$s1 = "update room set isUsed='no' where id = $id";
$s2 = "delete from usingRoom where roomID = $id";
$s3 = "insert into tracking(userID, roomID,type,timee,price) values($uid,$id,'out','$time','$price')";
if(mysqli_query($conn,$s1) && mysqli_query($conn,$s2) && mysqli_query($conn,$s3)){
    header('location: sudung.php');
}

?>