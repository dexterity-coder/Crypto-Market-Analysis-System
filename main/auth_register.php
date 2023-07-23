<?php
session_start();
include 'includes/connection.php';
if (isset($_POST["reg"])) {
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $mid = "MRM-" . date("Y-ihs");
    $insert = mysqli_query($conn, "insert into members values('$mid','$fullname','$email','$phone')") or die(mysqli_error($conn));

    if ($insert) {
        $inser_login = mysqli_query($conn, "insert into login values('$mid','$email','$password','user')") or die(mysqli_error($conn));
        if ($inser_login) {
            echo "<script>alert('User registration successfull!'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Ooopss! registration unsuccesfull! pls try after some minutes');</script>";
        }
    } else {
        echo "<script>alert('User registration unsuccesfull! pls try after some minutes');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:54:46 GMT -->
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

        <!-- Style-->  
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin_color.css">	

    </head>

    <body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">

        <div class="container h-p100">
            <div class="row align-items-center justify-content-md-center h-p100">

                <div class="col-12">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="bg-white rounded10 shadow-lg">
                                <div class="content-top-agile p-20 pb-0">
                                    <h2 class="text-primary"><?php echo $sitename; ?></h2>
                                    <p class="mb-0">Register a new membership</p>							
                                </div>
                                <div class="p-40">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                                <input required="" name="fullname" type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                                <input required="" name="email" type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                                <input required="" name="phone" type="text" class="form-control ps-15 bg-transparent" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                                <input required="" name="password" type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="basic_checkbox_1" >
                                                    <label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 text-center">
                                                <button type="submit" name="reg" class="btn btn-info margin-top-10">SIGN IN</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>				
                                    <div class="text-center">
                                        <p class="mt-15 mb-0">Already have an account?<a href="login" class="text-danger ms-5"> Sign In</a></p>
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

    <!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 13:54:46 GMT -->
</html>
