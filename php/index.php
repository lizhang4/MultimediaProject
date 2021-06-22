<?php
session_start();

    include("connection.php");
    include("function.php");

    $userdata = check_login($con);
?>

<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>My website</title>
    </head>

    <body>
        <a href = "logout.php">LOGOUT</a>
        <h1>this is the index page</h1>
        <br>

        Hello, <?php echo $userdata["username"];?>
    </body>
</html>