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
            <a href="login.php">
            <button class="btn btn-primary">????ng nh???p</button>
            </a>
        </div>
    </nav>
    <main class="login">
        <div class="login-form">
            <form action="loginProcess.php">
                <div class="form-group">
                    <label for="usn">T??n ????ng nh???p</label>
                    <input type="text" name="usn" id="usn" placeholder="Nh???p t??n ????ng nh???p" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">M???t kh???u</label>
                    <input type="password" name="pass" id="pass" placeholder="Nh???p m???t kh???u" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">????ng nh???p</button>
                </div>
                <div class="form-group">
                   <span>Ch??a c?? t??i kho???n?</span> <a href="register.php" class="link">????ng k?? ngay</a>
                </div>
                <?php
                    if(isset($err)){
                        ?>
                            <div class="form-err bg-danger text-white text-center">
                                <p><?php echo $err ?></p>
                            </div>
                        <?php
                    }
                ?>
            </form>
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