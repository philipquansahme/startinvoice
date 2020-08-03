<?php
    if (isset($_POST['sign-up-submit'])) {
        require('../../includes/db/db_con.php');
        if ($con) {
            echo "Connected";
        } else {
            echo "Not Connected";
        }
        // $staffid = $_POST['staffID'];
        // $first_name = $_POST['FirstName'];
        // $last_name = $_POST['Surname'];
        // $staffid = $_POST['staffID'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $password_confirm = $_POST['passwordConfirm'];
        // $user_type = $_POST['userType'];

        // if (empty($staffid) || empty($email) || empty($password) || empty($password_confirm) || empty($user_type)) {
        //     header("location: ../sign_up.php?error=emptyfields&sid=$staffid&mail=$email");
        //     exit();
        // } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[0-9]*$/", $staffid)){
        //     header("location: ../sign_up.php?error=invalidemail");
        //     exit();
        // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     header("location: ../sign_up.php?error=invalidemail&sid=$staffid");
        //     exit();
        // } else if (!preg_match("/^[0-9]*$/", $staffid)) {
        //     header("location: ../sign_up.php?error=invalidsid&mail=$email");
        //     exit();
        // } else if(strlen($password) < 8){
        //     header("location: ../sign_up.php?error=passwordshort&sid=$staffid&mail=$email");
        //     exit();
        // } else if($password !== $password_confirm){
        //     header("location: ../sign_up.php?error=passwordcheck&sid=$staffid&mail=$email");
        //     exit();
        // } else {
        //     $sql = "SELECT * FROM staffid WHERE staffID=?";
        //     $stmt = mysqli_stmt_init($con);
        //     if (!mysqli_stmt_prepare($stmt, $sql)) {
        //         header("location: ../sign_up.php?error=sqlerror");
        //         exit();
        //     } else {
        //         mysqli_stmt_bind_param($stmt, "s", $staffid);
        //         mysqli_stmt_execute($stmt);
        //         $result = mysqli_stmt_get_result($stmt);
        //         if ($row = mysqli_fetch_assoc($result)) {
        //             if ($row['status'] == 'active') {
        //                 header("location: ../sign_up.php?error=sidactive");
        //                 exit();
        //             } elseif ($row['staffID'] && $row['status'] == 'inactive') {
        //                 $sql_insert = "INSERT INTO users (userName, email, password, userType, SID, FirstName, Surname) VALUES (?,?,?,?,?,?,?)";
        //                 $stmt_insert = mysqli_stmt_init($con);
        //                 if (!mysqli_stmt_prepare($stmt_insert, $sql_insert)) {
        //                         header("location: ../sign_up.php?error=sqlerror");
        //                         exit();
        //                     } else {
        //                         $user_name = $row['staffID'];
        //                         $hashed_password = password_hash($password, PASSWORD_ARGON2I);
        //                         $sid = $row['SID'];
        //                         mysqli_stmt_bind_param($stmt_insert, "ssssiss", $user_name, $email, $hashed_password, $user_type, $sid, $first_name, $last_name);
        //                         mysqli_stmt_execute($stmt_insert);
        //                         $sql_update = "UPDATE staffid SET status=? WHERE SID=?";
        //                         $stmt_update = mysqli_stmt_init($con);
        //                         if (!mysqli_stmt_prepare($stmt_update, $sql_update)) {
        //                             header("location: ../sign_up.php?error=sqlerror");
        //                             exit();
        //                         } else {
        //                             $msg_update = "active";
        //                             mysqli_stmt_bind_param($stmt_update, "si", $msg_update,$sid);
        //                             mysqli_stmt_execute($stmt_update);
        //                             header("location: ../index.php?signup=success");
        //                             exit();
        //                         }
        //                         // $sql_personal_details = "INSERT INTO personaldetails (Surname, FirstName, SID) VALUES (?,?,?)";
        //                         // $stmt_personal_details = mysqli_stmt_init($con);
        //                         // if (!mysqli_stmt_prepare($stmt_personal_details, $sql_personal_details)) {
        //                         //     header("location: ../sign_up.php?error=sqlerror");
        //                         //     exit();
        //                         // } else {
        //                         //     mysqli_stmt_bind_param($stmt_personal_details, "ssi", $first_name, $last_name, $sid);
        //                         //     mysqli_stmt_execute($stmt_personal_details);
                                    
        //                         // }
        //                     }
        //             }
        //         }else {
        //             header("location: ../sign_up.php?error=sidnotfound");
        //             exit();
        //         }
                // $result_check = mysqli_stmt_num_rows($stmt);
                // if ($result_check > 0) {
                //     header("location: ../sign_up.php?error=usertaken&mail=$email");
                //     exit();
                // } else {
                //     $sql = "INSERT INTO users (staffid, email, password, userType, SID) VALUES (?,?,?,?,?)";
                //     $stmt = mysqli_stmt_init($con);
                //     if (!mysqli_stmt_prepare($stmt, $sql)) {
                //         header("location: ../sign_up.php?error=sqlerror");
                //         exit();
                //     } else {
                //         $hashed_password = password_hash($password, PASSWORD_ARGON2I);
                //         mysqli_stmt_bind_param($stmt, "ssssi", $staffid, $email, $hashed_password, $user_type, $sid);
                //         mysqli_stmt_execute($stmt);
                //         header("location: ../dashboard.php?signup=success");
                //         exit();
                //     }
                // }
        //     }
        // }
        // mysqli_stmt_close($stmt);
        // mysqli_close($con);
        
    }else{
        header('location: ../../sign_up.php');
        exit();
    }