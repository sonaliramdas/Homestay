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
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
            <div class="page-header" style="margin-left:400px;">
              
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
               
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card" style="margin-left:250px;" >
                <div class="card">
                  <div class="card-body">
                   <h3> Add Activity Details</h3>
                   <br>
             <form action="controller/addactivity1.php" method="POST" enctype="multipart/form-data">
                    
                      <div class="form-group">
                        <label for="exampleInputUsername1">Activity Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Package Name</label>
                        <select name="pack" id="" class="form-control" >
                              <option selected disabled >Select Category type</option>

                              <?php $stmt=$admin->ret("SELECT * FROM `package`");
                              while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                              {
                                ?>
                              

                              <option value="<?php echo $row['pid']; ?>"> <?php echo $row['pname']  ?> </option>


                              
                              <?php } ?>

                            </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Activity Description</label>
                        <input type="text" name="desc" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Activity Image</label>
                        <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                      </div>
                     
                     
                     
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Add</button>
                      
                    </form>
                  </div>
                </div>
              </div>
              
             
             
             
                     
            
             
             
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include 'footer.php';
         ?>s
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
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>