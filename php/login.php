<?php
session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // $repassword = $_POST["repassword"];
        // $email = $_POST["email"];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            //read value from database
            $query = "select * from user where username = '$username' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $userdata = mysqli_fetch_assoc($result);
                    
                    if($userdata["password"] === $password)
                    {
                        $_SESSION["username"] = $userdata["username"];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "wrong username or password !";
        }
        else
        {
            echo "wrong username or password !";
        }
    }
?>

<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>login</title>
    </head>

    <body>
        <style>
            <?php include "style.css"; ?> 
        </style>

        <div id = "box">
            <form method = "post">
                <div style = "font-size: 20px; margin: 10px; color: white;">Login</div>
                <input id = "text" type = "text" name = "username"><br><br>
                <input id = "text" type = "password" name = "password"><br><br>

                <input id = "button" type = "submit" value = "login"><br><br>

                <a href = "signup.php">Click to Signup</a><br><br>
            </form>
        </div>
    </body>
</html>