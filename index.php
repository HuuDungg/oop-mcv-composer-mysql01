<?php
// Hiển thị thông báo lỗi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Yêu cầu autoload của Composer
require_once "./vendor/autoload.php";

// Sử dụng namespace của AccountController
use App\controller\AccountController;
use App\controller\HomeController;
use App\model\BannerTop;

// Lấy hành động từ URL, nếu không có thì mặc định là "/"
$act = $_GET["act"] ?? "/";

// Khởi tạo đối tượng AccountController
$accountController = new AccountController();
$homeController = new HomeController();
$bannertop = new BannerTop();
// Sử dụng switch để xử lý các hành động
switch ($act) {
    case "formSignup":
        $accountController->signUp();
        break;
    case "formSignin":
        $accountController->signIn();
        break;
    case "processSignup":
        $accountController->processSignUp();
        break;
    case "processSignin":
        $accountController->processSignIn();
        break;
    case "logout":
        $accountController->logout();
        break;
    case "home":
        $homeController->home();
        break;
    //processing admin function    
    case "admin":
        $homeController->admin();
        break;
    case "banerTop":
        $homeController->bannerTop();
        break;
    case "cartNav":
        $homeController->cartNav();
        break;
    case "bannerMid":
        $homeController->bannerMid();
        break;
    case "cartMid01":
        $homeController->cartMid01();
        break;
    case "cartMid02":
        $homeController->cartMid02();
        break;
    case "bannerBot":
        $homeController->bannerBot();
        break;
    case "cartLast":
        $homeController->cartLast();
        break;
    case "processingBannerTop":
        $bannertop->saveAll();
        break;
    case "processingCartNav":
        $homeController->processingCartNav();
        break;
    case "processingBannerMid":
        $homeController->processingBannerMid();
        break;
    case "processingCartMid01":
        $homeController->processingCartMid01();
        break;
    case "processingCartMid02":
        $homeController->processingCartMid02();
        break;
    case "processingBannerBot":
        $homeController->processingBannerBot();
        break;
    case "processingCartLast":
        $homeController->processingCartLast();
        break;
    default:
        echo "404 - Page not found";
}
?>
