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
            <form class="d-flex mr-2" action="">
              <input type="text" name="search" id="search" placeholder="Nhập id khách hàng" class="form-control">
              <button type="submit" class="btn ml-2">
                <i class="fas fa-search"></i>
              </button>
            </form>
          <a href="logOut.php"><button class="btn btn-primary">Đăng xuất</button></a>
        </div>
    </nav>
    <main>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center" scope="col">Mã khách hàng</th>
            <th class="text-center" scope="col">Họ và tên</th>
            <th class="text-center" scope="col">Địa chỉ</th>
            <th class="text-center" scope="col">SDT</th>
            <th class="text-center" scope="col">Mail</th>
            <th class="text-center" scope="col">DoB</th>
            <th class="text-center" scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET['search'])){
                  $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
                  $search = $_GET['search'];
                $query =  "SELECT * FROM userr where id = $search";
                $rs = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($rs)){
                  ?>
                  <tr>
                    <th class="text-center"><?php echo $row['id'] ?></th>
                    <td class="text-center"><?php echo $row['userName'] ?></td>
                    <td class="text-center"><?php echo $row['userAddress'] ?></td>
                    <td class="text-center"><?php echo $row['userPhone'] ?></td>
                    <td class="text-center"><?php echo $row['userMail'] ?></td>
                    <td class="text-center"><?php echo $row['userDoB'] ?></td>
                    <td class="d-flex justify-content-around"><a href="editUser.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit pr-2"></i></a><a href="userdelete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <?php
                }
                }else{
                  $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
                $query =  "SELECT * FROM userr";
                $rs = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($rs)){
                  ?>
                  <tr>
                    <th class="text-center"><?php echo $row['id'] ?></th>
                    <td class="text-center"><?php echo $row['userName'] ?></td>
                    <td class="text-center"><?php echo $row['userAddress'] ?></td>
                    <td class="text-center"><?php echo $row['userPhone'] ?></td>
                    <td class="text-center"><?php echo $row['userMail'] ?></td>
                    <td class="text-center"><?php echo $row['userDoB'] ?></td>
                    <td class="d-flex justify-content-around"><a href="editUser.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit pr-2"></i></a><a href="userdelete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
                  <?php
                }
                }
            ?>
        </tbody>
      </table>
      <div class="user">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Thêm khách hàng</a>
      </div>
    </main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
        <p  class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times bg-transparent"></i></p>
      </div>
      <div class="modal-body">
      <form action="registerProcess.php">
                <div class="form-group text-center">
                    <h5>Điền thông tin đăng ký</h5>
                </div>
                <div class="form-group">
                    <label for="name">Tên đầy đủ</label>
                    <input type="text" name="name" id="name" placeholder="Nhập họ và tên" class="form-control" minlength="8">
                </div>
                <div class="form-group">
                    <label for="dob">Ngày tháng năm sinh</label>
                    <input type="date" name="dob" id="dob" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="address" placeholder="Nhập địa chỉ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sdt">Số điện thoại</label>
                    <input type="text" name="sdt" id="sdt" placeholder="Nhập số điện thoại" class="form-control" minlength="9">
                </div>
                <div class="form-group">
                    <label for="mail">Nhập email</label>
                    <input type="email" name="mail" id="mail" placeholder="Nhập địa chỉ email" class="form-control" minlength="8">
                </div>
                <div class="form-group">
                    <label for="usn">Tên đăng nhập</label>
                    <input type="text" name="usn" id="usn" placeholder="Nhập tên đăng nhập" class="form-control" minlength="6">
                </div>
                <div class="form-group">
                    <label for="pss">Mât khẩu</label>
                    <input type="text" name="pss" id="pss" placeholder="Nhập mật khẩu" class="form-control" minlength="8">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">Thêm</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>