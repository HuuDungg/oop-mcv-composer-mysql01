<?php
namespace App\model;

use Exception;
use mysqli;

class Account
{
    private $conn;
    public function __construct(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $this->conn = new mysqli($server, $username, $password, $dbName);
    }

    public function signin($ur, $pw){
        try {
            $stmt = $this->conn->prepare("SELECT * FROM account WHERE username =? AND password =?");
            $stmt->bind_param("ss", $ur, $pw);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function signup($ur, $pw){
        
        try {
            $stmt = $this->conn->prepare("INSERT INTO account (username, password) VALUES (?,?)");
            $stmt->bind_param("ss", $ur, $pw);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>