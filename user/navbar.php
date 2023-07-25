<nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start">River Edge Homestay</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="index.php">Home</a></li>
              
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="package.php">Packages</a></li>
              <li><a href="tourist.php">Tourist Place</a></li>
              <li><a href="Feedback.php">Your Feedback</a></li>

              
              <li><a href="status.php">My Status</a></li>


              
              <?php if(!isset($_SESSION['uid']))
              { ?>
                <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li><a href="login.php" >
                Login
              </a>
              </li>
              <?php } else{
                ?>
                <li><a href="logout.php">
                Logout
              </a>
              <li><a href="profile.php">Profile</a></li>
              </li>

              <?php } ?>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>