<?php
$type = $_GET['type'];
$size = $_GET["size"];
$loc = $_GET['loc'];
$price = $_GET['price'];
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$q = "INSERT INTO room (type,size,location,isUsed,price) values ('$type','$size','$loc','no','$price')";
mysqli_query($conn,$q);
header('location: p.php');


?>