<?php

    // $uid = $_SESSION['uid'];

    // if(!$uid){

    //     session_start();
    //     $_SESSION['error'] = "Access Denied!";
    //     header('Location: ../../index.php');
    //     exit();

    // }

    // $name = $_SESSION['name'];
    // $role = $_SESSION['role'];

    // $db    = new DbController();
    // $data  = $db->dataSearch(array('role_level = "'.$role.'"', 'roles', 'one'));

    echo'   
     <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" 
                               href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/inventory/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Hello <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome you!</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="remixicon-account-circle-line"></i>
                                    <span>My Account</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="remixicon-logout-box-line"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>      

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#" class="logo text-center">
                            <span class="logo-lg">
                                <img src="/inventory/assets/images/logo-light.png" alt="" height="20">
                            </span>
                            <span class="logo-sm">
                                <img src="/inventory/assets/images/logo-sm.png" alt="" height="24">
                            </span>
                        </a>
                    </div>

  
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu" id="home">
                                <a href="#">
                                    <i class="fas fa-home"></i>Home</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="remixicon-user-2-fill"></i>Admin <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>                               
                                            <li>
                                                <a href="#">Manage Users</a>
                                            </li>                              
                                            <li>
                                                <a href="#">Manage Customers</a>
                                            </li>                                
                                            <li>
                                                <a href="#">Manage Vehicles</a>
                                            </li>
                                            <li>
                                                <a href="#">Manage Products</a>
                                            </li>                                    
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="#">Mange Labors</a>
                                            </li>                                
                                            <li>
                                                <a href="#">Manage Employees</a>
                                            </li>
                                            <li>
                                                <a href="#">Manage Purchase</a>
                                            </li>                                
                                            <li>
                                                <a href="#">Manage Requests</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-car"></i>Customers <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">List of Customers</a>
                                    </li>
                                    <li>
                                        <a href="#">List of Vehicles</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-wrench"></i>Services <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">List of Products</a>
                                    </li>
                                    <li>
                                        <a href="#">List of Labor</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-shopping-cart"></i>Purchasing <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Inventory</a>
                                    </li>
                                    <li>
                                        <a href="#">Request Purchase Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Request Return</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fas fa-coins"></i>Sales <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Create Job Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Sales Entry</a>
                                    </li>
                                    <li>
                                        <a href="#">Billing</a>
                                    </li>
                                    <li>
                                        <a href="#">Print Reciept</a>
                                    </li>
                                </ul>
                            </li>
 

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->
    ';

?>