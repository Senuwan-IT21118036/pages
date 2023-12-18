<?php

require_once 'config.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html.php');
    exit();
}

if (isset($_POST['submit'])) {
    $mobiel = $_POST['mobiel'];
    $version = $_POST['version'];
    $platform = $_POST['platform'];
    $date = date('jS F Y');
    $sql = "INSERT INTO mobile (mobiel, version, platform) VALUES ('$mobiel', '$version', '$platform', '$date')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "mobile app added successfully";
        header('Location: index.html.php');
        exit();
    } else {
        $_SESSION['status'] = "mobile app added failed";
        header('Location: mobile.html.php');
        exit();
    }
}
?>