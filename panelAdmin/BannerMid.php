<?php

use App\model\BannerMid;

if (!isset($_SESSION["username"])) {
    header("Location: ?act=formSignin");
    exit(); // Ensure script stops after redirection
}

$bannermid = new BannerMid();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $img = $_POST["img"];
    $bannermid->updateBannerMid($img);
    header("Location: ?act=home");
    exit(); // Ensure script stops after redirection
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="?act=bannerMid">
            <div class="mb-3">
                <label for="img" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="img" name="img" value="<?php echo $bannermid->getBannerMid() ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!-- Bootstrap JS (optional, if you need Bootstrap's JavaScript functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
