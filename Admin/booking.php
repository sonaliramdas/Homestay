

<?php 
include '../config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     <?php include 'sidebar.php';
     ?> 
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include 'navbar.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
             
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Booking Details</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            
                            <th> From Date</th>
                            <th>To Date</th>
                            <th>Package Id</th>
                            <th>User Id</th>
                            <th>Day</th>
                            <th>People</th>
                            <th>Toal Amount</th>
                            <th>Booking Status</th>
                            <th>Etime</th>
                            <th>Action</th>




                            


                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $stmt=$admin->ret("SELECT * FROM `booking`");
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        ?>
                                        <tr>
                                        <td><?php echo $row['book_date']; ?></td>
                                        <td><?php echo $row['to_date']; ?></td>
                                        <td><?php echo $row['package_id']; ?></td>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['day']; ?></td>
                                        <td><?php echo $row['people']; ?></td>
                                        <td><?php echo $row['total_pay']; ?></td>
                                        <td><?php echo $row['book-status']; ?></td>
                                        <td><?php echo $row['etime']; ?></td>







                                        
                                        <td>
                                        <?php
                                        
                                        if($row['book-status']=='booked'){
                                          ?>
                                          <a href="controller/checkout.php?id=<?php echo $row['book_id'];?>" class=
"btn btn-success">ChekIn</a>


<?php
                                        }else if($row['book-status']=='checked-in'){
                                          ?>
                                                  <a href="controller/checkedout.php?id=<?php echo $row['book_id'];?>" class=
"btn btn-warning">checkout</a>



<?php
                                        }else if($row['book-status']=='checked-out'){
                                          ?>

<a href="#" class=
"btn btn-info">checked out</a>



<?php
                                        }


?>
                                        

</td>

                                     
                                    </tr>

                                  <?php  } ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
           
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        <?php include 'footer.php';
        ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>