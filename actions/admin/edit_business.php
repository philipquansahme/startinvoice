<?php
    if (isset($_POST['edit_business'])) {
        require('../../config/db_con.php');
        
    } else {
        header('location: ../../dashboard.php?p=edit-business');
    }