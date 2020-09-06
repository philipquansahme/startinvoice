<?php
    require('../../config/db_con.php');
    // require('../../config/db_functions.php'); 
    $user_id = $_POST['user_id'];
    $customer_name =(isset($_POST['customer_name'])) ? $_POST['customer_name'] : null;
    $customer_email =(isset($_POST['customer_email'])) ? $_POST['customer_email'] : null;
    $customer_phone =(isset($_POST['customer_phone'])) ? $_POST['customer_phone'] : null;
    $billing_address =(isset($_POST['billing_address'])) ? $_POST['billing_address'] : null;
    $shipping_address =(isset($_POST['shipping_address'])) ? $_POST['shipping_address'] : null;



    echo $user_id;


