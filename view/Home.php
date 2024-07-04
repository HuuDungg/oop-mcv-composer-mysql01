<?php
// Hiển thị thông báo lỗi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Yêu cầu autoload của Composer
require_once "./vendor/autoload.php";

use App\model\BannerBot;
use App\model\BannerMid;
use App\model\BannerTop;
use App\model\CartLast;
use App\model\CartMid01;
use App\model\CartMid02;
use App\model\Cartnav;


require_once "./common/ConnectDB.php";

if(!isset($_SESSION["username"])){
    header("Location: ?act=formSignin");
}

$bannertop = new BannerTop();
$cartnav = new Cartnav();
$bannermid = new BannerMid();
$bannerbot = new BannerBot();
$cartlast = new CartLast();
$cartmid01 = new CartMid01();
$cartmid02 = new CartMid02();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/carspurchase/style/Footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <style>
        .new-nav{
            background-image: url(<?php echo $bannertop->getImg() ?>);
            background-size: cover;
            background-position: center;
            width: 100%;
}
    </style>
    <div class="new-nav">
            <nav class="navbar navbar-expand-md custom-footer">
                <div class="container-fluid">
                <div class="navbar-brand logoFirst">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/b81701137918987.621444b40e536.jpg" alt="" class="d-inline-block align-text-top">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto menu">
                    <li class="nav-item"><a class="nav-link" href="">Track</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Ice</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Travel</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Events</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto contact">
                    <li class="nav-item"><a class="nav-link" href=""><i class="bi bi-person-raised-hand"></i> <?php echo " " .$_SESSION["username"] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?act=admin"><i class="bi bi-pen"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="?act=logout"><i class="bi bi-box-arrow-right"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                        <i class="bi bi-list"></i> Menu
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>

            <div class="custom-nav">
                <div class="textBanner">
                <h1><?php echo $bannertop->getTitle() ?></h1>
                <button><?php echo $bannertop->getButton() ?></button>
                </div>
            </div>
    </div>
    
