<?php
    require('../../config/db_con.php');
    // require('../../config/db_functions.php'); 
    $user_id = $_POST['user_id'];
    $customer_name =(isset($_POST['customer_name'])) ? $_POST['customer_name'] : null;
    $customer_email =(isset($_POST['customer_email'])) ? $_POST['customer_email'] : null;
    $customer_phone =(isset($_POST['customer_phone'])) ? $_POST['customer_phone'] : null;
    $billing_address =(isset($_POST['billing_address'])) ? $_POST['billing_address'] : null;
    $shipping_address = (isset($_POST['shipping_address'])) ? $_POST['shipping_address'] : null;


    $sql_customers = "INSERT INTO customers (user_id, customer_name, customer_email, customer_phone, billing_address) VALUES ($user_id, '$customer_name', '$customer_email', '$customer_phone', '$billing_address')";

    $result = mysqli_query($con, $sql_customers);
    $customer_id = mysqli_insert_id($con);

    if ($shipping_address != null) {
        $sql_shipping = "INSERT INTO shipping_address(shipping_address, customer_id) VALUES ('$shipping_address', $customer_id)";
        $result = mysqli_query($con, $sql_shipping);
        $shipping_address_id = mysqli_insert_id($con);
        $sql_update_customers = "UPDATE customers SET shipping_address_id = $shipping_address_id WHERE customer_id = $customer_id";
        $result = mysqli_query($con, $sql_update_customers);
    }

    if ($result) {
        header("location: ../../dashboard.php?p=manage-customers&msg=customeradd");
        exit();
    } else {
        header("location: ../../dashboard.php?p=add-customers&error=sqlerror");
        exit();
    }


