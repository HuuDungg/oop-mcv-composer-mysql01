<?php
namespace App\model;
use mysqli;
class BannerTop{
    private $conn;
    public function __construct(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $this->conn = new mysqli($server, $username, $password, $dbName);

    }

    //function of banner top

    public function getImg(){
        $sql = "SELECT * FROM bannertop";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
               return $row['img'];
            
        } else{
            echo "0 results";
        }
    }

    public function getTitle(){
        $sql = "SELECT * FROM bannertop";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
               return $row['title'];
            
        } else{
            echo "0 results";
        }
    }

    public function getButton(){
        $sql = "SELECT * FROM bannertop";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
               return $row['button'];
            
        } else{
            echo "0 results";
        }
    }

    public function saveAll(){
        $title = $_POST['title'];
        $button = $_POST['button'];
        $img = $_POST['img'];

        $sql = "UPDATE bannertop SET title='$title', button='$button', img='$img' WHERE id=1";

        if($this->conn->query($sql) === TRUE){
            header("Location: ?act=home");
        } else{
            echo "Error updating record: ". $this->conn->error;
        }
    }
}

?>