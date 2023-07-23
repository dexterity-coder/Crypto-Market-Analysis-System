<?php
session_start();
include 'includes/connection.php';
$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "";

if (!$_SESSION) {
    header("location:login.php");
}



if (isset($_POST["submit"])) {
    $op = $_POST["op"];
    $np = $_POST["np"];
    $cp = $_POST["cp"];

    // $curr_pass = mysqli_fetch_array(mysqli_query($conn, "select * from login where username='$userid'"));// or die(mysqli_error($conn));
    $get_curr_pass = mysqli_query($conn, "select * from login where email='$userid'") or die(mysqli_error($conn));
    $curr_pass = mysqli_fetch_array($get_curr_pass);
    $pass = $curr_pass["password"];
    if ($op == $pass) {
        if ($np == $cp) {
            $update_pass = mysqli_query($conn, "update login set password='$np' where email='$userid'") or die(mysqli_error($conn));
            if ($update_pass) {
                echo "<script>alert('password changed successfully')</script>";
            }
        } else {
            echo "<script>alert('new password doesnt match confirm password!')</script>";
        }
    } else {
        echo "<script>alert('incorrect old password, please try after some minute')</script>";
    }
}
?>
﻿<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:50:02 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/favicon.ico">

        <title><?php echo $sitename; ?> </title>

        <!-- Vendors Style-->
        <link rel="stylesheet" href="css/vendors_css.css">
        <!--amcharts -->
        <link href="../../../../www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />

        <!-- Style-->  
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin_color.css">

    </head>

    <body class="hold-transition dark-skin sidebar-mini theme-warning fixed">

        <div class="wrapper">
            <div id="loader"></div>

            <?php
            include 'includes/header.php';
            ?>

            <?php
            include 'includes/sidebar.php';
            ?>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->
                    <section class="content">			
                        <div class="row">
                            <div class="col-12">
                                <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>

                                <div class="box">
                                    <div class="box-body">
                                        <ul id="webticker-1">
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">BCH/BTC</h5>
                                                        <p class="text-danger">-2.24%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.04886</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">REP/USD</h5>
                                                        <p class="text-danger">-2.57%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$20.12</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">EOS/USD</h5>
                                                        <p class="text-success">+1.54%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$4.755</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ZRX/USD</h5>
                                                        <p class="text-danger">-1.33%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.26877</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ETH/USD</h5>
                                                        <p class="text-success">+0.57%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$159.73</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">LTC/USD</h5>
                                                        <p class="text-success">+1.30%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$73.42</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ETC/USD</h5>
                                                        <p class="text-danger">-0.19%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$5.719</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">BCH/USD</h5>
                                                        <p class="text-success">+0.42%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$267.72</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">XRP/USD</h5>
                                                        <p class="text-danger">-0.50%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.2974</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">BTC/USD</h5>
                                                        <p class="text-success">+3.15%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$5,497.49</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">REP/USD</h5>
                                                        <p class="text-danger">-2.52%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$20.13</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">EOS/USD</h5>
                                                        <p class="text-success">+1.58%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$4.757</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ZRX/USD</h5>
                                                        <p class="text-danger">-2.07%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.268135</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ETH/USD</h5>
                                                        <p class="text-success">+0.47%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$159.55</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">LTC/USD</h5>
                                                        <p class="text-success">+1.28%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$73.40</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">ETC/USD</h5>
                                                        <p class="text-danger">-0.44%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$5.715</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">BCH/USD</h5>
                                                        <p class="text-success">+0.43%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$268.00</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">XRP/USD</h5>
                                                        <p class="text-danger">-0.54%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.2970</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">BTC/USD</h5>
                                                        <p class="text-success">+3.00%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$5,490.01</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li> 
                                            <li class="be-1">
                                                <div class="mx-20">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="me-40">XLM/USD</h5>
                                                        <p class="text-danger">-0.97%</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="my-0 me-40">$0.099065</h4>
                                                        <span class="sparklines">8,4,0,0,1,4,4,10,10,0,0,4,6,5,9,10</span>
                                                    </div>
                                                </div>
                                            </li>  

                                        </ul>
                                    </div>
                                </div>
                            </div>





                            <div class="col-xl-8 col-12">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Change Password</h4>
                                </div>

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <form method="post" action="">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Old Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" name="op" placeholder="Old Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">New Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="np" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="password" name="cp" placeholder="Confirm Password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>


                            </div>





                            <div class="col-xl-4 col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Live Coin Analytics</h4>
                                        <div class="box-controls pull-right">
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="table-responsive buy-sall-table">
                                            <div class="widget">
                                                <div style="height:433px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Cryptocurrency Converter </h4>
                                        <div class="box-controls pull-right">
                                        </div>
                                    </div>
                                    <div class="box-body p-0">
                                        <div class="table-responsive buy-sall-table">
                                            <div class="widget">
                                                <div style="width: 380px; height:335px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;margin: 0;width: 380px;padding:1px;padding: 0px; margin: 0px;"><div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="380" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->
            <?php include 'includes/footer.php'; ?>


            <!-- /.control-sidebar -->

            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->


        <!-- Page Content overlay -->


        <!-- Vendor JS -->
        <script src="js/vendors.min.js"></script>
        <script src="js/pages/chat-popup.js"></script>
        <script src="../assets/icons/feather-icons/feather.min.js"></script>	

        <script src="../../../../www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
        <script src="../../../../www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>	
        <script src="../assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>

        <!-- Crypto Admin App -->
        <script src="js/template.js"></script>
        <script src="js/pages/dashboard2.js"></script>
        <script src="js/pages/dashboard2-chart.js"></script>

    </body>

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:50:25 GMT -->
</html>
