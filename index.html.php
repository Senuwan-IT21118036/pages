<?php
start session();
require_once 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="alert.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    session_start();

    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></>            </div>
        <?php
        unset($_SESSION['status']);
    }

?>
<h1>Home Page</h1>
<form action="mobile.php" method="post" autocomplete="on">
    <div>
        <label for="mobiel">mobiel app name</label>
        <input type="text" name="mobiel" id="mobiel">
    </div>
    <div>
        <label for="version">version</label>
        <input type="text" name="version" id="version">
    </div>
    <div>
        <label for="platform">Platform:</label>
        <input type="radio" name="platform" value="apk" id="apk">
        <label for="apk">APK</label>
        <input type="radio" name="platform" value="ipa" id="ipa">
        <label for="ipa">IPA</label>
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>

