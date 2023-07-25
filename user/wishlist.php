<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
include '../config.php';
$admin=new Admin();
$id=$_GET['pid'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
    
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
<?php include 'navbar.php';
?>
    <div
      class="hero page-inner overlay"
      style="background-image: url('images/front3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Book Now</h1>
            <form action="controller/booking.php" method="POST" enctype="multipart/form-data">

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-4 mb-5 mb-lg-0"
            data-aos="fade-up"
            data-aos-delay="100"
          >
           


    

             
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" style="margin-left:150px;">
            <form action="#">
              <div class="row">
           
                
                <div class="col-12 mb-3">
                <b><label>From Date</label></b>
                <input type="hidden" name="pid" value="<?php echo $id;?>">
                  <input
                    type="date"
                    class="form-control"
                    placeholder="From"
                    name="date1"
                  />
                </div>
                <div class="col-12 mb-3">
                  <b><label>To Date</label></b>
                  <input
                    type="Date"
                    class="form-control"
                    placeholder="To"
                    name="date2"
                  />
                </div>

                <div class="col-12 mb-3">
                  <input id="no" onchange="validate(this.value)"
                    type="number"
                    class="form-control"
                    placeholder="Enter No of People"
                    name="people"
                    
                  />
                </div>


               
                
               <center><a href="wishlist.php?id=">
                  <input 
                    type="submit"
                    value="Book Now"
                    class="btn btn-primary"
                    name="submit"
                 
                  />
                  </a>
                </div></center>
                <script>
                  function validate(value)
                  {
                    if(value>6)
                    {
                      alert("Please enter the value less than 4");
                      document.getElementById("no").value="";
                    }
                  }
                  </script>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.untree_co-section -->

   <?php include 'footer.php';
   ?>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
