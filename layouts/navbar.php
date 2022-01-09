
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="dashboard.php" class="logo">
                            <img src="public/assets/images/logchik.png" alt="" height="50">
                        </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras topbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">
                            <!-- Fullscreen -->
                            <li class="list-inline-item dropdown notification-list hide-phone">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-fullscreen noti-icon"></i>
                                </a>
                            </li>
                      
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <!-- <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a> -->
                                    <!-- <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
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

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="dashboard.php"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                                <!-- <ul class="submenu">
                                    <li><a href="dashboard.php">Dashboard 1</a></li>
                                </ul> -->
                            </li>


                        
                            <li>
                                <a href="tables-datatable.php" target=""><i class="mdi mdi-cube-outline"></i>Data Table</a>
                                <!-- <a href="../frontend/" target="_blank"><i class="mdi mdi-airplane"></i>Front End</a> -->
                            </li>
                            <li>
                                <a href="production.php" target=""><i class="mdi mdi-factory"></i>Production</a>
                                <!-- <a href="../frontend/" target="_blank"><i class="mdi mdi-airplane"></i>Front End</a> -->
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->