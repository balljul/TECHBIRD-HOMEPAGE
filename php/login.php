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
    <title>Admin Login</title>
</head>
<body>

    <?php
        require 'loginProcess.php';
    ?>

    <p class="text-youtube-red"><?php echo $_SESSION['loginError']; ?></p>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="user">Username </label>
        <br>
        <input type="text" name="user" id="user">
        <br>
        <label for="pw">Password </label>
        <br>
        <input type="password" name="password" id="pw">
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>