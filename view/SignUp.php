<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/carspurchase/style/SignUp.css">
    
</head>
<body>
    <div style="width: 300px;" class="container">
        <form action="?act=processSignup" method="post">
            <h2>Register</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="re-password" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="re-password" name="re-password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <br> 
            <p style="color: red;"> <?php echo $notice ?></p>
        </form>
    </div>

</body>
</html>
