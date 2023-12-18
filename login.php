<?php

require_once 'config.php';


if(isset($_POST['submit'])){
    $username = $_POST['register']['username'];
    $password = $_POST['register']['password'];
    $password = hash('sha256', $password);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['status'] = "login successfully";
        start session();
        header('Location: index.html.php');
        exit();
    } else {
        $_SESSION['status'] = "login failed";
        header('Location: login.html.php');
        exit();
    }
}
?>

