<?php
$type = $_GET['type'];
$size = $_GET["size"];
$loc = $_GET['loc'];
$id = (int)$_GET['id'];
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$q = "update room set type='$type',size='$size',location='$loc' where id = $id";
mysqli_query($conn,$q);
header('location: p.php');
?>