<div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">DRY</span>ME</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php if(isset($_SESSION["name"])) { ?>home.php<?php } else { ?>index.php<?php } ?>" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="pricing.php" class="nav-item nav-link">Pricing</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="single.php" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>


                        <div class="nav-item dropdown">
                            <a href="login.php" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                  <?php 
                                    if(isset($_SESSION["name"])) echo $_SESSION["name"]; 
                                    else echo "Login"; 
                                  ?>
                            </a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="<?php if(isset($_SESSION["name"])) { ?>logout.php<?php } else { ?>login.php<?php } ?>" class="dropdown-item">
                                    <?php 
                                      if(isset($_SESSION["name"])) echo "Log Out"; 
                                      else echo "Sign in"; 
                                    ?>
                                </a>
                            </div>
                        </div>            
                    </div>
                </div>
            </nav>
        </div>
    </div>



