<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4533631142.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="sgn">
        <div class="login-form mt-4">
            <form action="editUserProcess.php">
                <div class="form-group text-center">
                    <h5>Điền thông tin để chỉnh sửa</h5>
                </div>
                <?php
                    $id = $_GET['id'];
                    $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
                    $q1 = "select * from userr where id = $id";
                    $rs = mysqli_query($conn,$q1);
                    while($row = mysqli_fetch_assoc($rs)){
                        ?>
                            <div class="form-group">
                                <label for="name">Tên đầy đủ</label>
                                <input type="text" name="name" id="name" placeholder="<?php echo $row['userName'] ?>" class="form-control" minlength="8">
                            </div>
                            <div class="form-group">
                                <label for="dob">Ngày tháng năm sinh</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" id="address" placeholder="<?php echo $row['userAddress'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sdt">Số điện thoại</label>
                                <input type="text" name="sdt" id="sdt" placeholder="<?php echo $row['userPhone'] ?>" class="form-control" minlength="9">
                            </div>
                            <div class="form-group">
                                <input type="text" name="id" id="id" value="<?php  echo $id ?>" class="hidee">
                            </div>
                            <div class="form-group">
                                <label for="mail">Nhập email</label>
                                <input type="email" name="mail" id="mail" placeholder="<?php echo $row['userMail'] ?>" class="form-control" minlength="8">
                            </div>
                        <?php
                    }
                ?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Lưu</button>
                </div>
                <?php
                    if(isset($err)){
                        ?>
                            <div class="bg-danger p-1 text-white text-center">
                                <p>Sửa thất bại</p>
                            </div>
                        <?php
                    }
                ?>
                <?php
                    if(isset($err)){
                        ?>
                            <div class="form-err bg-danger text-white text-center">
                                <p><?php echo $err ?></p>
                            </div>
                        <?php
                    }
                    if(isset($messs)){
                        ?>
                            <div class="form-err bg-success text-white text-center">
                                <p><?php echo $messs ?></p>
                            </div>
                        <?php
                    }
                ?>
            </form>
        </div>
    </main>
</body>
</html>