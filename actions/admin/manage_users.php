<?php
    // if (isset($_POST['edit_business'])) {
        require('../../config/db_con.php');
        require('../../config/db_functions.php'); 

        $position_id = $_POST['position_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $force_password = (isset($_POST['force_password'])) ? $_POST['force_password'] : null;
        $owned_by = $_POST['owned_by'];

        $sql = "SELECT * FROM users WHERE email = ? OR phone_number = ?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../dashboard.php?p=manage-users&error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $phone_number);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if ($result > 0) {
                header("location: ../../dashboard.php?p=manage-users&error=acctexist");
                exit();
            }
            $sql_insert = "INSERT INTO users(position_id, first_name, last_name, email, phone_number, password, force_password, owned_by, verify_status) VALUES (?,?,?,?,?,?,?,?,?)"; 
            $stmt_insert = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt_insert, $sql_insert)) {
                header("location: ../../dashboard.php?p=manage-users&error=sqlerror");
                exit();
            } else {
                $verify_status = 1;
                $hashed_password = password_hash($password, PASSWORD_ARGON2I);
                mysqli_stmt_bind_param($stmt_insert, "isssssssi", $position_id, $first_name, $last_name, $email, $phone_number, $hashed_password, $force_password, $owned_by, $verify_status);
                mysqli_stmt_execute($stmt_insert);

                $sql_bus = "SELECT * FROM business WHERE user_id = $owned_by";
                $result = mysqli_query($con, $sql_bus);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                } else {
                    $row = null;
                }

                $business_name = $row['business_name'];
                
                include '../../emails/send_added_user.php';
                include '../../sms/sms.php';
                
                sendAddedUser($first_name.' '.$last_name, $email, $password, $business_name);

                $sms_message = "Hello $first_name, You've been added to $business_name. Kindly check your email to login to your account.";
                sendSMS($phone_number, $sms_message);

                header("location: ../../dashboard.php?p=manage-users&msg=useradded");
                exit();

            }


        }



    // } else {

    // }
