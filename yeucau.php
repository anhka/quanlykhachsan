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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4533631142.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Quản lý</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="admin.php">Khách hàng</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="yeucau.php">Yêu cầu đặt phòng</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="p.php">Phòng</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="sudung.php">Phòng đang sử dụng</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="track.php">Lịch sử</a>
            </li>
          </ul>
          <a href="logOut.php"><button class="btn btn-primary">Đăng xuất</button></a>
        </div>
    </nav>
    <main>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center" scope="col">Mã khách hàng</th>
            <th class="text-center" scope="col">Loại phòng</th>
            <th class="text-center" scope="col">Cỡ phòng</th>
            <th class="text-center" scope="col">Khu vực</th>
            <th class="text-center" scope="col">Thời gian</th>
            <th class="text-center" scope="col">Chọn phòng và xác nhận</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
            $q = "select * from orderr";
            $rs = mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($rs)){
              ?>
                <tr>
                  <th class="text-center"><?php echo $row["userID"] ?></th>
                  <td class="text-center"><?php echo $row["roomtype"] ?></td>
                  <td class="text-center"><?php echo $row["roomSize"] ?></td>
                  <td class="text-center"><?php echo $row["location"] ?></td>
                  <td class="text-center"><?php echo $row["timee"] ?></td>
                  <td class="text-center">
                    <form action="accept.php" class="d-flex justify-content-around">
                      <div class="hidee">
                        <input type="text" id="uid" name="uid" value="<?php echo $row["userID"]?>">
                        <input type="text" name="timee" id="timee" value="<?php echo $row["timee"]?>">
                      </div>
                      <div class="form-group">
                        <select name="rid" id="rid" class="form-control">
                          <?php
                            $x = "SELECT * FROM room where isUsed = 'no'";
                            $rss = mysqli_query($conn,$x);
                            while($row = mysqli_fetch_assoc($rss)){
                              ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['id']?></option>
                              <?php
                            }
                          ?>
                        </select>
                      </div>
                    <button class="btn btn-success">Xác nhận</button>
                    </form>
                  </td>
                  
                </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </main>
</body>
</html>