<!-- 
end nav bar -->
    <div class="custom-aside">
        <div class="aslide">
            <div class="textAslide">
                <h1>Your dreams. Our drive.</h1>
            </div>
            <div class="imgAslide">
                <?php
                    foreach ($cartnav->getAll() as $value) {
                        echo '
                        <div class="cartA">
                            <img src="' . $value["img"] . '" alt="">
                            <div class="textAs"><h2>' . $value["title"] . '</h2></div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>

        <div class="banner02">
            <img src=<?php echo $bannermid->getBannerMid() ?> alt="">
        </div>

    </div>

    <div>
        <div class="midH1">
                <h1 class="textWhite">Begin your experience</h1>
        </div>

        <!-- Carousel 1 -->
<div id="carousel1" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <?php
        foreach($cartmid01->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>
  </div>
  <div class="carousel-item">
  <?php
        foreach($cartmid01->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>
  </div>
  <div class="carousel-item">
    <?php
        foreach($cartmid01->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>
</div>

</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

    </div>

    <div>
        <div class="midH1">
                <h1 class="textWhite">Get in. Buckle up. Experience more.</h1>
        </div>

        <!-- Carousel 2 -->
<div id="carousel2" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
    <?php
        foreach($cartmid02->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>
    </div>
    <div class="carousel-item">
    
    <?php
        foreach($cartmid02->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>
    </div>
  <div class="carousel-item">
  <?php
        foreach($cartmid02->getAll() as $value){
            echo '
            <div class="cartMid">
                <div class="cartChildren">
                    <div class="titleMid">
                        <h3 class="textWhite">' . $value["title"] . '</h3>
                    </div>
                    <div class="imgMid">
                        <img src="' . $value["img"] . '" alt="">
                    </div>
                    <div class="descriptionMid">
                        <h3 class="textWhite">' . $value["description"] . '</h3>
                        <button>Read More</button>
                    </div>
                </div>
            </div>';
        }
    ?>

  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

    </div>

    <div class="secondAslide">
        <div class="secondText row">
            <div class="col-md-6">
                <h1 class="textWhite">Porsche driving at it’s <br> best – on the racetrack</h1>

            </div>
            <div class="col-md-6">
                <h4 class="textWhite desText">
                em ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </h4>
            </div>
        </div>
        <div class="secondImg">
            <img src=<?php echo $bannerbot->getBannerBot() ?> alt="">
        </div>
    </div>

    <div class="lastContent">
    <!-- Carousel 3 -->
<div id="carousel3" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators indiSpec">
  <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <?php
            foreach($cartlast->getAll() as $value) {
                echo '
                <div class="cartContent">
                    <div class="content">
                        <img src="' . $value["img"] . '" alt="">
                        <div class="cartTitle">
                            <h5 class="textWhite">' . $value["title"] . '</h5>
                        </div>
                        <div class="cartText">
                            <h6 class="textWhite">' . $value["description"] . '</h6>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>
    </div>
    <div class="carousel-item">
        <?php
            foreach($cartlast->getAll() as $value) {
                echo '
                <div class="cartContent">
                    <div class="content">
                        <img src="' . $value["img"] . '" alt="">
                        <div class="cartTitle">
                            <h5 class="textWhite">' . $value["title"] . '</h5>
                        </div>
                        <div class="cartText">
                            <h6 class="textWhite">' . $value["description"] . '</h6>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>
    </div>
    <div class="carousel-item">
        <?php
            foreach($cartlast->getAll() as $value) {
                echo '
                <div class="cartContent">
                    <div class="content">
                        <img src="' . $value["img"] . '" alt="">
                        <div class="cartTitle">
                            <h5 class="textWhite">' . $value["title"] . '</h5>
                        </div>
                        <div class="cartText">
                            <h6 class="textWhite">' . $value["description"] . '</h6>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>
</div>

</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

    </div>

    <div class="footer">
        <!-- First footer -->
        <div class="footerFirst row">
            <div class="contact col-md-6">
                <h1 class="textWhite">Contact</h1>
                <h4 class="textWhite">Do you have any questions?</h4>
                <button>Contact Form</button>
            </div>
            <div class="media col-md-6">
                <h1 class="textWhite">Social Media</h1>
                <p class="textWhite">Get in touch with us on social media.</p>
                <div>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-threads"></i>
                <i class="bi bi-binoculars-fill"></i>
                </div>
            </div>
        </div>
        <!-- Second footer -->
        <div class="footerSecond row">
            <div class="col-md-2">
                <h3 class="textWhite">Track</h3>
                <p class="textWhite">Advanced Driver Training</p>
                <p class="textWhite">Precision</p>
                <p class="textWhite">Precision Plus</p>
                <p class="textWhite">Performance</p>
                <p class="textWhite">Master GT4 RS</p>
                <p class="textWhite">Gift Vouchers </p>
            </div>
            <div class="col-md-2">
                <h3 class="textWhite">Ice</h3>
                <p class="textWhite">Advanced Driver Training</p>
                <p class="textWhite">Precision</p>
                <p class="textWhite">Precision Plus</p>
                <p class="textWhite">Performance</p>
            </div>
            <div class="col-md-2">
                <h3 class="textWhite">Travel</h3>
                    <p class="textWhite">Advanced Driver Training</p>
                    <p class="textWhite">Precision</p>
                    <p class="textWhite">Precision Plus</p>
                    <p class="textWhite">Performance</p>
                </div>
            <div class="col-md-3">
                <h3 class="textWhite">Event</h3>
                <p class="textWhite">About Porsche</p>
                <p class="textWhite">Press</p>
                <p class="textWhite">Careers</p>
                <p class="textWhite">Press Room</p>
                <p class="textWhite">Customer Testimonials</p>
                <p class="textWhite">Press Kit</p>
            </div>
            <div class="col-md-3">
                <h3 class="textWhite">About</h3>
                <p class="textWhite">Terms & Conditions</p>
                <p class="textWhite">Privacy Policy</p>
                <p class="textWhite">Cookie Policy</p>
                <p class="textWhite">Imprint</p>
                <p class="textWhite">Sitemap</p>
                <p class="textWhite">Press Kit</p>
            </div>
        </div>
        <!-- Last footer -->
        <hr style="color: white;">
        <div class="footerLast">
            <div>
                <h5 style="color: white;">Copyright ©2023 Porsche Events. All Rights Reserved. Legal notice. Privacy Policy.</h5>
            </div>
            <div class="logoLats col-md-2">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/b81701137918987.621444b40e536.jpg" alt="">
            </div>
        </div>
    </div>

</body>

</html>
