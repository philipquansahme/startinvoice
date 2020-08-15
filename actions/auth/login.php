<?php
    if (isset($_POST['login-submit'])) {
        
        require('../../config/db_con.php');
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            header('location: ../../index.php?error=emptyfields');
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email= ? LIMIT 1";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../../index.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (!mysqli_num_rows($result) == 1) {
                    header('location: ../../index.php?error=nouser');
                    exit();
                }
                if ($row = mysqli_fetch_assoc($result)) {
                    if ($row['verify_status'] !== 1) {
                        header('location: ../../index.php?error=verificationerror');
                        exit();
                    } else {
                        $password_check = password_verify($password, $row['password']);
                        if ($password_check === false) {
                            header('location: ../../index.php?error=wrongpwd');
                            exit();
                        } else if ($password_check === true) {
                            $sql_update = "UPDATE users SET num_of_login = ?, last_login = current_timestamp() WHERE email = ?";
                            $stmt_update = mysqli_stmt_init($con);
                            if (!mysqli_stmt_prepare($stmt_update, $sql_update)) {
                                header("location: index.php?error=sqlerror");
                                exit();
                            } else {
                                $num_of_login = $row['num_of_login'] + 1;
                                
                                mysqli_stmt_bind_param($stmt_update, "is", $num_of_login, $email);
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

                                header('location: ../../dashboard.php?login=success');
                                exit();
                            }

                            // session_start();
                            // $_SESSION['LOGEIN']='OK';
                            // $_SESSION['userID'] = $row['userID'];
                            // $_SESSION['userName'] = $row['userName'];
                            // $_SESSION['email'] = $row['email'];
                            // $_SESSION['userType'] = $row['userType'];
                            // $_SESSION['SID'] = $row['SID'];
                            // $_SESSION['FirstName'] = $row['FirstName'];
                            // $_SESSION['Surname'] = $row['Surname'];

                            
                        } else {
                            header('location: ../../index.php?error=wrongpwd');
                            exit();
                        }
                    }

                }
            }
        }

    } else {
        header('location: ../../index.php');
        exit();
    }