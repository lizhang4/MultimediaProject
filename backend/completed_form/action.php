<?php
    session_start();

    $con = mysqli_connect('localhost','root','','test');

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
            //trim() to remove blank space from input
            $query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $userdata = mysqli_fetch_assoc($result);

                    if($userdata['password'] == $password)
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
        elseif(!empty($username) || !empty($password))
        {
            if(!empty($username))
            {
                echo '4';//password is blank
            }
            else
            {
                echo '5';//username is blank
            }
        }
        else
        {
            echo '6';//both are blank
        }
    }

    //register
    if(isset($_POST['reg_username']))
    {
        $username = $_POST['reg_username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];
        
        // $query1 = "select * from user where username = '$username' limit 1";
        // $result1 = mysqli_query($con, $query1);
        
        if(!empty($username) && !empty($password) && !is_numeric($username) && !empty($repassword) && !empty($email))
        {
            $query1 = "select * from user where username = '$username' limit 1";
            $result1 = mysqli_query($con, $query1);
            if(mysqli_num_rows($result1) == 0 && ($password == $repassword) && filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $query = "insert into user (username, password, repassword, email) values ('$username', '$password', '$repassword', '$email')";
                mysqli_query($con, $query);
                $_SESSION['username'] = $username;
                echo '1';// success
            }
            else if(mysqli_num_rows($result1) > 0)
            {
                echo '2';//registered username
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo '3';//invalid email
            }
            else
            {
                echo '4';//password not match
            }
        }
        else
        {
            echo '5';//field are required
        }
    }

    //logout
    if(isset($_POST['action']))
    {
        unset($_SESSION['username']);
    }
?>