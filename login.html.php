<?php
require_once 'config.php';
start session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
</head>
<body>
<h1>Log in</h1>
<form action="" method="post">
    <div>
        <label for="username">lolc username</label>
        <input type="text" name="login[username]" id="username">
    </div>
    <div>
        <label for="password">Your password</label>
        <input type="password" name="login[password]" id="password">
    </div>
    <div>
        <input type="submit" value="Log in">
    </div>
    create a account? <a href="register.html.php">register</a>
</form>
</body>
</html>
