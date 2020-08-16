<?php
    // if (isset($_POST['edit_business'])) {
        require('../../config/db_con.php');
        require('../../config/db_functions.php');
        $business_logo = $_FILES['business_logo']['name'];
        $query = editRecord($_POST, 'business', 'user_id');

        $result = mysqli_query($con, $query);
        if ($result) {
            if($business_logo){
                
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