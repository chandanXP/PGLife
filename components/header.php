<div class="header sticky-top">
     <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="index.php">
               <img src="img/logo.png" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
               <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
               <?php 
               if(!isset($_SESSION['user_id']) ){
               ?>
                    <ul class="navbar-nav">
                         <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="modal" data-target="#sign_up_modal">
                                   <i class="fas fa-user"></i>Signup
                              </a>
                         </li>
                         <div class="nav-vl"></div>
                         <li class="nav-item">
                              <a class="nav-link" href="#" type="button" data-toggle="modal" data-target="#login_modal">
                                   <i class="fas fa-sign-in-alt"></i>Login
                              </a>
                         </li>
                    </ul>
               <?php
               }else{
               ?>
               <div class='nav-name'>
                        Hi, <?php echo $_SESSION["name"] ?>
               </div>
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link" href="dashboard.php" type="button" >
                              <i class="fas fa-user"> Dashboard </i>
                         </a>
                    </li>
                    <!-- vertical line  -->
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                         <a class="nav-link" href="logout.php">
                              <i class="fas fa-sign-out-alt"></i>Log out!
                         </a>
                    </li>
               </ul>
               <?php }?>
          </div>
     </nav>
</div>