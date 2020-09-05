<?php
    require('../../config/db_con.php');
    require('../../config/db_functions.php'); 

    $sql = editRecord($_POST, 'users', 'user_id');

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: ../../dashboard.php?p=manage-users&msg=useredited");
        exit();
    } else {
        header("location: ../../dashboard.php?p=edit-user&error=editfailed");
        exit();
    }