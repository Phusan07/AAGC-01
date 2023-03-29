<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php require('head.php'); ?>

<body>
    <?php require('nav.php'); ?>
    <div class="content-wrapper">
        <section class="content">
            <br>
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php
                                    $query = "SELECT COUNT(*) ebook FROM ebook;";
                                    $result = mysqli_query($con, $query);
                                    $ebook = mysqli_fetch_assoc($result);
                                    echo $ebook['ebook']; ?>
                                </h3>

                                <p>จำนวนข้อมูล</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <a href="detail.php" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
        </section>
    </div>

    <?php require('footer.php'); ?>
</body>

</html>