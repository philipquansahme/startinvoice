<?php
    if (isset($_POST['sign-up-submit'])) {
        require('../../config/db_con.php');
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $business = $_POST['business'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $password_confirm = $_POST['passwordConfirm'];
        $verification_selector = bin2hex(random_bytes(8));
        $verification_token = random_bytes(32);
        
        if (empty($first_name) || empty($last_name)|| empty($email) || empty($business) || empty($phone) || empty($password) || empty($password_confirm) ) {
            header("location: ../../sign_up.php?error=emptyfields");
            exit();
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../../sign_up.php?error=invalidemail");
            exit();
        } else if(strlen($password) < 8){
            header("location: ../../sign_up.php?error=passwordshort");
            exit();
        } else if($password !== $password_confirm){
            header("location: ../../sign_up.php?error=passwordcheck");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email = ? OR phone_number = ?";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../../sign_up.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $result = mysqli_stmt_num_rows($stmt);
                if ($result > 0) {
                    header("location: ../../sign_up.php?error=acctexist");
                    exit();
                }
                $sql_business = "SELECT * FROM business WHERE business_name = ?";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $sql_business)) {
                    header("location: ../../sign_up.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $business);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $result_business = mysqli_stmt_num_rows($stmt);
                    if ($result_business > 0) {
                        header("location: ../../sign_up.php?error=busnameexist");
                        exit();
                    }
                    $sql_insert = "INSERT INTO users(first_name, last_name, email, phone_number, password, verify_token, verify_selector, profile_pic) VALUES(?,?,?,?,?,?,?,?)";
                    $stmt_insert = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt_insert, $sql_insert)) {
                        header("location: ../../sign_up.php?error=sqlerror");
                        exit();
                    } else {
                        $default_profile = "assets/profile/default.jpg";
                        $hashed_password = password_hash($password, PASSWORD_ARGON2I);
                        $hashed_verification_token = password_hash($verification_token, PASSWORD_ARGON2I);
                        mysqli_stmt_bind_param($stmt_insert, "ssssssss", $first_name, $last_name, $email, $phone, $hashed_password, $hashed_verification_token, $verification_selector, $default_profile);
                        mysqli_stmt_execute($stmt_insert);
                        $id = mysqli_stmt_insert_id($stmt_insert);
                        $sql_business_name = "INSERT INTO business(user_id, business_name, business_logo) VALUES (?, ?, ?)";
                        $stmt_business_name = mysqli_stmt_init($con);
                        if (!mysqli_stmt_prepare($stmt_business_name, $sql_business_name)) {
                            header("location: ../../sign_up.php?error=busnameexist");
                            exit();
                        } else {
                            include_once '../../misc/make_avatar.php';
                            $avatar_url = make_avatar($business[0]);
                            mysqli_stmt_bind_param($stmt_business_name, "iss", $id, $business, $avatar_url);
                            mysqli_stmt_execute($stmt_business_name);
                            include '../../emails/send_activation.php';
                            include '../../sms/sms.php';
                            
                            $sms_msg = "Hello ".$first_name.", Thanks for registering ".$business.". Kindly check your mail to activate account.";

                            sendAccountVerfication(bin2hex($verification_token), $verification_selector, $business, $first_name.' '.$last_name, $email);
                            sendSMS($phone, $sms_msg);
                            header("location: ../../index.php?signup=success&email=$email");
                            exit();
                            
                            
                        }
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
        
    }else {
        header('location: ../../sign_up.php');
        exit();
    }