
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
<div class="pp container-fluid">
<form action="roomEditProcess.php">
                <div class="form-group text-center">
                    <h5>Điền thông tin phòng để chỉnh sửa</h5>
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
                <div class="hidee">
                    <input type="text" name="id" id="id" value="<?php echo $_GET["id"]?>">
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
                    <button type="submit" class="btn btn-primary form-control">Lưu</button>
                </div>
            </form>
</div>
</body>
</html>