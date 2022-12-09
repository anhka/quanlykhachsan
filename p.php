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
              <input type="text" name="search" id="search" placeholder="Nhập id phòng" class="form-control">
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
            <th class="text-center" scope="col">Mã phòng</th>
            <th class="text-center" scope="col">Loại phòng</th>
            <th class="text-center" scope="col">Cỡ phòng</th>
            <th class="text-center" scope="col">Địa điểm</th>
            <th class="text-center" scope="col">Giá</th>
            <th class="text-center" scope="col">Tình trạng</th>
            <th class="text-center" scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(isset($_GET['search'])){
            $search = $_GET["search"];
            $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
            $q = "select * from room where id = $search";
            $rs = mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($rs)){
              ?>
                <tr>
                  <th class="text-center"><?php echo $row["id"] ?></th>
                  <td class="text-center"><?php echo $row["type"] ?></td>
                  <td class="text-center"><?php echo $row["size"] ?></td>
                  <td class="text-center"><?php echo $row["location"] ?></td>
                  <td class="text-center"><?php echo $row["price"] ?></td>
                  <td class="text-center"><?php 
                    if($row["isUsed"] == 'yes'){
                      ?>
                        <p class="text-danger">đang thuê</p>
                      <?php
                    }else{
                      ?>
                        <p class="text-success">trống</p>
                      <?php
                    }
                    ?>
                  </td>
                    <td class="d-flex justify-content-around"><a href="roomedit.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit pr-2"></i></a><a href="roomdelete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
              <?php
            }
          ?>
          <?php
          }else{
            $conn = mysqli_connect("localhost","root","","quanLyKhachSan");
            $q = "select * from room";
            $rs = mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($rs)){
              ?>
                <tr>
                  <th class="text-center"><?php echo $row["id"] ?></th>
                  <td class="text-center"><?php echo $row["type"] ?></td>
                  <td class="text-center"><?php echo $row["size"] ?></td>
                  <td class="text-center"><?php echo $row["location"] ?></td>
                  <td class="text-center"><?php echo $row["price"] ?></td>
                  <td class="text-center"><?php 
                    if($row["isUsed"] == 'yes'){
                      ?>
                        <p class="text-danger">đang thuê</p>
                      <?php
                    }else{
                      ?>
                        <p class="text-success">trống</p>
                      <?php
                    }
                    ?>
                  </td>
                    <td class="d-flex justify-content-around"><a href="roomedit.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit pr-2"></i></a><a href="roomdelete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>
              <?php
            }
          ?>
          <?php
          }
          ?>
        </tbody>
      </table>
      <div class="user">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Thêm phòng</a>
      </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm phòng</h5>
        <p  class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times bg-transparent"></i></p>
      </div>
      <div class="modal-body">
      <form action="addRoom.php">
                <div class="form-group text-center">
                    <h5>Điền thông tin phòng</h5>
                </div>
                <div class="form-group">
                  <label for="type">Loại phòng</label>
                  <select name="type" id="type" class="form-control">
                    <option value="Single">Phòng đơn</option>
                    <option value="Double">Phòng đôi</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="s">Chọn cỡ giường</label>
                            <select name="size" id="size" class="form-control">
                                <option value="small">Bé</option>
                                <option value="big">Lớn</option>
                            </select>
                </div>
                <div class="form-group">
                  <label for="price">Giá</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá phòng">
                </div>
                <div class="form-group">
                <label for="loc">Chọn địa điểm</label>
                            <select name="loc" id="loc" class="form-control">
                                <option value="hanoi">Hà Nội</option>
                                <option value="HaiPhong">Hải Phòng</option>
                                <option value="QuangNinh">Quảng Ninh</option>
                                <option value="ThanhHoa">Thanh Hoá</option>
                                <option value="NgheAn">Nghệ An</option>
                                <option value="KhanhHoa">Khánh Hoà</option>
                                <option value="DaLat">Đà Lạt</option>
                                <option value="HoChiMinh">Hồ Chí Minh</option>
                                <option value="DongNai">Đồng Nai</option>
                                <option value="BinhDuong">Bình Dương</option>
                                <option value="CaMau">Cà Mau</option>
                            </select>
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