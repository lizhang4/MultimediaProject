<?php

// if (isset($_POST["uid"])) {
//     $username = $_POST["uid"];

//     if (uidExists($conn, $username) !== false) {
//         // header("location: ../index.php?error=usernametaken");
//         $response = "<span style='color: red;'>Not Available.</span>";
//         exit();
//     }
//     else {
//         $response = "<span style='color: green;'>Available.</span>";

//     }
// }


if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // if (emptyInputSignup($username, $email,  $pwd, $pwdRepeat) !== false) {
    //     header("location: ../index.php?error=emptyinput");
    //     exit();
    // }

    // if (invalidUid($username) !== false) {
    //     header("location: ../index.php?error=invaliduid");
    //     exit();
    // }

    // if (invalidEmail($email) !== false) {
    //     header("location: ../index.php?error=invalidemail");
    //     exit();
    // }

    if (uidExists($conn, $username) !== false) {
        // header("location: ../index.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $pwd, $email);
    header("location: ../index.php");


}



else {
    header("location: ../index.php");
}
