<?php
    include "./includes/dbh.inc.php";

    if(isset($_POST['uid'])) {
        $username = $_POST("uid");

        $query = "select count(*) as allcount from users where username='".$username."' ";
        $result = mysqli_query($conn, $query);

        $response = "<span style='color: red;'>Available.</span>";

        if(mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);

            $count = $row['allcount'];
            if($count > 0) {
                $response = "<span style='color: red;'>Not Available.</span>";
            }

        }

        echo $response;
        die;

    }