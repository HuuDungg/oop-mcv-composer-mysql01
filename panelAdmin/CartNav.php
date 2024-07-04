<?php

use App\model\Cartnav;

$cartnav = new Cartnav();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5" style="
                max-width: fit-content;
                margin-left: auto;
                margin-right: auto;"
                >
        <?php
        foreach($cartnav->getAll() as $value){
            // Xây dựng URL với các tham số
            $url = '?act=processingCartNav&id=' . urlencode($value["id"]) . 
                   '&title=' . urlencode($value["title"]) . 
                   '&img=' . urlencode($value["img"]) . 
                   '&description=' . urlencode($value["description"]);

            echo '
            <div class="card" style="width: 150px; height: max-content; display: inline-block;">
                <div class="card-body">
                    <h3 style="text-align: center;" class="card-title">'.$value["title"].'</h3>
                    <img style="overflow: hidden; width: 100px; height: 100px;" src="'.$value["img"].'" class="card-img-top" alt="">
                    <p style="text-align: center;" class="card-text mt-3">'.$value["description"].'</p>
                    <div class="text-center">
                        <a href="'.$url.'" class="btn btn-primary">EDIT</a>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</body>
</html>
