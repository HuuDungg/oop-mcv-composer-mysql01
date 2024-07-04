<?php
namespace App\model;

use Exception;
use mysqli;

class BannerMid
{
    private $conn;
    public function __construct(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $this->conn = new mysqli($server, $username, $password, $dbName);
    }

    public function getBannerMid(){
        try {
            $stmt = $this->conn->prepare("SELECT img FROM bannermid WHERE id = 2");
            if (!$stmt) {
                throw new Exception("Prepare statement failed: " . $this->conn->error);
            }
            
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['img'];
            } else {
                throw new Exception("No record found.");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $stmt->close();
            $this->conn->close();
        }
    }

    public function updateBannerMid($img){
        try {
            $stmt = $this->conn->prepare("UPDATE bannermid SET img =? WHERE id = 2");
            $stmt->bind_param("s", $img);
            if (!$stmt) {
                throw new Exception("Prepare statement failed: " . $this->conn->error);
            }
            
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        } finally {
            $stmt->close();
            $this->conn->close();
        }
    }

}
?>