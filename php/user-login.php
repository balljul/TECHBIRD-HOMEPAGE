<?php
    include 'sessionStart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/Logo/Logo Designs TECHBIRD/Icon only.svg">
    <link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
    <title>User Login</title>
</head>
<body class="login-page-container">

    <?php
        require 'user-loginProcess.php';
    ?>

    <p class="text-youtube-red"><?php echo $_SESSION['loginErrorU']; ?></p>

    <form class="text-sherpablue" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h1 class="text-sherpablue">User Login</h1>
        <label for="userU">Username </label>
        <br>
        <input type="text" name="userU" id="userU">
        <br>
        <label for="pwU">Password </label>
        <br>
        <input type="password" name="passwordU" id="pwU">
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>