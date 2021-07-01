<?php

function uidExists($conn, $username ) {
    $sql = "SELECT * FROM users WHERE usersUid = ? ;";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);


    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }


    mysqli_stmt_close($stmt);


}



function createUser($conn, $username, $pwd, $email) {
    $sql = "INSERT INTO users (usersUid, usersEmail, usersPwd) VALUES (?, ? , ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

}