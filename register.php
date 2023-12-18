<?php
require_once 'config.php';
start session();

if(isset($_POST['submit'])){
    $username = $_POST['register']['username'];
    $password = $_POST['register']['password'];
    $password = hash('sha256', $password);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "register successfully";
        header('Location: login.html.php');
        exit();
    } else {
        $_SESSION['status'] = "register failed";
        header('Location: register.html.php');
        exit();
    }
}

?>
