<?php
    if (isset($_GET['validate'])) {

        require 'config/db_con.php';

        $verify_selector = $_GET['selector'];
        $verify_token = $_GET['validate'];
        $sql = "SELECT * FROM users WHERE verify_selector = ? LIMIT 1";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $verify_selector);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                header("location: index.php?error=activationerror");
                exit();
            } else {
                if($row['verify_token'] == ''){
                    header("location: index.php?error=activationdonealready");
                    exit();
                } else if ($row['verify_status'] == 0) {
                    $num_of_login = $row['num_of_login'];
                    $tokenbin = hex2bin($verify_token);
                    $check_verify_token = password_verify($tokenbin, $row['verify_token']);
                    if ($check_verify_token === false) {
                        header("location: index.php?error=activationnotfound");
                        exit();
                    } elseif ($check_verify_token === true) {
                        $sql_update = "UPDATE users SET verify_status = ?, num_of_login = ?, last_login = current_timestamp(), verify_token = ? WHERE verify_selector = ?";
                        $stmt_update = mysqli_stmt_init($con);
                        if (!mysqli_stmt_prepare($stmt_update, $sql_update)) {
                            header("location: index.php?error=sqlerror");
                            exit();
                        } else {
                            $verify_status = 1;
                            $num_of_login = $num_of_login + 1;
                            $verify_token = '';
                            mysqli_stmt_bind_param($stmt_update, "iiss", $verify_status, $num_of_login, $verify_token ,$verify_selector);
                            mysqli_stmt_execute($stmt_update);
                            
                            // STARTING SESSIONS
                            session_start();
                            $_SESSION['LOGEIN']='OK';
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['position_id'] = $row['position_id'];
                            $_SESSION['first_name'] = $row['first_name'];  
                            $_SESSION['last_name'] = $row['last_name'];  
                            $_SESSION['email'] = $row['email'];  
                            $_SESSION['phone_number'] = $row['phone_number'];
                            $_SESSION['profile_pic'] = $row['profile_pic'];
                            $_SESSION['num_of_login'] = $row['num_of_login'];
                            $_SESSION['last_login'] = $row['last_login'];
                            $_SESSION['owned_by'] = $row['owned_by'];

                            header("location: dashboard.php?login=activationsuccess");
                            exit();
                        }
                    }
                } else {
                    header("location: index.php?error=activationdonealready");
                    exit();
                }
            }
        }
    }else{
        header('location: index.php?error=loginreq');
    }
?>
