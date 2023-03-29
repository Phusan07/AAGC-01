<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>รายละเอียด</title>
<?php require('head.php');?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('nav.php');?>

    <div class="content-wrapper">
        <br>
        <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">รายละเอียด</h1>
        <br>
        <?php
        include('server/conadmin.php');
        $sql="select*from ebook";
        $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
        ?>
       <section class="content">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">ชื่อ</th>
                    <th class="th-sm">นามสกุล</th>
                    <th class="th-sm">E-mail</th>                                
                    <th class="th-sm">เบอร์โทร</th>                                                           
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                  while($rowdata=mysqli_fetch_array($runsql))
                  {
                ?>
                <td><?php echo $rowdata['firstname'];?></td>
                <td><?php echo $rowdata['lastname'];?></td>
                <td><?php echo $rowdata['email'];?></td>
                <td><?php echo $rowdata['tel'];?></td>
                </tr>
                <?php
                  }
                   mysqli_close($con);
                ?>
              
                </tbody>
            </table>  

            </div>
        </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        
        </div>
<?php require('footer.php');?>
</body>
</html>