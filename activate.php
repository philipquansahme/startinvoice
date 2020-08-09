<?php
    if (isset($_GET['validate'])) {

        require 'config/db_con.php';

        $verify_token = $_GET['validate'];
        $sql = "SELECT * FROM users WHERE verify_token = ? LIMIT 1";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $verify_token);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if (!$result) {
                header("location: index.php?error=activationerror");
                exit();
            } else {
                $sql_update = "UPDATE users SET verify_status = ?, num_of_login = ?, last_login = current_timestamp() WHERE verify_token = ?";
                $stmt_update = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt_update, $sql_update)) {
                    header("location: index.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "iis", 1, 1, $verify_token);
                    mysqli_stmt_execute($stmt);
                    header("location: dashboard.php?login=activationsuccess");
                    exit();
                }
            }
        }
    }else{
        header('location: index.php?error=loginreq');
    }