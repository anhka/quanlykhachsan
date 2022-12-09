<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$q = "DELETE FROM room WHERE id = $id";
mysqli_query($conn,$q);
header('location: p.php');
?>