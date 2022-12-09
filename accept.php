<?php
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$uid = $_GET["uid"];
$rid = $_GET["rid"];
$time = $_GET["timee"];
$qr = "INSERT INTO usingRoom (roomID, userID) VALUES ($rid,$uid)";
$r = "Update room set isUsed = 'yes' where id = $rid";
$t = "delete from orderr where userID = $uid";
$cx = "insert into tracking(userID, roomID,type,timee,price) values ($uid,$rid,'in','$time','0')";
if(mysqli_query($conn,$qr) && mysqli_query($conn,$r) && mysqli_query($conn,$t) && mysqli_query($conn,$cx)){
    header('location: yeucau.php');
}

?>