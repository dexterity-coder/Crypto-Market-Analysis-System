
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row" style="background-image: url('../images/bg.jpg')">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <?php
                    $num_stores = mysqli_num_rows(mysqli_query($conn, "select * from information"));
                    ?>
                    <span class="info-box-text">Total Children</span>
                    <span class="info-box-number"><?php echo $num_stores; ?></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                    <?php
                    $num_members = mysqli_num_rows(mysqli_query($conn, "select * from information"));
                    ?>
                    <span class="info-box-text">Total Children Info</span>
                    <span class="info-box-number"><?php echo $num_members; ?></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

</section><!-- /.content -->