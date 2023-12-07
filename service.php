<?php include 'helper/session.php' ?>
<?php include 'helper/conn.php' ?>
<!DOCTYPE html>
<html lang="en">
 <!-- head Start -->
 <?php include 'view/common/head.php' ?>
<body>
    <!-- Topbar Start -->
    <?php include 'view/common/topbar.php' ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include 'view/common/navbar.php' ?>
    <!-- Navbar Start -->
     
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    
    <!-- Services Start -->
    <?php include 'view/common/service.php' ?>
    <!-- Services End -->

    <!-- Testimonial Start -->
    <?php include 'view/common/testimonials.php' ?>
    <!-- Testimonial End -->

    <!-- footer Start -->
    <?php include 'view/common/footer.php' ?>
    <!-- footer end -->
     </body>
</html>

