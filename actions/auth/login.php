<?php
    if (isset($_POST['login-submit'])) {
        require('../../includes/db/db_con.php');
        if ($con) {
            echo "Connected";
        } else {
            echo "Not Connected";
        }

        // $username = $_POST['userName'];
        // $password = $_POST['password'];

        // if (empty($username) || empty($password)) {
        //     header('location: ../index.php?error=emptyfields');
        //     exit();
        // } else {
        //     $sql = "SELECT * FROM users WHERE userName=? OR email=?";
        //     $stmt = mysqli_stmt_init($con);
        //     if (!mysqli_stmt_prepare($stmt, $sql)) {
        //         header("location: ../index.php?error=sqlerror");
        //         exit();
        //     } else {
        //         mysqli_stmt_bind_param($stmt, "ss", $username, $username);
        //         mysqli_stmt_execute($stmt);
        //         $result = mysqli_stmt_get_result($stmt);
        //         $row = mysqli_fetch_assoc($result);
        //         if (mysqli_num_rows($result) == 1) {
        //             $password_check = password_verify($password, $row['password']);
        //             if ($password_check == false) {
        //                 header('location: ../index.php?error=wrongpwd');
        //                 exit();
        //             } else if($password_check == true) {
        //                 session_start();
        //                 $_SESSION['LOGEIN']='OK';
        //                 $_SESSION['userID'] = $row['userID'];
        //                 $_SESSION['userName'] = $row['userName'];
        //                 $_SESSION['email'] = $row['email'];
        //                 $_SESSION['userType'] = $row['userType'];
        //                 $_SESSION['SID'] = $row['SID'];
        //                 $_SESSION['FirstName'] = $row['FirstName'];
        //                 $_SESSION['Surname'] = $row['Surname'];

        //                 header('location: ../dashboard.php?login=success');
        //                 exit();
        //             } else {
        //                 header('location: ../index.php?error=wrongpwd');
        //                 exit();
        //             }
        //         } else {
        //             header('location: ../index.php?error=nouser');
        //             exit();
        //         }
                
        //     }
        // }

    } else {
        header('location: ../../index.php');
        exit();
    }