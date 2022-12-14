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
    <main>
        <section class="main">
            <div class="main-content">
                <div class="main-title">
                    <h2>
                        Kh??ch s???n Ch??u ??
                    </h2>
                </div>
                <div class="main-describe">
                    <p>
                        N??ng t???m tr???i nghi???m c???a b???n
                    </p>
                </div>
                <div class="main-actions">
                    <a href="phong.php">?????t ph??ng ngay</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-left">
                <div class="section-title">
                    <h3>H??? th???ng bao ph??? r???ng r??i</h3>
                </div>
                <div class="section-content">
                    <p>
                        H??? th???ng kh??ch s???n c???a CT bao ph??? r???ng kh???p 20 t???nh th??nh
                        tr??n c??? n?????c, v???i h??n 50 kh??ch s???n ?????t chu???n 5 sao, h???a h???n ??em l???i
                        s??? thu???n ti???n v?? tr???i nghi???m kh??ng th??? qu??n cho kh??ch h??ng
                    </p>
                </div>
            </div>
            <div class="section-right">
                <div class="section-img">
                    <img src="img/location.jpeg" alt="location">
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-left">
                <div class="section-img">
                    <img src="img/letan.jpeg" alt="nhanvien">
                </div>
            </div>
            <div class="section-right">
                <div class="section-title">
                    <h3>Nh??n vi??n th??n thi???n</h3>
                </div>
                <div class="section-content">
                    <p>
                        Nh??n vi??n c???a h??? th???ng ???????c tuy???n ch???n m???t c??ch  k??? c??ng,
                        ?????m b???o to??n di???n v??? chuy??n m??n v?? th??i ????? ph???c v??? kh??ch h??ng
                    </p>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-left">
                <div class="section-title">
                    <h3>D???ch v??? ????a ????n</h3>
                </div>
                <div class="section-content">
                    <p>
                        H??? th???ng kh??ch s???n tr??n c??? n?????c ?????u h??? tr??? d???ch v??? ????a ????n kh??ch h??ng 
                        t??? c??c trung t??m trung chuy???n nh?? s??n bay ho???c b???n xe, ?????m b???o s??? y??n t??m 
                        cho kh??ch h??ng
                    </p>
                </div>
            </div>
            <div class="section-right">
                <div class="section-img">
                    <img src="img/duadon.jpeg" alt="dua don">
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-left">
                <div class="section-img">
                    <img src="img/dichvu.jpeg" alt="dichvu">
                </div>
            </div>
            <div class="section-right">
                <div class="section-title">
                    <h3>Ph???c v??? 24/24</h3>
                </div>
                <div class="section-content">
                    <p>
                        Kh??ch s???n c?? ?????i ng?? nh??n vi??n tr???c 24/24 gi???, ?????m b???o an to??n tuy???t ?????i
                        v?? lu??n s???n s??ng ph???c v??? ngay khi nh???n ???????c y??u c???u c???a kh??ch h??ng
                    </p>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-left">
                <div class="section-title">
                    <h3>Ph??ng sang tr???ng, ti???n nghi</h3>
                </div>
                <div class="section-content">
                    <p>
                        H??? th???ng kh??ch s???n s??? h???u h??? th???ng ph??ng ?????p, g??c nh??n c???c t???t. ph??ng
                        ???????c trang b??? nh???ng thi???t b??? hi???n ?????i nh???m ????p ???ng ?????y ????? nhu c???u c???a kh??ch h??ng.
                        T???t c??? ph??ng c???a kh??ch san ?????u ?????n ti??u chu???n 5 sao
                    </p>
                </div>
            </div>
            <div class="section-right">
                <div class="section-img">
                    <img src="img/phong.jpeg" alt="phong">
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-white">
        <div class="footer-left">
            <div class="footer-title text-center">
                <h5>Th??ng tin li??n h???</h5>
            </div>
            <div class="footer-content d-flex align-items-center justify-content-center flex-column">
                <div class="footer-content-mail">
                    <span><i class="fas fa-envelope"></i></span><span>CTl123@gmail.com</span>
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