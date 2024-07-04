<?php

use App\model\CartLast;
use App\model\Cartnav;

 if (!isset($_SESSION["username"])) {
    header("Location: ?act=formSignin");
    exit(); // Ensure script stops after redirection
}  
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["ID"];
    $title = $_POST["title"];
    $image = $_POST["image"];
    $description = $_POST["description"];

    $cartnav = new CartLast();

    if($cartnav->updateCartLast($id, $title, $image, $description) == true){
        header("Location:?act=cartLast");
    }else{
        echo "Error: nhaaaaa ";
    }
}
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
</head>
<body>
    <div class="container my-5">
        <form action="?act=processingCartLast" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
                <label for="ID" class="form-label">ID</label>
                <input type="text" class="form-control" id="ID" name="ID" placeholder="Enter ID" readonly value="<?php echo htmlspecialchars($_GET['id'] ?? '', ENT_QUOTES); ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo htmlspecialchars($_GET['title'] ?? '', ENT_QUOTES); ?>" required>
                <div class="invalid-feedback">Please enter a title.</div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image URL" value="<?php echo htmlspecialchars($_GET['img'] ?? '', ENT_QUOTES); ?>" required>
                <div class="invalid-feedback">Please enter an image URL.</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="<?php echo htmlspecialchars($_GET['description'] ?? '', ENT_QUOTES); ?>" required>
                <div class="invalid-feedback">Please enter a description.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
