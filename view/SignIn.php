<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/carspurchase/style/SignIn.css">
</head>
<body>
    <div style="width: 300px;" class="container">
        <form action="?act=processSignin" method="post">
            <h2>Login</h2>
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required><br>

            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required><br>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p style="color: red;"> 
                <?php echo $notice ?>
            </p>
        </form>
    </div>
</body>
</html>
 