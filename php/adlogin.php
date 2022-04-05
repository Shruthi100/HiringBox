<!-- <?php include('server2.php') ?> -->
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Admin Login</h2>
    </div>

    <form method="post" action="login_submit.php">
        <?php include('error.php'); ?>
        <div class="input-group">
            <label>Admin ID</label>
            <input type="number" name="id">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        
    </form>
</body>

</html>