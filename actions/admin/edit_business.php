<?php
    // if (isset($_POST['edit_business'])) {
        require('../../config/db_con.php');
        require('../../config/db_functions.php');
        $business_logo = $_FILES['business_logo']['name'];
        $user_id = $_POST['user_id'];
        $query = editRecord($_POST, 'business', 'user_id');

        $result = mysqli_query($con, $query);
        if ($result) {
            if($business_logo){
                $fname = uniqid();
        
                $file_name = $_FILES['business_logo']['name'];
                $tmp_location = $_FILES['business_logo']['tmp_name'];
                $file_size = $_FILES['business_logo']['size'];
                $file_error = $_FILES['business_logo']['error'];
                $file_type = $_FILES['business_logo']['type'];

                $allowed = array('jpg', 'jpeg', 'png');
                $new_name = pathinfo($file_name);
                $ext = $new_name['extension'];
                $ext_actual = strtolower($ext);
                if (in_array($ext_actual, $allowed)) {
                    if ($file_error == 0) {
                        if ($file_size < 2000000) {
                            $path = "assets/bus_profile/$fname.$ext_actual";
                            $path_file = "../../assets/bus_profile/$fname.$ext_actual";
                            move_uploaded_file($tmp_location, $path_file);
                            $sql = "UPDATE business SET business_logo ='$path' WHERE user_id = $user_id";
                            mysqli_query($con, $sql);
                        } else {
                            header('location: ../../dashboard.php?p=edit-business&msg=filesizeerror');
                            exit();
                        }
                    } else {
                        header('location: ../../dashboard.php?p=edit-business&msg=uploaderror');
                        exit();
                    }
                } else{
                    header('location: ../../dashboard.php?p=edit-business&msg=filetypeerror');
                    exit();
                }
            }
            header('location: ../../dashboard.php?p=view-business&msg=edit-success');
            exit();
        } else{
            header('location: ../../dashboard.php?p=edit-business&msg=edit-fail');
            exit();
        }



        
        
        

        
        
    // } else {
    //     header('location: ../../dashboard.php?p=edit-business');
    // }