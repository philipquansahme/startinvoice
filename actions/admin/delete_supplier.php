<?php
    require('../../config/db_con.php');
    
    $del_id = $_POST['delete_id'];
    $sql = "DELETE FROM suppliers WHERE supplier_id = $del_id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: ../../dashboard.php?p=manage-suppliers&msg=supplierdeleted");
        exit();
    } else {
        header("location: ../../dashboard.php?p=manage-suppliers&error=sqlerror");
        exit();
    }