<?php
    include_once ('config/db_con.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM business WHERE user_id = $user_id";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $row = null;
    }
    if (isset($row['business_name'])) {
        $business_name = $row['business_name'];
    } else {
        $business_name = null;
    }
    if (isset($row['business_logo'])) {
        $business_logo = $row['business_logo'];
    } else {
        $business_logo = null;
    }
?>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url(assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?php echo $business_logo; ?>" alt="<?php echo $business_name; ?>" class="w-100" style="border-radius: 50%;" /> </div>
            <!-- User profile text-->
            <div class="profile-text pt-1"> 
                <a class="w-100 text-white d-block position-relative"><?php echo $business_name; ?></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Business Owner</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="?p=board"
                        aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-ungroup"></i><span class="hide-menu">Invoices</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=generate-invoice"
                                class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                    class="hide-menu">Generate Invoice</span></a></li>
                        <li class="sidebar-item"><a href="?p=view-invoices"
                                class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                    class="hide-menu">View Invoices</span></a></li>
                        <li class="sidebar-item"><a href="?p=invoice-reports"
                                class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                    class="hide-menu">Invoice Reports</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-cart-plus"></i><span class="hide-menu">Products</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=add-product"
                                class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                    class="hide-menu">Add Product</span></a></li>
                        <li class="sidebar-item"><a href="?p=manage-products"
                                class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                    class="hide-menu">Manage Products</span></a></li>
                        <li class="sidebar-item"><a href="?p=product-categories"
                                class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                    class="hide-menu">Product Categories</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-account-switch"></i><span class="hide-menu">Customers</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=add-customers" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Add Customer </span></a></li>
                        <li class="sidebar-item"><a href="?p=manage-customers" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> Manage Customers
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-truck-delivery"></i><span class="hide-menu">Suppliers</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=add-supplier" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Add Supplier </span></a></li>
                        <li class="sidebar-item"><a href="?p=manage-suppliers" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> Manage Suppliers
                                </span></a></li>
                    </ul>
                </li>
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="?p=manage-users" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span
                        class="hide-menu">Users</span></a></li> -->
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-account-multiple-plus" aria-hidden="true"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=add-user" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Add Users</span></a></li>
                        <li class="sidebar-item"><a href="?p=manage-users" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> Manage Users
                                </span></a></li>
                        
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi fa-industry" aria-hidden="true"></i><span class="hide-menu">Business Details</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=edit-business" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Edit Details</span></a></li>
                        <li class="sidebar-item"><a href="?p=view-business" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> View Details
                                </span></a></li>
                        
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Profile Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Activity Log"><i class="mdi mdi-sort-variant"></i></a>
        <!-- item-->
        <a href="actions/auth/logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>