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
<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">CT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="phong.php">Ph??ng</a>
            </li>
          </ul>
          <?php
                session_start();
                if(isset($_SESSION['user'])){
                    ?>
                        <a href="logOut.php">
                            <button class="btn btn-primary">????ng xu???t</button>
                        </a>
                    <?php
                }else{
                    ?>
                        <a href="login.php">
                            <button class="btn btn-primary">????ng nh???p</button>
                        </a>
                    <?php
                }
            ?>
        </div>
    </nav>
    <main class="rooms">
        <div class="rooms-intro">
            <h3>Danh s??ch ph??ng n???i b???t</h3>
        </div>
       <?php
            if(isset($mess)){
                ?>
                     <div class="room-suc text-center p-2 mt-2 bg-success text-white">
                        <h4>?????t ph??ng th??nh c??ng</h4>
                    </div>
                <?php
            }
            if(isset($err)){
                ?>
                     <div class="room-suc text-center p-2 mt-2 bg-danger text-white">
                        <h4>?????t ph??ng th???t b???i</h4>
                    </div>
                <?php
            }
       ?>
  </div>
        <div class="room-rooms">
            <div class="rooms-single">
                <div class="rooms-title">
                    <h4>Ph??ng ????n</h4>
                </div>
                <div class="rooms-list">
                    <ul class="rooms-items">
                        <li class="rooms-item">
                            <div class="rooms-img">
                                <img src="img/don1.jpeg" alt="room">
                                <div class="rooms-content">
                                    <p class="rooms-name">
                                        Gi?????ng ????n c??? nh???
                                    </p>
                                    <p class="rooms-price text-white">
                                        Gi?? ch??? t??? 1.500.000 VND/????m
                                    </p>
                                    <div class="rooms-actions">
                                        <a data-toggle="modal" data-target="#myModal" href="#">?????t ngay</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="rooms-item">
                            <div class="rooms-img">
                                <img src="img/don2.jpeg" alt="room">
                                <div class="rooms-content">
                                    <p class="rooms-name">
                                        Gi?????ng ????n c??? l???n
                                    </p>
                                    <p class="rooms-price text-white">
                                        Gi?? ch??? t??? 1.700.000 VND/????m
                                    </p>
                                    <div class="rooms-actions">
                                        <a data-toggle="modal" data-target="#myModal" href="#">?????t ngay</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rooms-single">
                <div class="rooms-title">
                    <h4>Ph??ng ????i</h4>
                </div>
                <div class="rooms-list">
                    <ul class="rooms-items">
                        <li class="rooms-item">
                            <div class="rooms-img">
                                <img src="img/doi1.jpeg" alt="room">
                                <div class="rooms-content">
                                    <p class="rooms-name">
                                        Gi?????ng ????i c??? nh???
                                    </p>
                                    <p class="rooms-price text-white">
                                        Gi?? ch??? t??? 2.000.000 VND/????m
                                    </p>
                                    <div class="rooms-actions">
                                        <a data-toggle="modal" data-target="#myModal" href="#">?????t ngay</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="rooms-item">
                            <div class="rooms-img">
                                <img src="img/doi2.jpeg" alt="room">
                                <div class="rooms-content">
                                    <p class="rooms-name">
                                        Gi?????ng ????i c??? l???n
                                    </p>
                                    <p class="rooms-price text-white">
                                        Gi?? ch??? t??? 2.300.000 VND/????m
                                    </p>
                                    <div class="rooms-actions">
                                        <a data-toggle="modal" data-target="#myModal" href="#">?????t ngay</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal fade p-3" id="myModal" role="dialog">
            <div class="modal-dialog p-3">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <p>Th??m th??ng tin ?????t ph??ng</p>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-content p-3">
                    <?php
                        ?>
                            <form action="datphong.php" class="form">
                        <div class="form-group">
                            <label for="type">Ch???n lo???i ph??ng</label>
                            <select name="type" id="type" class="form-control">
                                <option value="single">Ph??ng ????n</option>
                                <option value="double">Ph??ng ????i</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="s">Ch???n c??? gi?????ng</label>
                            <select name="size" id="size" class="form-control">
                                <option value="small">B??</option>
                                <option value="big">L???n</option>
                            </select>
                        </div>
                        <div class="hidee">
                            <input type="text" name="user" id="user" value="<?php echo $_SESSION['user'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="time">Th???i gian</label>
                            <input type="datetime-local" name="time" id="time" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="loc">Ch???n ?????a ??i???m</label>
                            <select name="loc" id="loc" class="form-control">
                                <option value="hanoi">H?? N???i</option>
                                <option value="HaiPhong">H???i Ph??ng</option>
                                <option value="QuangNinh">Qu???ng Ninh</option>
                                <option value="ThanhHoa">Thanh Ho??</option>
                                <option value="NgheAn">Ngh??? An</option>
                                <option value="KhanhHoa">Kh??nh Ho??</option>
                                <option value="DaLat">???? L???t</option>
                                <option value="HoChiMinh">H??? Ch?? Minh</option>
                                <option value="DongNai">?????ng Nai</option>
                                <option value="BinhDuong">B??nh D????ng</option>
                                <option value="CaMau">C?? Mau</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="form-control btn btn-primary">?????t Ph??ng</button>
                        </div>
                    </form>
                        <?php
                    ?>
                </div>
              </div>
              
            </div>
    </main>
    <footer class="bg-dark text-white">
        <div class="footer-left">
            <div class="footer-title text-center">
                <h5>Th??ng tin li??n h???</h5>
            </div>
            <div class="footer-content d-flex align-items-center justify-content-center flex-column">
                <div class="footer-content-mail">
                    <span><i class="fas fa-envelope"></i></span><span>CT123@gmail.com</span>
                </div>
                <div class="footer-content-phone">
                    <span><i class="fas fa-phone-square"></i></span><span>0123456789</span>
                </div>
                <div class="footer-content-location">
                    <span><i class="fas fa-map-marked-alt"></i></span><span>Ha Noi - Viet Nam</span>
                </div>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-title text-center">
                <h5>V??? ch??ng t??i</h5>
            </div>
            <div class="footer-content d-flex align-items-center justify-content-center flex-column">
                <p>
                    CT l?? c??ng ty du l???ch ???????c vinh danh trong top 5 c??ng ty
                    du l???ch xu???t s???c nh???t 2021 do t???p ch?? Sao V??ng b??nh ch???n. C??ng ty mang ?????n
                    nhi???u d???ch v??? ph???c v??? cho du l???ch v?? n???i b???t l?? d???ch v??? kh??ch s???n.
                    H??? th???ng kh??ch s???n c???a ch??ng t??i ???????c ????nh gi?? chu???n 5 sao  v?? c?? 
                    m???c gi?? ph?? h???p.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>