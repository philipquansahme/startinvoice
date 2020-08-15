<?php
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'board';
    switch ($p) {
        case 'board':
            $page_title = 'Dashboard: Start Invoice';
            $content_title = 'Dashboard';
            $content_path = 'pages/board.php';
            break;
        case 'users-module':
            $page_title = 'Dashboard: Start Invoice';
            $content_title = 'Dashboard';
            $content_path = 'pages/users_module.php';
            break;
        case 'users-info':
            $page_title = 'User Info: Start Invoice';
            $content_title = 'User Info';
            $content_path = 'pages/users_info.php';
            break;
        case 'manager-info':
            $page_title = 'Manager Info: Start Invoice';
            $content_title = 'Manager Info';
            $content_path = 'pages/manager_info.php';
            break;
        case 'business':
            $page_title = 'Business: Start Invoice';
            $content_title = 'Business';
            $content_path = 'pages/business.php';
            break;
        case 'billing-officers':
            $page_title = 'Billing Officers: Start Invoice';
            $content_title = 'Billing Officers';
            $content_path = 'pages/billing_officers.php';
            break;
    }
