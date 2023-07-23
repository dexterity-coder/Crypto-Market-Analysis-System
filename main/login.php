<?php
session_start();
include 'includes/connection.php';
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $get_rc = mysqli_query($conn, "select * from login where email='$email' and password='$password'") or die(mysqli_error($conn));
    //$num_rows = mysqli_num_rows($get_rc);
    if (mysqli_num_rows($get_rc) > 0) {
        $row = mysqli_fetch_array($get_rc);
        $_SESSION["userid"] = $row["email"];
        $_SESSION["urole"] = $row["role"];
        if($row["role"]=="admin") {
            header("location:admindashboard.php");
        } else {
            header("location:dashboard.php");
        }
    } else {
        echo "<script>alert('Incorrect username or password, please check and try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:54:46 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/favicon.ico">

        <title><?php echo $sitename ?> </title>

        <!-- Vendors Style-->
        <link rel="stylesheet" href="css/vendors_css.css">

        <!-- Style-->  
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin_color.css">	

    </head>

    <body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">

        <div class="container h-p100">
            <div class="row align-items-center justify-content-md-center h-p100">	

                <div class="col-12">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="bg-white rounded10 shadow-lg">
                                <div class="content-top-agile p-20 pb-0">
                                    <h2 class="text-primary"><?php echo $sitename; ?></h2>
                                    <p class="mb-0">Sign in to continue to Market.</p>							
                                </div>
                                <div class="p-40">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                                <input required="" type="text" name="email" class="form-control ps-15 bg-transparent" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                                <input required="" name="password" type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="basic_checkbox_1" >
                                                    <label for="basic_checkbox_1">Remember Me</label>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-6">
                                                <div class="fog-pwd text-end">
                                                    <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 text-center">
                                                <button name="login" type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>	
                                    <div class="text-center">
                                        <p class="mt-15 mb-0">Don't have an account? <a href="auth_register" class="text-warning ms-5">Sign Up</a></p>
                                    </div>	
                                </div>						
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Vendor JS -->
        <script src="js/vendors.min.js"></script>
        <script src="js/pages/chat-popup.js"></script>
        <script src="../assets/icons/feather-icons/feather.min.js"></script>	

    </body>

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:54:46 GMT -->
</html>
