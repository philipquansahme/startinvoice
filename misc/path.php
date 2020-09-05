<?php
    $p = (isset($_GET['p'])) ? $_GET['p'] : 'board';
    switch ($p) {
        case 'board':
            $page_title = 'Dashboard: Start Invoice';
            $content_title = 'Dashboard';
            $content_path = 'pages/board.php';
            break;
        case 'generate-invoice':
            $page_title = 'Generate Invoice: Start Invoice';
            $content_title = 'Generate Invoice';
            $content_path = 'pages/admin/generate_invoice.php';
            break;
        case 'view-invoices':
            $page_title = 'View Invoices: Start Invoice';
            $content_title = 'View Invoices';
            $content_path = 'pages/admin/view_invoices.php';
            break;
        case 'invoice-reports':
            $page_title = 'Invoice Reports: Start Invoice';
            $content_title = 'Invoice Reports';
            $content_path = 'pages/admin/invoice_reports.php';
            break;
        case 'edit-business':
            $page_title = 'Edit Business Details: Start Invoice';
            $content_title = 'Edit Business Details';
            $content_path = 'pages/admin/edit_business.php';
            break;
        case 'view-business':
            $page_title = 'View Business Details: Start Invoice';
            $content_title = 'View Business Details';
            $content_path = 'pages/admin/view_business.php';
            break;
        case 'manage-users':
            $page_title = 'Manage Users: Start Invoice';
            $content_title = 'Manage Users';
            $content_path = 'pages/admin/manage_users.php';
            break;
        case 'add-user':
            $page_title = 'Add User: Start Invoice';
            $content_title = 'Add User';
            $content_path = 'pages/admin/add_manage_users.php';
            break;
        case 'edit-user':
            $page_title = 'Edit User: Start Invoice';
            $content_title = 'Edit User';
            $content_path = 'pages/admin/edit_manage_users.php';
            break;
        case 'manage-customers':
            $page_title = 'Manage Customers: Start Invoice';
            $content_title = 'Manage Customers';
            $content_path = 'pages/admin/manage_customers.php';
            break;
        case 'add-customers':
            $page_title = 'Add Customers: Start Invoice';
            $content_title = 'Add Customers';
            $content_path = 'pages/admin/add_customers.php';
            break;
        case 'add-supplier':
            $page_title = 'Add Supplier: Start Invoice';
            $content_title = 'Add Supplier';
            $content_path = 'pages/admin/add_supplier.php';
            break;
        case 'manage-suppliers':
            $page_title = 'Manage Suppliers: Start Invoice';
            $content_title = 'Manage Suppliers';
            $content_path = 'pages/admin/manage_suppliers.php';
            break;
        case 'add-product':
            $page_title = 'Add Products: Start Invoice';
            $content_title = 'Add Products';
            $content_path = 'pages/admin/add_product.php';
            break;
        case 'manage-products':
            $page_title = 'Manage Products: Start Invoice';
            $content_title = 'Manage Products';
            $content_path = 'pages/admin/manage_products.php';
            break;
        case 'product-categories':
            $page_title = 'Manage Products: Start Invoice';
            $content_title = 'Manage Products';
            $content_path = 'pages/admin/product_categories.php';
            break;
    }
