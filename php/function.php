<?php

function check_login($con)
{
    if(isset($_SESSION["username"]))
    {
        $id = $_SESSION["username"];
        $query = "select * from user where username = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
    }

    //redict to login page
    header("location: login.php");
    die;
}
?>