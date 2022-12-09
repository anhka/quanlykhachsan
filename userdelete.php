<?php
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
    $query = "DELETE FROM userr WHERE id = $id";
    mysqli_query($conn,$query);
    header(('location: admin.php'));
?>