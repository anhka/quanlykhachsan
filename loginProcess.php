<?php
session_start();
$conn = mysqli_connect("localhost","root","","quanLyKhachSan");
$usn = $_GET["usn"];
$pass = $_GET["pass"];
$sql = "SELECT * FROM account where username='{$usn}' AND passwordd='{$pass}'";
$rs = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($rs)){
    if(mysqli_num_rows($rs)){
        if($row['role'] == 0){
            header('location: admin.php');
            $_SESSION['user'] = $row['id'];
        }else{
            header('location: index.php');
            $_SESSION['user'] = $row['id'];
        }
    }
}
$err = "Tài khoản hoặc mật khẩu không chính xác";
include('login.php');


?>