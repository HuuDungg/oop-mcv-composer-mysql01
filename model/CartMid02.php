<?php
namespace App\model;

use Exception;
use mysqli;


class CartMid02{
    private $conn;
    public function __construct(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $this->conn = new mysqli($server, $username, $password, $dbName);
    }

    public function getAll(){
        $listCart = [];
        $sql = "SELECT * FROM cartmid2";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()){
            $listCart[] = $row;
        }
            return $listCart;
        
    }

    public function updateCartMid01($id ,$title, $image, $description){
        $sql = "UPDATE cartmid2 SET title =?, img =?, description =? WHERE id =?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $title, $image, $description, $id);
        if($stmt->execute()){
            return true;
        } else{
            throw new Exception("Error: ". $this->conn->error);
        }
    }

}
?>