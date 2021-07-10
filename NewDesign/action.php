<!-- This file manage the backend of our page mainly the login, register and logout function and connects it to our database -->

<?php
    session_start();

    $con = mysqli_connect('localhost','root','','multimediaproject');

    //check connection
    if(!$con)
    {
        die('failed to connect');
    }

    //login
    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $userdata = mysqli_fetch_assoc($result);

                    if($userdata['password'] == md5($password))
                    {
                        $_SESSION['username'] = $userdata['username'];
                        echo '1';//log in successfully
                    }
                    else
                    {
                        echo '2';//wrong password
                    }
                }
                else
                {
                    echo '3';//no such data
                }
            }
        }
    }

    //logout
    if(isset($_POST['action']))
    {
        unset($_SESSION['username']);
    }

    //register
    if(isset($_POST['uid']))
    {
        $username = $_POST['uid'];
        $password = $_POST['pwd'];
        $repassword = $_POST['pwdrepeat'];
        $email = $_POST['email'];

    
        if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($repassword) && !empty($email))
        {
            $query1 = "select * from user where username = '$username' limit 1";
            $result1 = mysqli_query($con, $query1);
            if(mysqli_num_rows($result1) == 0 && ($password == $repassword))
            {
                $query = "insert into user (username, password, email) values ('$username', md5('$password'), '$email')";
                mysqli_query($con, $query);
                $_SESSION['username'] = $username;
                echo '1';// success
            }
            else if(mysqli_num_rows($result1) > 0)
            {
                echo '2';//registered username
            }
            else
            {
                echo '3';//password not match
            }
        }
    }
?>