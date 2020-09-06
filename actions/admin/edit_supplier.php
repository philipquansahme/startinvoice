<?php
    require '../../config/db_con.php';
    require '../../config/db_functions.php';

    $sql = editRecord($_POST, 'suppliers', 'supplier_id');

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: ../../dashboard.php?p=manage-suppliers&msg=supplieredited");
        exit();
    } else {
        header("location: ../../dashboard.php?p=edit-supplier&error=editfailed");
        exit();
    }
