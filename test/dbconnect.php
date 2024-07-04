<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbName = "myDataWeb";

        $conn = new mysqli($server, $username, $password, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }else{
            echo "Connected successfully";
        }

?>