<?php include 'helper/session.php'?>
<?php include 'helper/conn.php'?>
<?php 
   if($_SERVER["REQUEST_METHOD"]=="POST"){ 
           $name1=$_POST["name"];
           $name=ltrim($name1);
           $email1=$_POST["email"];
           $email=trim($email1);
           $mobile1=$_POST["mobile"];
           $mobile=trim($mobile1);
           $password1=$_POST["password"];
           $password=trim($password1);
           $confirm_password1=$_POST["confirm_password"];
           $confirm_password=trim($confirm_password1);

           if(strlen($name)>1 && filter_var($email, FILTER_VALIDATE_EMAIL) && ctype_digit($mobile) && strlen($mobile)==10 && strlen($mobile)==10 && strlen($password)>=6)
           {
               $condition1=true; 
               $name;$email;$mobile;$password;$confirm_password; 
           }
           
           else
           {
               $error1="Fill Your Name";
               $error2="Fill Valid Email";
               $error3="Fill Valid Mobile";
               $error4="Fill valid password";
           }
           if($password==$confirm_password)
            {   
                $condition2=true;
            }
           else
            {
              $error5="Password and confirm password are not same";
            }
           if(isset($condition1) && isset($condition2))
           {
               unset($name1);unset($mobile1);unset($password1);unset($email1);unset($confirm_password1);
               $qry="INSERT INTO customers(role_id, name, email, mobile, password, confirm_password,status) VALUES('1','".$name."','".$email."','".$mobile."','".$password."','".$confirm_password."','1')";
               $conn->query($qry);
           }
   }    
?>
<!DOCTYPE html>
<html lang="en">
 <!-- head Start -->
 <?php include 'view/common/head.php' ?>
 <?php include 'view/common/logincss.html' ?>
<body>
<?php include 'view/common/topbar.php'?>
<?php include 'view/common/navbar.php'?>
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Sign Up</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
<section class="vh-100 container-fluid">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="asset\img\blog-1.jpg"
          class="img-fluid" alt="Sample image">
          <br><br>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign Up</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
           <label style="margin-right: 10px;">
            <input type="radio" name="gender" value="1"> Customer
           </label>
           <label style="margin-right: 10px;">
            <input type="radio" name="gender" value="2"> Launderer
           </label>
          </div>

           <!-- Email input -->
           <div class="form-group row">
            <label for="form3Example3" class="col-sm-2 col-form-label" style="">Name</label>
             <div class="col-sm-9">
            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your name" style="margin-left: 15px;" required>
           </div>
          </div>

           <!-- Email input -->
           <div class="form-group row">
            <label for="form3Example3" class="col-sm-2 col-form-label">Email</label>
             <div class="col-sm-9">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" style="margin-left: 15px;" required>
           </div>
          </div>

           <!-- Email input -->
           <div class="form-group row">
            <label for="form3Example3" class="col-sm-2 col-form-label">Mobile</label>
             <div class="col-sm-9">
            <input type="tel" name="mobile" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" style="margin-left: 15px;" required>
           </div>
          </div>

           <!-- Email input -->
           <div class="form-group row">
            <label for="form3Example3" class="col-sm-2 col-form-label">Password</label>
             <div class="col-sm-9">
            <input type="password" name="password" id="form3Example3" class="form-control form-control-lg" placeholder="Enter password" style="margin-left: 15px;" required>
           </div>
          </div>

          <!-- Password input -->
          <div class="form-group row">
            <label for="form3Example3" class="col-sm-2 col-form-label">Confirm Password</label>
             <div class="col-sm-9">
            <input type="password" name="confirm_password" id="form3Example3" class="form-control form-control-lg" placeholder="Confirm Password" style="margin-left: 15px;" required>
           </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">SignUp</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account <a href="login.php"
                class="link-danger">SignIn</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'view/common/footer.php'?>
</body>

</html>