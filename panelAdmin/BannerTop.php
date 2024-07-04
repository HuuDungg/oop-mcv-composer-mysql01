<?php
if (!isset($_SESSION["username"])) {
    header("Location: ?act=formSignin");
    exit(); // Ensure script stops after redirection
}
// Yêu cầu autoload của Composer
require_once "./vendor/autoload.php";

use App\model\BannerTop;



$bannertop = new BannerTop();

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
        <form method="post" action="?act=processingBannerTop">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $bannertop->getTitle() ?>">
            </div>
            <div class="mb-3">
                <label for="button" class="form-label">Button</label>
                <input type="text" class="form-control" id="button" name="button" value="<?php echo $bannertop->getButton() ?>">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="img" name="img" value="<?php echo $bannertop->getImg() ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!-- Bootstrap JS (optional, if you need Bootstrap's JavaScript functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
