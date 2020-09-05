<?php
    require('../../config/db_con.php');
    require('../../config/db_functions.php'); 

    $sql = addRecord($_POST, 'suppliers');
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: ../../dashboard.php?p=manage-suppliers&msg=supplieradd");
        exit();
    } else {
        header("location: ../../dashboard.php?p=add-supplier&error=sqlerror");
        exit();
    }