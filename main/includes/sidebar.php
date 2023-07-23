<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">	
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <?php
                    if ($role == "admin") {
                        ?>
                        <li>
                            <a href="admindashboard">
                                <i data-feather="refresh-ccw"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="manageusers">
                                <i data-feather="refresh-ccw"></i>
                                <span>Manage Users</span>
                            </a>
                        </li>

                        <?php
                    } else {
                        ?>
                        <li>
                            <a href="dashboard">
                                <i data-feather="refresh-ccw"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i data-feather="pie-chart"></i>
                                <span>Market Coins</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="bitcoin"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bitcoin BTC/USDT</a></li>
                                <li><a href="etherium"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Etherium ETH/USDT</a></li>
                                <li><a href="ripple"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ripple XRP/USDT</a></li>
                                <li><a href="cardano"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cardano ADA/USDT</a></li>
                                <li><a href="dogecoin"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dogecoin DOGE/USDT</a></li>

                            </ul>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <a href="changepassword">
                            <i data-feather="refresh-ccw"></i>
                            <span>Change Password</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout">
                            <i data-feather="refresh-ccw"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </section>
</aside>