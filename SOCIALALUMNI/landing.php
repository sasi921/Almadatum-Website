<?php
session_start();
$message="";
if(count($_POST)>0) {

$conn = mysqli_connect("localhost", "root","","alumnis");
if(isset($_POST['Rgno']))
{
	
	try{
		$result1 = mysqli_query($conn,"	INSERT INTO `alumniregister`( `sid`, `uname`, `password`) VALUES ('" . $_POST["Rgno"] . "','" . $_POST["usname"] . "','" . $_POST["password"] . "')	");
		
		if($result1) {
			
			echo "<script> alert('Successfully Registered😊 You can Login now');</script>";
			
			}else{
				
			$message = "<font color='red'>Invalid Register Number!</font><script>alert('Invalid Register Number');</script>";
		}
	}catch(Exception $e)
	{
		echo "<script>alert('Invalid Register Number/Already Registred Please Enter valid Register Number');</script>";
	}

}else{
$result1 = mysqli_query($conn,"SELECT * FROM `alumniregister` WHERE `uname`='" . $_POST["socialusn"] . "' and `password` = '". $_POST["socialpass"]."'");
$row1  = mysqli_fetch_array($result1,MYSQLI_NUM);


 if(is_array($row1)) {
//$_SESSION["user_id"] = $row[user_id];
$_SESSION["sid"] = $row1[1];
	header("Location:newsfeed.php");
}else{
	echo "<script>alert('Invalid User Name/Password');</script>";
}
}
}

?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>LOGIN</title>
    <link rel="icon" href="images/wlr.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout" >
	<div class="">
		<div class="row merged" >
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea" style="background-image:url(images/vignanclgal.jpg); ">
					<div class="land-meta" >
						<h1>VIGNAN ALUMNI</h1>
						<p>
							Nobody is bothered about an institution more than its Alumni
						</p>
						
						<div class="friend-logo">
						
							<img src="images/logoofs.png" alt="" style="height:150px;">
						</div>
						
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							
						<form method="post" >
							<div class="form-group">	
							  <input type="text" id="input" required="required" name="socialusn"/>
							  <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="socialpass"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  
							</div>
							<!--a href="#" title="" class="forgot-pwd">Forgot Password?</a-->
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit" ><span>Login</span></button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							
						<form method="post">
							<div class="form-group">	
							  <input type="text" required="required" name='Rgno'/>
							  <label class="control-label" for="input">Registration Number</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name='usname'/>
							  <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name='password'/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							
							
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>	

</html>