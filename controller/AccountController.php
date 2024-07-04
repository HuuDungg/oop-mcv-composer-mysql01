<?php 
namespace App\controller;

use App\model\Account;
session_start();
class AccountController
{
    public function logout(){
        session_unset();
        session_destroy();
        header("Location: ?act=formSignin");
    }
    //function of form
    public function signIn(){
        $notice = "";
        require_once "./view/SignIn.php";
    }

    public function signUp(){
        $notice = "";
        require_once "./view/SignUp.php";
    }

    //function of processing
    public function processSignIn(){
        $account = new Account();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($account->signin($username, $password)){
                $_SESSION["username"] = $username;
                header("Location: ?act=home");
            }else{
                $notice = "user name or password is incorrect";
                require_once "./view/SignIn.php";
            }
        }

    }

    public function processSignUp(){
        $account = new Account();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $repasword = $_POST["re-password"];
            if($this->checkPassword($repasword, $password) == false){
                $notice = "password and repasword is incorrect";
                require_once "./view/SignUp.php";
                exit();
            }
            if($account->signup($username, $password)){
                header("Location:?act=formSignin");
            }else{
                echo "signup failed";
            }
        }
    }

    //function to validate fields
    public function checkPassword($password, $repasword){
        if($password == $repasword){
            return true;
        }else{
            return false;
        }
    }
}
?>