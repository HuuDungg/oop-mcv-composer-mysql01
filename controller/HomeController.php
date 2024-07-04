<?php
namespace App\controller;

use App\model\HomeM;

class HomeController{
    public function home(){
        require_once "./view/Home.php";
    }

    public function admin(){
        require_once "./panelAdmin/Admin.php";
    }

    public function bannerTop(){
        require_once "./panelAdmin/BannerTop.php";
    }

    public function cartNav(){
        require_once "./panelAdmin/CartNav.php";
    }
    public function bannerMid(){
        require_once "./panelAdmin/BannerMid.php";
    }

    public function cartMid01(){
        require_once "./panelAdmin/CartMid01.php";
    }

    public function cartMid02(){
        require_once "./panelAdmin/CartMid02.php";
    }

    public function bannerBot(){
        require_once "./panelAdmin/BannerBot.php";
    }

    public function cartLast(){
        require_once "./panelAdmin/CartLast.php";
    }

    //function to processing logic 
    public function processingBannerTop(){
        echo "this is the processing banner top";
    }

    public function processingCartNav(){
        require_once "./panelAdmin/CartNavUpdate.php";
    }

    public function processingBannerMid(){
        echo "this is the processing banner mid";
    }

    public function processingCartMid01(){
        require_once "./panelAdmin/CartMid01update.php";
    }

    public function processingCartMid02(){
        require_once "./panelAdmin/CartMid02update.php";
    }

    public function processingBannerBot(){
        echo "this is the processing banner bot";
    }

    public function processingCartLast(){
        require_once "./panelAdmin/CartLastUpdate.php";
    }

    

}


?>