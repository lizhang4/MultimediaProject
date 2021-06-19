<?php
session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $email = $_POST["email"];

        if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($repassword) && !empty($email))
        {
            //store value to database
            $query = "insert into user (username, password, repassword, email) values ('$username', '$password', '$repassword', '$email')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
        else
        {
            echo "please enter some valid information";
        }
    }
?>

<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>signup</title>
    </head>

    <body>
        <style>
            <?php include "style.css"; ?> 
        </style>

        <div id = "box">
            <form method = "post">
                <div style = "font-size: 20px; margin: 10px; color: white;">Signup</div>
                <input id = "text" type = "text" name = "username" placeholder = "username"><br><br>
                <input id = "text" type = "password" name = "password" placeholder = "password"><br><br>
                <input id = "text" type = "password" name = "repassword" placeholder = "re-enter password"><br><br>
                <input id = "text" type = "email" name = "email" placeholder = "email"><br><br>

                <input id = "button" type = "submit" value = "signup"><br><br>

                <a href = "login.php">Click to Login</a><br><br>
            </form>
        </div>
    </body>
</html>