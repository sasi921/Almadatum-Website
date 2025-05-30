<?php
session_start();
$message="";
if(count($_POST)>0) {

$conn = mysqli_connect("localhost", "root","","alumni");

$result1 = mysqli_query($conn,"SELECT * FROM `login` WHERE `username`='" . $_POST["loginUsername"] . "' and `password` = '". $_POST["loginPassword"]."'");
$row1  = mysqli_fetch_array($result1,MYSQLI_NUM);


 if(is_array($row1)) {
//$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row1[0];
	header("Location:admin.php");
}else{
$message = "<font color='red'>Invalid Username or Password!</font>";
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOGIN</title>
  <!-- plugins:css -->
 <!-- <link rel="stylesheet" href="vendors/feather/feather.css">-->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.png"  alt="logo" class="center"/>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="login100-form validate-form" method="post" class="pt-3">  
                <div class="form-group">
                  <input type="text" name="loginUsername" placeholder="Email" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="loginPassword" placeholder="Password">
                </div
				<div class="form-check">
                    <label class="form-check-label text-muted">
                      <?php echo $message;?>
                    </label>
                  </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
