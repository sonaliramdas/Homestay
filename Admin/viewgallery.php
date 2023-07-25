
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
                    <h4 class="card-title">Gallery Details</h4>
                    
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            
                            <th> Gallery Name</th>
                            <th>Gallery Image</th>
                            <th> Delete</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $stmt=$admin->ret("SELECT * FROM `gallery`");
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        ?>
                                        <tr>
                                        <td><?php echo $row['gadesc']; ?></td>
                                        
                                        <td><img src="controller/<?php echo $row['gaimg']; ?>" style="width:200px; height:200px;"></td>

                                        

                                        <td><a href="../admin/controller/deletegallery.php?id=<?php echo $row['gaid'];?>" class=
"btn btn-danger">Delete</a></td>

                                     
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