<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile position-relative" style="background: url(assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="assets/images/users/profile.png" alt="user" class="w-100" /> </div>
            <!-- User profile text-->
            <div class="profile-text pt-1"> 
                <a class="w-100 text-white d-block position-relative"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name']; ?></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Billing Officer</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
					
        
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi fa-user "></i><span class="hide-menu">Administrator</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="?p=billing-officers"
                                class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                    class="hide-menu">Add Staff</span></a></li>
                        <li class="sidebar-item"><a href="?p=business"
                                class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                    class="hide-menu">Manage Staff</span></a></li>
                        <li class="sidebar-item"><a href="#"
                                class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                    class="hide-menu">Delete Staff</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi fa-tasks"></i><span class="hide-menu">Manager</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="inbox-email.html" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
                        <li class="sidebar-item"><a href="inbox-email-detail.html" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail
                                </span></a></li>
                        <li class="sidebar-item"><a href="inbox-email-compose.html" class="sidebar-link"><i
                                    class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i
                            class="mdi mdi-sort-variant" aria-hidden="true"></i><span class="hide-menu">Billing Officer</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="inbox-email.html" class="sidebar-link"><i
                                    class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
                        <li class="sidebar-item"><a href="inbox-email-detail.html" class="sidebar-link"><i
                                    class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail
                                </span></a></li>
                        <li class="sidebar-item"><a href="inbox-email-compose.html" class="sidebar-link"><i
                                    class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose
                                </span></a></li>
                    </ul>
                </li>
				<li class="sidebar-item"><a href="users_module.php" class="sidebar-link"><i
                                    class="mdi fa-industry"></i><span class="hide-menu">Business
                                </span></a></li>
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="authentication-login1.html" aria-expanded="false"><i
                            class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li> -->
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
        <a href="" class="link" data-toggle="tooltip" title="Activity Log"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="actions/auth/logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>