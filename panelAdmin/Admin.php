<?php
if (!isset($_SESSION["username"])) {
    header("Location: ?act=formSignin");
    exit(); // Ensure script stops after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/carspurchase/style/Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div>
        <a class="logoutbtn" href="?act=logout"><i class="bi bi-box-arrow-right"></i></a>
        <a class="returnHome" href="?act=home"><i class="bi bi-arrow-return-left"></i></a>
        
    </div>
    <h1 class="textMain">This is Admin page</h1>
    <div class="container">
        <a href="?act=banerTop" class="btn btn-primary d-block mb-2">Banner top</a>
        <a href="?act=cartNav" class="btn btn-primary d-block mb-2">Cart nav</a>
        <a href="?act=bannerMid" class="btn btn-primary d-block mb-2">Banner mid</a>
        <a href="?act=cartMid01" class="btn btn-primary d-block mb-2">Cart mid 01</a>
        <a href="?act=cartMid02" class="btn btn-primary d-block mb-2">Cart mid 02</a>
        <a href="?act=bannerBot" class="btn btn-primary d-block mb-2">Banner bot</a>
        <a href="?act=cartLast" class="btn btn-primary d-block mb-2">Cart last</a>
    </div>
</body>
</html>
