<?php
    require('../../config/db_con.php');
    
    $del_id = $_POST['delete_id'];
    $sql = "DELETE FROM users WHERE user_id = $del_id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: ../../dashboard.php?p=manage-users&msg=userdeleted");
        exit();
    } else {
        header("location: ../../dashboard.php?p=manage-users&error=sqlerror");
        exit();
    }